<?php

use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});
