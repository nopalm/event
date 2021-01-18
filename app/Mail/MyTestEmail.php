<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyTestEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $email,$nama,$subject,$pesan,$phone;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;
        $this->nama = $request;
        $this->subject = $request;
        $this->pesan = $request;
        $this->phone = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Email From Contact Us')
                    ->from('nonreply@antasena')
                    ->to('nopalmdev@gmail.com')
                    ->view('emails.myTestMail')
                    ->with('success', 'Thanks for contact us!');
    }
}
