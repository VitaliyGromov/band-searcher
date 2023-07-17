<?php
namespace App\Http\Controllers\Ads;

use App\Models\Ad;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ads\AdFormRequest;
use App\Actions\Ads\ChangeAdStatusAction;
use App\Enums\Status as EnumsStatus;
use App\Http\Requests\Ads\AdFilterRequest;
use App\Http\Requests\Ads\ChangeAdStatusRequest;
use App\Mail\Ad\AdCreatedMail;
use App\Mail\Ad\AdUpdatedMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function store(AdFormRequest $request): RedirectResponse
    {
        $status = EnumsStatus::underReview->value;

        $ad = Ad::create([...$request->validated(), 'user_id' => Auth::id(), 'status' => $status]);

        Mail::to($ad->user)->send(new AdCreatedMail($ad));

        return redirect()->route('ads');
    }

    public function update(AdFormRequest $request, Ad $ad): RedirectResponse
    {
        $validated = $request->validated();

        $ad->update([...$validated, 'status' => EnumsStatus::underReview->value]);

        Mail::to($ad->user)->send(new AdUpdatedMail($ad));

        return redirect('ads');
    }

    public function changeAdStatus(Ad $ad, ChangeAdStatusRequest $request, ChangeAdStatusAction $adChangeStatusAction): RedirectResponse
    {
        $validated = $request->validated();
        
        $adChangeStatusAction->handle($validated, $ad);

        return redirect()->back();
    }

    public function destroy(Ad $ad): RedirectResponse
    {
        $ad->delete();

        return redirect('ads');
    }
}