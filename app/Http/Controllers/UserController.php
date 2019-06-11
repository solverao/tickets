<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RolService;
use App\Services\SystemService;
use App\Services\UserService;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new UserService();
        $users = $user->consultar_usuarios();
        return view('usuario.lista_usuario', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sistema = new SystemService();
        $roles = new RolService();
        $sistemas = $sistema->consultar_sistemas();
        $roles = $roles->consultar_roles();
        return view('usuario.alta_usuario', compact('sistemas', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new UserService();
        $user->crear_usuarios($request);
        $users = $user->consultar_usuarios();
        return view('usuario.lista_usuario', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sistema = new SystemService();
        $roles = new RolService();
        $user = new UserService();
        $sistemas = $sistema->consultar_sistemas();
        $roles = $roles->consultar_roles();
        $user = $user->consultar_usuario($id);
        return view('usuario.editar_usuario', compact('sistemas', 'roles', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('usuario.asignar_usuario');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
