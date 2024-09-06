@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold mb-3">Halaman Manajemen Artikel</h3>
            <p>Atur dan kelola artikel</p>

            <div class="d-flex">
                <a href="{{ route('dashboard')}}">Home</a>
                <div class="mx-1"></div>
                <a href="{{ route('dashboard')}}">Blog Artikel</a>
            </div>
        </div>
    </section>
@endsection
