<?php

declare(strict_types=1);

namespace App\Actions\Ads;

use App\Enums\Status as EnumsStatus;
use App\Mail\Ad\AdCreatedMail;
use App\Models\Ad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdCreatedAction
{
    public function handle(array $validated)
    {
        $status = EnumsStatus::underReview->value;

        $ad = Ad::create([...$validated, 'user_id' => Auth::id(), 'status' => $status]);

        Mail::to($ad->user)->send(new AdCreatedMail($ad));
    }
}
