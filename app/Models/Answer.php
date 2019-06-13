<?php

namespace App\Models;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'ticket_id', 'user_id', 'answer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
