<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.index');
    }

    public function update(User $user, UpdateProfileRequest $request)
    {
        $validated = $request->validated();

        $user->update($validated);

        return redirect('profile');
    }
}
