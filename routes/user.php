<?php

use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('user/ads', [AdController::class, 'userAds'])->name('user.ads');
    Route::get('user/ads/{ad}', [AdController::class, 'show'])->name('user.ads.show');
});

?>
