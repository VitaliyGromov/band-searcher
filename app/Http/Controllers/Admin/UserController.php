<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\Users\UserFilter;
use App\Http\Requests\User\ChangeActiveStatusRequest;
use App\Http\Requests\User\UserFilterRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index(UserFilterRequest $request)
    {
        $users = getFilteredModel($request, User::class, UserFilter::class)->get();

        return view('admin.users.index', compact('users'));
    }

    public function changуUserActivityStatus(ChangeActiveStatusRequest $request, User $user)
    {
        dd($request->all()); //TODO плка не работает
        $validated = $request->validated();

        $user->update($validated);

        return redirect()->back();
    }
}
