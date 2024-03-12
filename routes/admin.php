<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Foundation\Application;
//use Illuminate\Support\Facades\App;

use Inertia\Inertia;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/


//Route::get('/', function () {
//    return Inertia::render('Admin', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//})->middleware(['guest'])->name('admin');

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/', [AdminController::class, 'index'])
//    ->middleware(['guest'])
//    ->name('admin');
//
//Route::get('/dashboard', [AdminController::class, 'dashboard'])
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');




Route::middleware('guest')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->middleware(['verified'])
        ->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
