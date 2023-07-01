<?php

namespace App\Events\Ad;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class AdDeleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    //public string $dateOfAdCreation;

    public User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        //$this->dateOfAdCreation = $dateOfAdCreation;
    }
}
