<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\AnnounController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EditAnnouncementController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaidServicesController;
use App\Http\Controllers\ProfileActiveController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePlaceController;
use App\Http\Controllers\ProfileSettingsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestorPasswordController;
use App\Http\Controllers\UnloggedUserController;
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

/*GET METHODS*/

Route::get('/', [HomeController::class, 'index'])->name('home');


//MIDDLEWARE METHODS

Route::middleware(['NoAuth'])->group(function () {

    /*  MIDDLEWARE POST METHODS*/

    Route::post('/restore-password', [RestorPasswordController::class, 'CodeSend'])->name('restore-password');
    Route::post('/code-sending', [ForgotController::class, 'send'])->name('code-sending');
    Route::post('/registration', [RegisterController::class, 'postSignup'])->name('create_user');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('create_login');
    //  MIDDLEWARE GET METHODS

    Route::get('/registration', [RegisterController::class, 'index'])->name('registration');
    Route::get('/login', [LoginController::class, 'getLogin'])->name('login');
    Route::get('/forgot-password', [ForgotController::class, 'index'])->name('forgot-password');
    Route::get('/restore-password', [RestorPasswordController::class, 'index'])->name('restore-password');


});

//MIDDLEWARE METHODS

Route::middleware(['AuthUser'])->group(function () {
    /*MIDDLEWARE GET METHODS*/
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/logout', [LoginController::class, 'logout'])->name('user-logout');
    Route::get('/paid-services', [PaidServicesController::class, 'index'])->name('paid-services');
    Route::get('/profile-settings', [ProfileSettingsController::class, 'index'])->name('profile-settings');
    Route::put('/profile-settings', [ProfileSettingsController::class, 'update']);
    Route::get('/profile-active-ads', [ProfileActiveController::class, 'index'])->name('profile-active-ads');
    Route::get('/profile-place-anad', [ProfilePlaceController::class, 'index'])->name('profile-place-anad');
    Route::get('/announcement', [AnnounController::class, 'index'])->name('announcement');
    Route::get('/favourites', [FavouritesController::class, 'index'])->name('favourites');
    Route::get('/announcement-unlogged-user', [UnloggedUserController::class, 'index'])->name('announcement-unlogged-user');
    Route::get('edit-announcement', [EditAnnouncementController::class, 'index'])->name('edit-announcement');
    Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
});

//ADMIN MIDDLEWARE METHODS
Route::middleware(['AuthAdmin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/users', [AdminController::class, 'index'])->name('admin');
    });
});



