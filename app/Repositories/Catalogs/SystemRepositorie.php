<?php

namespace App\Repositories\Catalogs;

use App\Models\System;
use App\Repositories\Repositorio;

class SystemRepositorie extends Repositorio
{
    function model()
    {
        $model = System::class;
        return $model;
    }
}
