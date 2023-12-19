@extends('template-admin')
@section('navbar_video', 'bg-primary text-white')
@section('main')

    <h1>Form Edit Video</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="/video/update/{{ $video->id }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul <i class="fa fa-file-video-o" aria-hidden="true"></i></label>
            <input value="{{$video->name }}" type="text" class="form-control" name="name" id="name"
                placeholder="Masukkan judul video disini">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">URL</label>
            <input value="{{ $video->url }}" type="text" class="form-control" name="url" id="url"
                placeholder="Masukkan url disini">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
