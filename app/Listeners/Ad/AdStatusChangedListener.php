<?php
namespace App\Listeners\Ad;

use App\Events\Ad\AdStatusChanged;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ad\AdStatusChangedMail;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdStatusChangedListener implements ShouldQueue
{
    public function handle(AdStatusChanged $event): void
    {
        Mail::to($event->user->email)->send(new AdStatusChangedMail($event->ad, $event->user, $event->message));
    }
}
