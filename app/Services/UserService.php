<?php

namespace App\Services;

use App\Repositories\UserRepositorie;
use Illuminate\Container\Container as App;

class UserService
{
    private $user;

    function __construct()
    {
        $this->app = new App();
        $this->user = new UserRepositorie($this->app);
    }

    public function consultar_usuario($id)
    {
        return $this->user->find($id);
    }

    public function consultar_usuarios()
    {
        return $this->user->all();
    }

    public function crear_usuarios($request)
    {
        $user['name'] = $request['name'];
        $user['email'] = $request['email'];
        $user['password'] = bcrypt($request['password']);

        $user = $this->user->create($user);

        if($request['rol'])
        {
            foreach ($request['rol'] as $rol)
            {
                $user->roles()->attach($rol);
            }
        }


        if($request['system'])
        {
            foreach ($request['system'] as $system)
            {
                $user->systems()->attach($system);
            }
        }

        return $user;
    }
}
