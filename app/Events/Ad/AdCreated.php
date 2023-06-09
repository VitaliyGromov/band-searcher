<?php
namespace App\Events\Ad;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Events\Ad\AdEvent as BaseAdEvent;

class AdCreated extends BaseAdEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
}
