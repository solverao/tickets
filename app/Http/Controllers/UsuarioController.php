<?php

namespace App\Http\Controllers;


use App\Services\UserService;

class UsuarioController extends Controller
{
    public function index()
    {
        $user = new UserService();
        $users = $user->consultar_usuarios();
        return view('usuario.lista_usuario', compact('users'));
    }

    public function crear()
    {
        return view('usuario.alta_usuario');
    }

    public function asignar()
    {
        return view('usuario.asignar_usuario');
    }
}
