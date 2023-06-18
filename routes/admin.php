<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'role:admin', 'verified')->group(function(){
    Route::get('/admin/ads', [AdController::class, 'adminAds'])->name('admin.index');
    Route::get('/admin/ads/{ad}', [AdController::class, 'show'])->name('admin.ads.show');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
});
