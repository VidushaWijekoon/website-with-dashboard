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

Route::get('web-development', function () {
    return view('pages.frontend.web_development.index');
});

Route::get('software-development', function () {
    return view('pages.frontend.software_development.index');
});

Route::get('graphic-design', function () {
    return view('pages.frontend.graphic_design.index');
});

Route::get('social-media-marketing', function () {
    return view('pages.frontend.social_media_marketing.index');
});

Route::get('interior-design', function () {
    return view('pages.frontend.interior_design.index');
});

Route::get('technical-services', function () {
    return view('pages.frontend.technical_services.index');
});

Route::get('event-management', function () {
    return view('pages.frontend.event_management.index');
});

Route::get('science-technology', function () {
    return view('pages.frontend.science_technology.index');
});

Route::get('pricing', function () {
    return view('pages.frontend.pricing.index');
});

Route::get('blog', function () {
    return view('pages.frontend.blog.index');
});

Route::get('pay-online', function () {
    return view('pages.frontend.pay_online.index');
});

Route::get('careers', function () {
    return view('pages.frontend.careers.index');
});


Route::get('admin/dashboard', [AdminHomepageController::class, 'index'])->name('admin.homepage');
