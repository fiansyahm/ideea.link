@extends('template-admin')
@section('navbar_menu_catalog','bg-primary text-white')
@section('main')

<h1>Form Tambah catalog</h1>
<form method="POST" action="/catalog/create">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Judul catalog</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan judul catalog disini">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi catalog</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Masukkan deskripsi catalog disini">
    </div>
    <div class="mb-3">
      <label for="url" class="form-label">ID URL Theme</label>
      <input type="text" class="form-control" name="url" id="url" placeholder="Masukkan contoh url disini">
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">ID URL Image</label>
      <input type="text" class="form-control" name="image" id="image" placeholder="Masukkan url gambar disini">
    </div>
    <div class="mb-3">
      <label for="code" class="form-label">Kode</label>
      <input type="text" class="form-control" name="code" id="code" placeholder="Masukkan Kode disini">
    </div>
    <div class="mb-3">
      <label for="harga_setelah_diskon" class="form-label">Harga Setelah Diskon</label>
      <input type="text" class="form-control" name="harga_setelah_diskon" id="harga_setelah_diskon" placeholder="Masukkan harga_setelah_diskon disini">
    </div>
    <div class="mb-3">
      <label for="peringkat" class="form-label">Peringkat</label>
      <input type="text" class="form-control" name="peringkat" id="peringkat" placeholder="Masukkan harga_setelah_diskon disini">
    </div>
    <div class="mb-3">
      <label for="bintang" class="form-label">Bintang</label>
      <input type="text" class="form-control" name="bintang" id="bintang" placeholder="Masukkan harga_setelah_diskon disini">
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection