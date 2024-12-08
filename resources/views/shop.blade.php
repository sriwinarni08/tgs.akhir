<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skygie</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/puter.css') }}">
    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet">

</head>
<body>
<header class="header">
<img src="images/logo.png" class="h-20" alt="Logo">
<div class="search-bar">
    <form action="{{ route('search') }}" class="color-black w-50px" method="GET">
        <input type="text" id="search-bar" name="keyword" 
               style="color: #000; background-color: #fff;" 
               placeholder="Cari produk... ✨" oninput="searchProducts()">
    </form>
</div>

<script>
    function searchProducts() {
        const searchQuery = document.getElementById('search-bar').value.toLowerCase();
        const products = document.querySelectorAll('.product-card');

        products.forEach(product => {
            const productName = product.getAttribute('data-name').toLowerCase();
            if (productName.includes(searchQuery)) {
                product.style.display = 'block'; // Tampilkan produk yang cocok
            } else {
                product.style.display = 'none'; // Sembunyikan produk yang tidak cocok
            }
        });
    }
</script>

        <div class="header-right">
    <a href="home">
        <svg class="w-8 h-8 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75V19.5A1.5 1.5 0 004.5 21h5.25a.75.75 0 00.75-.75v-3.75a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v3.75a.75.75 0 00.75.75h5.25a1.5 1.5 0 001.5-1.5V9.75m-9-6.094l-8.25 6.188m16.5 0L12 3.656m0 0V9" />
        </svg>
    </a>
    <div class="header-right">
    <a href="shop">
        <span class="icon" style="color: black; font-size: 24px;">🛒</span> 
    </a>
    </div>
    <a href="keranjang">
    <svg class="w-8 h-8 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 3C6 2.44772 6.44772 2 7 2H17C17.5523 2 18 2.44772 18 3V4.5C18 4.77614 17.7761 5 17.5 5H6.5C6.22386 5 6 4.77614 6 4.5V3ZM4 6C3.44772 6 3 6.44772 3 7V17C3 17.5523 3.44772 18 4 18H20C20.5523 18 21 17.5523 21 17V7C21 6.44772 20.5523 6 20 6H4Z" />
    </svg>
    </a>
    <a href="pesan">
    <svg class="w-8 h-8 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 19H6a2 2 0 01-2-2V6a2 2 0 012-2h7.586a2 2 0 011.414.586l4.414 4.414a2 2 0 01.586 1.414V17a2 2 0 01-2 2h-5m-6 0l-1 1m1-1l1 1m0-6.5v3" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M16 3v4h4M12 12h4m-4 4h4m-4-8h4" />
    </svg>
    </a>
    </header>
    <style>
    /* Gaya untuk Toko */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f0f0;
    }

    h1 {
        text-align: center;
        margin: 20px 0;
        color: #333;
    }

    .shop-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
        justify-content: center;
    }

    .product-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 200px;
        text-align: center;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .product-card h3 {
        font-size: 16px;
        margin: 10px 0;
        color: #555;
    }

    .product-card p {
        color: #888;
        margin: 5px 0 15px;
    }

    .product-card button {
        background-color: #af2d29;
        color: white;
        border: none;
        padding: 10px 15px;
        font-size: 14px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .product-card button:hover {
        background-color: #218838;
    }
</style>

<body>
    <div class="shop-container">
        <div class="product-card" data-name="kaos">
            <img src="images/cosmic.jpg" alt="Produk 1">
            <h3>Cosmic Vibes Tee</h3>
            <p>Rp81.000</p>
            <button onclick="addToCart('Cosmic Vibes Tee', 81000)">Beli</button>
        </div>
        <div class="product-card" data-name="kaos">
            <img src="images/playful.jpg" alt="Produk 2">
            <h3>Playful Bunny Tee</h3>
            <p>Rp75.000</p>
            <button onclick="addToCart('Playful Bunny Tee', 75000)">Beli</button>
        </div>
        <div class="product-card" data-name="croptop">
            <img src="images/teddy.jpg" alt="Produk 3">
            <h3>Teddy Blossom Tee</h3>
            <p>Rp66.000</p>
            <button onclick="addToCart('Teddy Blossom Tee', 66000)">Beli</button>
        </div>
        <div class="product-card" data-name="kaos">
            <img src="images/pastel.jpg" alt="Produk 4">
            <h3>Pastel New York Tee</h3>
            <p>Rp81.000</p>
            <button onclick="addToCart('Pastel New York Tee', 81000)">Beli</button>
        </div>
        <div class="product-card" data-name="kaos">
            <img src="images/california.jpg" alt="Produk 5">
            <h3>California Wave Tee</h3>
            <p>Rp87.000</p>
            <button onclick="addToCart('California Wave Tee', 87000)">Beli</button>
        </div>
        <div class="product-card" data-name="kaos">
            <img src="images/retro.jpg" alt="Produk 6">
            <h3>Retro Sport Tee</h3>
            <p>Rp75.000</p>
            <button onclick="addToCart('Retro Sport Tee', 75000)">Beli</button>
        </div>
        <div class="product-card" data-name="kaos-olahraga">
            <img src="images/minimalist.jpg" alt="Produk 7">
            <h3>Minimalist Grunge Tee</h3>
            <p>Rp66.000</p>
            <button onclick="addToCart('Minimalist Grunge Tee', 66000)">Beli</button>
        </div>
        <div class="product-card" data-name="kaos">
            <img src="images/splash.jpg" alt="Produk 8">
            <h3>Cosmic Splash Tee</h3>
            <p>Rp75.000</p>
            <button onclick="addToCart('Cosmic Splash Tee', 75000)">Beli</button>
        </div>
        <div class="product-card" data-name="kaos">
            <img src="images/tiedye.jpg" alt="Produk 9">
            <h3>Tie-Dye Serenity Tee</h3>
            <p>Rp75.000</p>
            <button onclick="addToCart('Tie-Dye Serenity Tee', 75000)">Beli</button>
        </div>
        <div class="product-card" data-name="kaos">
            <img src="images/dark.jpg" alt="Produk 10">
            <h3>Dark Muse Tee</h3>
            <p>Rp81.000</p>
            <button onclick="addToCart('Dark Muse Tee', 81000)">Beli</button>
        </div>
    <div class="product-card" data-name="hoodie">
            <img src="images/midnight.jpg" alt="Produk 11">
            <h3>Midnight Cat Hoodie</h3>
            <p>Rp95.000</p>
            <button onclick="addToCart('Midnight Cat Hoodie', 95000)">Beli</button>
        </div>
     <div class="product-card" data-name="hoodie">
            <img src="images/sketch.jpg" alt="Produk 12">
            <h3>Hoodie Sketch Art</h3>
            <p>Rp101.000</p>
            <button onclick="addToCart('Hoodie Sketch Art', 101000)">Beli</button>
        </div>
     <div class="product-card" data-name="hoodie">
            <img src="images/worldwide.jpg" alt="Produk 13">
            <h3>Worldwide Winner Hoodie</h3>
            <p>Rp95.000</p>
            <button onclick="addToCart('Worldwide Winner Hoodie', 95000)">Beli</button>
        </div>
        <div class="product-card" data-name="hoodie">
            <img src="images/jejak.jpg" alt="Produk 14">
            <h3>Hoodie Jejak Tangan Artistik</h3>
            <p>Rp95.000</p>
            <button onclick="addToCart('Hoodie Jejak Tangan Artistik', 95000)">Beli</button>
        </div>
        <div class="product-card" data-name="hoodie">
            <img src="images/worldwide.jpg" alt="Produk 15">
            <h3>Mystical Portrait Hoodie</h3>
            <p>R110.000</p>
            <button onclick="addToCart('Mystical Portrait Hoodie', 110000)">Beli</button>
        </div>
        <div class="product-card" data-name="hoodie">
            <img src="images/face.jpg" alt="Produk 16">
            <h3>Abstract Face Collage Hoodie</h3>
            <p>Rp100.000</p>
            <button onclick="addToCart('Abstract Face Collage Hoodie', 100000)">Beli</button>
        </div>
        <div class="product-card" data-name="Tote-bag">
            <img src="images/Gojotote.jpg" alt="Produk 17">
            <h3>Gojo Vibes Tote</h3>
            <p>Rp30.000</p>
            <button onclick="addToCart('Gojo Vibes Tote', 30000)">Beli</button>
        </div>
        <div class="product-card" data-name="Tote-bag">
            <img src="images/hero.jpg" alt="Produk 18">
            <h3>Hero Web Tote</h3>
            <p>Rp27.000</p>
            <button onclick="addToCart('Hero Web Tote', 27000)">Beli</button>
        </div>
        <div class="product-card" data-name="Tote-bag">
            <img src="images/cattote.jpg" alt="Produk 19">
            <h3>Mystic Cat Tote</h3>
            <p>Rp27.000</p>
            <button onclick="addToCart('Mystic Cat Tote', 27000)">Beli</button>
        </div>
        <div class="product-card" data-name="Tote-bag">
            <img src="images/pinklove.jpg" alt="Produk 20">
            <h3>Pink Love Tote</h3>
            <p>Rp36.000</p>
            <button onclick="addToCart('Pink Love Tote', 36000)">Beli</button>
        </div>
    </div>
    
    <script>
        function addToCart(productName, productPrice) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push({ name: productName, price: productPrice });
            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${productName} telah ditambahkan ke keranjang.`);
        }
    </script>
</body>
</html>