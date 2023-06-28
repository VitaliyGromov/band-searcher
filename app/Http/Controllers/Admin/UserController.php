<?php

namespace App\Http\Controllers\Admin;

use App\Actions\User\ChangeUserActivityStatusAction;
use App\Http\Controllers\Controller;
use App\Http\Filters\Users\UserFilter;
use App\Http\Requests\User\ChangeActiveStatusRequest;
use App\Http\Requests\User\UserFilterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(UserFilterRequest $request): View
    {
        $users = getFilteredModel($request, User::class, UserFilter::class)->get();

        return view('admin.users.index', compact('users'));
    }

    public function changeUserActivityStatus(ChangeActiveStatusRequest $request, User $user, ChangeUserActivityStatusAction $action): RedirectResponse
    {
        $action->handle($request, $user);

        return redirect()->back();
    }
}
