<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        return view('sistema.lista_sistema');
    }

    public function crear()
    {
        return view('sistema.alta_sistema');
    }
}
