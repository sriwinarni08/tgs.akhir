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
    <a href="posts">
    <svg class="w-8 h-8 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 19H6a2 2 0 01-2-2V6a2 2 0 012-2h7.586a2 2 0 011.414.586l4.414 4.414a2 2 0 01.586 1.414V17a2 2 0 01-2 2h-5m-6 0l-1 1m1-1l1 1m0-6.5v3" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M16 3v4h4M12 12h4m-4 4h4m-4-8h4" />
    </svg>
    </a>
    </header>
    
    <!-- Background Section -->        
    <div class="hero min-h-screen p-0 m-0 relative" style="background-image: url('{{ asset('images/bg1.jpeg') }}'); background-size: cover; background-position: center; height: 400px;">
        <div style="background-color: #f7f0f0;">
            
        <!-- Navbar -->
            @yield('container')
            <hr>

            <footer>
    <div class="max-w-screen-xl mx-auto px-4">
    <div class="footer-container">
        <!-- Column 1 -->
        <div class="footer-column">
            <img src="images/logo.png" class="h-20" alt="Logo">
            <p>The Biggest Blank Apparel in Indonesia, With more than 26 Stores across Indonesia includes Jakarta, Surabaya, Bali, Medan, and many more.</p>
            <div class="app-links">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
                <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
            </div>
            <div class="social-icons">
                <a href="https://www.instagram.com/skygie2024/?utm_source=ig_web_button_share_sheet"><img src="images/logo ig.webp" alt="Instagram Logo" width="25"></a>
            </div>
        </div>

        <!-- Column 2 -->
        <div class="footer-column">
            <h4>Shop By Brands</h4>
            <ul>
                <li><a href="#">PRINTED TOTE BAG</a></li>
                <li><a href="#">PRINTED LONGSLEEVE</a></li>
                <li><a href="#">PRINTED HOODIE</a></li>
                <li><a href="#">PRINTED T-SHIRT</a></li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div class="footer-column">
            <h4>Help & Guide</h4>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">Pending Order</a></li>
                <li><a href="#">Balance History</a></li>
            </ul>
        </div>

        <!-- Column 4 -->
        <div class="footer-column">
            <h4>For More Info</h4>
            <p>Email: <a href="mailto:skygie@skygie.com">skygie@skygie.com</a></p>
            <p>Phone: 085-645752136</p>
            <p>Address: Jl. Cempaka Raya No. 2AI - 2AIII & 2B Cempaka Barat Kebon Salak Pasuruan</p>
        </div>
    </div>
    <div class="copyright">
        &copy; 2024 PT. SKYGIE Textilindo.
    </div>
</div>
</footer>



</body>
</html>