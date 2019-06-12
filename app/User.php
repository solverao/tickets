<?php

namespace App;

use App\Models\System;
use App\Models\Ticket;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'active', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function systems()
    {
        return $this->belongsToMany(System::class);
    }
}
