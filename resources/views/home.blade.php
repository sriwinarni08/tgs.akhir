@extends('layout')
@section('container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        .card-title {
            font-size: 1rem;
            font-weight: 600;
        }
        .card-body p {
            font-size: 0.9rem;
        }
        .discounted {
            color: #dc3545;
            font-weight: bold;
        }
        .original {
            color: #6c757d;
            text-decoration: line-through;
            font-size: 0.85rem;
        }
        /* CSS langsung di sini */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .categories {
            text-align: center;
            padding: 20px;
        }

        .categories h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .category-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .category-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 220px;
            padding: 15px;
            text-align: center;
        }

        .category-item img {
            width: 100%;
            border-radius: 8px;
        }

        .category-item h2 {
            font-size: 18px;
            margin: 15px 0;
            color: #ffff;
        }

        .category-item p {
            font-size: 14px;
            color: #ffff;
        }
        .clients-section {
            padding: 20px;
        }

        .clients-section h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ffff;
        }

        .clients-logos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .clients-logos img {
            max-width: 150px;
            height: auto;
            object-fit: contain;
        }
    </style>
</head>
<body>       
            <!-- Hero Section -->
            <section>
                <div class="max-w-10xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="max-w-lg text-5xl font-semibold leading-loose text-#72110e" style="font-family: 'Playfair Display';">
                        BELI TANPA RAGU, NIKMATI TANPA BATAS</h1>

                    <!-- Grid Images -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="flex justify-center">
                            <img src="images/gambar1.jpg" class="rounded-lg shadow-lg" alt="Gambar 1">
                        </div>
                        <div class="flex justify-center">
                            <img src="images/gambar2.jpg" class="rounded-lg shadow-lg" alt="Gambar 2">
                        </div>
                        <div class="flex justify-center">
                            <img src="images/gambar3.jpg" class="rounded-lg shadow-lg" alt="Gambar 3">
                        </div>
                    </div>

                    <!-- Description -->
                    <div style="position: relative; width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center; overflow: hidden; background-color: #f7f0f0;">
                        <div style="font-size: 26rem; font-weight: bold; color: #ffcece; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap; z-index: 1;">
                            SKYGIE
                        </div>
                        <div style="text-align: center; z-index: 2; color: black;">
                            <h1 style="font-size: 2.5rem; margin: 0;">Hai, kami SKYGIE</h1>
                            <p style="font-family: 'Playfair Display'; margin: 5px 0 0; max-width: 500px; line-height: 2.0;">
                               <b> SKYGIE adalah penyedia jasa sablon kaos terpercaya yang mengutamakan kualitas tinggi dan desain trendy. 
                                Kami melayani pembuatan kaos custom untuk memenuhi kebutuhan pribadi, komunitas, atau bisnis Anda. 
                                Dengan menggunakan teknologi sablon modern dan bahan terbaik, SKYGIE berkomitmen untuk memberikan hasil 
                                sablon yang detail, awet, dan memukau. Jadikan ide kreatif Anda menjadi kaos favorit bersama kami!
                               </b>
                            </p>
                        </div>
                    </div>
            </section>

                    <!-- Categories Section -->
                    <h2>SHOP OUR CATEGORIES</h2>
        <section class="categorys">
        <div class="category-item">
            <div class="category-image">
                <img src="images/tk4.jpg" >
            </div>
            <div class="category-info">
                <h2 style= "color: gray";>PRINTED TOTE BAG</h2>
                <p style= "color: gray";>Tampil modis di setiap kesempatan dengan tote bag yang dirancang khusus untuk melengkapi gaya kasual Anda. Desain yang simple namun elegan memungkinkan Anda untuk memadukannya dengan berbagai gaya busana.</p>
            </div>
        </div>
        <div class="category-item">
            <div class="category-image">
                <img src="images/tk3.jpg" >
            </div>
            <div class="category-info">
                <h2 style= "color: gray";>PRINTED LONGSLEEVE</h2>
                <p style= "color: gray";>Bergaya kasual kini semakin terlihat modis dengan pilihan koleksi kaos Polo dari Cititex. Hadirkan kenyamanan di setiap penampilan casual dengan balutan bahan berkualitas.</p>
            </div>
        </div>
        <div class="category-item">
            <div class="category-image">
                <img src="images/tk1.jpg" >
            </div>
            <div class="category-info">
                <h2 style= "color: gray";>PRINTED HOODIE</h2>
                <p style= "color: gray";>Pilihan koleksi hoodie siap menyempurnakan tampilan Anda dengan kenyamanan dan gaya yang tak tertandingi. Terbuat dari bahan fleece berkualitas tinggi yang lembut di kulit dan desain yang modern serta versatile.</p>
            </div>
        </div>
        <div class="category-item">
            <div class="category-image">
                <img src="images/tk2.jpg" >
            </div>
            <div class="category-info">
                <h2 style= "color: gray";>PRINTED T-SHIRT</h2>
                <p style= "color: gray";>Realisasikan ide mu menjadi kaos favoritmu. Dengan mesin terbaik dan SDM yang sangat berpengalaman sehingga memberikan hasil cetak yang berkualitas tinggi.</p>
            </div>
        </div>



        <!-- Section Corak -->
