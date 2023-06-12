<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ads\AdController;

Route::middleware('auth')->group(function(){
    Route::get('user/ads', [AdController::class, 'userAds'])->name('user.ads');
    Route::get('user/ads/{ad}', [AdController::class, 'show'])->name('user.ads.show');
    Route::put('user/ads/{ad}', [AdController::class, 'changeAdStatus'])->name('user.ads.change.status');
});

?>
