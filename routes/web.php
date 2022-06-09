<?php

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

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');

Route::get('/Resep', [\App\Http\Controllers\ResepController::class, 'index'])->name('resep');

Route::get('/Artikel', [\App\Http\Controllers\ArtikelController::class, 'index'])->name('artikel');

Route::get('/Pembuka', [\App\Http\Controllers\ResepController::class, 'pembuka'])->name('pembuka');
Route::get('/Utama', [\App\Http\Controllers\ResepController::class, 'utama'])->name('utama');
Route::get('/Penutup', [\App\Http\Controllers\ResepController::class, 'penutup'])->name('penutup');
Route::get('/Arab', [\App\Http\Controllers\ResepController::class, 'arab'])->name('arab');
Route::get('/India', [\App\Http\Controllers\ResepController::class, 'india'])->name('india');
Route::get('/Indonesia', [\App\Http\Controllers\ResepController::class, 'indonesia'])->name('indonesia');
Route::get('/Korea', [\App\Http\Controllers\ResepController::class, 'korea'])->name('korea');
Route::get('/Mesir', [\App\Http\Controllers\ResepController::class, 'mesir'])->name('mesir');
Route::get('/China', [\App\Http\Controllers\ResepController::class, 'china'])->name('china');
Route::get('/Jepang', [\App\Http\Controllers\ResepController::class, 'jepang'])->name('jepang');
Route::get('/Thailand', [\App\Http\Controllers\ResepController::class, 'thailand'])->name('thailand');

Route::get('/TambahResep', [\App\Http\Controllers\ResepController::class, 'add'])->name('resep.add');
Route::post('/TambahResp', [\App\Http\Controllers\ResepController::class, 'create'])->name('resep.create');

Route::get('/Resep/{resep}',[\App\Http\Controllers\ResepController::class, 'show'])->name('resep.show');

Route::get('/Artikel/{artikel}',[\App\Http\Controllers\ArtikelController::class, 'show'])->name('artikel.show');


