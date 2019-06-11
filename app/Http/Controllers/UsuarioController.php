<?php

namespace App\Http\Controllers;


use App\Services\RolService;
use App\Services\SystemService;
use App\Services\UserService;
use App\User;
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
        $editUser = null;
        return view('usuario.alta_usuario', compact('sistemas', 'roles', 'editUser'));
    }

    public function crear()
    {
        $user = new UserService();
        $user->crear_usuarios(Request());
        return Redirect::back();
    }

    public function asignar($id)
    {
        $sistema = new SystemService();
        $roles = new RolService();
        $user = new UserService();
        $sistemas = $sistema->consultar_sistemas();
        $roles = $roles->consultar_roles();
        $editUser = $user->consultar_usuario($id);
        return view('usuario.alta_usuario', compact('sistemas', 'roles', 'editUser'));
    }

    public function update()
    {
        return view('usuario.asignar_usuario');
    }
}
