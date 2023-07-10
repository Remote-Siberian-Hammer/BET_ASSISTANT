<?php

namespace App\Mail;

use App\DTO\Mail\SendCreateUserDTO;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public SendCreateUserDTO $mailData;
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
            ->view("mail.SendCreateUserMail");
    }
}
