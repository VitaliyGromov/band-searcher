<?php

namespace App\Listeners\Ad;

use App\Events\Ad\AdUpdated;
use App\Mail\Ad\AdUpdatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendAdUpdatedMail implements ShouldQueue
{
    public function handle(AdUpdated $event): void
    {
        Mail::to($event->user->email)->send(new AdUpdatedMail($event->user, $event->ad->id));
    }
}
