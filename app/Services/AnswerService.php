<?php

namespace App\Services;

use App\Repositories\AnswerRepositorie;
use Illuminate\Container\Container as App;

class AnswerService
{
    private $answer;

    function __construct()
    {
        $this->app = new App();
        $this->answer = new AnswerRepositorie($this->app);
    }

    public function guardar_respuesta($request, $id)
    {
        $data['ticket_id'] = $id;
        $data['user_id'] = $request->user()->id;
        $data['answer'] = $request['answer'];
        return $this->answer->create($data);
    }
}
