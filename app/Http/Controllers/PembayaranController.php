<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Midtrans\Config;
use Midtrans\Snap;

class PembayaranController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');
    }

    public function index()
    {
        $products = Cart::all();
        return view('pembayaran.pembayaran', ['products' => $products]);
    }

    public function indexKonfirmasi(Request $request)
    {
        $products = Cart::all();
        $method = $request->input('method');
        return view('pembayaran.konfirmasiPembayaran', compact('products', 'method'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'whatsapp' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        $request->session()->put('formData', $validated);

        return redirect()->route('pembayaran.index');
    }

    // Menambahkan metode form
    public function form()
    {
        return view('formpembayaran.formpembayaran');
    }

    public function snapToken(Request $request)
    {
        $grandTotal = $request->input('grandTotal'); // Dapatkan total dari permintaan
    
        // Define your transaction details
        $params = [
            'transaction_details' => [
                'order_id' => uniqid(), // Generate a unique order ID here
                'gross_amount' => $grandTotal,
            ],
            'customer_details' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'phone' => '08123456789',
            ],
        ];
    
        try {
            // Get Snap Token
            $snapToken = Snap::getSnapToken($params);
    
            // Return the Snap Token as JSON response
            return response()->json(['snapToken' => $snapToken]);
        } catch (\Exception $e) {
            // Handle any errors that occur during token retrieval
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
}
