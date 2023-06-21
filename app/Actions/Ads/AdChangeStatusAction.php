<?php
namespace App\Actions\Ads;

use App\Http\Requests\Ads\ChangeAdStatusRequest;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ad\AdStatusChangedMail;

class AdChangeStatusAction
{
    public function handle(ChangeAdStatusRequest $request, Ad $ad)
    {
        $validated = $request->validated();

        $message = $validated['message'];

        if($message === null){
            $message = '';
        }

        $ad->update(['status_id' => $validated['status_id']]);

        $user = User::find($ad->user_id);

        Mail::to($user->email)->send(new AdStatusChangedMail($ad, $user, $message));
    }
}
?>