<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "about";
    public $timestamps = false;
    protected $fillable = ['judulab','deskripsiab','gambarab','tema','tanggal','logo_foot','desc_foot','logo'];
}
