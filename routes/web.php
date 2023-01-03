<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\ProdukPulsaController;
use App\Http\Controllers\ProdukKantinController;
use App\Http\Controllers\ProdukKoperasiController;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});
Route::get('auth',[AuthController::class, 'index'])->name('auth.index');
Route::post('/api/login',[AuthController::class, 'do_login'])->name('auth.login');
Route::post('/api/register',[AuthController::class, 'do_register'])->name('auth.register');

Route::get('/api/produkpulsa', [ProdukPulsaController::class, 'pulsa'])->name('produkpulsa');
Route::get('/api/produkpulsa', [ProdukPulsaController::class, 'pulsa'])->name('produkpulsa');
Route::get('/api/produkkantin', [ProdukKantinController::class, 'kantin'])->name('produkkantin');
Route::get('/api/produkkantinterbaru', [ProdukKantinController::class, 'produkkantinterbaru'])->name('produkkantinterbaru');
Route::get('/api/produkkoperasi', [ProdukKoperasiController::class, 'koperasi'])->name('produkkoperasi');
Route::get('/api/ruangan', [RuanganController::class, 'ruangan'])->name('ruangan');

