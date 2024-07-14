@extends('layouts.Lpembayaran')

@section('title', 'Surya Murah - Karpet Berkualitas')

@section('content')
<div class="pembayaran-container">
    <button class="back-button" onclick="window.location.href='{{ url('/') }}'">Kembali</button>
    <h1>Pembayaran</h1>
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
                        Brand: {{ $cart->product->brand }}<br>
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
        <p>Total : <strong>{{ $grandTotal }}</strong></p>
    </div>
    <h2>Metode Pembayaran</h2>
    <div class="payment-methods">
        <button id="pay-button" class="payment-button">Pilih Metode Pembayaran</button>
    </div>
</div>

<div id="snap-container"></div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.clientKey') }}"></script>

<script type="text/javascript">
    document.getElementById('pay-button').addEventListener('click', function () {
        fetch('{{ route("pembayaran.snap.token") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                // Kirim data yang diperlukan, misalnya grand total
                grandTotal: {{ $grandTotal }}
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.snapToken) {
                // Trigger snap popup
                window.snap.embed(data.snapToken, {
                    embedId: 'snap-container',
                    onSuccess: function (result) {
                        alert("payment success!");
                        console.log(result);
                    },
                    onPending: function (result) {
                        alert("waiting your payment!");
                        console.log(result);
                    },
                    onError: function (result) {
                        alert("payment failed!");
                        console.log(result);
                    },
                    onClose: function () {
                        alert('you closed the popup without finishing the payment');
                    }
                });
            } else {
                alert("Failed to get snap token.");
                console.error(data);
            }
        })
        .catch(error => {
            alert("An error occurred while fetching the snap token.");
            console.error(error);
        });
    });
</script>


@endsection