<?php

use App\Http\Controllers\Admin\AdController as AdminAdController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Ads\AdController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'role:admin', 'verified', 'active')->group(function(){
    Route::get('/admin/ads', [AdminAdController::class, 'index'])->name('admin.ads');
    Route::get('/admin/ads/{ad}', [AdController::class, 'show'])->name('admin.ads.show');
    Route::put('/admin/ads/{ad}', [AdController::class, 'changeAdStatus'])->name('admin.ads.change.status');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::put('/admin/users/{user}', [UserController::class, 'changeUserActivityStatus'])->name('admin.change.user.activity.status');

    Route::get('admin/genres', [GenreController::class, 'index'])->name('admin.genres');
    Route::delete('admin/genres/{genre}', [GenreController::class, 'destroy'])->name('admin.genres.delete');

    Route::get('admin/skills', [SkillController::class, 'index'])->name('admin.skills');
});