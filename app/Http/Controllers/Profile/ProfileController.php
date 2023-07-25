<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        return view('profile.index');
    }

    public function update(User $user, UpdateProfileRequest $request): RedirectResponse
    {
        $user->update([...$request->validated()]);

        return redirect('profile');
    }
}
