<?php
namespace App\Listeners\Ad;

use App\Events\Ad\AdCreated;
use App\Mail\Ad\AdCreatedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAdCreatedMail implements ShouldQueue
{
    public function handle(AdCreated $event): void
    {
        Mail::to($event->user->email)->send(new AdCreatedMail($event->user, $event->ad));
    }
}
