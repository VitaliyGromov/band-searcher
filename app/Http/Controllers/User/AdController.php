<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ads\AdFilterRequest;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Ad;

class AdController extends Controller
{
    public function index(AdFilterRequest $request): View
    {
        $ads = Ad::filter($request->validated())->where('user_id', Auth::id())->get();

        return view('user.ads', compact('ads'));
    }
}
