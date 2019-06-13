<?php

namespace App\Http\Controllers;

use App\Services\AnswerService;
use App\Services\CatalogsService;
use App\Services\UserService;
use Illuminate\Http\Request;
use App\Services\TicketService;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = new TicketService();
        $usuario = new UserService();
        $tickets = $ticket->consultar_tickets(Request());
        return view('ticket.lista_ticket', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $catalogo = new CatalogsService();
        $catalogos = $catalogo->consultar_catalogos($request);
        return view('ticket.alta_ticket', compact('catalogos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new TicketService();
        $newTicket = $ticket->guardar_ticket($request);
        $ticket->adjuntar_archivos($request, $newTicket->id);

        $tickets = $ticket->consultar_tickets($request);
        return view('ticket.lista_ticket', compact('tickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = new TicketService();
        $selected_ticket = $ticket->consultar_ticket($id);
        $files = $ticket->consultar_adjuntos($id);
        return view('ticket.mostrar_ticket', compact('selected_ticket', 'files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = new TicketService();
        $selected_ticket = $ticket->consultar_ticket($id);
        return view('ticket.respuesta_ticket', compact('selected_ticket'));
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
        $ticket = new TicketService();
        $answer = new AnswerService();
        //$ticket = $ticket->consultar_ticket($id);
        $res = $answer->guardar_respuesta($request, $id);
        $tickets = $ticket->consultar_tickets(Request());
        return view('ticket.lista_ticket', compact('tickets'));
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
