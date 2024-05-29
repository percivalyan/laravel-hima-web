<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <link rel="shortcut icon" href="{{ asset('assets/icons/icon.ico') }}" />
        <title>Reinas Webui</title>

        <!-- Fonts -->
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />

        {{-- AOS --}}
        <link
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />

        {{-- Magnific --}}
        <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <!-- Sisipkan script Owl Carousel di sini -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
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
                                        <a
                                            href="https://www.instagram.com/himtif_unpam/"
                                            class="nav-link p-0 text-muted"
                                            ><i class="fab fa-instagram"></i>
                                            Instagram</a
                                        >
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="https://linktr.ee/HIMTIF2324" class="nav-link p-0 text-muted">
                                            <i class="fa fa-comments"></i> Podcast Maha Suara Himtif
                                        </a>
                                    </li>                                    
                                    <li class="nav-item mb-2">
                                        <a
                                            href="https://www.youtube.com/channel/UCA6ReaCM44wzSdSEeLT1smg"
                                            class="nav-link p-0 text-muted"
                                            ><i class="fab fa-youtube"></i>
                                            YouTube</a
                                        >
                                    </li>
                                    {{-- <li class="nav-item mb-2">
                                        <a
                                            href=""
                                            class="nav-link p-0 text-muted"
                                            ><i class="fab fa-linkedin"></i>
                                            LinkedIn</a
                                        >
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                        <!-- Kolom 2 Alamat -->
                        <div class="col-12 col-md-4 mb-4">
                            <h5 class="font-inter fw-bold mb-3">
                                Alamat Sekretariat
                            </h5>
                            <p>
                                Jl. Raya Puspitek, Buaran, Kec. Pamulang, <br> Kota Tangerang Selatan, Banten 15310
                            </p>
                        </div>

                        <!-- Kolom 3 Kontak -->
                        <div class="col-12 col-md-4 mb-4">
                            <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                            <ul class="nav flex-column">
                                {{-- <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted"
                                        >info@himpunan.sch.id</a
                                    >
                                </li> --}}
                                <li class="nav-item mb-2">
                                    <a href="https://wa.me/6285591253343" class="nav-link p-0 text-muted">
                                        <i class="fab fa-whatsapp"></i> +62 855-9125-3343 (Achmad Rhafli Yansardi - WhatsApp)
                                    </a>
                                </li>                                
                                {{-- <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted"
                                        >+62 xx xxx xxx (WhatsApp)</a
                                    >
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </section>

        <section class="bg-light border-top">
            <div class="container py-4">
                <div class="d-flex justify-content-between">
                    <div>Himpunan Mahasiswa Teknik Informatika (HIMTIF)</div>
                    <div class="d-flex">
                        <p class="me-4">Syarat & Ketentuan</p>
                        <p>
                            <a href="" class="text-decoration-none text-dark">Kebijakan Privasi</a>
                        </p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p>Powered by <a href="https://github.com/percivalyan" class="text-decoration-none text-dark">Percivalyan</a></p>
                </div>
            </div>
        </section>
        

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets/js/magnific.js') }}"></script>

      

        <script>
            //     const navbar = document.querySelector(".fixed-top");
            // window.onscroll = () => {
            //     if (window.scrollY > 50) {

            //         navbar.classList.add("scroll-nav-active");
            //         navbar.classList.add("text-nav-active");
            //         navbar.classList.remove("navbar-dark");
            //     } else {
            //         navbar.classList.remove("scroll-nav-active");
            //         navbar.classList.add("navbar-dark");
            //     }
            // };

            // Navbar jika scroll ke bawah navbar hilang
            window.addEventListener("scroll", function () {
                var navbar = document.querySelector(".navbar");
                if (window.scrollY > 100) {
                    navbar.style.display = "none";
                } else {
                    navbar.style.display = "block";
                }
            });

            AOS.init();

            // Bagian foto
            $(document).ready(function () {
                $(".image-link").magnificPopup({
                    type: "image",
                    retina: {
                        ratio: 1,
                        replaceSrc: function (item, ratio) {
                            return item.src.replace(/\.\w+$/, function (m) {
                                return "@2x" + m;
                            });
                        },
                    },
                    callbacks: {
                        open: function () {
                            // Append close button inside magnific popup
                            this.content.append(
                                '<button title="Close (Esc)" type="button" class="mfp-close">×</button>'
                            );
                        },
                    },
                });
            });

            $(document).ready(function () {
                $(".carousel").carousel();
            });

            // JavaScript for smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function (e) {
                    e.preventDefault();

                    document
                        .querySelector(this.getAttribute("href"))
                        .scrollIntoView({
                            behavior: "smooth",
                        });
                });
            });

            // Scrolling Department
            // document.addEventListener("DOMContentLoaded", function () {
            //     const scrollImages = document.querySelector(".scroll-images");
            //    c onst scrollLength =
            //         scrollImages.scrollWidth - scrollImages.clientWidth;
            //     const leftButton = document.querySelector(".left");
            //     const rightButton = document.querySelector(".right");

            //     function checkScroll() {
            //         const currentScroll = scrollImages.scrollLeft;
            //         if (currentScroll === 0) {
            //             leftButton.setAttribute("disabled", "true");
            //             rightButton.removeAttribute("disabled");
            //         } else if (currentScroll === scrollLength) {
            //             rightButton.setAttribute("disabled", "true");
            //             leftButton.removeAttribute("disabled");
            //         } else {
            //             leftButton.removeAttribute("disabled");
            //             rightButton.removeAttribute("disabled");
            //         }
            //     }

            //     scrollImages.addEventListener("scroll", checkScroll);
            //     window.addEventListener("resize", checkScroll);
            //     checkScroll();

            //     function leftScroll() {
            //         scrollImages.scrollBy({
            //             left: -200,
            //             behavior: "smooth",
            //         });
            //     }

            //     function rightScroll() {
            //         scrollImages.scrollBy({
            //             left: 200,
            //             behavior: "smooth",
            //         });
            //     }

            //     leftButton.addEventListener("click", leftScroll);
            //     rightButton.addEventListener("click", rightScroll);
            // });

            // Owl Carousel

        </script>
    </body>
</html>
