<?php

use App\Http\Controllers\AnnounController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UnloggedUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('registration', [RegisterController::class, 'storeApi'])->name('registration');
Route::post('/login', [LoginController::class, 'storeLogin'])->name('login');
Route::group(['middleware'=>['auth:api']],function(){
    Route::get('/home', [HomeController::class, 'indexApi'])->name('home');
    Route::post('/place-anad', [ProductController::class, 'storeApi'])->name('profile-place-anad');
    Route::post('/announcement', [AnnounController::class, 'ApiUpdate'])->name('announcement');
    Route::get('/announcement-unlogged-user/{status?}/{id?}', [UnloggedUserController::class, 'unloggedApi'])->name('announcement.unlogged.user');
});
Route::post('/place-anad', [ProductController::class, 'storeApi'])->name('profile-place-anad');
Route::get('/home', [HomeController::class, 'indexApi'])->name('home');


