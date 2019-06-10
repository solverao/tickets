<?php

namespace App\Http\Controllers;

use App\Services\TicketService;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket.lista_ticket');
    }

    public  function alta()
    {
        $ticket = new TicketService();
        $catalogos = $ticket->consulta_catalogos();
        return view('ticket.alta_ticket', ['catalogos' => $catalogos]);
    }

    public  function crear()
    {
        dd(Request()->descripcion);
        return view('ticket.alta_ticket', ['catalogos' => $catalogos]);
    }
}
