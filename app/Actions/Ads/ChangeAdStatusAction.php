<?php
namespace App\Actions\Ads;

use App\Events\Ad\AdStatusChanged;
use App\Models\Ad;

class ChangeAdStatusAction
{
    public function handle(array $validated, Ad $ad): void
    {
        if(isset($validated['message'])){
            $message = $validated['message'];
        } else {
            $message = '';
        }

        $ad->update(['status' => $validated['status']]);

        event(new AdStatusChanged($ad, $message));
    }
}
?>