<section class="section-patterns">
<h1 class="text-2xl font-bold">Corak Baju Penentu Outfit-Mu! 😊</h1>
  <div class="circle-container">
    <div class="circle">
      <img src="images/geometic.jpg" alt="Geometric">
      <p>Geometric</p>
    </div>
    <div class="circle">
      <img src="images/animal print.jpg" alt="Animal Print">
      <p>Animal Print</p>
    </div>
    <div class="circle">
      <img src="images/military.jpg" alt="Military">
      <p>Military</p>
    </div>
    <div class="circle">
      <img src="images/graphic.jpg" alt="Graphic">
      <p>Graphic</p>
    </div>
    <div class="circle">
      <img src="images/plain.jpg" alt="Plain">
      <p>Plain</p>
    </div>
  </div>
</section>

<!-- Section Warna -->
<section class="section-colors">
  <h2 class="text-2xl font-bold">Tentukan Warna, Maksimalkan Gaya!</h2>
  <div class="circle-container">
    <div class="circle">
      <img src="images/monochrome.jpg" alt="Monochrome">
      <p>Monochrome</p>
    </div>
    <div class="circle">
      <img src="images/contrast-combination.jpg" alt="Contrast Combination">
      <p>Contrast Combination</p>
    </div>
    <div class="circle">
      <img src="images/soft-combination.jpg" alt="Soft Combination">
      <p>Soft Combination</p>
    </div>
    <div class="circle">
      <img src="images/neutral.jpg" alt="Neutral">
      <p>Neutral</p>
    </div>
    <div class="circle">
      <img src="images/shimmer-shine.jpg" alt="Shimmer & Shine">
      <p>Shimmer & Shine</p>
    </div>
  </div>
</section>

<style>
        
        .slider {
            width: 100%;
            overflow: hidden;
            margin: 20px auto;
            position: relative;
            border-radius: 8px;
        }
        .slider-container {
            display: flex;
            transition: transform 0.5s ease;
        }
        .slider-item {
            flex: 0 0 25%;
            box-sizing: border-box;
            padding: 10px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 0 10px;
            position: relative;
            justify-content: space-between; /* Mengatur jarak antara elemen agar tombol di bagian bawah */
            height: 450px; /* Sesuaikan dengan kebutuhan */

        }
        .slider-item img {
            width: 100%;
            border-radius: 8px;
            height: 250px; /* Sesuaikan tinggi gambar */
            object-fit: cover; /* Pastikan gambar tidak terdistorsi */
            border-radius: 8px;
        }
        .slider-item h3 {
            margin: 10px 0px;
        }
        .slider-item p {
            margin: 10px;
            color: #888;
        }
        .slider-item .price {
            font-weight: bold;
            color: #333;
        }
        .slider-item .discount {
            color: red;
            text-decoration: line-through;
            margin-left: 5px;
        }
        .flash-sale-label {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #ff5722;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            z-index: 2;
        }
        .slider-buttons {
            position: absolute;
            top: 50%;
            left: 10px;
            right: 10px;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            z-index: 2;
        }
        .slider-button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
        }
        .slider-button:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .product-link-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5722;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            z-index: 10;
        }
        .product-link-btn:hover {
            background-color: #e64a19;
        }
        .countdown-timer {
            font-size: 20px;
            font-weight: bold;
            color: #ff5722;
            text-align: center;
            margin-top: 20px;
        }
    </style>
