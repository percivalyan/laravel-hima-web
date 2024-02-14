@extends('layouts.layouts')

@section('content')
    <!-- News -->
<section id="berita" style="margin-top: 100px" class="py-5">
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
@endsection