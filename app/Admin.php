<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "admins";
     protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password','key', 'remember_token'
    ];
}
