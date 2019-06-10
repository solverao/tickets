<?php

namespace App\Services;

use App\Repositories\Catalogs\PriorityRepositorie;
use App\Repositories\Catalogs\StatusRepositorie;
use App\Repositories\Catalogs\TypeRepositorie;
use App\Repositories\TicketRepositorie;
use Illuminate\Container\Container as App;

class TicketService
{
    private $ticket;
    private $priority;
    private $status;
    private $type;

    function __construct()
    {
        $this->app = new App();
        $this->ticket = new TicketRepositorie($this->app);
        $this->priority = new PriorityRepositorie($this->app);
        $this->status = new StatusRepositorie($this->app);
        $this->type = new TypeRepositorie($this->app);
    }

    public function consulta_catalogos()
    {

        $catalogos['priority'] = $this->priority->all();
        $catalogos['status'] = $this->status->all();
        $catalogos['type'] = $this->type->all();

        if($catalogos)
        {
            $catalogos['errCode'] = 0;
            $catalogos['errMsg'] = 'Se encontro catalogos';
        }
        else
        {
            $catalogos['errCode'] = 1;
            $catalogos['errMsg'] = 'No se encontro catalogos';
        }
        return $catalogos;
    }
}
