<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class updateinfo extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $email;
    public $password;


    public function __construct($username,$email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }


    public function build()
    {
        return $this->subject('Confirmation de mise à jour des informations')
                    ->view('emails.miseàjourdesinformations');
    }
}
