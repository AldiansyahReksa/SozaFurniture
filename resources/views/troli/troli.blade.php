@extends('layouts.Ltroli')

@section('title', 'Troli')

@section('content')
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
                    <img src="{{ asset('images/Karpet.jpg' . $item['gambar']) }}" alt="{{ $item['nama'] }}" width="100">
                    <p>{{ $item['nama'] }}</p>
                </td>
                <td>Rp. {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('troli.update', $item['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="jumlah" value="{{ $item['jumlah'] }}" min="1">
                        <button type="submit">Update</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('troli.destroy', $item['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button onclick="window.location.href='{{ url('/') }}'">Kembali</button>
    <button onclick="checkout()">Check out</button>
</div>

<script>
    function toggleSelectAll(source) {
        const checkboxes = document.querySelectorAll('.troli-table tbody input[type="checkbox"]');
        for (const checkbox of checkboxes) {
            checkbox.checked = source.checked;
        }
    }

    function checkout() {
        // Logika checkout
        alert('Check out berhasil!');
    }
</script>
@endsection
