<?php

namespace App\Repositories;

use App\Role;

class RolRepositorie extends Repositorio
{
    function model()
    {
        return Role::class;
    }
}
