<?php
declare(strict_types=1);

namespace App\Actions\Auth;

use App\Mail\Auth\PasswordChangedMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class PasswordChangedAction
{
    public function handle(array $validated, User $user)
    {
        $user->update(...$validated);

        Mail::to($user)->send(new PasswordChangedMail($user));
    }
}
