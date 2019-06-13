<?php

namespace App\Http\Controllers;

use App\Services\TicketService;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = new TicketService();
        $tickets['todo'] = $ticket->consultar_todo();
        $tickets['systems'] = $ticket->consultar_resultado('system_id', 1);
        $tickets['documental'] = $ticket->consultar_resultado('system_id', 3);
        return view('welcome', compact('tickets'));
    }
}
