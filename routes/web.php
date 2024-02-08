<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\App;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\SuccessStoriesController;
use App\Http\Controllers\ContactsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/technology', [TechnologyController::class, 'index'])->name('technology');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/success-stories', [SuccessStoriesController::class, 'index'])->name('success-stories');


//Route::get('/{locale?}', function ($locale = null) {
//    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//        app()->setLocale($locale);
//    }
//
//    return view('welcome');
//});

Route::match(['get', 'post'], 'language/{locale}', function ($locale) {
    if (isset($locale) && array_key_exists($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }
    return redirect()->back();
});


//Route::post('locale', function () {
//    $validated = request()->validate([
//        'language' => ['required'],
//    ]);
//    App::setLocale($validated['language']);
//    session()->put('locale', $validated['language']);
//    return redirect()->back();
//});
