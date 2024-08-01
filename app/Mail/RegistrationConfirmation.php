<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;



    public $username;
    public $role;
    public $email;
    public $password;

    public function __construct($username, $role, $email, $password)
    {
        $this->username = $username;
        $this->role = $role;
        $this->email = $email;
        $this->password = $password;
    }


    public function build()
    {
        return $this->subject('Registration Confirmation')
                    ->view('emails.registrationconfiramtion');
    }
}
