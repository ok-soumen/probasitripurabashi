<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $registeredId;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$registeredId)
    {
        $this->data = $data;
        $this->registeredId = $registeredId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->subject($this->subject)
            ->view('mail.mail')
            ->with('data', $this->data)
            ->with('registeredId', $this->registeredId);
    }
}
