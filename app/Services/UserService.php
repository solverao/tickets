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

    public function crear_usuarios()
    {
        $user['name'] = Request()['name'];
        $user['email'] = Request()['email'];
        $user['password'] = bcrypt(Request()['password']);

        $user = $this->user->create($user);

        foreach (Request()['rol'] as $rol)
        {
            $user->roles()->attach($rol);
        }

        foreach (Request()['system'] as $sistem)
        {
            $user->systems()->attach($sistem);
        }

        return $user;
    }
}
