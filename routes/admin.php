<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    // settings 
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {

        // school 
        Route::get('school', [SettingsController::class, 'school'])->name('school');
        Route::get('school-edit/{id}', [SettingsController::class, 'schoolEdit'])->name('school.edit');
        Route::post('school-update', [SettingsController::class, 'schoolUpdate'])->name('school.update');
    });
});
