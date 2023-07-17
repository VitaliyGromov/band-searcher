<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ChangeActiveStatusRequest;
use App\Http\Requests\User\UserFilterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(UserFilterRequest $request): View
    {
        $users = User::filter($request->validated())->get();

        return view('admin.users.index', compact('users'));
    }

    public function changeUserActivityStatus(ChangeActiveStatusRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());

        return redirect()->back();
    }
}
