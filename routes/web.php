<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\HomeController;
use App\HTTP\Controllers\DashboardController;
use App\HTTP\Controllers\ArticleController;
use App\HTTP\Controllers\OfficialsController;
use App\HTTP\Controllers\CouncilController;
use App\HTTP\Controllers\GovController;
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
Route::post('/keluar', [Authentication::class, 'logout'])->middleware('auth');
Route::get('/artikel', [HomeController::class, 'list_artikel']);
Route::get('/artikel/{artikel}', [HomeController::class, 'show_artikel']);
Route::get('/pemerintahan/visimisi', [HomeController::class, 'show_visi_misi']);
Route::get('/pemerintahan/struktur', [HomeController::class, 'show_struktur']);
Route::get('/pemerintahan/bpd', [HomeController::class, 'show_bpd']);

Route::resource('/admin/article', ArticleController::class)->middleware('auth');
Route::resource('/admin/pegawai', OfficialsController::class)->except(['index', 'show'])->middleware('auth');
Route::resource('/admin/bpd', CouncilController::class)->except(['index', 'show'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/admin/pemerintahan', [GovController::class, 'index'])->middleware('auth');
Route::put('/admin/pemerintahan', [GovController::class, 'ubah_visi'])->middleware('auth');