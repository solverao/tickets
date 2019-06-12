<?php

namespace App\Services;

use App\Repositories\Catalogs\SystemRepositorie;
use Illuminate\Container\Container as App;

class SystemService
{
    private $system;

    function __construct()
    {
        $this->app = new App();
        $this->system = new SystemRepositorie($this->app);
    }

    public function consultar_sistemas()
    {
        return $this->system->all();
    }

    public function consultar_sistema($id)
    {
        return $this->system->find($id);
    }

    public function crear_sistema($request)
    {
        $request['active'] = true;
         return $this->system->create($request->toArray());
    }

    public function editar_sistema($request, $id)
    {
        $data['name'] = $request->name;
        $data['display_name'] = $request->display_name;
        $data['description'] = $request->description;
        return $this->system->update($data, $id);
    }
}
