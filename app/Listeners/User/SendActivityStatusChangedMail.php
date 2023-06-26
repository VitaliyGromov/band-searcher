<?php

namespace App\Listeners\User;

use App\Events\User\ChangeUserActivityStatusEvent;
use App\Jobs\User\ChangeUserActivityStatusMailJob;

class SendActivityStatusChangedMail
{
    public function handle(ChangeUserActivityStatusEvent $event): void
    {
        dispatch(new ChangeUserActivityStatusMailJob($event->user));
    }
}
