@extends('layouts.Lpembayaran')

@section('title', 'Surya Murah - Alamat Pengiriman')

@section('content')
<div class="alamat-container">
    <h1>Alamat Pengiriman</h1>
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
            <button type="button" class="back-button" onclick="window.location.href='{{ route('troli.index') }}'">Kembali</button>
            <button type="submit" class="next-button">Selanjutnya</button>
        </div>
    </form>
</div>


<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #ecf0f1;
        --accent-color: #e74c3c;
        --text-color: #34495e;
    }
    .alamat-container {
        max-width: 800px;
        margin: 2em auto;
        padding: 2em;
        background-color: var(--secondary-color);
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 13%;
        margin-top: 5%;
    }

    h1 {
        font-size: 2em;
        color: var(--primary-color);
        margin-bottom: 1em;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1.5em;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 0.5em;
    }

    .form-group input {
        width: 100%;
        padding: 0.75em;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus {
        border-color: var(--primary-color);
        outline: none;
    }

    .button-group {
        display: flex;
        justify-content: space-between;
    }

    .button-group button {
        flex: 1;
        padding: 1em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
        transition: background-color 0.3s ease;
        margin: 0 5px;
    }

    .back-button {
        background-color: var(--primary-color);
        color: #fff;
    }

    .back-button:hover {
        background-color: #c0392b;
    }

    .next-button {
        background-color: var(--primary-color);
        color: #fff;
    }

    .next-button:hover {
        background-color: #c0392b;
    }
</style>
@endsection
