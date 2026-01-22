<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\PublicInternshipController;
use App\Http\Controllers\PublicRentalController;
use App\Http\Controllers\PublicDashboardController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (User / Visitor)
|--------------------------------------------------------------------------
*/

Route::get('/', [PublicDashboardController::class, 'index'])
    ->name('public.dashboard');

// Public internships
Route::get('/browse-internships', [PublicInternshipController::class, 'index'])
    ->name('public.internships.index');

Route::get('/browse-internships/{internship}', [PublicInternshipController::class, 'show'])
    ->name('public.internships.show');

// Public rentals
Route::get('/accommodation', [PublicRentalController::class, 'index'])
    ->name('public.rentals.index');

Route::get('/accommodation/{rental}', [PublicRentalController::class, 'show'])
    ->name('public.rentals.show');

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD (After Login)
|--------------------------------------------------------------------------
*/

Route::get('/home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (CRUD)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::resource('internships', InternshipController::class);
    Route::resource('rentals', RentalController::class);
    Route::resource('users', UserController::class);

});
