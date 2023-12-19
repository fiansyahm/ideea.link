@extends('template-admin')
@section('navbar_menu_polaroid', 'bg-primary text-white')
@section('main')
    <div class="container my-5">
        <h1 class="text-center">Unggah Foto Polaroid</h1>
        <form action="/polaroid/upload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Anda</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
            <label for="foto">Pilih Foto-foto (format .zip):</label>
                <input type="file" name="foto" id="foto" class="form-control-file" accept=".zip">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Unggah</button>
            </div>
        </form>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Cari Foto Polaroid</h1>
            <div class="mb-3">
                <label for="search_email" class="form-label">Email Anda</label>
                <input type="email" class="form-control" id="search_email" name="search_email" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
                <label for="page" class="form-label">Halaman</label>
                <input type="text" class="form-control" id="page" name="page" placeholder="Halaman">
            </div>
            <div class="mb-3">
                <label for="page" class="form-label">Ukuran</label>
                <input type="text" class="form-control" id="size" name="size" placeholder="Ukuran">
            </div>
            <div class="form-group">
                <button onclick="redirectlist()" type="submit" class="btn btn-primary">Cari</button>
            </div>
    </div>

    <script>
        function redirectlist() {
            var email = document.getElementById("search_email").value;
            var size = document.getElementById("size").value;
            var page = document.getElementById("page").value;
            window.location.href = "/polaroid/list/" + email + "/" + page + "/" + size;
        }
    </script>
    
@endsection
