<?php

namespace App\Http\Controllers\Ads;

use App\Actions\Ads\AdStoreAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ads\AdFormRequest;
use App\Models\Ad;

class AdController extends Controller
{
    public function index()
    {
        return view('ads.index');
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

    public function edit()
    {
        return view('ads.edit');
    }

    public function update()
    {
        return 'ad update request';
    }

    public function destroy()
    {
        return 'ad delete request';
    }
}
