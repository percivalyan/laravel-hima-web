<!DOCTYPE html>
<html lang="en">
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
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/style_proker.css') }}"
        />

        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        />

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

        <style>
            @import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);

            .section-atas {
                background-image: url("../../assets/images/myriad.jpg"); /* Ganti dengan URL gambar background yang diinginkan */
                background-size: cover;
                background-position: center;
                color: white; /* Warna tulisan */
                text-align: center;
                padding: 100px 0; /* Atur padding sesuai kebutuhan */
            }

            .service-18 {
                font-family: "Montserrat", sans-serif;
                color: #8d97ad;
                font-weight: 300;
            }

            .service-18 h1,
            .service-18 h2,
            .service-18 h3,
            .service-18 h4,
            .service-18 h5,
            .service-18 h6 {
                color: #3e4555;
            }

            .service-18 h6 {
                line-height: 26px;
                font-size: 21px;
            }

            .service-18 .font-weight-medium {
                font-weight: 500;
            }

            .service-18 .bg-light {
                background-color: #f4f8fa !important;
            }

            .service-18 .wrap-service-18 .icon-position {
                position: relative;
                background-size: cover;
                background-position: center center;
                min-height: 200px;
            }

            .service-18 .wrap-service-18 .icon-position .icon-round {
                position: absolute;
                right: -38px;
                top: 20px;
            }

            .service-18 .icon-round {
                width: 80px;
                line-height: 80px;
                text-align: center;
                border-radius: 100%;
                display: inline-block;
            }

            .service-18 .bg-success-gradiant {
                background: #2cdd9b;
                background: -webkit-linear-gradient(
                    legacy-direction(to right),
                    #2cdd9b 0%,
                    #1dc8cc 100%
                );
                background: -webkit-gradient(
                    linear,
                    left top,
                    right top,
                    from(#2cdd9b),
                    to(#1dc8cc)
                );
                background: -webkit-linear-gradient(
                    left,
                    #2cdd9b 0%,
                    #1dc8cc 100%
                );
                background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
                background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
            }

            .service-18 .display-5 {
                font-size: 2.5rem;
            }

            .service-18 a {
                text-decoration: none;
            }

            .service-18 .linking {
                color: #3e4555;
            }

            .service-18 .linking:hover {
                color: #316ce8;
            }

            .service-18 .card-body {
                padding: 40px;
            }

            @media (max-width: 767px) {
                .service-18 .wrap-service-18 .icon-position .icon-round {
                    top: 157px;
                    right: 30px;
                }
            }

            .service-18 .btn-success-gradiant {
                background: #2cdd9b;
                background: -webkit-linear-gradient(
                    legacy-direction(to right),
                    #2cdd9b 0%,
                    #1dc8cc 100%
                );
                background: -webkit-gradient(
                    linear,
                    left top,
                    right top,
                    from(#2cdd9b),
                    to(#1dc8cc)
                );
                background: -webkit-linear-gradient(
                    left,
                    #2cdd9b 0%,
                    #1dc8cc 100%
                );
                background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
                background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
            }

            .service-18 .btn-success-gradiant:hover {
                background: #1dc8cc;
                background: -webkit-linear-gradient(
                    legacy-direction(to right),
                    #1dc8cc 0%,
                    #2cdd9b 100%
                );
                background: -webkit-gradient(
                    linear,
                    left top,
                    right top,
                    from(#1dc8cc),
                    to(#2cdd9b)
                );
                background: -webkit-linear-gradient(
                    left,
                    #1dc8cc 0%,
                    #2cdd9b 100%
                );
                background: -o-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
                background: linear-gradient(to right, #1dc8cc 0%, #2cdd9b 100%);
            }

            .service-18 .btn-md {
                padding: 15px 45px;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <section class="section-atas">
            <h1>Program Kerja HIMTIF</h1>
            <p>Daftar Program Kerja Himpunan Mahasiswa</p>
        </section>

        <section>
            <div align="center" class="py-5">
                <h2>Program Kerja Departemen MINFO</h2>
            </div>

            <div class="bg-light py-3 service-18">
                <div class="container">
                    <!-- row  -->
                    <div class="row wrap-service-18">
                        <!-- Column  -->
                        <div class="col-lg-6">
                            <!-- card  -->
                            <div class="card border-0 mb-4">
                                <div class="row no-gutters">
                                    <div
                                        class="col-md-5 icon-position rounded-left"
                                        style="
                                            background-image: url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/features/feature13/img1.jpg);
                                        "
                                    >
                                        <div
                                            class="icon-round bg-success-gradiant text-white display-5"
                                        >
                                            B
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body ml-0 ml-md-3">
                                            <h6 class="font-weight-medium">
                                                Get Powerful Results with
                                                WrapKit
                                            </h6>
                                            <p>
                                                You can relay on our amazing
                                                features list and also our
                                                customer services will be great
                                                experience.
                                            </p>
                                            <a
                                                href="javascript:void(0)"
                                                class="linking text-underline"
                                                >Lets Talk
                                                <i class="ti-arrow-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column  -->
                        <!-- Column  -->
                        <div class="col-lg-6">
                            <!-- card  -->
                            <div class="card border-0 mb-4">
                                <div class="row no-gutters">
                                    <div
                                        class="col-md-5 icon-position rounded-left"
                                        style="
                                            background-image: url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/features/feature13/img2.jpg);
                                        "
                                    >
                                        <div
                                            class="icon-round bg-success-gradiant text-white display-5"
                                        >
                                            G
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body ml-0 ml-md-3">
                                            <h6 class="font-weight-medium">
                                                Get Powerful Results with
                                                WrapKit
                                            </h6>
                                            <p>
                                                You can relay on our amazing
                                                features list and also our
                                                customer services will be great
                                                experience.
                                            </p>
                                            <a
                                                href="javascript:void(0)"
                                                class="linking text-underline"
                                                >Lets Talk
                                                <i class="ti-arrow-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column  -->
                        <!-- Column  -->
                        <div class="col-lg-6">
                            <!-- card  -->
                            <div class="card border-0 mb-4">
                                <div class="row no-gutters">
                                    <div
                                        class="col-md-5 icon-position rounded-left"
                                        style="
                                            background-image: url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/features/feature13/img3.jpg);
                                        "
                                    >
                                        <div
                                            class="icon-round bg-success-gradiant text-white display-5"
                                        >
                                            B
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body ml-0 ml-md-3">
                                            <h6 class="font-weight-medium">
                                                Get Powerful Results with
                                                WrapKit
                                            </h6>
                                            <p>
                                                You can relay on our amazing
                                                features list and also our
                                                customer services will be great
                                                experience.
                                            </p>
                                            <a
                                                href="javascript:void(0)"
                                                class="linking text-underline"
                                                >Lets Talk</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column  -->
                        <!-- Column  -->
                        <div class="col-lg-6">
                            <!-- card  -->
                            <div class="card border-0 mb-4">
                                <div class="row no-gutters">
                                    <div
                                        class="col-md-5 icon-position rounded-left"
                                        style="
                                            background-image: url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/features/feature13/img4.jpg);
                                        "
                                    >
                                        <div
                                            class="icon-round bg-success-gradiant text-white display-5"
                                        >
                                            G
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body ml-0 ml-md-3">
                                            <h6 class="font-weight-medium">
                                                Get Powerful Results with
                                                WrapKit
                                            </h6>
                                            <p>
                                                You can relay on our amazing
                                                features list and also our
                                                customer services will be great
                                                experience.
                                            </p>
                                            <a
                                                href="javascript:void(0)"
                                                class="linking text-underline"
                                                >Lets Talk
                                                <i class="ti-arrow-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column  -->
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4 text-center">
                            <a
                                class="btn btn-success-gradiant btn-md border-0 text-white"
                                href="#f18"
                                ><span>View Details</span></a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
