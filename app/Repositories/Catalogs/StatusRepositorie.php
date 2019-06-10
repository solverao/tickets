<?php

namespace App\Repositories\Catalogs;

use App\Models\Catalogs\Status;
use App\Repositories\Repositorio;

class StatusRepositorie extends Repositorio
{
    function model()
    {
        $model = Status::class;
        return $model;
    }
}