<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal";
    public $timestamps = false;
    protected $fillable = ['juduljadwal','deskripsijadwal','tanggaljadwal'];
}
