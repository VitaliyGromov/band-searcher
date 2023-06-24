<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ad\AdStatusChangedMail;
use App\Models\Ad;
use App\Models\User;

class AdStatusChangedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private User $user;

    private Ad $ad;

    private string $message;

    public function __construct(User $user, Ad $ad, string $message = '')
    {
        $this->user = $user;
        $this->ad = $ad;
        $this->message = $message;
    }

    public function handle(): void
    {
        Mail::to($this->user->email)->send(new AdStatusChangedMail($this->ad, $this->user, $this->message));
    }
}
