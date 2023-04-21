<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ads\BandController;

Route::get('ads/band/{band}', [BandController::class, 'show'])->name('ads.band.show');

Route::get('ads/band/create', [BandController::class, 'createView'])->name('ads.band.create');
Route::post('ads/band', [BandController::class, 'store'])->name('ads.store.band');

Route::get('ads/bands/edit/{band}', [BandController::class, 'editView'])->name('ads.band.edit');
Route::put('ads/band/{band}', [BandController::class, 'update'])->name('ads.band.update');

Route::delete('delete/{band}', [BandController::class, 'destroy'])->name('ads.band.destroy');

?>