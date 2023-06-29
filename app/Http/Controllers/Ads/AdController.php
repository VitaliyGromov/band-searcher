<?php

namespace App\Http\Controllers\Ads;

use App\Models\Ad;
use App\Http\Filters\Ads\AdFilter;
use App\Actions\Ads\AdStoreAction;
use App\Actions\Ads\AdUpdateAction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Ads\AdFormRequest;
use App\Actions\Ads\ChangeAdStatusAction;
use App\Enums\Status as EnumsStatus;
use App\Http\Requests\Ads\AdFilterRequest;
use App\Http\Requests\Ads\ChangeAdStatusRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdController extends Controller
{
    public function index(AdFilterRequest $request): View
    {
        $filteredAds = getFilteredModel($request, Ad::class, AdFilter::class);

        $idOfActiveStatus = EnumsStatus::ACTIVE->value;

        $ads = $filteredAds->where('status_id', $idOfActiveStatus)->get();

        return view('ads.index', compact('ads'));
    }

    public function adminAds(AdFilterRequest $request): View
    {
        $filteredAds = getFilteredModel($request, Ad::class, AdFilter::class);

        $ads = $filteredAds->get();

        return view('admin.ads', compact('ads'));
    }

    public function userAds(AdFilterRequest $request): View
    {
        $filteredAds = getFilteredModel($request, Ad::class, AdFilter::class);

        $ads = $filteredAds->where('user_id', Auth::id())->get();

        return view('user.ads', compact('ads'));
    }

    public function show(Ad $ad): View
    {
        return view('ads.show', compact('ad'));
    }

    public function createAdFromBand(): View
    {
        return view('ads.band.create');
    }

    public function createAdFromArtist(): View
    {
        return view('ads.artist.create');
    }

    public function store(AdFormRequest $request, AdStoreAction $adStoreAction): RedirectResponse
    {
        $adStoreAction->handle($request);

        return redirect()->route('ads');
    }

    public function update(AdFormRequest $request, Ad $ad, AdUpdateAction $adUpdateAction): RedirectResponse
    {
        $adUpdateAction->handle($request, $ad);

        return redirect('ads');
    }

    public function changeAdStatus(Ad $ad, ChangeAdStatusRequest $request, ChangeAdStatusAction $adChangeStatusAction): RedirectResponse
    {
        $adChangeStatusAction->handle($request, $ad);

        return redirect()->back();
    }

    public function destroy(Ad $ad): RedirectResponse
    {
        $ad->delete();

        return redirect('ads');
    }
}