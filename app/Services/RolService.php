<?php

namespace App\Services;

use App\Repositories\RolRepositorie;
use Illuminate\Container\Container as App;

class RolService
{
    private $rol;

    function __construct()
    {
        $this->app = new App();
        $this->rol = new RolRepositorie($this->app);
    }

    public function consultar_roles()
    {
        return $this->rol->all();
    }
}
