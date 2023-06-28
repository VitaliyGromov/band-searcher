<?php
namespace App\Actions\Ads;

use App\Enums\Status as EnumsStatus;
use App\Events\Ad\AdStatusChanged;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class AdUpdateAction
{
    public function handle(Request $request, Ad $ad): void
    {
        $validated = $request->validated();

        if(isset($validated['status_id'])){
            $statusId = $validated['status_id'];
        } else {
            $statusId = EnumsStatus::UNDER_REVIEW->value;
        }

        $ad->update([...$validated, 'status_id' => $statusId]);

        $user = User::find($ad->user_id);

        event(new AdStatusChanged($user, $ad)); // create AdUpdated event
    }
}
?>