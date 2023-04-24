<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile{user}', [ProfileController::class, 'update'])->name('profile.update');

?>