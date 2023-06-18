<?php

use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::redirect('/', 'ads');

Route::middleware('auth', 'verified')->group(function(){
    Route::get('ads/create/artist', [AdController::class, 'createAdFromArtist'])->name('ads.artist.create');
    Route::get('ads/create/band', [AdController::class, 'createAdFromBand'])->name('ads.band.create');
    Route::delete('ads/{ad}', [AdController::class, 'destroy'])->name('ads.destroy');
    Route::put('ads/{ad}', [AdController::class, 'update'])->name('ads.update');
    Route::post('ads', [AdController::class, 'store'])->name('ads.store');
    Route::get('ads/{ad}', [AdController::class, 'show'])->name('ads.show');
});

Route::get('ads', [AdController::class, 'index'])->name('ads');
