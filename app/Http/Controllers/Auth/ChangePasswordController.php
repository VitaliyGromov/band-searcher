<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangePasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ChangePasswordController extends Controller
{
    public function show(): View
    {
        return view('auth.passwords.change');
    }

    public function changePassword(ChangePasswordRequest $request): RedirectResponse
    {
        $user = $request->user();

        $user->update($request->validated());

        return redirect('profile')->with('message', 'Ваш пароль был успешно обновлен');
    }
}
