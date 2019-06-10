<?php

namespace App\Repositories\Catalogs;

use App\Models\Catalogs\Type;
use App\Repositories\Repositorio;

class TypeRepositorie extends Repositorio
{
    function model()
    {
        $model = Type::class;
        return $model;
    }
}
