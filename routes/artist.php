<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ads\ArtistController;

Route::get('ads/artist/{artist}', [ArtistController::class, 'show'])->name('ads.artist.show');

Route::get('ads/artist/create', [ArtistController::class, 'createView'])->name('ads.artist.create');
Route::post('ads/artist', [ArtistController::class, 'store'])->name('ads.store.artist');

Route::get('ads/artists/edit/{artist}', [ArtistController::class, 'editView'])->name('ads.artist.edit');
Route::put('ads/artist/{artist}', [ArtistController::class, 'update'])->name('ads.artist.update');

Route::delete('delete/{artist}', [ArtistController::class, 'destroy'])->name('ads.artist.destroy');

?>