<div class="slider">
    <div class="slider-container">
        <div class="slider-item">
            <div class="flash-sale-label">Flash Sale</div>
            <img src="images/kitten.jpg" alt="Kitten T-shirt - Pink">
            <h3>Kitten T-shirt - Pink</h3>
            <p class="price">Rp 30.000 <span class="discount">Rp 87.000</span></p>
            <button class="buy-button" onclick="redirectTokeranjang('Kitten T-shirt - Pink', 30000)">Beli</button>
        </div>
        <div class="slider-item">
            <div class="flash-sale-label">Flash Sale</div>
            <img src="images/blossom.jpg" alt="Crop top printed blossom">
            <h3>Crop top printed blossom</h3>
            <p class="price">Rp 65.000 <span class="discount">Rp 130.000</span></p>
            <button class="buy-button" onclick="redirectTokeranjang('Crop top printed blossom', 65000)">Beli</button>
        </div>
        <div class="slider-item">
            <div class="flash-sale-label">Flash Sale</div>
            <img src="images/monalisa.jpg" alt="MONALISA CAT LOVER T-shirt">
            <h3>MONALISA CAT LOVER T-shirt</h3>
            <p class="price">Rp 55.000 <span class="discount">Rp 500.000</span></p>
            <button class="buy-button" onclick="redirectTokeranjang('MONALISA CAT LOVER T-shirt', 55000)">Beli</button>
        </div>
        <div class="slider-item">
            <div class="flash-sale-label">Flash Sale</div>
            <img src="images/tunnel.jpg" alt="Crop top black & white dream tunnel">
            <h3>Crop top black & white dream tunnel</h3>
            <p class="price">Rp 60.000 <span class="discount">Rp 90.000</span></p>
            <button class="buy-button" onclick="redirectTokeranjang('Crop top black & white dream tunnel', 60000)">Beli</button>
        </div>
        <div class="slider-item">
            <div class="flash-sale-label">Flash Sale</div>
            <img src="images/tropical.jpg" alt="Tropical Bloom Tee">
            <h3>Tropical Bloom Tee</h3>
            <p class="price">Rp 75.000 <span class="discount">Rp 120.000</span></p>
            <button class="buy-button" onclick="redirectTokeranjang('Tropical Bloom Tee', 75000)">Beli</button>
        </div>
        <div class="slider-item">
            <div class="flash-sale-label">Flash Sale</div>
            <img src="images/meow.jpg" alt="Kaos Saku Meow">
            <h3>Kaos Saku Meow</h3>
            <p class="price">Rp 50.000 <span class="discount">Rp 99.000</span></p>
            <button class="buy-button" onclick="redirectTokeranjang('Kaos Saku Meow', 50000)">Beli</button>
        </div>
        <div class="slider-item">
            <div class="flash-sale-label">Flash Sale</div>
            <img src="images/tengkorak.jpg" alt="Hoodie Sinar Tengkorak Psikedelik">
            <h3>Hoodie Sinar Tengkorak Psikedelik</h3>
            <p class="price">Rp 189.000 <span class="discount">Rp 450.000</span></p>
            <button class="buy-button" onclick="redirectTokeranjang('Hoodie Sinar Tengkorak Psikedelik', 189000)">Beli</button>
        </div>
    </div>
    <div class="slider-buttons">
        <button class="slider-button" id="prevBtn">&#8249;</button>
        <button class="slider-button" id="nextBtn">&#8250;</button>
    </div>
    
    <!-- Tombol link ke halaman produk -->
    <a href="shop" class="product-link-btn">Lihat Produk Lainnya</a>
</div>

<!-- Countdown Timer -->
<div class="countdown-timer" id="countdown"></div>

