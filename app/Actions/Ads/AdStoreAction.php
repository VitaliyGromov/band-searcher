<?php
namespace App\Actions\Ads;

use App\Events\AdCreated;
use App\Models\Ad;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Ads\AdFormRequest;

class AdStoreAction 
{
    public function handle(AdFormRequest $request)
    {
        $validated = $request->validated();

        $statusId = Status::getStatusIdByStatusName(config('ads.default_status'));

        $user = Auth::user();

        $ad = Ad::create([...$validated, 'user_id' => $user->id, 'status_id' => $statusId]);

        event(new AdCreated($ad, $user));
    }
}

?>