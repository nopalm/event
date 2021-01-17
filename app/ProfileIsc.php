<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileIsc extends Model
{
    protected $table = "profile_isc";
    public $timestamps = false;
    protected $fillable = ['nama_prof','desc_prof','gambar_prof','tema_prof','ig_prof','g_form','maskot','tema_maskot','slogan_maskot'];
}
