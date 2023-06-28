<?php

namespace App\Listeners\Auth;

use App\Events\Auth\PasswordChanged;
use App\Mail\Auth\PasswordChangedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendPasswordChangedMail implements ShouldQueue
{
    public function handle(PasswordChanged $event): void
    {
        Mail::to($event->user->email)->send(new PasswordChangedMail($event->user));
    }
}
