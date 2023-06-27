<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function(){
    Route::get('/password/change', [ChangePasswordController::class, 'show'])->name('password.change.show');
    Route::post('/password/change', [ChangePasswordController::class, 'changePassword'])->name('password.change.changePassword');
});

?>