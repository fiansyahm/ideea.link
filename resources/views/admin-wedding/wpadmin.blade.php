@extends('template-admin')

@section('main')
<div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Undangan Pernikahan</h5>
                    <p class="card-text">Selamat datang di acara pernikahan kami. Klik tombol di bawah untuk melihat detail acara.</p>
                    <a href="/admin/wedding/dashboard" class="btn btn-primary">Detail Pernikahan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Undangan Khitan</h5>
                    <p class="card-text">Selamat datang di acara khitan kami. Klik tombol di bawah untuk melihat detail acara.</p>
                    <a href="/admin/khitan/dashboard" class="btn btn-primary">Detail Khitanan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Foto Polaroid</h5>
                    <p class="card-text">Lihat momen indah melalui lensa kami. Klik tombol di bawah untuk melihat galeri foto polaroid.</p>
                    <a href="/polaroid/home" class="btn btn-primary">Galeri Foto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
