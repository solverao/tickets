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
         return $this->system->create($request->toArray());
    }
}
