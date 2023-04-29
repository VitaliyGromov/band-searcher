<?php

use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('ads', [AdController::class, 'index'])->name('ads');
Route::get('artist/create', [AdController::class, 'createAdFromArtist'])->name('ads.artist.create');
Route::get('band/create', [AdController::class, 'createAdFromBand'])->name('ads.band.create');
Route::delete('ads/{ad}', [AdController::class, 'destroy'])->name('ads.destroy');
Route::put('ads/{ad}', [AdController::class, 'update'])->name('ads.band.update');
Route::post('ads', [AdController::class, 'store'])->name('ads.store');