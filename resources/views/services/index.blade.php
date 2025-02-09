<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASR Printing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Poppins:wght@300;400;600&display=swap');
        body {
            font-family: 'Cinzel', serif;
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
        }
        nav a {
            font-size: 1.2rem;
            font-weight: 600;
            color: black;
            transition: transform 0.3s ease, color 0.3s ease, background-color 0.3s ease;
            padding: 8px 12px;
            border-radius: 5px;
            display: inline-block;
        }
        nav a:hover {
            color: white;
            background-color: #0056b3;
            transform: scale(1.1);
        }
        .logo-container {
            display: flex;
            align-items: flex-end;
        }
        .logo-container img {
            width: 80px;
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
            margin-left: -2px;
            position: relative;
            top: 0px;
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

        .main-heading {
            font-size: 3rem;
            font-weight: 700;
            color: #222;
            text-transform: uppercase;
        }

        .main-description {
            font-size: 1.4rem;
            font-weight: 400;
            color: #555;
            line-height: 1.6;
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

        .feature-text h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #222;
        }

        .feature-text p {
            font-size: 1.1rem;
            font-weight: 400;
            color: #444;
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
            flex-basis: 30%;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 1.6rem;
            font-weight: 600;
            color: #222;
        }

        .service-card p {
            font-size: 1.1rem;
            color: #555;
            margin-top: 10px;
        }

        .service-number {
            background-color: #ff6b6b;
            color: white;
            font-size: 2rem;
            font-weight: 700;
            padding: 20px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .service-icon {
            font-size: 3rem;
            color: #222;
        }

        .service-list {
            text-align: left;
            font-size: 1rem;
            margin-top: 20px;
        }

        .service-list li {
            margin: 10px 0;
            font-weight: 400;
            color: #444;
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
    </style>
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="ASR Logo">
            <span class="logo-text">Printing</span>
        </div>
        <nav>
            <a href="#features">Features</a>
            <a href="#products">Product</a>
            <a href="#testimony">Testimony</a>
            <a href="#contact">Contact</a>
        </nav>
        <a href="https://wa.me/your-number" class="flex items-center bg-blue-500 text-white px-3 py-2 rounded-full shadow-lg hover:bg-blue-600">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-5 h-5 mr-2">
            WhatsApp
        </a>
    </header>

    <!-- Main Section -->
    <section class="container mx-auto mt-12 flex flex-col md:flex-row items-center p-4 poppins-text">
        <div class="md:w-1/2 text-left">
            <h1 class="main-heading">Percetakan yang Cepat, Rapi, dan Berkualitas</h1>
            <p class="main-description mt-4">
                Dengan layanan percetakan yang cepat, rapi, dan berkualitas, setiap detail akan kami wujudkan agar terlihat sempurna.
                Percayakan kepada kami, karena kepuasan pelanggan adalah prioritas utama.
            </p>
            <a href="https://wa.me/your-number" class="whatsapp-button mt-4 inline-block bg-red-400 text-white px-5 py-2 rounded-full shadow-lg hover:bg-red-500">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-5 h-5 inline-block mr-2">
                WhatsApp
            </a>
        </div>
        <div class="md:w-1/2 flex justify-center mt-4 md:mt-0">
            <img src="{{ asset('images/logoprinter.png') }}" alt="ASRPrinting Logo" class="logoprinter">
        </div>
    </section>

    <!-- Feature Section: Apa Keunggulan dari ASR Printing? -->
    <section class="feature-section d-flex flex-wrap align-items-center poppins-text">
        <div class="col-md-6">
            <h1 class="feature-title">Apa Keunggulan dari ASR Printing?</h1>
            <p class="feature-description">
                Kami menyediakan layanan percetakan yang cepat, rapi, dan berkualitas tinggi dengan harga yang terjangkau.
            </p>
        </div>
        <div class="col-md-6">
            <div class="feature-list">
                <div class="feature-item">
                    <span class="feature-number">01</span>
                    <div class="feature-text">
                        <h3>Ketepatan Waktu</h3>
                        <p>Kami menjamin layanan yang cepat dan tepat waktu, sehingga Anda tidak perlu menunggu lama untuk hasil cetakan.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <span class="feature-number">02</span>
                    <div class="feature-text">
                        <h3>Harga Terjangkau</h3>
                        <p>Kami menawarkan harga terbaik dan kompetitif tanpa mengorbankan kualitas cetakan.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <span class="feature-number">03</span>
                    <div class="feature-text">
                        <h3>Kualitas Terbaik</h3>
                        <p>Kami menggunakan bahan dan tinta terbaik untuk memastikan hasil cetakan yang tajam dan tahan lama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="container service-container">
        <!-- Service Card 1: File Anda -->
        <div class="service-card">
            <div class="service-number">100%</div>
            <div class="service-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Check_icon.svg" alt="Check" class="w-8 h-8">
            </div>
            <h3>Aman</h3>
            <p>File Anda aman dan terjamin.</p>
        </div>

        <!-- Service Card 2: Print -->
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-print"></i>
            </div>
            <h3>Print</h3>
            <div class="service-list">
                <ul>
                    <li>Print A3</li>
                    <li>Print Timbul</li>
                    <li>Print Copy</li>
                    <li>FotoCopy</li>
                </ul>
            </div>
        </div>

        <!-- Service Card 3: Pembukuan -->
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-book"></i>
            </div>
            <h3>Pembukuan</h3>
            <div class="service-list">
                <ul>
                    <li>Pembukuan Skripsi</li>
                    <li>Pembukuan Tugas Akhir</li>
                    <li>Pembukuan Praktikum</li>
                    <li>Jilid Tugas Kuliah</li>
                    <li>Segala Jenis Pembukuan</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>
