<?php
namespace App\Actions\Ads;

use App\Events\Ad\AdStatusChanged;
use App\Models\Ad;
use Illuminate\Http\Request;

class ChangeAdStatusAction
{
    public function handle(Request $request, Ad $ad): void
    {
        $validated = $request->validated();

        $message = $validated['message'];

        if($message === null){
            $message = '';
        }

        $ad->update(['status_id' => $validated['status_id']]);

        event(new AdStatusChanged($ad, $message));
    }
}
?>