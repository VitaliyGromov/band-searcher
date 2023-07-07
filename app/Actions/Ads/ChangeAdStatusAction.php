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

        if(isset($validated['message'])){
            $message = $validated['message'];
        } else {
            $message = '';
        }

        $ad->update(['status' => $validated['status']]);

        event(new AdStatusChanged($ad, $message));
    }
}
?>