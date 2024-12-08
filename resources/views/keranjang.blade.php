@extends('layout')
@section('container')
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        .cart-container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .cart-container ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .cart-container li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            color: #555;
        }

        #total-price {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
            text-align: right;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .buttons button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .buttons button:hover {
            background-color: #218838;
        }

        .buttons .back-btn {
            background-color: #007bff;
        }

        .buttons .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Keranjang</h1>
    
    <div class="cart-container">
        <ul id="cart-list"></ul>
        <p id="total-price">Total: Rp0</p>
        <div class="buttons">
            <a href="shop" class="back-btn" style="text-decoration: none;">
                <button class="back-btn">Kembali ke Shop</button>
            </a>
            <button onclick="checkout()">Checkout</button>
        </div>
    </div>

    <script>
        // Muat produk dari LocalStorage
        function loadCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartList = document.getElementById("cart-list");
            const totalPriceElement = document.getElementById("total-price");

            cartList.innerHTML = "";
            let totalPrice = 0;

            cart.forEach(item => {
                const li = document.createElement("li");
                li.textContent = `${item.name} - Rp${item.price.toLocaleString()}`;
                cartList.appendChild(li);
                totalPrice += item.price;
            });

            totalPriceElement.textContent = `Total: Rp${totalPrice.toLocaleString()}`;
        }

        // Checkout: Kosongkan keranjang dan muat ulang halaman
        function checkout() {
            const confirmation = confirm("Apakah Anda yakin ingin checkout?");
            if (confirmation) {
                localStorage.removeItem('cart');
                alert("Checkout berhasil! Terima kasih atas pembelian Anda.");
                location.reload(); // Memuat ulang halaman
            }
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = loadCart;
    </script>
@endsection