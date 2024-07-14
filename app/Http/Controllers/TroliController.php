<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class TroliController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return view('troli.troli', ['carts' => $carts]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:1',
        ]);

        $cart = Cart::find($id);
        if ($cart) {
            $cart->qty = $request->input('jumlah');
            $cart->save();
        }

        return redirect()->route('troli.index');
    }

    public function destroy($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function tambahKeTroli(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = new Cart();
        $cart->product_id = $product->id;
        $cart->qty = 1;
        $cart->save();

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke troli.');
    }

    public function beliSekarang(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = new Cart();
        $cart->product_id = $product->id;
        $cart->qty = 1;
        $cart->save();

        return redirect()->route('troli.index')->with('success', 'Produk berhasil ditambahkan ke troli.');
    }

    public function updateQty(Request $request)
    {
        $cartItems = $request->input('cartItems');

        foreach ($cartItems as $item) {
            $cart = Cart::find($item['id']);
            if ($cart) {
                $cart->qty = $item['qty'];
                $cart->save();
            }
        }

        return response()->json(['success' => true]);
    }
}
