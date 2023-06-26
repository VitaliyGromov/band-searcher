<?php
namespace App\Actions\User;

use App\Events\User\ChangeUserActivityStatusEvent;
use App\Models\User;
use Illuminate\Http\Request;

class ChangeUserActivityStatusAction
{
    public function handle(Request $request, User $user)
    {
        $validated = $request->validated();

        $user->update($validated);

        event(new ChangeUserActivityStatusEvent($user));
    }
}

?>