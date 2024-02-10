<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/icons/icon.ico') }}">
    <title>Reinas Webui</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" data-aos="fade-up" data-aos-anchor-placement="top-center">
                <img src="{{ asset('assets/icons/icon.ico') }}" height="55" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <a class="nav-link active" href="#">Profile</a>
                    </li>
                    <li class="nav-item" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <a class="nav-link active" href="#">Berita</a>
                    </li>
                    <li class="nav-item" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <a class="nav-link active" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <a class="nav-link active" href="#">Gallery</a>
                    </li>
                    <li class="nav-item" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <a class="nav-link active" href="#">Kontak</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-danger" data-aos="fade-up" data-aos-anchor-placement="top-center">Login</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Navbar untuk mode selain desktop -->
    <nav class="navbar-mobile navbar-dark py-3 fixed-top bg-danger" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentMobile" aria-controls="navbarSupportedContentMobile" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContentMobile">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" data-aos="fade-down">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down">
                        <a class="nav-link active" href="#">Profile</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down">
                        <a class="nav-link active" href="#">Berita</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down">
                        <a class="nav-link active" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down">
                        <a class="nav-link active" href="#">Gallery</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down">
                        <a class="nav-link active" href="#">Kontak</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-danger" data-aos="fade-down">Login</button>
                </form>
            </div>
        </div>
    </nav>

    <section id="hero" class="px-0">
        <div class=" container text-center text-white">
            <div class="hero-title" data-aos="fade-up">
                <div class="hero-text">
                    Selamat Datang <br> Di Website Himpunan Mahasiswa <br> Teknik Informatika Universitas Pamulang
                </div>
                <h6>Web dokumentasi kegiatan himpunan mahasiswa dalam lingkungan kampus</h6><br>
            </div>
        </div>
    </section>

    <!-- Card -->
    <section id="program" style="margin-top: -45px">
        <div class="container col-xxl-9">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col" data-aos="zoom-in-up">
                    <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
                        <div>
                            <p>HIMTIF <br> FANTASTIC</p>
                        </div>
                        <img src="{{ asset('assets/icons/cal.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col" data-aos="zoom-in-up">
                    <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
                        <div>
                            <p>HIMTIF <br> COURSE</p>
                        </div>
                        <img src="{{ asset('assets/icons/programming.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col" data-aos="zoom-in-up">
                    <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
                        <div>
                            <p>HIMTIF <br> DISCUSSION</p>
                        </div>
                        <img src="{{ asset('assets/icons/dis.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col" data-aos="zoom-in-up">
                    <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
                        <div>
                            <p>HIMTIF <br> SPORT</p>
                        </div>
                        <img src="{{ asset('assets/icons/sport.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- <section id="program" style="margin-top: 20px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Departemen SOSBUD</h5>
                        </div>
                        <img src="{{ asset('assets/images/card-seni-2.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Departemen RISTEK</h5>
                        </div>
                        <img src="{{ asset('assets/images/card-seni-2.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

            </div>
    </section> -->
    <!-- Card -->

    <!-- News -->
    <section id="berita" class="py-5">
        <div class="container py-4">
            <div class="header-berita text-center">
                <h2 class="fw-bold" data-aos="fade-down">Berita Kegiatan Organisasi Kami</h2>
            </div>

            <div class="row py-3">
                <!-- News #1 -->

                <div class="col-lg-4" data-aos="flip-down">
                    <img src="{{ asset('assets/images/banner-3.jpg') }}" class="img-fluid mb-3 img-outline-berita" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">01/02/2024</p>
                        <h4 class="fw-bold mb-3">How to Create Diagram with Python</h4>
                        <p class="text-secondary">#pythonprogramming</p>
                        <a href="" class="text-docoration-none text-danger">Read All...</a>
                    </div>
                    <!-- Baris antar berita, terlihat jika pakai HP -->
                    <br>
                </div>

                <!-- News #2 -->
                <div class="col-lg-4" data-aos="flip-down">
                    <img src="{{ asset('assets/images/banner-2-anime.jpg') }}" class="img-fluid mb-3 img-outline-berita" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">02/02/2024</p>
                        <h4 class="fw-bold mb-3">Machine Learning and Android Programming</h4>
                        <p class="text-secondary">#machinelearning #android</p>
                        <a href="" class="text-docoration-none text-danger">Read All...</a>
                    </div>
                    <!-- Baris antar berita, terlihat jika pakai HP -->
                    <br>
                </div>

                <!-- News #3 -->
                <div class="col-lg-4" data-aos="flip-down">
                    <img src="{{ asset('assets/images/banner-1.jpg') }}" class="img-fluid mb-3 img-outline-berita" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">03/02/2024</p>
                        <h4 class="fw-bold mb-3">How to Create a Responsive Website with Laravel</h4>
                        <p class="text-secondary">#laravel #responsive</p>
                        <a href="" class="text-docoration-none text-danger">Read All...</a>
                    </div>
                    <!-- Baris antar berita, terlihat jika pakai HP -->
                    <!-- <br> -->
                </div>

            </div>

            <div class="footer text-center">
                <a href="" class="btn btn-outline-danger" data-aos="fade-down">Berita Lainnya</a>
            </div>


        </div>
    </section>
    <!-- News -->

    <!-- Register -->
    <section id="join" class="py-5">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3" data-aos="fade-down">
                        <div class="stripe me-2"></div>
                        <h5>Bergabung Bersama Kami</h5>
                    </div>
                    <h1 class="fw-bold mb-2" data-aos="fade-down">Lead yourself, show your creativity!</h1>
                    <p class="mb-3" data-aos="fade-down">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit illum velit rerum nihil voluptate dicta impedit maiores sint totam blanditiis.</p>
                    <button class="btn btn-outline-danger" data-aos="fade-down">
                        Registrasi
                    </button>
                </div>
                <div class="col-lg-6 py-3">
                    <img src="{{ asset('assets/images/myriad.jpg') }}" alt="" class="img-fluid img-outline-berita ml-auto" data-aos="flip-down">
                </div>
            </div>
        </div>
    </section>
    <!-- Register -->

    <!-- Video -->
    <!-- <section id="video" class="py-5">
        <div class="container py-5">
            <div class="text-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DST5W8I-EjY?si=gCC9HDE3pqHAdKeE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section> -->
    <!-- Video -->

    <!-- Video -->
    <section id="youtube_video" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold" data-aos="fade-down">Video Kegiatan Organisasi Kami</h2>
            </div>

            <div class="row py-5" data-aos="flip-down">
                <div class="row">
                    <div class="col-lg-4">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/DST5W8I-EjY?si=gCC9HDE3pqHAdKeE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/9S4IeXEFJXY?si=eHOvmjK6hAS6BuXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/fkU7TEy6mTw?si=8OfW1vG4HptvoLYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="https://www.youtube.com/@himtifunpam9658" class="btn btn-outline-danger" data-aos="fade-down">Lihat Video Lain di Kanal Kami</a>
            </div>
        </div>
    </section>
    <!-- Video -->

    <section id="foto" class="section-foto parallax">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <div class="stripe-putih"></div>
                    <h5 class="fw-bold text-white" data-aos="fade-down">Aktivitas Organisasi Kami</h5>
                </div>
                <div>
                    <!-- Memperbaiki atribut href dengan URL yang sesuai -->
                    <a href="link-ke-galeri-lainnya.html" class="btn btn-outline-light" data-aos="fade-down">Dokumentasi Lain</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/images/anime-vibe-01.jpg') }}" alt="" class="img-fluid img-outline-prestasi" data-aos="flip-down">
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/images/anime-vibe-05.jpg') }}" alt="" class="img-fluid img-outline-prestasi" data-aos="flip-down">
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/images/anime-vibe-03.jpg') }}" alt="" class="img-fluid img-outline-prestasi" data-aos="flip-down">
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/images/anime-vibe-04.jpg') }}" alt="" class="img-fluid img-outline-prestasi" data-aos="flip-down">
                </div>

            </div>
        </div>
    </section>

    <section id="prestasi" class="py-5">
        <div class="container py-5">
            <div class="text-center">
                <h3 class="fw-bold" data-aos="fade-down">Prestasi Organisasi</h3>
            </div>
            <img src="{{ asset('assets/images/anime-light-02.jpg') }}" alt="" class="img-fluid py-5" data-aos="flip-down">

            <div class="text-center">
                <a href="" class="btn btn-outline-danger" data-aos="fade-down">Lihat Prestasi Lain</a>
            </div>
        </div>
    </section>

    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                    <!-- Kolom 1 Media Sosial-->
                    <div class="col-12 col-md-4 mb-4">
                        <h5 class="fw-bold mb-3">Ikuti Kami</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted"><i class="fab fa-instagram"></i> Instagram</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted"><i class="fab fa-facebook"></i> Facebook</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted"><i class="fab fa-youtube"></i> YouTube</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted"><i class="fab fa-linkedin"></i> LinkedIn</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- Kolom 2 Alamat -->
                    <div class="col-12 col-md-4 mb-4">
                        <h5 class="font-inter fw-bold mb-3">Alamat Sekretariat</h5>
                        <p> Jl. Raya Kota, No. 123, <br> Pamulang, Tangerang Selatan. </p>
                    </div>

                    <!-- Kolom 3 Kontak -->
                    <div class="col-12 col-md-4 mb-4">
                        <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">info@himpunan.sch.id</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">+62 xx xxx xxx (WhatsApp)</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">+62 xx xxx xxx (WhatsApp)</a></li>
                        </ul>
                    </div>

                </div>
            </footer>
        </div>
    </section>


    <section class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div>Himpunan Mahasiswa Tekmik Informatika (HTMTIF)</div>
                <div class="d-flex">
                    <p class="me-4">Syarat & Ketentuan</p>
                    <p>
                        <a href="" class="text-decoration-none text-dark">Kebijakan Privasi</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                navbar.classList.add("navbar-dark");
            }
        };

        AOS.init();
    </script>

</body>

</html>