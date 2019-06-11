<?php

namespace App\Http\Controllers;


use App\Services\RolService;
use App\Services\SystemService;
use App\Services\UserService;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    public function index()
    {
        $user = new UserService();
        $users = $user->consultar_usuarios();
        return view('usuario.lista_usuario', compact('users'));
    }

    public function alta()
    {
        $sistema = new SystemService();
        $roles = new RolService();
        $sistemas = $sistema->consultar_sistemas();
        $roles = $roles->consultar_roles();
        return view('usuario.alta_usuario', compact('sistemas', 'roles'));
    }

    public function crear()
    {
        $user = new UserService();
        $user->crear_usuarios(Request());
        return Redirect::back();
    }

    public function asignar()
    {
        return view('usuario.asignar_usuario');
    }
}
