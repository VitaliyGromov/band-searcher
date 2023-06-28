<?php
namespace App\Actions\User;

use App\Events\User\UserActivityStatusChanged;
use App\Models\User;
use Illuminate\Http\Request;

class ChangeUserActivityStatusAction
{
    public function handle(Request $request, User $user):void
    {
        $validated = $request->validated();

        $user->update($validated);

        event(new UserActivityStatusChanged($user));
    }
}

?>