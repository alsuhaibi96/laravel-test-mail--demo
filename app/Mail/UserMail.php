<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $isSuccess, $logo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->logo = asset('img/logo.png');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('a.alsuhaibi@iajeer.com', 'GenoTech')
        ->subject('Your Registration is Successful!!!')
        ->view('emails.user_email',['name'=>"Kasun", 'logo' => $this->logo]);
    }
}