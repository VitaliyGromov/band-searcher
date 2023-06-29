<?php
namespace App\Actions\Ads;

use App\Enums\Status as EnumsStatus;
use App\Events\Ad\AdStatusChanged;
use App\Events\Ad\AdUpdated;
use App\Models\Ad;
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

        event(new AdUpdated($ad));
        event(new AdStatusChanged($ad));
    }
}
?>