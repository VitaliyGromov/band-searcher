<?php

namespace App\Http\Controllers\Ads;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ads.index');
    }

    public function showAdFromBand()
    {
        return view('ads.band.show');
    }

    public function showAdFromArtist()
    {
        return view('ads.artist.show');
    }

    public function createAdFromBand()
    {
        return view('ads.band.create');
    }

    public function createAdFromArtist()
    {
        return view('ads.artist.create');
    }

    public function store()
    {
        return 'ad store request';
    }

    public function editAdFromBand()
    {
        return view('ads.band.edit');
    }

    public function editAdFromArtist()
    {
        return view('ads.artist.edit');
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
