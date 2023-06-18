<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified')->group(function(){
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
});

?>