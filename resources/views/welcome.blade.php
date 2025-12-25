<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trickanglepicture - Jasa Fotografi Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, rgba(37, 150, 190, 0.9), rgba(255, 152, 0, 0.9)),
                        url('/images/trickanglepicture.webp') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }

        @keyframes float {
            from {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            to {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        .navbar {
            background: rgba(255, 152, 0, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(255, 152, 0, 1) !important;
            box-shadow: 0 4px 30px rgba(0,0,0,0.15);
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: #2596be !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #2596be;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 10;
            position: relative;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: slideInUp 1s ease;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
            animation: slideInUp 1s ease 0.2s both;
        }

        .hero-buttons {
            animation: slideInUp 1s ease 0.4s both;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-primary-custom {
            background: linear-gradient(45deg, #2596be, #ff9800);
            border: none;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(37, 150, 190, 0.4);
            transition: all 0.3s ease;
            margin: 10px;
            position: relative;
            overflow: hidden;
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 150, 190, 0.6);
            background: linear-gradient(45deg, #ff9800, #2596be);
        }

        .btn-outline-custom {
            background: transparent;
            border: 2px solid white;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            border-radius: 50px;
            transition: all 0.3s ease;
            margin: 10px;
        }

        .btn-outline-custom:hover {
            background: white;
            color: #2596be;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
        }

        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            color: #2596be;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #2596be, #ff9800);
            border-radius: 2px;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #2596be, #ff9800);
        }

        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .service-icon {
            font-size: 3rem;
            color: #ff9800;
            margin-bottom: 1.5rem;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2596be;
            margin-bottom: 1rem;
        }

        .gallery-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }

        .gallery-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(37, 150, 190, 0.8) 100%);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-title {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
            margin: 20px 0;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 30px;
            font-size: 4rem;
            color: #ff9800;
            font-family: Georgia, serif;
        }

        .testimonial-text {
            font-style: italic;
            color: #666;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .testimonial-author {
            font-weight: 600;
            color: #2596be;
        }

        .testimonial-role {
            color: #ff9800;
            font-size: 0.9rem;
        }

        .contact-section {
            background: linear-gradient(135deg, #2596be 0%, #ff9800 100%);
            color: white;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 10px;
            padding: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 152, 0, 0.3);
            transform: translateY(-2px);
        }

        .footer {
            background: #1a1a1a;
            color: white;
            padding: 50px 0 30px;
        }

        .footer-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ff9800;
            margin-bottom: 1rem;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: rgba(255, 152, 0, 0.2);
            color: #ff9800;
            border-radius: 50%;
            margin: 0 5px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #ff9800;
            color: white;
            transform: translateY(-3px);
        }

        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #2596be, #ff9800);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        .scroll-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-particles" id="particles"></div>
        
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#hero">
                    <img src="/images/trickanglepicture.webp" alt="Logo" width="50" height="50"
                        class="rounded-circle me-3 border border-white shadow">
                    <span class="fw-bold fs-4 text-white">Trickanglepicture</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#hero">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimoni</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Content -->
        <div class="hero-content">
            <h1 class="hero-title" data-aos="fade-up">Trickanglepicture</h1>
            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                Jasa Fotografi Profesional untuk Mengabadikan Momen Terbaik Anda
            </p>
            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="#services" class="btn btn-primary-custom">Lihat Layanan</a>
                <a href="https://instagram.com/trickanglepicture" target="_blank" class="btn btn-outline-custom">
                    <i class="bi bi-instagram me-2"></i>Instagram
                </a>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Layanan Kami</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                    Profesional, kreatif, dan berpengalaman dalam berbagai jenis fotografi
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-camera"></i>
                        </div>
                        <h3 class="service-title">Product Photography</h3>
                        <p class="text-muted">
                            Foto produk berkualitas tinggi yang menarik perhatian dan meningkatkan penjualan bisnis Anda. 
                            Studio profesional dengan lighting terbaik.
                        </p>
                        <a href="#contact" class="btn btn-primary-custom btn-sm">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h3 class="service-title">Prewedding & Wedding</h3>
                        <p class="text-muted">
                            Abadikan momen paling berharga dalam hidup Anda dengan hasil foto yang elegan, 
                            romantis, dan penuh arti.
                        </p>
                        <a href="#contact" class="btn btn-primary-custom btn-sm">Konsultasi Gratis</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h3 class="service-title">Event & Company Profile</h3>
                        <p class="text-muted">
                            Dokumentasi acara korporat dan profil perusahaan yang profesional untuk 
                            meningkatkan citra brand Anda.
                        </p>
                        <a href="#contact" class="btn btn-primary-custom btn-sm">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Portfolio Gallery</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                    Hasil karya terbaik kami yang telah memuaskan berbagai klien
                </p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                    <img src="/images/gallery1.webp" alt="Product Photography">
                    <div class="gallery-overlay">
                        <div class="gallery-title">Product Photography</div>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                    <img src="/images/gallery2.webp" alt="Wedding Photography">
                    <div class="gallery-overlay">
                        <div class="gallery-title">Wedding Photography</div>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <img src="/images/gallery3.webp" alt="Event Photography">
                    <div class="gallery-overlay">
                        <div class="gallery-title">Event Photography</div>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                    <img src="/images/gallery4.webp" alt="Portrait Photography">
                    <div class="gallery-overlay">
                        <div class="gallery-title">Portrait Photography</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Testimoni Klien</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                    Apa yang klien katakan tentang layanan kami
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Hasil fotonya sangat memuaskan dan pelayanan sangat ramah! Produk kami jadi terlihat 
                            lebih profesional setelah difoto oleh Trickanglepicture."
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <div class="testimonial-author">Rina Wijaya</div>
                                <div class="testimonial-role">Owner Fashion Store, Jakarta</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Fotografernya profesional, hasil foto prewedding kami sangat keren! Moment-moment 
                            berharga kami terabadikan dengan sempurna."
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <div class="testimonial-author">Andi & Maya</div>
                                <div class="testimonial-role">Happy Couple, Bandung</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Event company kami berhasil sukses berkat dokumentasi foto yang profesional. 
                            Highly recommended untuk corporate event!"
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <div class="testimonial-author">Budi Santoso</div>
                                <div class="testimonial-role">Event Manager, Surabaya</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Kualitas foto sangat bagus, proses editing cepat, dan harga terjangkau. 
                            Sangat puas dengan hasil kerja Trickanglepicture!"
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <div class="testimonial-author">Sarah Putri</div>
                                <div class="testimonial-role">Content Creator, Yogyakarta</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-white" data-aos="fade-up">Hubungi Kami</h2>
                <p class="lead text-white-50" data-aos="fade-up" data-aos-delay="100">
                    Siap untuk project photography Anda? Mari diskusikan kebutuhan Anda
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="contact-form">
                        <h3 class="text-white mb-4">Kirim Pesan</h3>
                        <form>
                            <div class="mb-3">
                                <label class="form-label text-white">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Anda" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Email</label>
                                <input type="email" class="form-control" placeholder="email@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Nomor WhatsApp</label>
                                <input type="tel" class="form-control" placeholder="+62 8xx xxxx xxxx" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Jenis Layanan</label>
                                <select class="form-select" required>
                                    <option value="">Pilih Layanan</option>
                                    <option value="product">Product Photography</option>
                                    <option value="wedding">Wedding/Prewedding</option>
                                    <option value="event">Event Photography</option>
                                    <option value="corporate">Company Profile</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Pesan</label>
                                <textarea class="form-control" rows="4" placeholder="Ceritakan tentang project Anda..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-light btn-lg w-100">
                                <i class="bi bi-send me-2"></i>Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="ps-lg-5">
                        <h3 class="text-white mb-4">Informasi Kontak</h3>
                        <div class="contact-info mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <i class="bi bi-envelope-fill text-white fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-white mb-1">Email</h5>
                                    <p class="text-white-50 mb-0">trickanglepicture@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <i class="bi bi-whatsapp text-white fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-white mb-1">WhatsApp</h5>
                                    <p class="text-white-50 mb-0">+62 812-3456-7890</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <i class="bi bi-geo-alt-fill text-white fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-white mb-1">Lokasi Studio</h5>
                                    <p class="text-white-50 mb-0">Jakarta, Indonesia</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <i class="bi bi-clock-fill text-white fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-white mb-1">Jam Operasional</h5>
                                    <p class="text-white-50 mb-0">Senin - Sabtu: 09:00 - 21:00 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="text-white mb-3">Follow Us</h5>
                            <div class="social-links">
                                <a href="https://instagram.com/trickanglepicture" target="_blank" title="Instagram">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="#" target="_blank" title="Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" target="_blank" title="Twitter">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#" target="_blank" title="YouTube">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-brand">Trickanglepicture</div>
                    <p class="text-white-50">
                        Professional photography services for your special moments. 
                        Capturing memories with creativity and passion.
                    </p>
                    <div class="social-links mt-3">
                        <a href="https://instagram.com/trickanglepicture" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5 class="text-white mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Layanan</a></li>
                        <li class="mb-2"><a href="#gallery" class="text-white-50 text-decoration-none">Portfolio</a></li>
                        <li class="mb-2"><a href="#testimonials" class="text-white-50 text-decoration-none">Testimoni</a></li>
                        <li class="mb-2"><a href="#contact" class="text-white-50 text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-white mb-3">Layanan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Product Photography</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Wedding Photography</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Event Documentation</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Company Profile</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="text-white-50 mb-3">Dapatkan tips photography dan promo terbaru dari kami</p>
                    <form class="d-flex">
                        <input type="email" class="form-control me-2" placeholder="Email Anda">
                        <button type="submit" class="btn btn-primary-custom">Subscribe</button>
                    </form>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="text-center text-white-50">
                <p class="mb-0">&copy; 2024 Trickanglepicture. All rights reserved. | 
                <a href="#" class="text-white-50 text-decoration-underline">Privacy Policy</a> | 
                <a href="#" class="text-white-50 text-decoration-underline">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <div class="scroll-to-top" id="scrollToTop">
        <i class="bi bi-arrow-up"></i>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Particle Animation
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (15 + Math.random() * 10) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Scroll to top button
            const scrollToTop = document.getElementById('scrollToTop');
            if (window.scrollY > 300) {
                scrollToTop.classList.add('show');
            } else {
                scrollToTop.classList.remove('show');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll to top functionality
        document.getElementById('scrollToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });
            
            // Show success message
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="bi bi-check-circle me-2"></i>Pesan Terkirim!';
            button.classList.remove('btn-light');
            button.classList.add('btn-success');
            
            // Reset form
            this.reset();
            
            // Reset button after 3 seconds
            setTimeout(() => {
                button.innerHTML = originalText;
                button.classList.remove('btn-success');
                button.classList.add('btn-light');
            }, 3000);
        });

        // Gallery lightbox effect (optional enhancement)
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                const img = this.querySelector('img');
                const modal = document.createElement('div');
                modal.className = 'modal fade show';
                modal.style.display = 'block';
                modal.style.backgroundColor = 'rgba(0,0,0,0.9)';
                modal.innerHTML = `
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content bg-transparent border-0">
                            <div class="modal-body text-center">
                                <img src="${img.src}" class="img-fluid rounded" alt="${img.alt}">
                                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                            </div>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(modal);
                
                modal.addEventListener('click', function(e) {
                    if (e.target === modal || e.target.classList.contains('btn-close')) {
                        modal.remove();
                    }
                });
            });
        });

        // Initialize particles when page loads
        window.addEventListener('load', createParticles);

        // Newsletter subscription
        document.querySelector('.footer form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            if (email) {
                const button = this.querySelector('button');
                const originalText = button.textContent;
                button.textContent = 'Terima Kasih!';
                button.classList.add('btn-success');
                this.reset();
                
                setTimeout(() => {
                    button.textContent = originalText;
                    button.classList.remove('btn-success');
                }, 3000);
            }
        });
    </script>
</body>

</html>
