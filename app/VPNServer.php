<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VPNServer extends Model
{
    protected $table = "vpnserver";
    protected $hidden = ["config","username","password"];
    protected $fillable = ["name","config","flag", "slug","username","password","status"];
}
