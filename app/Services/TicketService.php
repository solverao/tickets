<?php

namespace App\Services;

use App\Repositories\TicketRepositorie;
use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Exception;

class TicketService
{
    private $ticket;

    function __construct()
    {
        $this->app = new App();
        $this->ticket = new TicketRepositorie($this->app);
    }

    public function guardar_ticket($request)
    {
        $request['user_id'] = $request->user()->id;
        $request['status_id'] = 1;
        return $this->ticket->create($request->toArray());
    }

    public function consultar_tickets($request)
    {
        $sistems_user = $request->user()->systems->pluck('id')->toArray();  //  valida los tickets de los sistemas asignados al usuario
        $user = Auth::user();
     
        if($request->user()->hasRole('realizar'))
        {
            return $this->ticket->findAllWheres(['system_id' => $sistems_user, 'user_id' => $user->id]);
        }
        else if($request->user()->hasRole('contestar'))
        {
            return $this->ticket->findAllwherein('system_id', $sistems_user);
        }
        else
        {
            return $this->ticket->findAllwherein('system_id', $sistems_user);
        }

    }

    public function adjuntar_archivos($request, $id)
    {
        $data[] = array();
        try{
            $files = $request->file('files');
            foreach($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->storePubliclyAs($id.DIRECTORY_SEPARATOR, $filename, 'Archivos_adjuntos');
            }
            $data['errCode'] = true;
            $data['errMsg'] = "Se adjuntaron correctamente los archivos";
            return $data;
        }catch(Exception $e){
            $data['errCode'] = false;
            $data['errMsg'] = "Ocurrio un error inesperado";
            return $data;
        }
    }

    public function consultar_adjuntos($id)
    {
        try {
            //$files['adjuntos'] = array_filter(Storage::disk('archivos_prueba/adjuntos')->files($placa), function ($item) {return strpos($item, 'jpg');});
            $files = Storage::disk('Archivos_adjuntos')->files($id);
            return $files;
        } catch (Exception $e) {
            $data['errCode'] = false;
            $data['errMsg'] = "Ocurrio un error inesperado";
            return $data;
        }
    }


    public function consultar_ticket($id)
    {
        return $this->ticket->find($id);
    }

    public function consultar_resultado($attribute, $value)
    {
        return $this->ticket->findAllWhere($attribute, $value);
    }

    public function consultar_todo()
    {
        return $this->ticket->all();
    }
}
