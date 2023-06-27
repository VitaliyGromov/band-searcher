<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangePasswordRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ChangePasswordController extends Controller
{
    use AuthenticatesUsers;

    public function show()
    {
        return view('auth.passwords.change');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $validated = $request->validated();

        $userId = Auth::id();

        $user = User::find($userId);

        $user->update(['password' => Hash::make($validated['password'])]);
    }
}
