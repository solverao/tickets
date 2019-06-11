<?php

namespace App\Http\Controllers;

use App\Services\SystemService;

class SystemController extends Controller
{
    public function index()
    {
        $sistema = new SystemService();
        $sistemas = $sistema->consultar_sistemas();
        return view('sistema.lista_sistema', compact('sistemas'));
    }

    public function alta()
    {
        return view('sistema.alta_sistema');
    }

    public function crear()
    {
        $sistema = new SystemService();
        $sistemas = $sistema->crear_sistema(Request());
        return redirect()->back();
    }
}
