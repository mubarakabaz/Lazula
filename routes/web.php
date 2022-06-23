<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriContrtroller;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\TutorialController;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/blog/{slug}', [FrontendController::class, 'detail'])->name('detail-artikel');
Route::get('/category/{slug}', [FrontendController::class, 'category'])->name('detail-category');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('kategori', KategoriContrtroller::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('iklan', IklanController::class);
Route::resource('account', AccountController::class);
Route::resource('tutorial', TutorialController::class);
Route::get('/input', [SensorController::class, 'input']);

