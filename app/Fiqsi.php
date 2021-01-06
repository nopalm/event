<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiqsi extends Model
{
    protected $table = "fiqsi";
    public $timestamps = false;
    protected $fillable = ['judulfiqsi','gambarfiqsi','deskripsifiqsi'];
}
