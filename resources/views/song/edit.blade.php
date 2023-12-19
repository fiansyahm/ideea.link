@extends('template-admin')
@section('navbar_song', 'bg-primary text-white')
@section('main')

    <h1>Form Edit Song</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="/song/update/{{ $song->id }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Lagu</label>
            <input value="{{ $song->name }}" type="text" class="form-control" name="name" id="name"
                placeholder="Masukkan judul lagu disini">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">URL</label>
            <input type="file" class="form-control" name="url" id="url"
                placeholder="Masukkan url disini">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
