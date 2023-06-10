<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'role:admin')->group(function(){
    Route::get('/admin/ads', [AdController::class, 'adminAds'])->name('admin.index');
    Route::get('/admin/ads/{ad}', [AdController::class, 'show'])->name('admin.ads.show');
});
