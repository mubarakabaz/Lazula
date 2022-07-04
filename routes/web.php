<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BlogTutorialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [FrontendController::class, 'index'])->name('home');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('users', UserController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('tutorial', BlogTutorialController::class);
Route::get('/tabel/sensor-suhu', [SensorController::class, 'tabelsuhu'])->name('tabel.suhu');

Auth::routes();



Route::get('/blog/{slug}', [ArtikelController::class, 'blog'])->name('blog');


Route::get('/input', [SensorController::class, 'input']);
