<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendMail;

use Illuminate\Support\Facades\Mail;

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

use Illuminate\Support\Facades\Storage;

use App\About;

use App\Kontak;

use App\Partner;

use App\Fiqsi;

use App\Osiris;

use App\Isc;

use App\ProfileIsc;

use App\ProfileFiqsi;

use App\ProfileOsiris;

use App\Sponsor;

use App\Galeri;


class IndexController extends Controller
{
    public function index(){
        $ab = About::all();
        $kontak = Kontak::all();
        $partner = Partner::all();
        $isc = Isc::all();
        $fiqsi = Fiqsi::all();
        $osiris = Osiris::all();
        $profile_isc = ProfileIsc::all();
        $profile_fiqsi = ProfileFiqsi::all();
        $profile_osiris = ProfileOsiris::all();
        $sponsor = Sponsor::all();
        return view('welcome3',['kontak'=>$kontak,'isc'=>$isc,'fiqsi'=>$fiqsi,'osiris'=>$osiris,'profile_osiris'=>$profile_osiris,'profile_fiqsi'=>$profile_fiqsi,'profile_isc'=>$profile_isc,'ab'=>$ab,'partner'=>$partner,'sponsor'=>$sponsor]);
    }
    function send(Request $request){
        Mail::send(new SendMail($request));
        return redirect('/');
    }
    
    public function landingIsc(){
        $profile_isc = ProfileIsc::all();
        $isc = Isc::all();
        $ab = About::all();
        $kontak = Kontak::all();
        return view('landing_isc',['profile_isc'=>$profile_isc,'isc'=>$isc,'kontak'=>$kontak,'ab'=>$ab]);
    }

    public function landingOsiris(){
        $profile_osiris = ProfileOsiris::all();
        $osiris = Osiris::all();
        $kontak = Kontak::all();
        $ab = About::all();
        return view('landing_osiris',['profile_osiris'=>$profile_osiris,'osiris'=>$osiris,'kontak'=>$kontak,'ab'=>$ab]);
    }

    public function landingFiqsi(){
        $profile_fiqsi = ProfileFiqsi::all();
        $fiqsi = Fiqsi::all();
        $kontak = Kontak::all();
        $ab = About::all();
        return view('landing_fiqsi',['profile_fiqsi'=>$profile_fiqsi,'fiqsi'=>$fiqsi,'kontak'=>$kontak,'ab'=>$ab]);
    }

    public function landingInformasi(){
        $profile_fiqsi = ProfileFiqsi::all();
        $profile_osiris = ProfileOsiris::all();
        $profile_isc = ProfileIsc::all();
        $fiqsi = Fiqsi::all();
        $kontak = Kontak::all();
        $ab = About::all();
        return view('landing_informasi',['profile_isc'=>$profile_isc,'profile_osiris'=>$profile_osiris,'profile_fiqsi'=>$profile_fiqsi,'fiqsi'=>$fiqsi,'kontak'=>$kontak,'ab'=>$ab]);
    }

    public function landingGaleri(){
        $galeri = Galeri::all();
        $ab = About::all();
        $kontak = Kontak::all();
        return view('landing_galeri',['galeri'=>$galeri,'kontak'=>$kontak,'ab'=>$ab]);
    }
    
}

