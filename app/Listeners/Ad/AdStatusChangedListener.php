<?php
namespace App\Listeners\Ad;

use App\Events\Ad\AdStatusChanged;
use App\Jobs\Ad\AdStatusChangedJob;

class AdStatusChangedListener
{
    public function handle(AdStatusChanged $event): void
    {
        dispatch(new AdStatusChangedJob($event->user, $event->ad, $event->message));
    }
}
