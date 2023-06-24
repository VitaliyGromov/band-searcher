<?php

namespace App\Jobs;

use App\Mail\Ad\AdCreatedMail;
use App\Models\User;
use App\Models\Ad;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class AdCreatedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private User $user;

    private Ad $ad;

    public function __construct(User $user, Ad $ad)
    {
        $this->user = $user;
        $this->ad = $ad;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->user->email)->send(new AdCreatedMail($this->user, $this->ad));
    }
}
