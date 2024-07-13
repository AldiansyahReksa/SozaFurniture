@extends('layouts.Ltroli')

@section('title', 'Troli')

@section('content')
<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #ecf0f1;
        --accent-color: #e74c3c;
        --text-color: #34495e;
    }

    .troli-container {
        max-width: 1200px;
        margin: 2em auto;
        padding: 2em;
        background-color: var(--secondary-color);
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2em;
        color: var(--primary-color);
        margin-bottom: 1em;
        text-align: center;
    }

    .troli-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2em;
    }

    .troli-table th, .troli-table td {
        padding: 1em;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    .troli-table th {
        background-color: var(--primary-color);
        color: var(--secondary-color);
    }

    .troli-table td {
        vertical-align: middle;
    }

    .troli-table img {
        border-radius: 5px;
        max-width: 100px;
        height: auto;
    }

    .troli-table input[type="number"] {
        width: 60px;
        padding: 0.5em;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
    }

    .icon-button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0.5em;
        transition: color 0.3s ease;
    }

    .icon-button.update-icon {
        color: var(--secondary-color);
    }

    .icon-button.update-icon:hover {
        color: #2980b9;
    }

    .icon-button.delete-icon {
        color: var(--secondary-color);
    }

    .icon-button.delete-icon:hover {
        color: #c0392b;
    }

    .troli-container button {
        background-color: var(--primary-color);
        color: #fff;
        border: none;
        padding: 1em 2em;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-right: 1em;
    }

    .troli-container button:hover {
        background-color: #34495e;
    }
</style>

<!-- Include FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="troli-container">
    <h1>Shopping Cart</h1>
    <table class="troli-table">
        <thead>
            <tr>
                <th><input type="checkbox" onclick="toggleSelectAll(this)"></th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $item)
            <tr>
                <td><input type="checkbox"></td>
                <td>
                    <img src="{{ asset('images/Karpet.jpg' . $item['gambar']) }}" alt="{{ $item['nama'] }}">
                    <p>{{ $item['nama'] }}</p>
                </td>
                <td>Rp. {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('troli.update', $item['id']) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <input type="number" name="jumlah" value="{{ $item['jumlah'] }}" min="1">
                        <button type="submit" class="icon-button update-icon"><i class="fas fa-sync-alt"></i></button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('troli.destroy', $item['id']) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="icon-button delete-icon"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="button-group">
        <button onclick="window.location.href='{{ url('/') }}'">Kembali</button>
        <button onclick="checkout()">Check out</button>
    </div>
</div>

<script>
    function toggleSelectAll(source) {
        const checkboxes = document.querySelectorAll('.troli-table tbody input[type="checkbox"]');
        for (const checkbox of checkboxes) {
            checkbox.checked = source.checked;
        }
    }

    function checkout() {
        window.location.href = "{{ route('pembayaran.form') }}";
    }
</script>
@endsection
