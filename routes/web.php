<?php

use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TroliController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [HalamanUtamaController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'detail'])->name('produk.detail');
Route::get('/troli', [TroliController::class, 'index'])->name('troli.index');
Route::put('/troli/{id}', [TroliController::class, 'update'])->name('troli.update');
Route::delete('/troli/delete/{id}', [TroliController::class, 'destroy'])->name('troli.delete');
Route::post('/troli/tambah/{id}', [TroliController::class, 'tambahKeTroli'])->name('troli.tambah');
Route::post('/troli/beli_sekarang/{id}', [TroliController::class, 'beliSekarang'])->name('troli.beli_sekarang');
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/form-pembayaran', [PembayaranController::class, 'form'])->name('pembayaran.form');
Route::get('/konfirmasi-pembayaran', [PembayaranController::class, 'indexKonfirmasi'])->name('pembayaran.konfirmasi');
Route::post('/pembayaran/snap-token', [PembayaranController::class, 'snapToken'])->name('pembayaran.snap.token');

Route::post('/snap-token', [PembayaranController::class, 'snapToken'])->name('pembayaran.snap.token');
Route::post('/troli/update-qty', [TroliController::class, 'updateQty'])->name('checkout.updateQty');
Route::get('/checkout/payment', [CheckoutController::class, 'paymentPage'])->name('checkout.payment');
Route::post('/orders', [OrderController::class, 'buatOrder'])->name('orders.store');
Route::get('/order/success/{order}', [OrderController::class, 'success'])->name('order.success');

