<?php
declare(strict_types=1);
namespace App\Actions\User;

use App\Mail\User\UserActivityStatusChangedMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserActivityStatusChangedAction
{
    public function handle(array $validated, User $user)
    {
        $user->update($validated);

        Mail::to($user)->send(new UserActivityStatusChangedMail($user));
    }
}
