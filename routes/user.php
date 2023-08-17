<?php

declare(strict_types=1);

use App\Http\Controllers\Ads\AdController;
use App\Http\Controllers\User\AdController as UserAdController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified', 'own_ad', 'active')->group(function () {
    Route::get('user/ads', [UserAdController::class, 'index'])->name('user.ads')->withoutMiddleware('own_ad');
    Route::get('user/ads/{ad}', [AdController::class, 'show'])->name('user.ads.show');
    Route::put('user/ads/{ad}', [AdController::class, 'changeAdStatus'])->name('user.ads.change.status');
});
