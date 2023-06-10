<?php

namespace App\Http\Controllers\Ads;

use App\Models\Ad;
use App\Actions\Ads\AdStoreAction;
use App\Actions\Ads\AdUpdateAction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Ads\AdFormRequest;
use App\Models\Status;

class AdController extends Controller
{
    public function index()
    {
        $idOfActiveStatus = Status::getStatusIdByStatusName('активно');

        $ads = Ad::where('status_id', $idOfActiveStatus)->get();

        return view('ads.index', compact('ads'));
    }

    public function adminAds()
    {
        return view('admin.ads');
    }

    public function userAds()
    {
        $ads = Ad::where('user_id', Auth::id())->get();

        return view('user.ads', compact('ads'));
    }

    public function show(Ad $ad)
    {
        return view('ads.show', compact('ad'));
    }

    public function createAdFromBand()
    {
        return view('ads.band.create');
    }

    public function createAdFromArtist()
    {
        return view('ads.artist.create');
    }

    public function store(AdFormRequest $request, AdStoreAction $adStoreAction)
    {
        $validated = $request->validated();

        $adStoreAction->handle($validated);

        return redirect()->route('ads');
    }

    public function update(AdFormRequest $request, Ad $ad, AdUpdateAction $action)
    {
        $validated = $request->validated();

        $action->handle($validated, $ad);

        return redirect('ads');
    }

    public function destroy()
    {
        return 'ad delete request';
    }
}
