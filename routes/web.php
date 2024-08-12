<?php

use App\Http\Controllers\DashboardAntrianController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardLaporanController;
use App\Http\Controllers\FrontAntrianController;
use App\Http\Controllers\DashboardPenggunaController;

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

Route::get('/', function () {
    return view('home');
});

Route::resource('antrian', FrontAntrianController::class);
Route::get('livewire/antrian/cetakAntrian', [FrontAntrianController::class, 'cetakAntrian'])->name('cetakAntrian');


Auth::routes();
Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'CheckRole:admin'], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('redirectifauthenticated');
        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::get('dashboard/antrian/nonbpjs', [DashboardAntrianController::class, 'indexPoliUmum']);
        Route::get('dashboard/antrian/bpjs', [DashboardAntrianController::class, 'indexPoliGigi']);
        Route::get('dashboard/antrian/darurat', [DashboardAntrianController::class, 'indexPoliTht']);

        Route::get('dashboard/pengguna/pengguna', [DashboardPenggunaController::class, 'indexPengguna']);
        Route::get('dashboard/laporan/index', [DashboardLaporanController::class, 'index']);
        Route::get('livewire/dashboard/laporan/cetakLaporan', [DashboardLaporanController::class, 'cetakLaporan'])->name('cetakLaporan');
    });
});
