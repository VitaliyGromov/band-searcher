<?php
namespace App\Actions\Ads;

use App\Models\Ad;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

class AdStoreAction 
{
    public function handle(array $validated)
    {
        $status_id = Status::getStatusIdByStatusName('на проверке');

        Ad::create([...$validated, 'user_id' => Auth::id(), 'status_id' => $status_id]);
    }
}

?>