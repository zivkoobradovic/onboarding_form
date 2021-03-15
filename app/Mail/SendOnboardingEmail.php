<?php

namespace App\Mail;

use App\Models\Onboarding;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOnboardingEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $onb;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Onboarding $onb)
    {
        $this->onb = $onb;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('newonboarding@ds24rcvrs.com')
                    ->view('mail.send-onboarding-mail');
    }
}
