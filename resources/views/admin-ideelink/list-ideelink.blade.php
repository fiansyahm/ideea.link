@extends('template-wpadmin')

@section('navbar_menu_ideelink', 'active')

@section('main')
<div class="container-fluid">
    <h1 class="mt-4">Daftar ideelink</h1>
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif
    <form action="/admin/ideelink/search/all" method="GET" class="mb-3" id="form-search">
        <div class="input-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Cari berdasarkan nama akun ideelink">
            <button type="submit" class="btn btn-primary" id="submit-search">Cari</button>
            <script>
                document.getElementById("submit-search").onclick = function() {
                    // change action to /admin/ideelink/list/search
                    var search = document.getElementById("search").value;
                    document.getElementById("form-search").action = "/admin/ideelink/list/" + search;
                    document.getElementById("form-search").submit();
                    document.getElementById("main").style.display = "none";
                    document.getElementById("loading").style.display = "block";
                }   
            </script>
        </div>
    </form>
    <a href="/register-ideelink" class="btn btn-success mb-3">Tambah Akun</a>
    {{-- pagination --}}
    <div class="d-flex justify-content-center">
        {{ $ideelink->links() }}
    </div>
    {{-- end pagination --}}
    <!-- Tampilan Produk -->
    <div id="main">
        @foreach ($ideelink as $data)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img height="100px" width="100px" src="{{$data['photo']}}" class="img-fluid" alt="Gambar Produk">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Kode Produk: {{$data['id']}}</h5>
                        <p class="card-text">
                            <div>
                                <div>
                                    <h2>ideelink Details</h2>
                                    <p>Nama Akun: {{ $data['name_account'] }}</p>
                                    <p>Tema ideelink : {{ $data['theme'] }}</p>
                                    <p>Youtube : {{ $data['youtube'] }}</p>
                                    <p>Instagram : {{ $data['instagram'] }}</p>
                                    <p>Tiktok : {{ $data['tiktok'] }}</p>
                                    <p>Telegram : {{ $data['telegram'] }}</p>
                                    <p>Shopee : {{ $data['shopee'] }}</p>
                                    <p>Tiktok Shop : {{ $data['tiktokshop'] }}</p>
                                    <p>Tokopedia : {{ $data['tokopedia'] }}</p>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <a href="/ideelink/{{$data['id']}}" class="btn btn-success mr-2">Lihat ideelink</a>
                    <a href="/admin/ideelink/edit/{{$data['id']}}" class="btn btn-primary mr-2">Edit</a>
                    <a href="/admin/ideelink/delete/{{$data['id']}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    <a href="/user/ideelink/edit/{{$data['id']}}/{{$data['name_account']}}" class="btn btn-warning">Edit For User</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div id="loading" style="display: none;">
        <div class="d-flex justify-content-center">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!-- Akhir Tampilan Produk -->
</div>
@endsection