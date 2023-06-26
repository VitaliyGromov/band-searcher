<?php
namespace App\Actions\Ads;

use App\Events\AdStatusChanged;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class AdChangeStatusAction
{
    public function handle(Request $request, Ad $ad)
    {
        $validated = $request->validated();

        $message = $validated['message'];

        if($message === null){
            $message = '';
        }

        $ad->update(['status_id' => $validated['status_id']]);

        $user = User::find($ad->user_id);

        event(new AdStatusChanged($user, $ad, $message));
    }
}
?>