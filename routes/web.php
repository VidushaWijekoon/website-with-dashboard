<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DigitialMarketingController;
use App\Http\Controllers\EventManagementController;
use App\Http\Controllers\GraphicDesignController;
use App\Http\Controllers\ScienceTechnologyController;
use App\Http\Controllers\SoftwareDevelopmentController;
use App\Http\Controllers\TechnicalServicesController;
use App\Http\Controllers\WebDevelopmentController;
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

Route::prefix('/')->group(function () {
    Route::controller(RtechHomeController::class)->group(function () {
        Route::get('/', 'index')->name('rtech.index');
        Route::post('/', 'store')->name('rtech.store');
    });

    Route::get('technical-services', [TechnicalServicesController::class, 'index'])->name('technical_services.index');
    Route::get('science-technology', [ScienceTechnologyController::class, 'index'])->name('science_technology.index');
    Route::get('science-technology/single_post', [ScienceTechnologyController::class, 'single_post'])->name('science_technology.single_post');
    Route::get('event-management', [EventManagementController::class, 'index'])->name('event_management.index');
});

Route::prefix('it/')->group(function () {
    Route::get('web-development', [WebDevelopmentController::class, 'index'])->name('web_development.index');
    Route::get('software-development', [SoftwareDevelopmentController::class, 'index'])->name('software_development.index');
    Route::get('graphic-design', [GraphicDesignController::class, 'index'])->name('graphic_design.index');
    Route::get('digital-marketing', [DigitialMarketingController::class, 'index'])->name('digital_marketing.index');
});


Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
