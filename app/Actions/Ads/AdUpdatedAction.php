<?php

declare(strict_types=1);

namespace App\Actions\Ads;

use App\Enums\Status as EnumsStatus;
use App\Mail\Ad\AdUpdatedMail;
use App\Models\Ad;
use Illuminate\Support\Facades\Mail;

class AdUpdatedAction
{
    public function handle(array $validated, Ad $ad)
    {
        $ad->update([...$validated, 'status' => EnumsStatus::underReview->value]);

        Mail::to($ad->user)->send(new AdUpdatedMail($ad));
    }
}
