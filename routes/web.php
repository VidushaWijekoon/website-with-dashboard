<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DigitialMarketingController;
use App\Http\Controllers\Frontend\EventManagementController;
use App\Http\Controllers\Frontend\GraphicDesignController;
use App\Http\Controllers\Frontend\RtechHomeController;
use App\Http\Controllers\Frontend\ScienceTechnologyController;
use App\Http\Controllers\Frontend\SoftwareDevelopmentController;
use App\Http\Controllers\Frontend\TechnicalServicesController;
use App\Http\Controllers\Frontend\WebDevelopmentController;

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

    Route::prefix('/employee')->group(function () {
        Route::controller(EmployeeController::class)->group(function () {
            Route::get('/', 'index')->name('employee.dashboard');
            Route::get('/leave', 'leave')->name('employee.leave');
            Route::get('/holidays', 'holidays')->name('employee.holidays');
            Route::get('/attendance', 'attendance')->name('employee.attendance');
        });
    });

    Route::prefix('/department')->group(function () {
        Route::controller(DepartmentController::class)->group(function () {
            Route::get('/', 'index')->name('department.index');
        });
    });
});
