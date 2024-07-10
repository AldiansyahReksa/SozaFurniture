<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class PembayaranController extends Controller
{
    public function index()
    {
        $products = Cart::all();
        return view('pembayaran.pembayaran', ['products' => $products]);
    }
}