<script>
    let index = 0;

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const sliderContainer = document.querySelector('.slider-container');
    const itemsPerView = 3; // Jumlah item yang terlihat dalam satu layar
    const totalItems = sliderContainer.children.length;

    prevBtn.addEventListener('click', () => {
        if (index > 0) {
            index--;
            updateSlider();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (index < totalItems - itemsPerView) { // Cek agar tidak melebihi jumlah item
            index++;
            updateSlider();
        }
    });

    function updateSlider() {
        const offset = index * (100 / itemsPerView); // Hitung offset berdasarkan jumlah item per view
        sliderContainer.style.transform = `translateX(-${offset}%)`;
    }

    // Countdown timer for Flash Sale
    function countdown() {
        const saleEndDate = new Date("2025-01-08T00:00:00").getTime();

        const interval = setInterval(function () {
            const now = new Date().getTime();
            const timeLeft = saleEndDate - now;

            if (timeLeft < 0) {
                clearInterval(interval);
                document.getElementById("countdown").innerHTML = "Flash Sale Ended!";
            } else {
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                document.getElementById("countdown").innerHTML = `${hours}h ${minutes}m ${seconds}s`;
            }
        }, 1000);
    }

    countdown();

    // Redirect to checkout page
    function redirectTokeranjang(productName, productPrice) {
        // Simpan data produk di localStorage untuk digunakan di halaman keranjang
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push({ name: productName, price: productPrice });
        localStorage.setItem('cart', JSON.stringify(cart));

        // Redirect ke halaman keranjang atau checkout
        window.location.href = 'keranjang'; // Ganti '/checkout' dengan URL halaman checkout Anda
    }
</script>


<style>
    .buy-button {
    margin-top: auto; /* Menempatkan tombol di bagian bawah kontainer */
    align-self: center; /* Pusatkan tombol secara horizontal */
    background-color: #ff5722;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    margin-top: auto;
}

.buy-button:hover {
    background-color: #e64a19;
}

</style>
<div class="blog-section">
        <h1>BLOG</h1>
        <div class="blog-container">
            <div class="blog-card">
                <img src="images/rrq1.png" alt="Blog Image">
                <div class="blog-content">
                    <h3>KOLABORASI SKYGIE X RRQ INDONESIA</h3>
                    <p>Ditengah hiruk pikuk persaingan dunia fashion maupun game, akhirnya tercipta kolaborasi yang mempertemukan ambisi besar dan kreativitas...</p>
                </div>
            </div>
            <div class="blog-card">
                <img src="images/evos.jpg" alt="Blog Image">
                <div class="blog-content">
                    <h3>KOLABORASI SKYGIE X EVOS ESPORTS</h3>
                    <p>Kolaborasi Erigo x EVOS esports menjawab pertanyaan bagaimana saat kreativitas dari fashion menyatu dengan meriahnya dunia game...</p>
                </div>
            </div>
            <div class="blog-card">
                <img src="images/onic1.png" alt="Blog Image">
                <div class="blog-content">
                    <h3>KOLABORASI SKYGIE X ONIC ESPORTS</h3>
                    <p>Awal tahun 2024 dibuka dengan kolaborasi ERIGO dan ONIC esports, sebuah perpaduan dua dunia yang saling melengkapi satu sama lain...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <!-- Section: Company -->
    <div class="section company">
        <h3>A COMPANY BY</h3>
        <img src="images/logo.png" alt="GFG Logo" class="icon logo">
        <p>GLOBAL FASHION GROUP</p>
    </div>

    <!-- Section: Locations -->
    <div class="section locations">
        <h3>LOKASI KAMI</h3>
        <div class="icon-row">
            <img src="images/flag-indonesia.jpg" alt="Indonesia" class="icon">
        </div>
    </div>

    <!-- Section: Payment -->
    <div class="section payment">
        <h3>PEMBAYARAN</h3>
        <div class="icon-row">
            <img src="images/mastercard.png" alt="Mastercard" class="icon">
            <img src="images/visa.png" alt="Visa" class="icon">
            <img src="images/bca.png" alt="BCA" class="icon">
            <img src="images/mandiri.png" alt="Mandiri" class="icon">
            <img src="images/bri.png" alt="BRI" class="icon">
            <img src="images/ovo.png" alt="OVO" class="icon">
            <img src="images/gopay.png" alt="Gopay" class="icon">
            <img src="images/kredivo.png" alt="Kredivo" class="icon">
        </div>
    </div>

    <!-- Section: Shipping -->
    <div class="section shipping">
        <h3>JASA PENGIRIMAN</h3>
        <div class="icon-row">
            <img src="images/jne.png" alt="JNE" class="icon">
            <img src="images/pos-indonesia.png" alt="Pos Indonesia" class="icon">
            <img src="images/ninja.png" alt="Ninja" class="icon">
            <img src="images/jnt.png" alt="JNT" class="icon">
            <img src="images/lion.png" alt="LION" class="icon">
        </div>
    </div>

    <!-- Section: Partners -->
    <div class="section partners">
        <h3>PARTNER KAMI</h3>
        <div class="icon-row">
            <img src="images/bca.png" alt="BCA" class="icon">
            <img src="images/gojek.png" alt="Gojek" class="icon">
            <img src="images/telkomsel.png" alt="Telkomsel" class="icon">
            <img src="images/mandiri.png" alt="Mandiri" class="icon">
        </div>
    </div>

    <!-- Section: Security -->
    <div class="section security">
        <h3>SISTEM KEAMANAN</h3>
        <ul>
            <li>✔ PCI Security Standard</li>
            <li>✔ Cardholder Protection</li>
            <li>✔ Encrypted Network</li>
        </ul>
    </div>
</div>

@endsection
