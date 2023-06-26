<?php
namespace App\Events\Ad;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AdStatusChanged
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public User $user;

    public Ad $ad;

    public string $message;

    public function __construct(User $user, Ad $ad, string $message = '')
    {
        $this->user = $user;
        $this->ad = $ad;
        $this->message = $message;
    }
}
