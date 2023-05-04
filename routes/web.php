<?php

use App\Http\Controllers\Rtech\EventManagementController;
use App\Http\Controllers\Rtech\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('rtech.index');
    Route::get('/event_management', [EventManagementController::class, 'index'])->name('event_management.index');
});
