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

    public function consultar_usuarios()
    {
        return $this->user->all();
    }

    public function crear_usuarios()
    {
        Request()['password'] = bcrypt(Request()['password']);
        return $this->user->create(Request()->toArray());
    }
}
