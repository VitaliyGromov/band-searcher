<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\PasswordChangedAction;
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

    public function changePassword(ChangePasswordRequest $request, PasswordChangedAction $action): RedirectResponse
    {
        $action->handle($request->validated(), $request->user());

        return redirect('profile')->with('message', 'Ваш пароль был успешно обновлен');
    }
}
