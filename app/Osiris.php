<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Osiris extends Model
{
    protected $table = "osiris";
    public $timestamps = false;
    protected $fillable = ['judulosiris','gambarosiris','deskripsiosiris'];
}
