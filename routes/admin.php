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
    Route::post('admin/genres', [GenreController::class, 'store'])->name('admin.genres.store');
    Route::put('admin/genres/{genre}', [GenreController::class, 'update'])->name('admin.genres.update');
    Route::delete('admin/genres/{genre}', [GenreController::class, 'destroy'])->name('admin.genres.delete');

    Route::get('admin/skills', [SkillController::class, 'index'])->name('admin.skills');
    Route::post('admin/skills', [SkillController::class, 'store'])->name('admin.skills.store');
    Route::put('admin/skills/{skill}', [SkillController::class, 'update'])->name('admin.skills.update');
    Route::delete('admin/skills/{skill}', [SkillController::class, 'destroy'])->name('admin.skills.delete');
});