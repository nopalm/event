<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isc extends Model
{
    protected $table = "isc";
    public $timestamps = false;
    protected $fillable = ['judulisc','gambarisc','deskripsiisc'];
}
