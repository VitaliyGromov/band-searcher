<?php
namespace App\Actions\Ads;

use App\Events\Ad\AdDeleted;
use App\Models\Ad;

class AdDeleteAction
{
    public function handle(Ad $ad)
    {
        $ad->delete();

        event(new AdDeleted($ad)); //TODO добавить это объявление в кэш, а потом использовать его в Event.
    }
}
?>