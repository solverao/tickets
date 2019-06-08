<?php

namespace App\Repositories;

use App\Models\Catalogs\Priority;
use App\Models\Catalogs\Status;
use App\Models\Catalogs\Type;

class CatalogosRepositorie extends Repositorio
{
    function model()
    {
        $catalogs = Status::class;
        return $catalogs;
    }
}
