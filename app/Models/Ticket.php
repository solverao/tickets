<?php

namespace App\Models;

use App\Models\Catalogs\Status;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'asunto', 'system_id', 'type_id', 'priority_id', 'descripcion', 'user_id',
        'resolvio_id', 'status_id', 'fecha_vencimiento', 'fecha_termino',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function system()
    {
        return $this->belongsTo(System::class);
    }
}
