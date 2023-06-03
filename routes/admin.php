<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'role:admin')->group(function(){
    Route::get('/admin/ads', [AdminController::class, 'index'])->name('admin.index');
});
