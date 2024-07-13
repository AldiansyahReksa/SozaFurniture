@extends('layouts.Lpembayaran')

@section('title', 'Surya Murah - Konfirmasi Pembayaran')

@section('content')
<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #ecf0f1;
        --accent-color: #e74c3c;
    }
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 13%;
        margin-top: 5%;
    }

    .container h1,
    .container h3 {
        text-align: center;
        color: #333;
    }

    .pembayaran-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .pembayaran-table th,
    .pembayaran-table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .pembayaran-table th {
        background-color: #f2f2f2;
        color: #333;
    }

    .total-container {
        text-align: right;
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 18px;
    }

    .rekening-container p {
        font-size: 16px;
        color: #333;
        text-align: center;
    }

    .detail-pengiriman {
        margin-bottom: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .detail-pengiriman h3 {
        margin-bottom: 15px;
        color: #007bff;
        text-align: left;
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .detail-item p {
        font-size: 16px;
        color: #333;
        margin: 0;
    }

    .detail-label {
        font-weight: bold;
        width: 30%;
    }

    .detail-value {
        width: 70%;
        text-align: right;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .btn-primary, .back-button {
        flex: 1;
        padding: 10px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
        transition: background-color 0.3s ease;
        margin: 0 10px;
    }

    .btn-primary:hover, .back-button:hover {
        background-color:var(--accent-color);
    }

    .back-button {
        background-color: var(--primary-color);
        width: 5%;
    }

    .back-button:hover {
        background-color: var(--accent-color);
    }
</style>

{{-- <div class="container"> --}}
    <button type="button" class="back-button" onclick="window.location.href='{{ url('/') }}'">Kembali</button>

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

    <div class="total-container">
        <p>Total : Rp. {{ number_format($grandTotal, 0, ',', '.') }}</p>
    </div>

    <h3>Metode Pembayaran : Transfer Bank {{ $method }}</h3>
    <div class="rekening-container">
        @if ($method == 'BCA')
            <p>No. Rekening BCA: 1234567890</p>
        @elseif ($method == 'BRI')
            <p>No. Rekening BRI: 0987654321</p>
        @elseif ($method == 'Mandiri')
            <p>Silakan transfer ke No. Rekening Mandiri: 1122334455 sejumlah Rp. {{ number_format($grandTotal, 0, ',', '.') }}</p>
        @elseif ($method == 'COD')
            <p>Pembayaran akan dilakukan saat barang diterima (COD)</p>
        @endif
    </div>

    <div class="detail-pengiriman">
        <h3>Detail Pengirim</h3>
        <div class="detail-item">
            <p class="detail-label">Nama:</p>
            <p class="detail-value">{{ session('formData.nama') }}</p>
        </div>
        <div class="detail-item">
            <p class="detail-label">WhatsApp:</p>
            <p class="detail-value">{{ session('formData.whatsapp') }}</p>
        </div>
        <div class="detail-item">
            <p class="detail-label">Email:</p>
            <p class="detail-value">{{ session('formData.email') }}</p>
        </div>
        <div class="detail-item">
            <p class="detail-label">Alamat:</p>
            <p class="detail-value">{{ session('formData.alamat') }}</p>
        </div>
    </div>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <input type="hidden" name="method" value="{{ $method }}">
        <input type="hidden" name="grandTotal" value="{{ $grandTotal }}">
        <div class="button-container">
            <button type="submit" class="btn-primary">Buat Pesanan</button>
            
        </div>
    </form>
{{-- </div> --}}
@endsection
