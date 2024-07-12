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

    public function store(Request $request)
    {
        // Handle form submission
        $validated = $request->validate([
            'whatsapp' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        // Store the validated data in the session
        $request->session()->put('formData', $validated);

        // Redirect to the payment page
        return redirect()->route('pembayaran.index');
    }

    public function form()
    {
        return view('formpembayaran.formpembayaran');
    }
}
