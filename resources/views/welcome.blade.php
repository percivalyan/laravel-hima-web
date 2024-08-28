@extends('layouts.layouts')

@section('content')
    <section id="hero" class="px-0">
        <div class=" container text-left text-white">
            <div class="hero-title" data-aos="fade-up">

                {{-- <h5 >Himpunan Mahasiswa Teknik Informatika Universitas Pamulang</h5><br> --}}
                {{-- <div class="hero-text">
                    Selamat Datang <br> Di Website Himpunan Mahasiswa <br> Teknik Informatika Universitas Pamulang
                </div> --}}
                <div class="container">
                    <div class="row py-5">
                        {{-- <div class="col border-start border-4 border-danger" style="color: #dc3545"> --}}
                        {{-- <h1>Selamat Datang</h1>
                    <h1 class="text-center">Di Website <br><strong style="color: #dc3545">Himpunan Mahasiswa <br> --}}
                        <h1 class="text-center"><strong
                                style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Selamat Datang
                                di</strong></h1>
                        <h1 class="text-center"><strong
                                style="color: #dc3545; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Website Himpunan
                                Mahasiswa</strong></h1>
                        <h1 class="text-center"><strong
                                style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                Teknik Informatika Universitas Pamulang
                            </strong></h1>
                        <h6 class="hidden-text-hero text-center"
                            style="color: #ffffff; text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.2);">
                            Web dokumentasi kegiatan himpunan mahasiswa dalam lingkungan kampus</h6>

                    </div>
                </div>

            </div>
            <br>
            {{-- <h6 style="color: #dc3545">Web dokumentasi kegiatan himpunan mahasiswa dalam lingkungan kampus</h6> --}}
        </div>
    </section>

    <!-- Card -->
    {{-- <section id="program" style="margin-top: -45px">
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
</section> --}}

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

    {{-- About --}}
    <section id="about" class="py-5">
        <div class="container py-5" data-aos="fade-down">
            {{-- <div class="header-berita text-center">
            <h2 class="fw-bold" data-aos="fade-down">Berita Kegiatan Organisasi Kami</h2>
        </div> --}}
            <div class="row d-flex align-items-center">
                <div class="about-gambar col-lg-6 py-3">
                    <img src="{{ asset('assets/images/main-banner.jpg') }}" alt=""
                        class="img-fluid img-outline-berita ml-auto " data-aos="flip-down"
                        style="height: 500px; width: auto;">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>Tentang Kami</h5>
                    </div>
                    <h2 class="fw-bold mb-2" data-aos="fade-down">Himpunan Teknik Informatika</h2>
                    <h2 class="fw-bold mb-2" data-aos="fade-down">Universitas Pamulang</h2>
                    <p class="mb-3" data-aos="fade-down" style="text-align: justify;">
                        Himpunan Mahasiswa Teknik Informatika (HIMTIF) adalah organisasi yang beranggotakan mahasiswa
                        program studi Teknik Informatika di sebuah perguruan tinggi. HIMTI bertujuan untuk menjadi wadah
                        bagi mahasiswa dalam mengembangkan pengetahuan, keterampilan, serta memperluas jaringan sosial di
                        bidang teknologi informasi.

                    <p class="mb-3" data-aos="fade-down" style="text-align: justify;">
                        Melalui berbagai kegiatan seperti seminar, workshop, kompetisi, dan kegiatan sosial, HIMTI berupaya
                        meningkatkan kualitas dan minat mahasiswa dalam bidang teknologi informasi serta memfasilitasi
                        pertukaran ide dan pengalaman di antara anggotanya.
                    </p>

                    {{-- <div class="container">
                    <ul class="list-unstyled">
                        <li>Point 1</li>
                        <li>Point 2</li>
                        <li>Point 3</li>
                        <li>Point 4</li>
                        <li>Point 5</li>
                    </ul>
                </div> --}}
                    {{-- <button class="btn btn-outline-danger" data-aos="fade-down">
                   Program Kerja Kami
                </button> --}}

                    <a href="/proker" class="btn btn-outline-danger" data-aos="fade-down">Program Kerja Kami</a>
                </div>
            </div>
        </div>
    </section>
    {{-- About --}}

    {{-- Alternative Card --}}
    <section id="card_departemen" class="py-5 bg-light">
        <div class="header-berita text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-down">Departemen Kami</h2>
        </div>

        <!-- Carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Card 1 -->
                <div class="carousel-item active">
                    <div class="container" data-aos="zoom-in">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="profile-card-4 text-center shadow" onclick="window.location.href='/bph';"
                                    style="cursor: pointer;">
                                    <img src="{{ asset('assets/images/ristek.jpg') }}" class="img-fluid rounded-top"
                                        alt="RISTEK Department">
                                    <div class="profile-content p-4">
                                        <h4 class="mb-1 text-primary">Departemen <br> PDD</h4>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="profile-card-4 text-center shadow" onclick="window.location.href='/bph';"
                                    style="cursor: pointer;">
                                    <img src="{{ asset('assets/images/ristek.jpg') }}" class="img-fluid rounded-top"
                                        alt="RISTEK Department">
                                    <div class="profile-content p-4">
                                        <h4 class="mb-1 text-primary">Departemen <br> RISTEK</h4>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="profile-card-4 text-center shadow" onclick="window.location.href='/bph';"
                                    style="cursor: pointer;">
                                    <img src="{{ asset('assets/images/humas.jpg') }}" class="img-fluid rounded-top"
                                        alt="HUMAS Department">
                                    <div class="profile-content p-4">
                                        <h4 class="mb-1 text-primary">Departemen <br> HUMAS</h4>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- More carousel items here -->

                <div class="carousel-item">
                    <div class="container" data-aos="zoom-in-up">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="profile-card-4 text-center shadow" onclick="window.location.href='/bph';"
                                    style="cursor: pointer;">
                                    <img src="{{ asset('assets/images/sosbud.jpg') }}" class="img-fluid rounded-top"
                                        alt="SOSBUD Department">
                                    <div class="profile-content p-4">
                                        <h4 class="mb-1 text-primary">Departemen <br> BPH</h4>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="profile-card-4 text-center shadow" onclick="window.location.href='/bph';"
                                    style="cursor: pointer;">
                                    <img src="{{ asset('assets/images/sosbud.jpg') }}" class="img-fluid rounded-top"
                                        alt="SOSBUD Department">
                                    <div class="profile-content p-4">
                                        <h4 class="mb-1 text-primary">Departemen <br> SOSBUD</h4>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="profile-card-4 text-center shadow" onclick="window.location.href='/bph';"
                                    style="cursor: pointer;">
                                    <img src="{{ asset('assets/images/psda.jpg') }}" class="img-fluid rounded-top"
                                        alt="PSDA Department">
                                    <div class="profile-content p-4">
                                        <h4 class="mb-1 text-primary">Departemen <br> PSDA</h4>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="bg-dark rounded-circle d-flex align-items-center justify-content-center" 
                      style="width: 40px; height: 40px;" aria-hidden="true">
                    <i class="fas fa-chevron-left text-white" style="font-size: 20px;"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="bg-dark rounded-circle d-flex align-items-center justify-content-center" 
                      style="width: 40px; height: 40px;" aria-hidden="true">
                    <i class="fas fa-chevron-right text-white" style="font-size: 20px;"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
    </section>

    <!-- JavaScript to initialize the carousel -->
    <script>
        var myCarousel = document.querySelector('#carouselExampleControls');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 500, // Set the interval you want the carousel to change slides (in milliseconds)
            wrap: true // Set to false if you don't want the carousel to wrap around
        });
    </script>

    {{-- Departement Card --}}


    <!-- News -->
    <section id="berita" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold" data-aos="fade-down">Berita Kegiatan Organisasi Kami</h2>
            </div>

            <div class="row py-5">
                <!-- News #1 -->
                <div class="row justify-content-center">
                    <!-- Teks di sebelah kiri gambar -->
                    <div class="col-lg-4" data-aos="flip-down">
                        <img src="{{ asset('assets/images/hpc.png') }}" class="img-fluid mb-3 img-outline-berita"
                            alt="">
                        {{-- <div class="konten-berita">
                        </div> --}}
                    </div>
                    <div class="col-lg-4" data-aos="flip-down">
                        <p class="mb-3 text-secondary">01/02/2024</p>
                        {{-- <h4 class="fw-bold mb-3" >How to Create Diagram with Python in Google Colab</h4> --}}
                        <p class="fw-bold mb-3" style="font-size: 24px">Himtif Programming Course</p>
                        {{-- <p class="text-secondary">#pythonprogramming</p> --}}
                        <a href="" class="text-decoration-none text-danger">Read All...</a>
                    </div>
                </div>

                <div class="row justify-content-center" style="margin-top: 10px">
                    <!-- Teks di sebelah kiri gambar -->
                    <div class="col-lg-4" data-aos="flip-down">
                        <img src="{{ asset('assets/images/Rudistif.JPG') }}" class="img-fluid mb-3 img-outline-berita"
                            alt="">
                        {{-- <div class="konten-berita">
                        </div> --}}
                    </div>
                    <div class="col-lg-4" data-aos="flip-down">
                        <p class="mb-3 text-secondary">01/02/2024</p>
                        {{-- <h4 class="fw-bold mb-3" >How to Create Diagram with Python in Google Colab</h4> --}}
                        <p class="fw-bold mb-3" style="font-size: 24px">Ruang Diskusi Teknik Informatika</p>
                        {{-- <p class="text-secondary">#pythonprogramming</p> --}}
                        <a href="" class="text-decoration-none text-danger">Read All...</a>
                    </div>
                </div>

                <div class="row justify-content-center" style="margin-top: 10px">
                    <!-- Teks di sebelah kiri gambar -->
                    <div class="col-lg-4" data-aos="flip-down">
                        <img src="{{ asset('assets/images/podcast.png') }}" class="img-fluid mb-3 img-outline-berita"
                            alt="">
                        {{-- <div class="konten-berita">
                        </div> --}}
                    </div>
                    <div class="col-lg-4" data-aos="flip-down">
                        <p class="mb-3 text-secondary">01/02/2024</p>
                        {{-- <h4 class="fw-bold mb-3" >How to Create Diagram with Python in Google Colab</h4> --}}
                        <p class="fw-bold mb-3" style="font-size: 24px">Podcast Maha Suara Himtif</p>
                        {{-- <p class="text-secondary">#pythonprogramming</p> --}}
                        <a href="" class="text-decoration-none text-danger">Read All...</a>
                    </div>
                </div>

                <div class="footer text-center py-5">
                    <a href="/berita" class="btn btn-outline-danger" data-aos="fade-down">Berita Lainnya</a>
                </div>
            </div>
    </section>
    <!-- News -->

    {{-- Album --}}
    <section id="gallery" class="py-5">
        <div class="container">
            <div class="header-berita text-center py-5">
                <h2 class="fw-bold" data-aos="fade-down">Gallery Kegiatan Organisasi Kami</h2>
            </div>
            <!-- Gallery -->
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/rdt1.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" />

                    <img src="{{ asset('assets/images/r2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/mhs12.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds" />

                    <img src="{{ asset('assets/images/2hima.JPG') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/jggl2.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea" />

                    <img src="{{ asset('assets/images/Rudistif.JPG') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park" />
                </div>
                {{-- 
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
                />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Waves at Sea"
                />
            </div>

            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
                />
            </div> --}}

            </div>
            <!-- Gallery -->
            <a href="/proker" class="btn btn-outline-danger" data-aos="fade-down">Lihat Gallery Kami Lainnya</a>
        </div>
    </section>

    <!-- Card -->
    {{-- <section id="program" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="header-berita text-center">
                <h2 class="fw-bold py-5" data-aos="fade-down">Departemen Kami</h2>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-up">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/icons/ristek.jpg') }}" height="90" width="90" alt="" style="margin-bottom: 10px;">
                    <div style="text-align: center;">
                        <p style="margin: 0; font-size: 18px;">HIMTIF FANTASTIC</p>
                        <p style="font-size: 12px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet distinctio quia ducimus maxime tempora accusamus, qui quisquam nisi sunt reprehenderit ratione porro doloribus labore! Molestiae rerum minus magnam nesciunt atque.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-up">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/icons/cal.png') }}" height="55" width="55" alt="" style="margin-bottom: 10px;">
                    <div style="text-align: center;">
                        <p style="margin: 0; font-size: 18px;">HIMTIF FANTASTIC</p>
                        <p style="font-size: 12px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet distinctio quia ducimus maxime tempora accusamus, qui quisquam nisi sunt reprehenderit ratione porro doloribus labore! Molestiae rerum minus magnam nesciunt atque.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-up">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/icons/cal.png') }}" height="55" width="55" alt="" style="margin-bottom: 10px;">
                    <div style="text-align: center;">
                        <p style="margin: 0; font-size: 18px;">HIMTIF FANTASTIC</p>
                        <p style="font-size: 12px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet distinctio quia ducimus maxime tempora accusamus, qui quisquam nisi sunt reprehenderit ratione porro doloribus labore! Molestiae rerum minus magnam nesciunt atque.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-3">
            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-up">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/icons/cal.png') }}" height="55" width="55" alt="" style="margin-bottom: 10px;">
                    <div style="text-align: center;">
                        <p style="margin: 0; font-size: 18px;">HIMTIF FANTASTIC</p>
                        <p style="font-size: 12px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet distinctio quia ducimus maxime tempora accusamus, qui quisquam nisi sunt reprehenderit ratione porro doloribus labore! Molestiae rerum minus magnam nesciunt atque.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-up">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/icons/cal.png') }}" height="55" width="55" alt="" style="margin-bottom: 10px;">
                    <div style="text-align: center;">
                        <p style="margin: 0; font-size: 18px;">HIMTIF FANTASTIC</p>
                        <p style="font-size: 12px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet distinctio quia ducimus maxime tempora accusamus, qui quisquam nisi sunt reprehenderit ratione porro doloribus labore! Molestiae rerum minus magnam nesciunt atque.</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan satu kolom lagi di sini -->
        </div>
    </div>
</section> --}}


    <!-- Register -->
    {{-- <section id="join" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold" data-aos="fade-down">Berita Kegiatan Organisasi Kami</h2>
        </div>
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
</section> --}}

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
    {{-- <section id="youtube_video" class="py-5">
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
</section> --}}
    <!-- Video -->

    {{-- Foto --}}
    {{-- <section id="foto" class="section-foto parallax" style="margin-top: 100px" data-aos="zoom-in-up" class="py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <div class="stripe-putih"></div>
                <h5 class="fw-bold text-white" data-aos="fade-down">Aktivitas Organisasi Kami</h5>
            </div>
            <div>
                <!-- Memperbaiki atribut href dengan URL yang sesuai -->
                <a href="/foto" class="btn btn-outline-light" data-aos="fade-down">Lihat Dokumentasi</a>
            </div>
        </div>

       <div class="row">
           <div class="col-lg-3 col-md-6 col-6 py-2">
               <a href="{{ asset('assets/images/anime-vibe-01.jpg') }}" class="image-link">
                   <img src="{{ asset('assets/images/anime-vibe-01.jpg') }}" alt="" class="img-fluid img-outline-prestasi" data-aos="flip-down">
               </a>
           </div>

           <div class="col-lg-3 col-md-6 col-6 py-2">
               <a href="{{ asset('assets/images/anime-vibe-05.jpg') }}" class="image-link">
                   <img src="{{ asset('assets/images/anime-vibe-05.jpg') }}" alt="" class="img-fluid img-outline-prestasi" data-aos="flip-down">
               </a>
           </div>

           <div class="col-lg-3 col-md-6 col-6 py-2">
               <a href="{{ asset('assets/images/anime-vibe-03.jpg') }}" class="image-link">
                   <img src="{{ asset('assets/images/anime-vibe-03.jpg') }}" alt="" class="img-fluid img-outline-prestasi" data-aos="flip-down">
               </a>
           </div>

           <div class="col-lg-3 col-md-6 col-6 py-2">
               <a href="{{ asset('assets/images/anime-vibe-04.jpg') }}" class="image-link">
                   <img src="{{ asset('assets/images/anime-vibe-04.jpg') }}" alt="" class="img-fluid img-outline-prestasi" data-aos="flip-down">
               </a>
           </div>
       </div>
    </div>
</section> --}}


    {{-- <section id="prestasi" class="py-5">
    <div class="container py-5">
        <div class="text-center">
            <h3 class="fw-bold" data-aos="fade-down">Prestasi Organisasi</h3>
        </div>
        <img src="{{ asset('assets/images/anime-light-02.jpg') }}" alt="" class="img-fluid py-5" data-aos="flip-down">

        <div class="text-center">
            <a href="" class="btn btn-outline-danger" data-aos="fade-down">Lihat Prestasi Lain</a>
        </div>
    </div>
</section> --}}

    {{-- Video --}}
    <section id="youtube_video" class="py-5">
        <div class="container py-5 overflow-x">
            <div class="header-berita text-center">
                <h2 class="fw-bold" data-aos="fade-down">Video Kegiatan</h2>
            </div>

            <div class="row py-5 justify-content-center" data-aos="flip-down">
                <div class="row">
                    <div class="col-lg-4 justify-content-center">
                        <iframe width="100%" height="190px"
                            src="https://www.youtube.com/embed/DST5W8I-EjY?si=gCC9HDE3pqHAdKeE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4 justify-content-center">
                        <iframe width="100%" height="190px"
                            src="https://www.youtube.com/embed/9S4IeXEFJXY?si=eHOvmjK6hAS6BuXQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4 justify-content-center">
                        <iframe width="100%" height="190px"
                            src="https://www.youtube.com/embed/fkU7TEy6mTw?si=8OfW1vG4HptvoLYc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center justify-content-center">
                <a href="https://www.youtube.com/@himtifunpam9658" class="btn btn-outline-danger"
                    data-aos="fade-down">Lihat Video Lain di Kanal Kami</a>
            </div>
        </div>
    </section>


    {{-- Kritik dan Saran --}}
    <section id="join" class="py-5">
        <div class="container py-5">
            {{-- <div class="header-berita text-center">
            <h2 class="fw-bold" data-aos="fade-down">Berita Kegiatan Organisasi Kami</h2>
        </div> --}}
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3" data-aos="fade-down">
                        <div class="stripe me-2"></div>
                        <h5>Kritik dan Saran</h5>
                    </div>
                    <h1 class="fw-bold mb-2" data-aos="fade-down">Berikan Kritik atau Saranmu untuk Kami!</h1>
                    <p class="mb-3" data-aos="fade-down">Kritik atau Saranmu pasti akan membantu kami untuk semakin
                        berkembang. Terima Kasih.</p>
                    <button class="btn btn-outline-danger" data-aos="fade-down">
                        Form Kritik dan Saran
                    </button>
                </div>
                <div class="col-lg-6 py-3">
                    <img src="{{ asset('assets/images/main-banner-1.jpg') }}" alt=""
                        class="img-fluid img-outline-berita ml-auto" data-aos="flip-down">
                </div>
            </div>
        </div>
    </section>
@endsection
