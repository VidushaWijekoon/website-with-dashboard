<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomepageController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.home.index');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin.dashboard.index');
});
