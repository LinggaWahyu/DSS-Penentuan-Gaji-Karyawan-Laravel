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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/penilaian/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('penilaian');
    Route::post('/penilaian/{id}', [App\Http\Controllers\HomeController::class, 'save'])->name('simpan');

    Route::get('/kriteria', [App\Http\Controllers\KriteriaController::class, 'index'])->name('kriteria');

    Route::get('/nilai/{id}', [App\Http\Controllers\MatriksController::class, 'index_nilai'])->name('nilai');
    Route::post('/nilai', [App\Http\Controllers\MatriksController::class, 'show_nilai'])->name('nilai-kategori');

    Route::get('/normalisasi/{id}', [App\Http\Controllers\MatriksController::class, 'index_normalisasi'])->name('normalisasi');
    Route::post('/normalisasi', [App\Http\Controllers\MatriksController::class, 'show_normalisasi'])->name('normalisasi-kategori');

    Route::get('/kali-bobot/{id}', [App\Http\Controllers\MatriksController::class, 'index_kali_bobot'])->name('kali-bobot');
    Route::post('/kali-bobot', [App\Http\Controllers\MatriksController::class, 'show_kali_bobot'])->name('kali-bobot-kategori');

    Route::get('/total-bobot/{id}', [App\Http\Controllers\MatriksController::class, 'index_total_bobot'])->name('total-bobot');
    Route::post('/total-bobot', [App\Http\Controllers\MatriksController::class, 'show_total_bobot'])->name('total-bobot-kategori');

    Route::get('/ranking/{id}', [App\Http\Controllers\MatriksController::class, 'index_ranking'])->name('ranking');
    Route::post('/ranking', [App\Http\Controllers\MatriksController::class, 'show_ranking'])->name('ranking-kategori');

    Route::get('/data-alternatif', [App\Http\Controllers\Admin\AlternatifController::class, 'index'])->name('data-alternatif');  
});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', [App\Http\Controllers\Admin\AlternatifController::class, 'index'])->name('dashoard');
        Route::resource('alternatif', AlternatifController::class);
        Route::resource('karyawan', KaryawanController::class);
        Route::resource('skala', SkalaController::class);
        Route::resource('kriteria', KriteriaController::class);
        Route::resource('subkriteria', SubkriteriaController::class);
    });

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
