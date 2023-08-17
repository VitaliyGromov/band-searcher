<?php

declare(strict_types=1);

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified', 'active')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
});
