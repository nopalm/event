<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function kirim_email()
    {
       Mail::to('nopalmdev@gmail.com')->send(new MyTestEmail());
        
        return redirect('/landing-kontak')->with('success', 'Thanks For contact us');;
   }
}