<?php

namespace App\Http\Controllers;
use App\Models\Product; // Sesuaikan dengan namespace yang benar jika diperlukan
use App\Models\Cart;


use Illuminate\Http\Request;

class TroliController extends Controller
{
    public function index()
    {
        // Misalnya, mengambil semua produk dari model Product
        $carts = Cart::all();
        // dd($carts);
        return view('troli.troli', ['carts' => $carts]);
    }
    

    public function update(Request $request, $id)
    {
        // Lakukan validasi input
        $request->validate([
            'jumlah' => 'required|integer|min:1', // Contoh: validasi jumlah harus bilangan bulat positif
        ]);

        // Lakukan logika untuk mengupdate jumlah produk dalam troli
        // Contoh: Simpan ke database atau sesuai kebutuhan aplikasi Anda

        // Redirect kembali ke halaman troli
        return redirect()->route('troli.update');
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
        $cart->qty = 1; // Atau sesuaikan dengan nilai yang diinginkan
        $cart->save();

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke troli.');
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
