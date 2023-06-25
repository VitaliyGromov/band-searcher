<?php

namespace App\Listeners;

use App\Events\AdCreated;
use App\Jobs\AdCreatedJob;

class AdCreatedListener
{
    public function handle(AdCreated $event): void
    {
        dispatch(new AdCreatedJob($event->user, $event->ad));
    }
}
