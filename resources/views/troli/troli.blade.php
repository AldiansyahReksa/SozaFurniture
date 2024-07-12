@extends('layouts.Ltroli')

@section('title', 'Troli')

@section('content')
<div class="troli-container">
    <h1>Shopping Cart</h1>
        <table class="troli-table">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Detail Produk</th>
                <th>Harga</th>
                <th>Qty</th>
                <th class="total-column">Total</th>
                <th class="action-column">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach ($carts as $cart)
                @php
                    $total = $cart->product->product_price * $cart->qty;
                    $grandTotal += $total;
                @endphp
                <tr data-id="{{ $cart->id }}">
                    <td>{{ $cart->product->product_name }}</td>
                    <td>
                        Brand: {{ $cart->product->brand }}<br>
                        Tipe: {{ $cart->product->type }}<br>
                        {{ $cart->product->product_details }}
                    </td>
                    <td>{{ $cart->product->product_price }}</td>
                    <td>
                        <input type="number" value="{{ $cart->qty }}" class="qty-input" data-price="{{ $cart->product->product_price }}" maxlength="3" min="1" max="999">
                    </td>
                    <td class="total-column">
                        <span class="total">{{ $total }}</span>
                    </td>
                    <td class="action-column">
                        <button class="delete-btn">Hapus</button>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4">Total Keseluruhan</td>
                <td class="total-column">
                    <span id="grandTotal">{{ $grandTotal }}</span>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <a href="">
        <button>Checkout</button>
    </a>
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
        window.location.href = "{{ route('pembayaran.form') }}";
    }

    document.querySelectorAll('.qty-input').forEach(input => {
        input.addEventListener('input', function() {
            const price = parseFloat(this.dataset.price);
            const qty = parseInt(this.value);
            const total = price * qty;

            this.closest('tr').querySelector('.total').textContent = total.toFixed(2);
            updateGrandTotal();
        });
    });

    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const id = row.dataset.id;

            fetch(`/troli/delete/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    row.remove();
                    updateGrandTotal();
                }
            });
        });
    });

    function updateGrandTotal() {
        let grandTotal = 0;
        document.querySelectorAll('.total').forEach(total => {
            grandTotal += parseFloat(total.textContent);
        });
        document.getElementById('grandTotal').textContent = grandTotal.toFixed(2);
    }
</script>
@endsection
