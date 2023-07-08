<?php
namespace App\Actions\User;

use App\Events\User\UserActivityStatusChanged;
use App\Models\User;

class ChangeUserActivityStatusAction
{
    public function handle(array $validated, User $user):void
    {
        $user->update($validated);

        event(new UserActivityStatusChanged($user));
    }
}

?>