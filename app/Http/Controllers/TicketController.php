<?php

namespace App\Http\Controllers;

use App\Services\TicketService;
use Illuminate\Support\Facades\Redirect;

class TicketController extends Controller
{
    public function index()
    {
        $ticket = new TicketService();
        $tickets = $ticket->consultar_tickets(Request());
        $usuarios = $ticket->consultar_usuarios();
        return view('ticket.lista_ticket', compact('tickets', 'usuarios'));
    }

    public  function alta()
    {
        $ticket = new TicketService();
        $catalogos = $ticket->consultar_catalogos();
        return view('ticket.alta_ticket', compact('catalogos'));
    }

    public  function crear()
    {
        $ticket = new TicketService();
        $ticket->guardar_ticket(Request());
        return Redirect::back();
    }
}
