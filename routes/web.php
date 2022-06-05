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

Route::get('/TambahResep', function () {
    return view('frontend.create.create');
});

Route::get('/Resep/{resep}',[\App\Http\Controllers\ResepController::class, 'show'])->name('resep.show');


