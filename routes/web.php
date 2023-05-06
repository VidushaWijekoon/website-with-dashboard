<?php

use App\Http\Controllers\Admin\DashboardHomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Rtech\RtechHomeController;
use App\Http\Controllers\Rtech\EventManagementController;
use App\Http\Controllers\Rtech\IT\GraphicDesignController;
use App\Http\Controllers\Rtech\IT\WebDevelopmentController;
use App\Http\Controllers\Rtech\ScienceTechnologyController;
use App\Http\Controllers\Rtech\TechnicalServicesController;
use App\Http\Controllers\Rtech\IT\DigitialMarketingController;
use App\Http\Controllers\Rtech\IT\SoftwareDevelopmentController;

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

Route::prefix('/')->group(function () {
    Route::get('/', [RtechHomeController::class, 'index'])->name('rtech.index');
    Route::get('technical_services', [TechnicalServicesController::class, 'index'])->name('technical_services.index');
    Route::get('science_technology', [ScienceTechnologyController::class, 'index'])->name('science_technology.index');
    Route::get('event_management', [EventManagementController::class, 'index'])->name('event_management.index');
});

Route::prefix('it/')->group(function () {
    Route::get('web_development', [WebDevelopmentController::class, 'index'])->name('web_development.index');
    Route::get('software_development', [SoftwareDevelopmentController::class, 'index'])->name('software_development.index');
    Route::get('graphic_design', [GraphicDesignController::class, 'index'])->name('graphic_design.index');
    Route::get('digital_marketing', [DigitialMarketingController::class, 'index'])->name('digital_marketing.index');
});

Route::prefix('admin/')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('dashboard', [DashboardHomeController::class, 'index'])->name('dashboard.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');