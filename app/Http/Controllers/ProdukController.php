<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('produk.Produk', compact('products'));
    }
}
