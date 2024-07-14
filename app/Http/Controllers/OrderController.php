<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function buatOrder(Request $request)
    {
        $carts = Cart::all();
        $formData = $request->session()->get('formData');

        $method = $request->input('method');
        $grandTotal = $request->input('grandTotal');

        // Buat pesanan baru
        $order = new Order();
        $order->nama = $formData['nama'];
        $order->whatsapp = $formData['whatsapp'];
        $order->email = $formData['email'];
        $order->alamat = $formData['alamat'];
        $order->payment_method = $method;
        $order->total_amount = $grandTotal;
        $order->save();

        // Salin item keranjang ke detail pesanan
        foreach ($carts as $cart) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $cart->product_id;
            $orderItem->qty = $cart->qty;
            $orderItem->price = $cart->product->product_price;
            $orderItem->save();
        }

        // Hapus item dari keranjang
        Cart::truncate();

        return redirect()->route('order.success', ['order' => $order->id]);
    }

    public function success(Order $order)
{
    return view('order.success', compact('order'));
}
}
