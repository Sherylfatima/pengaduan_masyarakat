<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\AuthController;
use App\Htpp\Controllers\GenerateReportController;
use App\Http\Controllers\KategoriPengaduanController;
use App\Http\Controllers\LaporanMasukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute untuk tamu (guest)
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/tentangkami', function () {
        return view('tentangkami');
    });
    Route::get('/ajukan', function () {
        return view('ajukan');
    });

    // Login dan Register
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/store/login', [AuthController::class, 'storelogin']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/store/register', [AuthController::class, 'storeregister']);
});

// Rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    // Dashboard Admin

    // Halaman masyarakat
    Route::get('/masyarakat', [MasyarakatController::class, 'index']);

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/pegawai', PegawaiController::class);
Route::resource('masyarakat', MasyarakatController::class);
Route::resource('kategori', KategoriPengaduanController::class);
Route::get('/laporanmasuk', [LaporanMasukController::class, 'index']);

