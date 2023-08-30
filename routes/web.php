<?php

use App\Http\Controllers\Admin\HomepageController as AdminHomepageController;
use App\Http\Controllers\Frontend\HomepageController as FrontendHomepageController;
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

Route::get('/', [FrontendHomepageController::class, 'index'])->name('frontend.homepage');

Route::get('admin/dashboard', [AdminHomepageController::class, 'index'])->name('admin.homepage');
