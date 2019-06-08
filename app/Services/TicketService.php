<?php

namespace App\Services;


use App\Repositories\CatalogosRepositorie;
use App\Repositories\TicketRepositorie;
use Illuminate\Container\Container as App;

class TicketService
{
    private $ticket;

    function __construct()
    {
        $this->app = new App();
        $this->ticket = new TicketRepositorie($this->app);
        $this->catalogos = new CatalogosRepositorie($this->app);
    }

    public function consulta_catalogos()
    {

        $catalogos = $this->catalogos->all();
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
