<!-- Navbar -->
<nav class="navbar navbar-expand-lg py-3 fixed-top bg-white shadow {{ Request::segment(1) == '' ? '' : 'bg-white shadow'}}">
    {{-- from "bg-white shadow" --}}
    {{-- navbar-dark --}}
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