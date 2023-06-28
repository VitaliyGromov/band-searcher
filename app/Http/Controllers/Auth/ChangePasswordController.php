<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\ChangePasswordAction;
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

    public function changePassword(ChangePasswordRequest $request, ChangePasswordAction $action): RedirectResponse
    {
        $action->handle($request);

        return redirect('profile')->with('message', 'Ваш пароль был успешно обновлен');
    }
}
