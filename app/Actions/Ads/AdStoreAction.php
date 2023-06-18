<?php
namespace App\Actions\Ads;

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

        $userId = Auth::id();

        Ad::create([...$validated, 'user_id' => $userId, 'status_id' => $statusId]);
    }
}

?>