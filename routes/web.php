<?php
use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    $products = [
        (object) ['name' => 'Nama Produk 1', 'price' => 'Harga 1', 'image' => 'path/to/image1.jpg'],
        (object) ['name' => 'Nama Produk 2', 'price' => 'Harga 2', 'image' => 'path/to/image2.jpg'],
        (object) ['name' => 'Nama Produk 3', 'price' => 'Harga 3', 'image' => 'path/to/image3.jpg'],
        (object) ['name' => 'Nama Produk 4', 'price' => 'Harga 4', 'image' => 'path/to/image4.jpg'],
        (object) ['name' => 'Nama Produk 5', 'price' => 'Harga 5', 'image' => 'path/to/image5.jpg'],
        (object) ['name' => 'Nama Produk 6', 'price' => 'Harga 6', 'image' => 'path/to/image6.jpg'],
        // tambahkan produk lainnya sesuai kebutuhan
    ];
    return view('products', compact('products'));
});

Route::get('/all-products', function () {
    $allProducts = [
        // Semua produk yang akan ditampilkan pada halaman 'Lihat Semua Produk'
    ];
    return view('all-products', compact('allProducts'));
});

Route::get('/Troli', function () {
    return view('Troli');
});

