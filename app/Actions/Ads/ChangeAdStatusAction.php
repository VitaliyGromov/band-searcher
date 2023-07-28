<?php

declare(strict_types=1);

namespace App\Actions\Ads;

use App\Mail\Ad\AdStatusChangedMail;
use App\Models\Ad;
use Illuminate\Support\Facades\Mail;

class ChangeAdStatusAction
{
    public function handle(array $validated, Ad $ad): void
    {
        if(isset($validated['message'])){
            $message = $validated['message'];
        } else {
            $message = '';
        }

        $ad->update(['status' => $validated['status']]);

        Mail::to($ad->user)->send(new AdStatusChangedMail($ad, $message));
    }
}
