<?php
namespace App\Actions\Ads;

use App\Events\Ad\AdDeleted;
use App\Models\Ad;
use App\Models\User;

class AdDeleteAction
{
    public function handle(Ad $ad)
    {
        $user = User::find($ad->user_id);

        //$dateOfAdCreation = $ad->created_at->toDateTimeString();

        $ad->delete();

        event(new AdDeleted($user)); 
    }
}

?>