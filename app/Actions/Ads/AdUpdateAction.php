<?php
namespace App\Actions\Ads;

use App\Enums\Status as EnumsStatus;
use App\Events\Ad\AdStatusChanged;
use App\Events\Ad\AdUpdated;
use App\Models\Ad;

class AdUpdateAction
{
    public function handle(array $validated, Ad $ad): void
    {
        $ad->update([...$validated, 'status' => EnumsStatus::underReview->value]);

        event(new AdUpdated($ad));
        event(new AdStatusChanged($ad));
    }
}
?>