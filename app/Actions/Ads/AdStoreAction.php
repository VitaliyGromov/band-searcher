<?php
namespace App\Actions\Ads;

use App\Events\Ad\AdCreated;
use App\Models\Ad;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdStoreAction 
{
    public function handle(Request $request)
    {
        $validated = $request->validated();

        $statusId = Status::getStatusIdByStatusName(config('ads.default_status'));

        $user = Auth::user();

        $ad = Ad::create([...$validated, 'user_id' => $user->id, 'status_id' => $statusId]);

        event(new AdCreated($ad, $user));
    }
}

?>