<?php

namespace App\Http\Controllers;
use App\Models\Product; // Sesuaikan dengan namespace yang benar jika diperlukan


use Illuminate\Http\Request;

class TroliController extends Controller
{
    public function index()
    {
        // Misalnya, mengambil semua produk dari model Product
        $produk = Product::all();
    
        return view('troli.troli', ['produk' => $produk]);
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

    public function delete($id)
    {
        // Lakukan logika untuk menghapus produk dari troli
        // Contoh: Simpan ke database atau sesuai kebutuhan aplikasi Anda

        // Redirect kembali ke halaman troli
        return redirect()->route('troli.destroy');
    }
}
