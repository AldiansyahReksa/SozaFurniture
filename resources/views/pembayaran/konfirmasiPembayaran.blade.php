@extends('layouts.Lpembayaran')

@section('title', 'Surya Murah - Konfirmasi Pembayaran')

@section('content')
<div class="container">
    <h1>Konfirmasi Pembayaran</h1>
    <table class="pembayaran-table">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $grandTotal = 0;
            @endphp
            @foreach ($products as $cart)
            @php
                $total = $cart->product->product_price * $cart->qty;
                $grandTotal += $total;
            @endphp
                <tr>
                    <td>{{ $cart->product->product_name }}</td>
                    <td>
                        Brand : {{ $cart->product->brand }}<br>
                        Tipe: {{ $cart->product->type }}<br>
                        {{ $cart->product->product_details }}
                    </td>
                    <td>{{ $cart->product->product_price }}</td>
                    <td>{{ $cart->qty }}</td>
                    <td>{{ $total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <h3>Total : {{ $grandTotal }} <br> Metode Pembayaran : Transfer Bank {{ $method }}</h3>
    @if ($method == 'BCA')
        <p>No. Rekening BCA: 1234567890</p>
    @elseif ($method == 'BRI')
        <p>No. Rekening BRI: 0987654321</p>
    @elseif ($method == 'Mandiri')
        <p>Silahhkan transfer ke No. Rekening Mandiri: 1122334455 sejumlah Rp. {{$grandTotal}}</p>
    @elseif ($method == 'COD')
        <p></p>
    @endif

    <h3>Detail Pengiriman</h3>
    <p>Nama: {{ session('formData.nama') }}</p>
    <p>WhatsApp: {{ session('formData.whatsapp') }}</p>
    <p>Email: {{ session('formData.email') }}</p>
    <p>Alamat: {{ session('formData.alamat') }}</p>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <input type="hidden" name="method" value="{{ $method }}">
        <input type="hidden" name="grandTotal" value="{{ $grandTotal }}">
        <button type="submit" class="btn btn-primary">Buat Pesanan</button>
    </form>
    <button class="back-button" onclick="window.location.href='{{ url('/') }}'">Kembali</button>
</div>
@endsection