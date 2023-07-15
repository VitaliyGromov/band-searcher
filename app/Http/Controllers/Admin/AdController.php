<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ads\AdFilterRequest;
use App\Models\Ad;
use Illuminate\View\View;

class AdController extends Controller
{
    public function index(AdFilterRequest $request): View
    {
        $ads = Ad::filter($request->validated())->get();

        return view('admin.ads', compact('ads'));
    }
}
