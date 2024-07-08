<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\TroliController;
use App\Http\Controllers\PembayaranController;

Route::get('/', [HalamanUtamaController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'detail'])->name('product.detail');
Route::get('/ulasan', [UlasanController::class, 'index']);
Route::get('/troli', [TroliController::class, 'index']);
Route::get('/pembayaran', [PembayaranController::class, 'index']);
