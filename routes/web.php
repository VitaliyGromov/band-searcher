<?php

use App\Http\Controllers\Advertisements\AdvertismentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/advertisments', [AdvertismentController::class, 'index'])->name('advertisments');

Route::get('/advertisments/create/musicion', [AdvertismentController::class, 'advertismentFromMusicionView'])->name('advertisments.create.musicion');
Route::get('/advertisments/create/band', [AdvertismentController::class, 'advertismentFromBandView'])->name('advertisments.create.band');
