<?php

use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\SchoolController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'super-admin', 'as' => 'super-admin.', 'middleware' => ['auth', 'superAdmin']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    // admin 
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('create', [AdminController::class, 'create'])->name('create');
        Route::post('store', [AdminController::class, 'store'])->name('store');
        Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
    });

    // school 
    Route::group(['prefix' => 'school', 'as' => 'school.'], function () {
        Route::get('/', [SchoolController::class, 'index'])->name('index');
        Route::get('create', [SchoolController::class, 'create'])->name('create');
        Route::post('store', [SchoolController::class, 'store'])->name('store');
        Route::get('edit/{id}', [SchoolController::class, 'edit'])->name('edit');
    });
});
