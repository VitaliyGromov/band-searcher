<?php

namespace App\Listeners;

use App\Events\AdStatusChanged;
use App\Jobs\AdStatusChangedJob;

class AdStatusChangedMail
{
    public function handle(AdStatusChanged $event): void
    {
        dispatch(new AdStatusChangedJob($event->user, $event->ad, $event->message));
    }
}
