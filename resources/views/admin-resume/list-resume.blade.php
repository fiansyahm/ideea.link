@extends('template-wpadmin')

@section('navbar_menu_resume', 'active')

@section('main')
<div class="container-fluid">
    <h1 class="mt-4">Daftar Resume</h1>
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif
    <form action="/admin/resume/search/all" method="GET" class="mb-3" id="form-search">
        <div class="input-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Cari berdasarkan ID, Nickname Male, atau Nickname Female">
            <button type="submit" class="btn btn-primary" id="submit-search">Cari</button>
            <script>
                document.getElementById("submit-search").onclick = function() {
                    // change action to /admin/resume/list/search
                    var search = document.getElementById("search").value;
                    document.getElementById("form-search").action = "/admin/resume/list/" + search;
                    document.getElementById("form-search").submit();
                    document.getElementById("main").style.display = "none";
                    document.getElementById("loading").style.display = "block";
                }   
            </script>
        </div>
    </form>
    <a href="/register-resume" class="btn btn-success mb-3">Tambah Produk</a>
    {{-- pagination --}}
    <div class="d-flex justify-content-center">
        {{ $resume->links() }}
    </div>
    {{-- end pagination --}}
    <!-- Tampilan Produk -->
    <div id="main">
        @foreach ($resume as $data)
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
                                    <h2>Resume Details</h2>
                                    <p>Nickname: {{ $data['nickname'] }}</p>
                                    <p>Full Name: {{ $data['fullname'] }}</p>
                                </div>

                                <div>
                                    <h2>Resume Details</h2>
                                    <p>Tema Resume : {{ $data['theme'] }}</p>
                                    <p>Phone Resume : {{ $data['phone'] }}</p>
                                    <p>Email Resume : {{ $data['email'] }}</p>
                                    <p>Address Resume : {{ $data['address'] }}</p>
                                    <!-- Add other solemnization details here -->
                                    <a href="{{ $data['resume'] }}" target="_blank">View My CV</a>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <a href="/personal-profile/{{$data['id']}}" class="btn btn-success mr-2">Lihat Resume</a>
                    <a href="/admin/resume/edit/{{$data['id']}}" class="btn btn-primary mr-2">Edit</a>
                    <a href="/admin/resume/delete/{{$data['id']}}" class="btn btn-danger">Delete</a>
                    <a href="/user/resume/edit/{{$data['id']}}/{{$data['nickname']}}/{{$data['fullname']}}" class="btn btn-warning">Edit For User</a>
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