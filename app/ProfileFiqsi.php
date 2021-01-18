<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileFiqsi extends Model
{
    protected $table = "profile_fiqsi";
    public $timestamps = false;
    protected $fillable = ['nama_prof','desc_prof','gambar_prof','tema_prof','ig_prof','g_form','maskot','tema_maskot','slogan_maskot','berkas','text','desc_text'];
}
