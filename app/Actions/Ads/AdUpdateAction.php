<?php
namespace App\Actions\Ads;

use App\Models\Status;
use App\Models\Ad;

class AdUpdateAction
{
    public function handle(array $validated, Ad $ad)
    {
        if($validated['status_id']){
            $statusId = $validated['status_id'];
        } else {
            $statusId = Status::getStatusIdByStatusName(config('ads.default_status'));
        }

        $ad->update([...$validated, 'status_id' => $statusId]);
    }
}
?>