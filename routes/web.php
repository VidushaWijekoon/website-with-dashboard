<?php

use App\Http\Controllers\Admin\AccountsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardHomeController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Admin\UsersController;
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

Route::prefix('admin/')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('dashboard', [DashboardHomeController::class, 'index'])->name('dashboard.index');

    // Client Contact US Messages
    Route::controller(ContactUsController::class)->group(function () {
        Route::get('contact-us-messages', 'index')->name('contact_us_messages');
    });

    // Posts
    Route::controller(PostsController::class)->group(function () {
        Route::get('/posts', 'index')->name('posts.index');
        Route::get('/posts/create', 'create')->name('posts.create');
        Route::post('/posts', 'store')->name('posts.store');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('category.index');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category', 'store')->name('category.store');
        Route::get('/category/{category}/edit', 'edit')->name('category.edit');
        Route::put('/category/{category}/', 'update')->name('category.update');
        Route::get('/category/{category}/delete', 'delete')->name('category.delete');
    });

    Route::controller(SalesController::class)->group(function () {
        Route::get('/sales', 'index')->name('sales.index');
        Route::get('/sales/create', 'create')->name('sales.create');
    });

    Route::controller(AccountsController::class)->group(function () {
        Route::get('/accounts', 'index')->name('accounts.index');
        Route::get('/accounts/create', 'create')->name('accounts.create');
    });

    Route::controller(EmployeesController::class)->group(function () {
        Route::get('/employee', 'index')->name('employees.index');
        Route::get('/employee/create', 'create')->name('employee.create');
    });

    Route::controller(UsersController::class)->group(function () {
        Route::get('/users', 'index')->name('users.index');
        Route::get('/users/{user_id}/delete', 'destory_user')->name('users.delete');
        Route::get('/users/{user_id}/', 'edit_user')->name('edit.user');
    });
});

Auth::routes();
