<?php

namespace App\Listeners;

use App\Events\AdStatusChanged;
use App\Jobs\AdStatusChangedJob;

class AdStatusChangedListener
{
    public function handle(AdStatusChanged $event): void
    {
        dispatch(new AdStatusChangedJob($event->user, $event->ad, $event->message));
    }
}
