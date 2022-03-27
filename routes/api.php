<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UnloggedUserController;
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
Route::post('/code-sending', [\App\Http\Controllers\Api\v1\AuthController::class, 'send'])->name('code-sending');
Route::post('/restore-password', [\App\Http\Controllers\Api\v1\AuthController::class, 'CodeSend']);
Route::group(['middleware' => ['auth:api']], function () {
    Route::apiResource('products', \App\Http\Controllers\Api\v1\ProductController::class);
    Route::apiResource('categories', \App\Http\Controllers\Api\v1\ProductController::class);
    Route::apiResource('regions', \App\Http\Controllers\Api\v1\ProductController::class);
    Route::apiResource('cities', \App\Http\Controllers\Api\v1\ProductController::class);
    Route::put('user', [\App\Http\Controllers\Api\v1\UserController::class, 'update']);
    Route::post('favourites', [\App\Http\Controllers\Api\v1\ProductController::class, 'storeFavourite']);
    Route::delete('favourites/{id}', [\App\Http\Controllers\Api\v1\ProductController::class, 'destroyFavourite']);
    Route::get('favourites', [\App\Http\Controllers\Api\v1\ProductController::class, 'indexFavourite']);
    Route::get('search-result', [\App\Http\Controllers\Api\v1\ProductController::class, 'searchResultIndex']);
    Route::get('search-result/{id?}', [\App\Http\Controllers\Api\v1\ProductController::class, 'getCategories'])->name('search.results');

});



