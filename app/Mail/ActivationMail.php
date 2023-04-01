<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $confirmation_code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $confirmation_code)
    {
        $this->user = $user;
        $this->confirmation_code = $confirmation_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject('Verify Your Email')
            ->view('mail.activationemail', ['data' => $this->user, 'subject'=>'Account Activation on ' . config('app.name'), 'confirmation_code' => $this->confirmation_code]);
    }
}
