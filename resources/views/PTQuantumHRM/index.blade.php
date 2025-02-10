<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Transformation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://kit.fontawesome.com/a076d05399.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Poppins:wght@300;400;600&display=swap');
        @import "~font-awesome/css/font-awesome.css";
        body {
            font-family: 'Cinzel', serif;
        }

        html {
            scroll-behavior: smooth;
        }

        .navbar {
            background: rgba(173, 216, 230, 0.6);
            backdrop-filter: blur(10px);
            padding: 24px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            animation: slideIn 1s ease-out forwards;
        }

        nav a {
            font-size: 1.2rem;
            font-weight: 600;
            color: black;
            padding: 8px 12px;
            border-radius: 5px;
            display: inline-block;
            position: relative; 
            transition: color 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: #0056b3;
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Dropdown Menu Styling */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            margin-top: 10px;
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 200px;
            z-index: 10;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item {
            padding: 8px 12px;
            color: black;
            display: block;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
        }

        /* Styling ikon dalam dropdown */
        .dropdown-toggle i {
            margin-right: 8px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar {
                display: block;
                text-align: center;
            }

            nav {
                display: block;
                margin-top: 20px;
            }
        }

        /* Animation for the navbar */
        @keyframes slideIn {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }


        .logo-container {
            display: flex;
            align-items: flex-end;
        }

        .logo-container img {
            width: 200px;
            height: auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .logo-container img:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .logo-text {
            font-size: 1.2rem;
            font-weight: bold;
            color: black;
            margin-left: -10px;
            position: relative;
            top: 27px;
            transition: transform 1s ease-in-out;
            display: inline-block;
        }

        .logo-text:hover {
            transform: rotate(180deg) scale(1.1);
        }

        .logoprinter {
            max-width: 100%;
            height: auto;
            width: 650px;
            object-fit: contain;
            display: block;
            margin: auto;
        }

        @media (max-width: 768px) {
            .logoprinter {
                width: 280px;
            }
        }

        .main-heading {
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            color: #222;
            text-align: left;
        }

        .heding1 {
            padding-top: 100px;
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            color: #222;
            text-align: center;
        }

        .main-description {
            font-size: 1.4rem;
            font-weight: 500;
            color: #555;
            line-height: 1.6;
        }

        .whatsapp-button {
            font-size: 1.2rem;
            font-weight: 700;
        }

        /* Keunggulan ASR Printing */
        .feature-section {
            max-width: 1200px;
            margin: auto;
            padding: 50px 20px;
        }

        .feature-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #000;
        }

        .feature-description {
            font-size: 1.2rem;
            font-weight: 400;
            color: #555;
            margin-bottom: 30px;
        }

        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-number {
            background-color: #ff6b6b;
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            padding: 10px 18px;
            border-radius: 20px;
        }

        .feature-text h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .feature-text p {
            font-size: 1rem;
            font-weight: 400;
            color: #444;
        }

        .fade-in-section {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .fade-in-section.opacity-100 {
            opacity: 1;
        }

        .fade-in-section.translate-y-0 {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .feature-section {
                flex-direction: column;
                text-align: center;
            }

            .feature-list {
                align-items: center;
            }

            .feature-item {
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
            }
        }

        .poppins-text {
            font-family: 'Poppins', sans-serif;
        }

        .service-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .service-card {
            background-color: #f9f9f9;
            border-radius: 12px;
            padding: 30px;
            flex-basis: 23%; /* Adjusted for 4 cards */
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.5s ease;
        }

        .service-card:hover {
            transform: translateY(-10px); /* Lift effect */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, #ff6b6b, #ff9e9e); /* Gradient effect */
        }

        .service-card h3,
        .service-card .service-number {
            transition: color 0.3s ease;
        }

        .service-card:hover h3,
        .service-card:hover .service-number {
            color: white; /* Change text color on hover */
        }

        .service-number {
            background-color: #ff6b6b;
            color: white;
            font-size: 2rem;
            font-weight: 700;
            padding: 20px;
            border-radius: 50%;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .service-card:hover .service-number {
            background-color: #ff9e9e; /* Lighten the background color on hover */
        }

        .service-list ul {
            padding: 0;
            list-style-type: none;
            margin-top: 15px;
        }

        .service-list li {
            margin: 10px 0;
            font-weight: 400;
            color: #444;
            list-style-type: none;
            transition: color 0.3s ease;
        }

        .service-card:hover .service-list li {
            color: white; /* Change list item color on hover */
        }

        .service-list li::before {
            content: "✓";
            color: green;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .service-card {
                flex-basis: 45%;
            }
        }

        @media (max-width: 480px) {
            .service-card {
                flex-basis: 100%;
            }
        }

        /* Testimonial Section */
        .testimonial-section {
            background-color: #f8f8f8;
            padding: 50px 20px;
            text-align: center;
        }

        .testimonial-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .testimonial-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            margin: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            max-width: 300px;
            text-align: center; /* Center text */
        }

        .testimonial-avatar {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
            margin-left: auto;  /* Center the profile picture */
            margin-right: auto; /* Center the profile picture */
        }

        .testimonial-text {
            font-size: 1.2rem;
            font-weight: 400;
            color: #555;
            margin-bottom: 20px;
        }

        .testimonial-name {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
        }

        .whatsapp-footer {
            background-color: #ff6b6b;
            padding: 20px;
            text-align: center;
        }

        .whatsapp-footer a {
            background-color: #25d366;
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
        }

        .whatsapp-footer a:hover {
            background-color: #128c7e;
        }

        .pagesss {
            background-color: #c6c6c6;
            font-size: 50px;
            text-align: center;
            font-family:'Courier New', Courier, monospace;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <header class="navbar flex justify-between items-center p-10 bg-opacity-60 bg-blue-200 backdrop-blur-md rounded-lg">
        <!-- Logo -->
        <div class="logo-container flex items-center mb-10 md:mb-0">
            <a href="{{ route('beranda') }}"><img src="{{ asset('images/logo.png') }}" alt="ASR Logo" class="w-20 h-auto"></a>
        </div>
    
        <!-- Hamburger Icon (Visible on small screens) -->
        <div class="md:hidden flex items-center space-x-2" id="hamburger-icon" onclick="toggleNavbar()">
            <i class="fas fa-bars text-2xl text-black"></i>
        </div>
    
        <!-- Navbar Links (Visible on larger screens) -->
        <nav class="md:flex space-x-4 hidden">
            <a href="{{ route('beranda') }}" class="text-black hover:text-white px-3 py-2 rounded-lg">Beranda</a>
            
            <!-- Dropdown Menu for Profil -->
            <div class="dropdown">
                <a href="#" class="text-black hover:text-white px-3 py-2 rounded-lg dropdown-toggle" id="dropdownProfil" role="button" aria-expanded="false">
                    <i class="fas fa-user mr-2"></i> Profil <i class="fas fa-chevron-down ml-2"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownProfil">
                    <li><a class="dropdown-item" href="">Profil 1</a></li>
                    <li><a class="dropdown-item" href="">Profil 2</a></li>
                    <li><a class="dropdown-item" href="">Profil 3</a></li>
                </ul>
            </div>

            <!-- Dropdown Menu for Layanan -->
            <div class="dropdown">
                <a href="#" class="text-black hover:text-white px-3 py-2 rounded-lg dropdown-toggle" id="dropdownLayanan" role="button" aria-expanded="false">
                    <i class="fas fa-cogs mr-2"></i> Layanan <i class="fas fa-chevron-down ml-2"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownLayanan">
                    <li><a class="dropdown-item" href="">Layanan 1</a></li>
                    <li><a class="dropdown-item" href="">Layanan 2</a></li>
                    <li><a class="dropdown-item" href="">Layanan 3</a></li>
                </ul>
            </div>

            <!-- Dropdown Menu for Informasi -->
            <div class="dropdown">
                <a href="#" class="text-black hover:text-white px-3 py-2 rounded-lg dropdown-toggle" id="dropdownInformasi" role="button" aria-expanded="false">
                    <i class="fas fa-info-circle mr-2"></i> Informasi <i class="fas fa-chevron-down ml-2"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownInformasi">
                    <li><a class="dropdown-item" href="">Informasi 1</a></li>
                    <li><a class="dropdown-item" href="">Informasi 2</a></li>
                    <li><a class="dropdown-item" href="">Informasi 3</a></li>
                </ul>
            </div>

            <!-- Dropdown Menu for Berita -->
            <div class="dropdown">
                <a href="#" class="text-black hover:text-white px-3 py-2 rounded-lg dropdown-toggle" id="dropdownBerita" role="button" aria-expanded="false">
                    <i class="fas fa-newspaper mr-2"></i> Berita <i class="fas fa-chevron-down ml-2"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownBerita">
                    <li><a class="dropdown-item" href="">Berita 1</a></li>
                    <li><a class="dropdown-item" href="">Berita 2</a></li>
                    <li><a class="dropdown-item" href="">Berita 3</a></li>
                </ul>
            </div>

            <a href="{{ route('galeri') }}" class="text-black hover:text-white px-3 py-2 rounded-lg">Galeri</a>
            <a href="{{ route('kontak') }}" class="text-black hover:text-white px-3 py-2 rounded-lg">Kontak</a>
        </nav>
    
        <!-- WhatsApp Button -->
        <a href="https://wa.me/081233658802" class="flex items-center bg-blue-500 text-white px-3 py-2 rounded-full shadow-lg hover:bg-blue-600">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-5 h-5 mr-2">
            WhatsApp
        </a>
        </nav>

    </header>    
    
    <!-- Main Section -->
    <section id="contact" class="container mx-auto mt-12 flex flex-col md:flex-row items-center p-4 poppins-text fade-in-section">
        <div class="md:w-1/2 text-left">
            <h1 class="main-heading">PT Quantum HRM Internasional</h1>
            <p class="main-description mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet dolorum voluptatem perferendis illum distinctio vel laudantium officiis labore. Porro corporis exercitationem fugiat harum? Rem quia ipsum, praesentium animi consequuntur adipisci?
            </p>
            <a href="https://wa.me/081233658802" class="whatsapp-button mt-4 inline-block bg-red-400 text-white px-5 py-2 rounded-full shadow-lg hover:bg-red-500">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-5 h-5 inline-block mr-2">
                WhatsApp
            </a>
        </div>
        <div class="md:w-1/2 flex justify-center mt-4 md:mt-0">
            <img src="{{ asset('images/logo.png') }}" alt="ASRPrinting Logo" class="logoprinter">
        </div>
    </section>

    <!-- Feature Section: Apa Keunggulan dari ASR Printing? -->
    <h1 id="features" class="heding1">Fitur Keunggulan</h1>
    <section class="feature-section d-flex flex-wrap align-items-center poppins-text fade-in-section">
        <div class="col-md-6">
            <h1 class="feature-title">Apa Keunggulan dari PT Quantum HRM Internasional?</h1>
            <p class="feature-description">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo sed earum exercitationem modi libero sunt officiis illo quibusdam perspiciatis obcaecati.
            </p>
        </div>
        <div class="col-md-6">
            <div class="feature-list">
                <div class="feature-item">
                    <span class="feature-number">01</span>
                    <div class="feature-text">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, architecto in pariatur nam vero voluptatem unde earum consectetur provident sit.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <span class="feature-number">02</span>
                    <div class="feature-text">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, repellendus repudiandae. Illo illum natus in. Aliquam dicta vero perferendis asperiores.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <span class="feature-number">03</span>
                    <div class="feature-text">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quis, ut beatae quos quasi quibusdam dolorem nesciunt inventore corrupti corporis!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <h1 id="products" class="heding1">Informasi</h1>
    <section class="container service-container">
        <!-- Service Card 1: File Anda -->
        <div class="service-card fade-in-section">
            <h3>Lorem, ipsum.</h3>
            <div class="service-number">
                <img src="{{ asset('images/logo1.png') }}" alt="File Anda">
            </div>
            <h3>Insyaallah</h3>
            <div class="service-list">
                <ul>
                    <li>Aman</li>
                    <li>Amanah</li>
                    <li>Terpecaya</li>
                    <li>Terjamin</li>
                </ul>
            </div>
        </div>

        <!-- Service Card 2: Print -->
        <div class="service-card fade-in-section">
            <div class="service-icon">
                <i class="fas fa-print"></i>
            </div>
            <h3>Lorem, ipsum.</h3>
            <div class="service-number">
                <img src="{{ asset('images/logo1.png') }}" alt="Print">
            </div>
            <div class="service-list">
                <ul>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit.</li>
                </ul>
            </div>
        </div>

        <!-- Service Card 3: Pembukuan -->
        <div class="service-card fade-in-section">
            <div class="service-icon">
                <i class="fas fa-book"></i>
            </div>
            <h3>Lorem, ipsum.</h3>
            <div class="service-number">
                <img src="{{ asset('images/logo1.png') }}" alt="Pembukuan">
            </div>
            <div class="service-list">
                <ul>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit.</li>
                </ul>
            </div>
        </div>
        <div class="service-card fade-in-section">
            <div class="service-icon">
                <i class="fas fa-book"></i>
            </div>
            <h3>Waktu Jam Kerja</h3>
            <div class="service-number">
                <img src="{{ asset('images/logo1.png') }}" alt="Buka">
            </div>
            <div class="service-list">
                <ul>
                    <li>Senin - Jumat</li>
                    <li>08.00 - 17.00</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimony" class="testimonial-section fade-in-section">
        <h1 class="testimonial-title">Komentar Tentang Hasil Pelayanan Kami</h1>

        <div class="testimonial-card">
            <img src="{{ asset('images/profil1.png') }}" alt="Adi" class="testimonial-avatar">
            <p class="testimonial-text">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam magnam voluptate maiores, quisquam blanditiis suscipit?"</p>
            <p class="testimonial-name">Adi</p>
        </div>

        <div class="testimonial-card">
            <img src="{{ asset('images/profil1.png') }}" alt="Sahrul" class="testimonial-avatar">
            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate deserunt doloremque dolorum sapiente, veniam consequatur!"</p>
            <p class="testimonial-name">Sahrul</p>
        </div>

        <div class="testimonial-card">
            <img src="{{ asset('images/profil1.png') }}" alt="Ramadhan" class="testimonial-avatar">
            <p class="testimonial-text">"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur, at voluptas animi libero id!"</p>
            <p class="testimonial-name">Ramadhan</p>
        </div>
    </section>

    <!-- WhatsApp Footer -->
    <section class="whatsapp-footer">
        <a href="https://wa.me/081233658802">Informasi lebih lanjut, Hubungi Kami.</a>
    </section>
    
    <footer style="background-color: #1a1a1a; color: white; padding: 40px 20px;">
        <div class="container">
            <!-- Logo and Social Icons Section -->
            <div class="row justify-content-between align-items-center">
                <!-- Logo Section -->
                <div class="col-md-3 text-center text-md-left">
                    <a href="{{ route('beranda') }}"><img src="{{ asset('images/logo.png') }}" alt="ASR Printing Logo" style="width: 200px; height: auto;"></a>
                </div>

                <!-- Social Icons Section -->
                <div class="col-md-6 text-center">
                    <div class="social-icons d-flex justify-content-center">
                        <a href="https://facebook.com" class="text-white mx-3" style="font-size: 1.8rem;">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://youtube.com" class="text-white mx-3" style="font-size: 1.8rem;">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://twitter.com" class="text-white mx-3" style="font-size: 1.8rem;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com" class="text-white mx-3" style="font-size: 1.8rem;">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <!-- Copyright Section -->
                    <div class="text-center mt-4">
                        <p>&copy; 2025 PT Quantum HRM Internasional, All Rights Reserved</p>
                    </div>
                </div>

                <!-- Footer Links Section -->
                <div class="col-md-3 text-center text-md-right">
                    <div class="footer-links md-flex flex-column">
                        <a href="#features" class="text-white mb-2">Fitur</a>
                        <a href="#products" class="text-white mb-2">Informasi</a>
                        <a href="#testimony" class="text-white mb-2">Testimoni</a>
                        <a href="#contact" class="text-white">Kontak</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- JavaScript for toggling the navbar -->
    <script>
        function toggleNavbar() {
            const navbar = document.getElementById("navbar");
            navbar.classList.toggle("hidden");
        }

        // Intersection Observer to trigger fade-in effect on scroll
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll(".fade-in-section");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("opacity-100", "translate-y-0");
                    } else {
                        entry.target.classList.remove("opacity-100", "translate-y-0");
                    }
                });
            }, { threshold: 0.3 });

            sections.forEach(section => {
                observer.observe(section);
            });
        });

        // Membuat navbar sticky saat menggulir
        document.addEventListener("scroll", function () {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        });

    </script>
</body>
</html>
