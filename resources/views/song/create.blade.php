@extends('template-admin')
@section('navbar_song','bg-primary text-white')
@section('main')

<form method="POST" action="/song/create" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Judul Lagu</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan judul lagu disini">

    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">URL</label>
      {{-- input file audio --}}
      <input type="file" class="form-control" name="url" id="url" placeholder="Masukkan lagu disini">
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection