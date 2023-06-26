<?php
namespace App\Actions\Ads;

use App\Models\Ad;
use App\Models\User;
use App\Models\Status;
use App\Jobs\AdStatusChangedJob;
use Illuminate\Http\Request;

class AdUpdateAction
{
    public function handle(Request $request, Ad $ad)
    {
        $validated = $request->validated();

        if(isset($validated['status_id'])){
            $statusId = $validated['status_id'];
        } else {
            $statusId = Status::getStatusIdByStatusName(config('ads.default_status'));
        }

        $ad->update([...$validated, 'status_id' => $statusId]);

        $user = User::find($ad->user_id);

        dispatch(new AdStatusChangedJob($user, $ad));
    }
}
?>