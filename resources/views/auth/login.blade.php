@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5 col-xxl-6">
            <h3 class="fw-bold mb-3">Halaman Login Admin</h3>

            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Masukan E-Mail</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>

                <div class="formgroup mb-3">
                    <label for="">Masukan Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
@endsection