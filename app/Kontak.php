<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = "kontak";
    public $timestamps = false;
    protected $fillable = ['email','phone','alamat','wa','ig','phone_isc','phone_fiqsi','phone_osiris'];
}
