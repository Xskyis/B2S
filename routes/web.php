<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RincianBabController;
use App\Http\Controllers\RincianController;
use App\Http\Controllers\TambahMateriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->middleware('guest');

Route::get('/mapel/{id}/rincian', [RincianController::class, 'index'])->name('mapel.rincian');
Route::get('/rincian-bab/{id}', [RincianBabController::class, 'show'])->name('rincian_bab.show');

Route::post('login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::resource('login', LoginController::class)->except('show');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('tambahMateri', [TambahMateriController::class, 'index'])->name('tambahMateri');
    Route::delete('/bab/{id}', [RincianBabController::class, 'destroy'])->name('hapus_bab');
    Route::post('prosesTambahMateri', [TambahMateriController::class, 'store'])->name('tambahMateri.store');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});