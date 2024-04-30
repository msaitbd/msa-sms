<?php

use App\Http\Controllers\SuperAdmin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'super-admin', 'as' => 'super-admin.', 'middleware' => ['superAdmin']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});
