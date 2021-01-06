<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileOsiris extends Model
{
    protected $table = "profile_osiris";
    public $timestamps = false;
    protected $fillable = ['nama_prof','desc_prof','gambar_prof','tema_prof'];
}
