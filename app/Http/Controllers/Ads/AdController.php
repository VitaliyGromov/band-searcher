<?php

namespace App\Http\Controllers\Ads;

use App\Models\Ad;
use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Filters\Ads\AdFilter;
use App\Actions\Ads\AdStoreAction;
use App\Actions\Ads\AdUpdateAction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Ads\AdFormRequest;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\Ads\AdFilterRequest;
use App\Http\Requests\Ads\ChangeAdStatusRequest;

class AdController extends Controller
{
    private function getFilteredAds(Request $request): Builder
    {
        $validated = $request->validated();

        $filter = app()->make(AdFilter::class, ['queryParams' => array_filter($validated, 'strlen')]);

        return Ad::filter($filter);
    }

    public function index(AdFilterRequest $request)
    {
        $filteredAds = $this->getFilteredAds($request);

        $idOfActiveStatus = Status::getStatusIdByStatusName('активно');

        $ads = $filteredAds->where('status_id', $idOfActiveStatus)->get();

        return view('ads.index', compact('ads'));
    }

    public function adminAds(AdFilterRequest $request)
    {
        $filteredAds = $this->getFilteredAds($request);

        $ads = $filteredAds->get();

        return view('admin.ads', compact('ads'));
    }

    public function userAds(AdFilterRequest $request)
    {
        $filteredAds = $this->getFilteredAds($request);

        $ads = $filteredAds->where('user_id', Auth::id())->get();

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
        $adStoreAction->handle($request);

        return redirect()->route('ads');
    }

    public function update(AdFormRequest $request, Ad $ad, AdUpdateAction $adUpdateAction)
    {
        $adUpdateAction->handle($request, $ad);

        return redirect('ads');
    }

    public function changeAdStatus(Ad $ad, ChangeAdStatusRequest $request)
    {
        $validated = $request->validated();

        $ad->update($validated);

        return redirect()->back();
    }

    public function destroy(Ad $ad)
    {
        $ad->delete();

        return redirect('ads');
    }
}
