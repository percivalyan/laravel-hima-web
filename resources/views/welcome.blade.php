<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/icons/icon.ico') }}">
    <title>Reinas Webui</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icons/icon.ico') }}" height="55" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Kontak</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-danger">Registrasi</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <section id="hero" class="px-0">
        <div class=" container text-center text-white">
            <div class="hero-title">
                <div class="hero-text">
                    Selamat Datang <Br> Di Website Resmi Reinas
                </div>
                <h6>~Reach the Heaven, Peach to Heaven, Stairway to Heaven, and Heaven Feels~</h6><br>
                <button class="btn btn-danger">Lihat Event Kami</button>
            </div>
        </div>
    </section>

    <!-- Card -->
    <section id="program" style="margin-top: -45px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Departemen HUMAS</h5>
                        </div>
                        <img src="{{ asset('assets/images/card-seni-2.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Departemen MINFO</h5>
                        </div>
                        <img src="{{ asset('assets/images/card-seni-2.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Departemen PSDA</h5>
                        </div>
                        <img src="{{ asset('assets/images/card-seni-2.png') }}" height="55" width="55" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="program" style="margin-top: 20px">
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
    </section>
    <!-- Card -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>