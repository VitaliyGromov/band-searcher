<?php

namespace App\Events\Ad;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AdEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Ad $ad;

    public User $user;
    /**
     * Create a new event instance.
     */
    public function __construct(Ad $ad)
    {
        $this->ad = $ad;
        $this->user = User::find($this->ad->user_id);
    }
}
