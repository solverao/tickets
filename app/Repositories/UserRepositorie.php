<?php

namespace App\Repositories;


use App\User;

class UserRepositorie extends Repositorio
{
    function model()
    {
        return User::class;
    }
}
