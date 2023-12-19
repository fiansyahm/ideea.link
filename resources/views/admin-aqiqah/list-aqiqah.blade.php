@extends('template-admin')

@section('navbar_menu_aqiqah', 'bg-primary text-white')

@section('main')
<div class="container-fluid">
    <h1 class="mt-4">Daftar Undangan Khitanan</h1>
    
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif

    <a href="/register-aqiqah" class="btn btn-success mb-3">Tambah Produk</a>

    <!-- Tampilan Produk -->
    @foreach ($aqiqah as $data)
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img height="100px" width="100px" src="{{$data['photo']}}" class="img-fluid" alt="Gambar Produk">
                {{-- <img height="100px" width="100px" src="{{$data['photo']}}" class="img-fluid" alt="Gambar Produk"> --}}
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Kode Produk: {{$data['id']}}</h5>
                    <p class="card-text">
                        <div>
                            <div>
                                <h2> Identitas</h2>
                                <p>Nickname: {{ $data['nickname'] }}</p>
                                <p>Full Name: {{ $data['fullname'] }}</p>
                            </div>

                            <div>
                                <h2>Details</h2>
                                <p>Date: {{ $data['date'] }}</p>
                                <p>Hour Start: {{ $data['hourStart'] }}</p>
                                <p>Hour End: {{ $data['hourEnd'] }}</p>
                                <p>Place Name: {{ $data['placeName'] }}</p>
                                <p>Place Address: {{ $data['placeAddress'] }}</p>
                                <!-- Add other  details here -->
                                <a href="{{ $data['googleAddress'] }}" target="_blank">View on Google Maps</a>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <a href="/invitation-aqiqah/{{$data['id']}}/guest" class="btn btn-success mr-2">Lihat Undangan</a>
                <a href="/list-guest-aqiqah/{{$data['id']}}" class="btn btn-info mr-2">Lihat Konfirmasi</a>
                <a href="/admin/aqiqah/edit/{{$data['id']}}" class="btn btn-primary mr-2">Edit</a>
                <a href="/admin/aqiqah/delete/{{$data['id']}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Akhir Tampilan Produk -->
</div>
@endsection