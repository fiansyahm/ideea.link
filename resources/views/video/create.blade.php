@extends('template-admin')
@section('navbar_video','bg-primary text-white')
@section('main')

<h1>Form Tambah Video</h1>
{{-- buatkan new tab  --}}
<a href="https://www.veed.io/tools/video-hosting/video-upload" target="_blank" class="btn btn-primary">Upload Video</a>
<form method="POST" action="/video/create">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Judul Video</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan judul video disini">

    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID URL</label>
      <input type="text" class="form-control" name="url" id="url" placeholder="Masukkan url disini">
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection