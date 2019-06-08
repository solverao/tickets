<?php

namespace App\Http\Controllers;

use App\Services\TicketService;

class TicketController extends Controller
{
    public function index()
    {
        $ticket = new TicketService();
        return $ticket->consulta_catalogos();
    }
}
