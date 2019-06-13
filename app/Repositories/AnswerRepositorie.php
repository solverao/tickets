<?php

namespace App\Repositories;

use App\Models\Answer;

class AnswerRepositorie extends Repositorio
{
    function model()
    {
        $answer = Answer::class;
        return $answer;
    }
}
