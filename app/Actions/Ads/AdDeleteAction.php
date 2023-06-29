<?php

use App\Events\Ad\AdDeleted;
use App\Models\Ad;

class AdDeleteAction
{
    public function handle(Ad $ad)
    {
        $ad->delete();

        event(new AdDeleted($ad));
    }
}
?>