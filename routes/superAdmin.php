<?php

use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'super-admin', 'as' => 'super-admin.', 'middleware' => ['auth', 'superAdmin']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('create', [AdminController::class, 'create'])->name('create');
    });
});
