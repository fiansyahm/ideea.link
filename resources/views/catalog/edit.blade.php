@extends('template-admin')
@section('navbar_menu_catalog', 'bg-primary text-white')
@section('main')

    <h1>Form Edit Video</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="/catalog/update/{{ $catalog->id }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul <i class="fa fa-file-catalog-o" aria-hidden="true"></i></label>
            <input value="{{$catalog->name }}" type="text" class="form-control" name="name" id="name" placeholder="Masukkan judul catalog disini">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi catalog</label>
            <input value="{{$catalog->description }}" type="text" class="form-control" name="description" id="description" placeholder="Masukkan judul catalog disini">
          </div>
          <div class="mb-3">
            <label for="url" class="form-label">ID URL Theme</label>
            <input value="{{$catalog->url }}" type="text" class="form-control" name="url" id="url" placeholder="Masukkan contoh url disini">
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">ID URL Image</label>
            <input value="{{$catalog->image }}" type="text" class="form-control" name="image" id="image" placeholder="Masukkan url disini">
          </div>
          <div class="mb-3">
            <label for="code" class="form-label">Kode</label>
            <input value="{{$catalog->code }}" type="text" class="form-control" name="code" id="image" placeholder="Masukkan url gambar disini">
          </div>
          <div class="mb-3">
            <label for="harga_setelah_diskon" class="form-label">Harga Setelah Diskon</label>
            <input value="{{$catalog->harga_setelah_diskon}}" type="text" class="form-control" name="harga_setelah_diskon" id="harga_setelah_diskon" placeholder="Masukkan harga_setelah_diskon disini">
          </div>
          <div class="mb-3">
            <label for="peringkat" class="form-label">Peringkat</label>
            <input value="{{$catalog->peringkat}}" type="text" class="form-control" name="peringkat" id="peringkat" placeholder="Masukkan harga_setelah_diskon disini">
          </div>
          <div class="mb-3">
            <label for="bintang" class="form-label">Bintang</label>
            <input value="{{$catalog->bintang}}" type="text" class="form-control" name="bintang" id="bintang" placeholder="Masukkan harga_setelah_diskon disini">
          </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
