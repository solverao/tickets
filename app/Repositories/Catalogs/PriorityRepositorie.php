<?php

namespace App\Repositories\Catalogs;

use App\Models\Catalogs\Priority;
use App\Repositories\Repositorio;

class PriorityRepositorie extends Repositorio
{
    function model()
    {
        $model = Priority::class;
        return $model;
    }
}