<?php

namespace App\Services;

use App\Models\Ticket;
use App\Repositories\Catalogs\PriorityRepositorie;
use App\Repositories\Catalogs\SystemRepositorie;
use App\Repositories\Catalogs\TypeRepositorie;
use App\Repositories\TicketRepositorie;
use App\Repositories\UserRepositorie;
use Illuminate\Container\Container as App;
use Illuminate\Http\Request;

class TicketService
{
    private $ticket;
    private $priority;
    private $system;
    private $type;
    private $user;

    function __construct()
    {
        $this->app = new App();
        $this->ticket = new TicketRepositorie($this->app);
        $this->priority = new PriorityRepositorie($this->app);
        $this->system = new SystemRepositorie($this->app);
        $this->type = new TypeRepositorie($this->app);
        $this->user = new UserRepositorie($this->app);
    }

    public function consultar_catalogos()
    {
        $catalogos['priority'] = $this->priority->all();
        $catalogos['system'] = $this->system->all();
        $catalogos['type'] = $this->type->all();

        if($catalogos)
        {
            $catalogos['errCode'] = 0;
            $catalogos['errMsg'] = 'Se encontro catalogos';
        }
        else
        {
            $catalogos['errCode'] = 1;
            $catalogos['errMsg'] = 'No se encontro catalogos';
        }
        return $catalogos;
    }

    public function guardar_ticket()
    {
        Request()['user_id'] = Request()->user()->id;
        Request()['status_id'] = 1;
        return $this->ticket->create(Request()->toArray());
    }

    public function consultar_usuarios()
    {
        return $this->user->all();
    }

    public function consultar_tickets($request)
    {
        $sistems_user = $request->user()->systems->pluck('id')->toArray();  //  valida los tickets de los sistemas asignados al usuario
        return $this->ticket->findAllwherein('system_id', $sistems_user);
    }
}
