<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;

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

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});
Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::get('/ajukan', function () {
    return view('ajukan');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});

// // Halaman dashboard admin
// Route::get('/admin', [DashboardController::class, 'index']);

// Halaman masyarakat
Route::get('/masyarakat', [MasyarakatController::class, 'index']);
