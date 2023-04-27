<?php

use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('ads', [AdController::class, 'index'])->name('ads');
