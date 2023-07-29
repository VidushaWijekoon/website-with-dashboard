<?php

use App\Http\Controllers\Admin\DashboardHomepageController;
use App\Http\Controllers\Frontend\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::prefix('admin/')->group(function () {
    Route::controller(DashboardHomepageController::class)->group(function () {
        Route::get('dashboard/', 'index')->name('admin.dashboard.index');
    });
});

Route::prefix('/')->group(function () {
    Route::controller(HomepageController::class)->group(function () {
        Route::get('/', 'index')->name('frontend.index');
    });
});
