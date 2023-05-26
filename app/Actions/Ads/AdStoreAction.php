<?php
namespace App\Actions\Ads;

use App\Models\Ad;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

class AdStoreAction 
{
    public function handle(array $validated)
    {
        $statusId = Status::getStatusIdByStatusName('на проверке');

        $userId = Auth::id();

        Ad::create([...$validated, 'user_id' => $userId, 'status_id' => $statusId]);
    }
}

?>