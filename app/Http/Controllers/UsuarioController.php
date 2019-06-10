<?php

namespace App\Http\Controllers;

use App\Services\TicketService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuario.lista_usuario');
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
