<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortController;

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

// Route::get('/shorten',[ShortController::class, 'store'])->name('shorten');
Route::prefix('api')->group(function () {
    Route::post('/shorten',[ShortController::class, 'store'])->name('shorten');    
});


Route::get('/',[ShortController::class, 'index']);
Route::get('/{slug}',[ShortController::class, 'show']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
