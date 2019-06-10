<?php

namespace App\Services;

use App\Models\System;
use App\Repositories\Catalogs\SystemRepositorie;
use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Redirect;

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

    public function crear_sistema($request)
    {
        $sistema = new System;
        $sistema->name = $request->name;
        $sistema->display_name = $request->display_name;
        $sistema->description = $request->description;
        $sistema->save();
        return Redirect::back();
    }
}
