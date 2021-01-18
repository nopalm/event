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
        $galeri = Galeri::paginate(8);
        $ab = About::all();
        $kontak = Kontak::all();
        return view('landing_galeri',['galeri'=>$galeri,'kontak'=>$kontak,'ab'=>$ab]);
    }

    public function landingKontak(){
        $kontak = Kontak::all();
        $ab = About::all();
        return view('landing_kontak',['kontak'=>$kontak,'ab'=>$ab]);
    }

    //  function send(Request $request)
    // {
    //  $this->validate($request, [
    //   'name'     =>  'required',
    //   'email'  =>  'required|email',
    //   'message' =>  'required'
    //  ]);

    //     $data = array(
    //         'name'      =>  $request->name,
    //         'message'   =>   $request->message
    //     );

    //  Mail::to('nopaliki@gmail.com')->send(new SendMail($data));
    //  return redirect()->back()->with('success', 'Thanks for contacting us!');

    // }

    // function sendMail(Request $request){
    //     $subject = "Contact dari " . $request->input('name');
    //     $name = $request->input('name');
    //     $emailAddress = $request->input('email');
    //     $message = $request->input('message');

    //     $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    //     try {
    //         // Pengaturan Server
    //        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //         $mail->isSMTP();                                      // Set mailer to use SMTP
    //         $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
    //         $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //         $mail->Username = 'nopaliki@gmail.com';                 // SMTP username
    //         $mail->Password = 'naufal6312';                           // SMTP password
    //         $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    //         $mail->Port = 465;                                    // TCP port to connect to

    //         // Siapa yang mengirim email
    //         $mail->setFrom($emailAddress, $name);

    //         // Siapa yang akan menerima email
    //         $mail->addAddress('nopaliki@gmail.com');     // Add a recipient
    //         // $mail->addAddress('ellen@example.com');               // Name is optional

    //         // ke siapa akan kita balas emailnya
    //         $mail->addReplyTo($emailAddress, $name);
            
    //         // $mail->addCC('cc@example.com');
    //         // $mail->addBCC('bcc@example.com');

    //         //Attachments
    //         // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


    //         //Content
    //         $mail->isHTML(true);                                  // Set email format to HTML
    //         $mail->Subject = $subject;
    //         $mail->Body    = $message;
    //         $mail->AltBody = $message;

    //         $mail->send();

    //         $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
    //         return redirect('./');

    //     } catch (Exception $e) {
    //         echo 'Message could not be sent.';
    //         echo 'Mailer Error: ' . $mail->ErrorInfo;
    //     }

    // }

    
}

