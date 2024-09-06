@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
            <p>Selamat Datang di Halaman Dashboard Admin</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm round-3 border-0" style="width: 18rem;">
                        <img class="card-img-top" src="https://via.placeholder.com/300" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Blog Article</h5>
                            <p class="card-text">Atur kegiatan dan artikel</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm round-3 border-0" style="width: 18rem;">
                        <img class="card-img-top" src="https://via.placeholder.com/300" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Foto Article</h5>
                            <p class="card-text">Atur kegiatan dan artikel</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
