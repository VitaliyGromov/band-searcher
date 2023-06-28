<?php

namespace App\Listeners\User;

use App\Events\User\UserActivityStatusChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\User\UserActivityStatusChangedMail;

class SendActivityStatusChangedMail implements ShouldQueue
{
    public function handle(UserActivityStatusChanged $event): void
    {
        Mail::to($event->user->email)->send(new UserActivityStatusChangedMail($event->user));
    }
}
