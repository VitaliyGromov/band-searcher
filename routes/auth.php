<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\ChangePasswordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {
    Route::get('/password/change', [ChangePasswordController::class, 'show'])->name('password.change.show');
    Route::post('/password/change', [ChangePasswordController::class, 'changePassword'])->name('password.change.changePassword');
});
