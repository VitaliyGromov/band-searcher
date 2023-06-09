<?php
namespace App\Events\Ad;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Events\Ad\AdEvent as BaseAdEvent;

class AdStatusChanged extends BaseAdEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public string $message;

    public function __construct(Ad $ad, string $message = '')
    {
        $this->ad = $ad;
        $this->user = User::find($this->ad->user_id);
        $this->message = $message;
    }
}
