<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ApiSensorController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriContrtroller;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\TabelSensorController;
use App\Http\Controllers\TutorialController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('kategori', KategoriContrtroller::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('iklan', IklanController::class);
Route::resource('tutorial', TutorialController::class);


Route::get('/input', [SensorController::class, 'input']);
Route::get('/pengaturan', [SensorController::class, 'pengaturan']);

/**
 * Route Tabel Sensor
 */
Route::get('/tabel-sensor', [TabelSensorController::class, 'index'])->name('tabel-sensor');
Route::get('/ph-tabel', [SensorController::class, 'phtabel'])->name('phtabel');

