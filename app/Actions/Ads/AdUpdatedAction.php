<?php
declare(strict_types=1);

namespace App\Actions\Ads;
use App\Models\Ad;
use App\Enums\Status as EnumsStatus;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ad\AdUpdatedMail;

class AdUpdatedAction
{
    public function handle(array $validated, Ad $ad)
    {
        $ad->update([...$validated, 'status' => EnumsStatus::underReview->value]);

        Mail::to($ad->user)->send(new AdUpdatedMail($ad));
    }
}

