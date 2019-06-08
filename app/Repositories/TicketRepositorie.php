<?php

namespace App\Repositories;

use App\Models\Ticket;

class TicketRepositorie extends Repositorio
{
    function model()
    {
        return Ticket::class;
    }
}
