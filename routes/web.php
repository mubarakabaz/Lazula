<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BlogTutorialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KalibrasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SensorController;
use App\Models\Sensor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;

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
Route::get('/blog/{slug}', [ArtikelController::class, 'blog'])->name('blog');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::resource('artikel', ArtikelController::class)->middleware('auth');
Route::resource('kategori', KategoriController::class)->middleware('auth');
Route::resource('tutorial', BlogTutorialController::class)->middleware('auth');

Route::get('/rekap', [SensorController::class, 'rekap'])->name('rekap')->middleware('auth');
Route::get('/rekap/cetak', [SensorController::class, 'cetak']);

Route::get('/data-sensor', [SensorController::class, 'data_sensor'])->name('data-sensor')->middleware('auth');
Route::get('/data-pompa', [SensorController::class, 'data_pompa'])->name('data-pompa')->middleware('auth');

Route::resource('kalibrasi', KalibrasiController::class)->middleware('auth');

Auth::routes();

Route::get('/input', [SensorController::class, 'input']);

