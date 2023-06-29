<?php

namespace App\Listeners\Ad;

use App\Events\Ad\AdDeleted;
use App\Mail\Ad\AdDeletedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendAdDeleteMail implements ShouldQueue
{
    public function handle(AdDeleted $event): void
    {
        Mail::to($event->user->email)->send(new AdDeletedMail($event->user, $event->ad));
    }
}
