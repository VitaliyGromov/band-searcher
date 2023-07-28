<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Actions\User\UserActivityStatusChangedAction;
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
        $users = User::filter($request->validated())->orderBy('id')->get();

        return view('admin.users.index', compact('users'));
    }

    public function changeUserActivityStatus(ChangeActiveStatusRequest $request, User $user, UserActivityStatusChangedAction $action): RedirectResponse
    {
        $action->handle($request->validated(), $user);

        return redirect()->back();
    }
}
