@extends('template-admin')

@section('navbar_menu_order', 'bg-primary text-white')

@section('main')
<div class="container-fluid">
    <h1 class="mt-4 text-center">Daftar Order Undangan Pernikahan
        @if($user != 'all')
            {{$user}}
        @endif
    </h1>
    <div class="row text-center">
        <div class="col-md-12">
            <a href="/order/pending/{{$user}}" class="btn btn-warning mt-3">Pending</a>
            <a href="/order/selesai/{{$user}}" class="btn btn-success mt-3">Selesai</a>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif

    <!-- Tampilan Produk -->
    @foreach ($orders as $data)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">Kode Produk: {{$data['id']}}</h5>
                        <p class="card-text">
                            <div>
                                <div>
                                    <h2>Customer Details</h2>
                                    <p>Nama: {{ $data['name'] }}</p>
                                    <p>Telp: {{ $data['phone'] }}</p>
                                </div>

                                <div>
                                    <h2>Admin Details</h2>
                                    <p>Nama: {{ $data['name_admin'] }}</p>
                                    <p>Telp: {{ $data['phone_admin'] }}</p>
                                </div>

                                <div>
                                    <h2>Lainnya</h2>
                                    <p>Produk: {{ $data['product'] }}</p>
                                    <p>Rating: {{ $data['rating'] }}</p>
                                    <p>Komentar: {{ $data['comment'] }}</p>
                                    <p>Status: 
                                        @if($data['rating'] != null)
                                            <span class="badge bg-success">Selesai</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <a href="https://api.whatsapp.com/send?phone={{ $data['phone'] }}" class="btn btn-success mr-2">Chat Pelanggan</a>
                @if($data['rating'] == null)
                    <a href="/rating/{{$data['id']}}" class="btn btn-primary mr-2">Form Rating</a>
                @endif
                </div>
            </div>
        </div>
    @endforeach
    <!-- Akhir Tampilan Produk -->
</div>
@endsection