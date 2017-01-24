<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $email;
    public $comments;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname, $email, $comments)
    {
        //
        $this->fullname = $fullname;
        $this->email = $email;
        $this->comments = $comments;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email-contactForm')
            ->from($this->email, $this->fullname)
            ->subject('Email from Grr Studios\'s Contact Form')
            ->with([
                'fullname' => $this->fullname,
                'email' => $this->email,
                'comments' => $this->comments
            ]);
    }
}
