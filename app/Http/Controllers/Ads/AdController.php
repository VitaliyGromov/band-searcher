<?php
namespace App\Http\Controllers\Ads;

use App\Actions\Ads\AdCreactedAction;
use App\Actions\Ads\AdUpdatedAction;
use App\Models\Ad;
use App\Http\Controllers\Controller;
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
        $ads = Ad::filter($request->validated())->where('status', EnumsStatus::active->value)->get();

        return view('ads.index', compact('ads'));
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

    public function store(AdFormRequest $request, AdCreactedAction $action): RedirectResponse
    {
        $action->handle($request->validated());

        return redirect()->route('ads');
    }

    public function update(AdFormRequest $request, Ad $ad, AdUpdatedAction $action): RedirectResponse
    {
        $action->handle($request->validated(), $ad);

        return redirect('ads');
    }

    public function changeAdStatus(Ad $ad, ChangeAdStatusRequest $request, ChangeAdStatusAction $adChangeStatusAction): RedirectResponse
    { 
        $adChangeStatusAction->handle($request->validated(), $ad);

        return redirect()->back();
    }

    public function destroy(Ad $ad): RedirectResponse
    {
        $ad->delete();

        return redirect('ads');
    }
}