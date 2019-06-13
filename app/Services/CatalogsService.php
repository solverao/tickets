<?php

namespace App\Services;

use App\Repositories\Catalogs\PriorityRepositorie;
use App\Repositories\Catalogs\SystemRepositorie;
use App\Repositories\Catalogs\TypeRepositorie;
use Illuminate\Container\Container as App;

class CatalogsService
{
    private $priority;
    private $system;
    private $type;

    function __construct()
    {
        $this->app = new App();
        $this->priority = new PriorityRepositorie($this->app);
        $this->system = new SystemRepositorie($this->app);
        $this->type = new TypeRepositorie($this->app);
    }

    public function consultar_catalogos($request)
    {
        $sistems_user = $request->user()->systems->pluck('id')->toArray();  //  valida los tickets de los sistemas asignados al usuario

        $catalogos['priority'] = $this->priority->all();
        $catalogos['system'] = $this->system->findAllwherein('id', $sistems_user);
        $catalogos['type'] = $this->type->all();

        if ($catalogos) {
            $catalogos['errCode'] = 0;
            $catalogos['errMsg'] = 'Se encontro catalogos';
        } else {
            $catalogos['errCode'] = 1;
            $catalogos['errMsg'] = 'No se encontro catalogos';
        }
        return $catalogos;
    }
}
