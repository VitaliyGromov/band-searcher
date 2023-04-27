<?php

use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;

Route::get('ads/artist/{artist}', [AdController::class, 'showAdFromArtist'])->name('ads.artist.show');

Route::get('ads/artist/create', [AdController::class, 'createAdFromArtist'])->name('ads.artist.create');
Route::post('ads/artist', [AdController::class, 'store'])->name('ads.store');

Route::get('ads/artists/edit/{artist}', [AdController::class, 'editAdFromArtist'])->name('ads.artist.edit');
Route::put('ads/artist/{artist}', [AdController::class, 'update'])->name('ads.update');

Route::delete('delete/{artist}', [AdController::class, 'destroy'])->name('ads.destroy');

?>