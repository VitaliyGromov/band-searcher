<?php

namespace App\Http\Controllers\Ads;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ads\AdStoreRequest;

class AdController extends Controller
{
    public function index()
    {
        return view('ads.index');
    }

    public function show()
    {
        return view('ads.show');
    }

    public function createAdFromBand()
    {
        return view('ads.band.create');
    }

    public function createAdFromArtist()
    {
        return view('ads.artist.create');
    }

    public function store(AdStoreRequest $request)
    {
        $data = $request->all();

        dd($data);

        return 'ad store request';
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
