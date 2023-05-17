<?php

namespace App\Http\Controllers\Ads;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ads\AdStoreRequest;
use App\Models\Ad;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

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
        $validated = $request->validated();

        $status_id = Status::getStatusIdByStatusName('на проверке');

        Ad::create([...$validated, 'user_id'=> Auth::id(), 'status_id' => $status_id]);

        return redirect()->route('ads'); // TODO создать под это Action class
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
