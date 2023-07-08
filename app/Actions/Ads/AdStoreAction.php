<?php
declare(strict_types=1);

namespace App\Actions\Ads;

use App\Enums\Status as EnumsStatus;
use App\Events\Ad\AdCreated;
use App\Models\Ad;
use Illuminate\Support\Facades\Auth;

class AdStoreAction 
{
    public function handle(array $validated): void
    {
        $user = Auth::user();

        $ad = Ad::create([...$validated, 'user_id' => $user->id, 'status' => EnumsStatus::underReview->value]);

        event(new AdCreated($ad));
    }
}

?>