<?php

use App\Http\Controllers\Advertisments\BandController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('ads', [HomeController::class, 'index'])->name('advertisments');
