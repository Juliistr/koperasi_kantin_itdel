<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\ProdukPulsaController;
use App\Http\Controllers\ProdukKantinController;
use App\Http\Controllers\ProdukKoperasiController;

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


Route::get('/produkpulsa', [ProdukPulsaController::class, 'pulsa'])->name('produkpulsa');
Route::get('/produkkantin', [ProdukKantinController::class, 'kantin'])->name('produkkantin');
Route::get('/produkkoperasi', [ProdukKoperasiController::class, 'koperasi'])->name('produkkoperasi');
Route::get('/ruangan', [RuanganController::class, 'ruangan'])->name('ruangan');

