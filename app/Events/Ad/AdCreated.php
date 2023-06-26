<?php
namespace App\Events\Ad;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AdCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Ad $ad;

    public User $user;

    public function __construct(Ad $ad, User $user)
    {
        $this->ad = $ad;
        $this->user = $user;
    }
}
