<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaidServicesController;
use App\Http\Controllers\ProfileActiveController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePlaceController;
use App\Http\Controllers\ProfileSettingsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*GET METHODS*/

Route::get('/', [HomeController::class, 'index'])->name('home');


//POST METHODS
Route::middleware(['NoAuth'])->group(function () {
    Route::post('/registration', [RegisterController::class, 'postSignup'])->name('create_user');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('create_login');
    Route::get('/registration', [RegisterController::class, 'index'])->name('registration');
    Route::get('/login', [LoginController::class, 'getLogin'])->name('login');
});
Route::middleware(['AuthUser'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/logout', [LoginController::class, 'logout'])->name('user-logout');
    Route::get('/paid-services', [PaidServicesController::class, 'index'])->name('paid-services');
    Route::get('profile-settings', [ProfileSettingsController::class, 'index'])->name('profile-settings');
    Route::get('/profile-active-ads', [ProfileActiveController::class, 'index'])->name('profile-active-ads');
    Route::get('/profile-place-anad', [ProfilePlaceController::class, 'index'])->name('profile-place-anad');
});


Route::middleware(['AuthAdmin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/users', [AdminController::class, 'index'])->name('admin');
    });
});



