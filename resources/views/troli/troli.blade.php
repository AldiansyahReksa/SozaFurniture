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
        margin-bottom: 37%;
    }

    h1 {
        font-size: 2em;
        color: var(--primary-color);
        margin-bottom: 1em;
        text-align: center;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    .troli-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2em;
        min-width: 600px;
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

    @media (max-width: 768px) {
        .troli-table th, .troli-table td {
            padding: 0.5em;
            font-size: 0.9em;
        }

        .troli-table img {
            max-width: 60px;
        }

        .troli-table input[type="number"] {
            width: 50px;
        }

        .troli-container button {
            width: 100%;
            margin-bottom: 1em;
        }

        .action-column {
            display: flex;
            justify-content: center;
        }
    }
</style>

<!-- Include FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="troli-container">
    <h1>Shopping Cart</h1>
    <div class="table-wrapper">
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
                            <button class="delete-btn">
                                <i class="fas fa-trash"></i>
                            </button>
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
    </div>
    <button onclick="window.location.href='{{ url('/produk') }}'">Kembali</button>
    <button onclick="checkout()">Check out</button>
</div>

<script>
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

    document.getElementById('checkout-button').addEventListener('click', function(event) {
        event.preventDefault();

        const cartItems = [];
        document.querySelectorAll('.qty-input').forEach(input => {
            const id = input.closest('tr').dataset.id;
            const qty = parseInt(input.value);

            cartItems.push({ id: id, qty: qty });
        });

        fetch('{{ route("checkout.updateQty") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ cartItems: cartItems })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = '{{ route("pembayaran.form") }}';
            } else {
                alert('Gagal memperbarui qty. Silakan coba lagi.');
            }
        });
    });
</script>
@endsection
