<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "admins";
     protected $fillable = [
       'email', 'password','key'
    ];

    protected $hidden = [
        'password','remember_token','key', 
    ];
}
