<?php
namespace App\Actions\Auth;

use App\Events\Auth\PasswordChanged;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordAction
{
    public function handle(array $validated): void
    {
        $userId = Auth::id();

        $user = User::find($userId);

        $user->update(['password' => Hash::make($validated['password'])]);

        event(new PasswordChanged($user));
    }
}
?>