<?php
namespace App\Actions\Ads;

use App\Events\Ad\AdStatusChanged;
use App\Models\Ad;
use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;

class AdUpdateAction
{
    public function handle(Request $request, Ad $ad): void
    {
        $validated = $request->validated();

        if(isset($validated['status_id'])){
            $statusId = $validated['status_id'];
        } else {
            $statusId = Status::getStatusIdByStatusName(config('ads.default_status'));
        }

        $ad->update([...$validated, 'status_id' => $statusId]);

        $user = User::find($ad->user_id);

        event(new AdStatusChanged($user, $ad)); // create AdUpdated event
    }
}
?>