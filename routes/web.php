<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShortsController;
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

Route::get('',[PagesController::class, 'index']);
// Route::post('/shorten',[ShortsController::class, 'index'])->name('shorten');
// Route::get('/{slug}',[ShortsController::class, 'shorten']);
