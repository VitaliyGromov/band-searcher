<?php
namespace App\Actions\Ads;

use App\Enums\Status as EnumsStatus;
use App\Events\Ad\AdCreated;
use App\Models\Ad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdStoreAction 
{
    public function handle(Request $request): void
    {
        $validated = $request->validated();

        $statusId = EnumsStatus::UNDER_REVIEW->value;

        $user = Auth::user();

        $ad = Ad::create([...$validated, 'user_id' => $user->id, 'status_id' => $statusId]);

        event(new AdCreated($ad, $user));
    }
}

?>