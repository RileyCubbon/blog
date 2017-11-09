<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mailer\UserMailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendVerifyEmail implements ShouldQueue
{

    protected $mailer;

    /**
     * Create the event listener.
     *
     * @param UserMailer $mailer
     */
    public function __construct ( UserMailer $mailer )
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered $event
     *
     * @return void
     */
    public function handle ( UserRegistered $event )
    {
        $this->mailer->verify($event->user);
    }
}
