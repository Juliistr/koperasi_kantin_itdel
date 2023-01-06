<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukPulsaController;
use App\Http\Controllers\RequestRoomController;
use App\Http\Controllers\ProdukKantinController;
use App\Http\Controllers\ProdukKoperasiController;
use App\Http\Controllers\ProdukKantinAdminController;

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
    return redirect()->route('login');
});
Route::get('/login', [AuthAdminController::class, 'index'])->name('login');
Route::post('/login', [AuthAdminController::class, 'do_login'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Credits
Route::resource('credits', CreditController::class);

// Products
Route::resource('products', ProductController::class);

Route::resource('produkkantin', ProdukKantinAdminController::class);

// Rooms
Route::resource('rooms', RoomController::class);

// Orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders/{id}/process', [OrderController::class, 'process'])->name('orders.process');
Route::get('/orders/{id}/deny', [OrderController::class, 'deny'])->name('orders.deny');

// Request Rooms
Route::get('/request-rooms', [RequestRoomController::class, 'index'])->name('request-rooms.index');
Route::get('/request-rooms/{id}', [RequestRoomController::class, 'show'])->name('request-rooms.show');
Route::get('/request-rooms/{id}/approve', [RequestRoomController::class, 'approve'])->name('request-rooms.approve');
Route::get('/request-rooms/{id}/reject', [RequestRoomController::class, 'reject'])->name('request-rooms.reject');

Route::get('/logout', [AuthAdminController::class, 'logout'])->name('logout');










Route::get('auth',[AuthController::class, 'index'])->name('auth.index');
Route::post('/api/login',[AuthController::class, 'do_login'])->name('auth.login');
Route::post('/api/register',[AuthController::class, 'do_register'])->name('auth.register');

Route::get('/api/produkpulsa', [ProdukPulsaController::class, 'pulsa'])->name('produkpulsa');
Route::get('/api/produkpulsa', [ProdukPulsaController::class, 'pulsa'])->name('produkpulsa');
Route::get('/api/produkkantin', [ProdukKantinController::class, 'kantin'])->name('produkkantin');
Route::get('/api/produkkantinterbaru', [ProdukKantinController::class, 'produkkantinterbaru'])->name('produkkantinterbaru');
Route::get('/api/produkkoperasi', [ProdukKoperasiController::class, 'koperasi'])->name('produkkoperasi');
Route::get('/api/ruangan', [RuanganController::class, 'ruangan'])->name('ruangan');

