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
        $user['active'] = true;
        $user['name'] = $request['name'];
        $user['email'] = $request['email'];
        $user['password'] = bcrypt($request['password']);

        $user = $this->user->create($user);

        $user->roles()->sync($request['rol']);
        $user->systems()->sync($request['system']);

        return $user;
    }

    public function editar_usuarios($request, $id)
    {
        $data['name'] = $request['name'];
        $data['email'] = $request['email'];

        $user = $this->user->find($id);
        $user->roles()->sync($request['rol']);
        $user->systems()->sync($request['system']);

        return $this->user->update($data, $id);


    }
}
