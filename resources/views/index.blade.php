<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>SIANTON</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/LOGO.png" rel="icon">
    <link href="{{ asset('assets') }}/img/LOGO.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    
    @yield("component_js")
</head>

<body>
    
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            
            <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="{{ asset('admin') }}/assets/img/logo_sianton.png" alt="" class="img-fluid"></a>
            
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#home">Home</a></li>
                    <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#pelayanan">Pelayanan</a></li>
                    <li><a class="nav-link scrollto" href="#jadwalpraktek">Jadwal Praktek</a></li>
                    <li><a class="nav-link scrollto" href="#footer">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="#daftarantrian">Daftar Antrian</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            
        </div>
    </header><!-- End Header -->
    
    <!-- ======= Hero Section ======= -->
    <section id="home" class="d-flex align-items-center">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Selamat Datang di</h1>
                    <h1>Praktek Dokter Umum</h1>
                    <h2>dr.Iyan Rakhmawati</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#daftarantrian" class="btn-get-started scrollto">Daftar Antrian</a>
                        <!-- {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}} -->
                        {{-- <a class="glightbox btn-watch-video" style="margin-left:10px;" href="#about">Daftar Antrian</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets') }}/img/home-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
        
    </section><!-- End Hero -->
    
    <main id="main">
        
        <!-- ======= Tentang Dokter Section ======= -->
        <section id="tentang" class="about">
            <div class="container" data-aos="fade-up">
                
                <div class="section-title">
                    <h2>Tentang Dokter</h2>
                </div>
                
                <div class="row content">
                    
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{ url('/storage/'. $setting->gambar) }}" class="img-fluid" style="max-width: 76%;">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h3>{{ $setting->nama_dokter }}</h3>
                            <p class="fst-italic">
                                {{ $setting->tentang}}
                            </p>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->
        
        <!-- ======= Pelayanan Section ======= -->
        <section id="pelayanan" class="services section-bg">
            <div class="container" data-aos="fade-up">
                
                <div class="section-title">
                    <h2>Pelayanan</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-clipboard2-pulse"></i></div>
                            <h4><a href="">Pemeriksaan Anak & Dewasa</a></h4>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                            <h4><a href="">Cek Gula Darah, Kolestrol, Asam Urat dan lain-lain</a></h4>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-capsule"></i></div>
                            <h4><a href="">Pengobatan Umum, Suntik KB, dan Konsultasi</a></h4>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </section><!-- End Pelayanan Section -->
        
        <!-- ======= Jadwal Praktek Section ======= -->
        <section id="jadwalpraktek" class="pricing">
            @include('pasien.jadwalpraktik.jadwalpraktik');
        </section><!-- End Jadwal Praktek Section -->
        
        <!-- ======= Daftar Antrian Section ======= -->
        <section id="daftarantrian" class="contact section-bg">
            @include('pasien.daftarantrian');
        </section><!-- End Daftar Antrian Section -->
        
    </main><!-- End #main -->
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
        
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>Contact</h3>
                        <p>
                            {{ $setting->lokasi }} <br>
                            <strong>Phone:</strong> {{ $setting->nomer_telepon }}<br>
                            <strong>Email:</strong> {{ $setting->email }}<br>
                        </p>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#tentang">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#pelayanan">Pelayanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#jadwalpraktek">Jadwal Praktek</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#footer">Kontak</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 footer-links" style="text-align:center"> 
                        <h4>Our Social Networks</h4>
                        <div class="social-links">
                            <a href="#" class="twitter mb-2"><i class="bx bxl-twitter"></i></a><br>
                            <a href="#" class="facebook mb-2"><i class="bx bxl-facebook"></i></a><br>
                            <a href="#" class="instagram mb-2"><i class="bx bxl-instagram"></i></a><br>
                            <a href="#" class="google-plus mb-2"><i class="bx bxl-skype"></i></a><br>
                            <a href="#" class="linkedin mb-2"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </footer><!-- End Footer -->
    
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->

    <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>
    
    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>
    
</body>
</html>