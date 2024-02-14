@extends('layouts.layouts')

@section('content')
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
            <a href="/berita" class="btn btn-outline-danger" data-aos="fade-down">Berita Lainnya</a>
        </div>
    </div>
</section>
<!-- News -->

<!-- Card -->
<section id="program" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="header-berita text-center">
                <h2 class="fw-bold py-5" data-aos="fade-down">Departemen Kami</h2>
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
</section>


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
<section id="foto" class="section-foto parallax" style="margin-top: 100px" data-aos="zoom-in-up">
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
</section>


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
                <p class="mb-3" data-aos="fade-down">Kritik atau Saranmu pasti akan membantu kami untuk semakin berkembang. Terima Kasih.</p>
                <button class="btn btn-outline-danger" data-aos="fade-down">
                    Form Kritik dan Saran
                </button>
            </div>
            <div class="col-lg-6 py-3">
                <img src="{{ asset('assets/images/main-banner-1.jpg') }}" alt="" class="img-fluid img-outline-berita ml-auto" data-aos="flip-down">
            </div>
        </div>
    </div>
</section>
@endsection