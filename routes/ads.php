<?php

declare(strict_types=1);

use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'ads');

Route::middleware('auth', 'verified', 'active')->group(function () {
    Route::get('ads/create/artist', [AdController::class, 'createAdFromArtist'])->name('ads.artist.create');
    Route::get('ads/create/band', [AdController::class, 'createAdFromBand'])->name('ads.band.create');
    Route::delete('ads/{ad}', [AdController::class, 'destroy'])->name('ads.destroy');
    Route::put('ads/{ad}', [AdController::class, 'update'])->name('ads.update');
    Route::post('ads', [AdController::class, 'store'])->name('ads.store');
    Route::get('ads/{ad}', [AdController::class, 'show'])->name('ads.show');
});

Route::get('ads', [AdController::class, 'index'])->name('ads');
