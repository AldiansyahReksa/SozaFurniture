<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $products = Product::where('product_name', 'LIKE', "%{$query}%")
                ->orWhere('brand', 'LIKE', "%{$query}%")
                ->orWhere('type', 'LIKE', "%{$query}%")
                ->get();
        } else {
            $products = Product::all();
        }

        return view('produk.Produk', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, 'Produk tidak ditemukan');
        }

        return view('produk.Detail', compact('product'));
    }
}
