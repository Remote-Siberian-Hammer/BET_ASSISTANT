<?php

namespace App\Mail;

use App\DTO\Mail\SendResetToPasswordUserDTO;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetToPasswordUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public SendResetToPasswordUserDTO $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->mailData->Email)
            ->view("mail.SendResetToPasswordUserMail");
    }
}
