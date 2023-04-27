<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ads\AdController;

Route::get('ads/band/{band}', [AdController::class, 'showAdFromBand'])->name('ads.band.show');

Route::get('ads/band/create', [AdController::class, 'createAdFromBand'])->name('ads.band.create');
Route::post('ads/band', [AdController::class, 'store'])->name('ads.store');

Route::get('ads/bands/edit/{band}', [AdController::class, 'editAdFromBand'])->name('ads.band.edit');
Route::put('ads/band/{band}', [AdController::class, 'update'])->name('ads.band.update');

Route::delete('delete/{band}', [AdController::class, 'destroy'])->name('ads.band.destroy');

?>