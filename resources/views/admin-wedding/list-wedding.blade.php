@extends('template-admin')

@section('navbar_menu_wedding', 'bg-primary text-white')

@section('main')
<div class="container-fluid">
    <h1 class="mt-4">Daftar Undangan Pernikahan</h1>
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif
    <a href="/register-wedding" class="btn btn-success mb-3">Tambah Produk</a>
    <!-- Tampilan Produk -->
    @foreach ($wedding as $data)
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img height="100px" width="100px" src="{{$data['photoMale']}}" class="img-fluid" alt="Gambar Produk">
                <img height="100px" width="100px" src="{{$data['photoFemale']}}" class="img-fluid" alt="Gambar Produk">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Kode Produk: {{$data['id']}}</h5>
                    <p class="card-text">
                        <div>
                            <div>
                                <h2>Male Details</h2>
                                <p>Nickname: {{ $data['nicknameMale'] }}</p>
                                <p>Full Name: {{ $data['fullnameMale'] }}</p>
                            </div>

                            <div>
                                <h2>Female Details</h2>
                                <p>Nickname: {{ $data['nicknameFemale'] }}</p>
                                <p>Full Name: {{ $data['fullnameFemale'] }}</p>
                            </div>

                            <div>
                                <h2>Solemnization Details</h2>
                                <p>Date: {{ $data['solemnizationDate'] }}</p>
                                <p>Hour Start: {{ $data['solemnizationHourStart'] }}</p>
                                <p>Hour End: {{ $data['solemnizationHourEnd'] }}</p>
                                <p>Place Name: {{ $data['solemnizationPlaceName'] }}</p>
                                <p>Place Address: {{ $data['solemnizationPlaceAddress'] }}</p>
                                <!-- Add other solemnization details here -->
                                <a href="{{ $data['solemnizationGoogleAddress'] }}" target="_blank">View on Google Maps</a>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <a href="/invitation-wedding/{{$data['id']}}/guest" class="btn btn-success mr-2">Lihat Undangan</a>
                <a href="/list-guest-wedding/{{$data['id']}}" class="btn btn-info mr-2">Lihat Konfirmasi</a>
                <a href="/admin/wedding/edit/{{$data['id']}}" class="btn btn-primary mr-2">Edit</a>
                <a href="/admin/wedding/delete/{{$data['id']}}" class="btn btn-danger">Delete</a>
                <a href="/user/wedding/edit/{{$data['id']}}/{{$data['nicknameMale']}}/{{$data['nicknameFemale']}}" class="btn btn-warning">Edit For User</a>
                
            </div>
        </div>
    </div>
    @endforeach
    <!-- Akhir Tampilan Produk -->
</div>
@endsection