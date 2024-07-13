@extends('layouts.Lpembayaran')

@section('title', 'Surya Murah - Alamat Pengiriman')

@section('content')
<div class="alamat-container">
    <h1>Alamat</h1>
    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text" id="whatsapp" name="whatsapp" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat Lengkap</label>
            <input type="text" id="alamat" name="alamat" placeholder="cth : Kp. Babakan Cijeruk RT 02 RW 13" required>
        </div>
        <div class="button-group">
            <button type="button" class="back-button" onclick="window.location.href='{{ url('/') }}'">Kembali</button>
            <button type="submit" class="next-button">Selanjutnya</button>
        </div>
    </form>
</div>
@endsection
