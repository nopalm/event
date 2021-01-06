<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = "partner";
    public $timestamps = false;
    protected $fillable = ['judul','gambar'];
}
