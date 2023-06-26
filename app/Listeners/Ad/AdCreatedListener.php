<?php
namespace App\Listeners\Ad;

use App\Events\Ad\AdCreated;
use App\Jobs\Ad\AdCreatedJob;

class AdCreatedListener
{
    public function handle(AdCreated $event): void
    {
        dispatch(new AdCreatedJob($event->user, $event->ad));
    }
}
