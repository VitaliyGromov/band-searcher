<?php
namespace App\Actions\Ads;

use App\Http\Requests\Ads\AdFormRequest;
use App\Models\Ad;
use App\Models\User;
use App\Models\Status;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ad\AdStatusChangedMail;

class AdUpdateAction
{
    public function handle(AdFormRequest $request, Ad $ad)
    {
        $validated = $request->validated();

        if(isset($validated['status_id'])){
            $statusId = $validated['status_id'];
        } else {
            $statusId = Status::getStatusIdByStatusName(config('ads.default_status'));
        }

        $ad->update([...$validated, 'status_id' => $statusId]);

        $user = User::find($ad->user_id);

        Mail::to($user->email)->send(new AdStatusChangedMail($ad, $user));
    }
}
?>