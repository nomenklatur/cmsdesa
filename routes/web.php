<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/masuk', [Authentication::class, 'index'])->name('login')->middleware('guest');
Route::post('/masuk', [Authentication::class, 'login'])->middleware('guest');
Route::get('/artikel', [HomeController::class, 'list_artikel']);
Route::get('/artikel/{artikel}', [HomeController::class, 'show_artikel']);

