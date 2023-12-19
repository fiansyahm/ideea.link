@extends('template-admin')
@section('navbar_song','bg-primary text-white')
@section('main')

<h1>Daftar Lagu</h1>
<a href="/song/create" class="btn btn-success mb-3">Tambah Lagu</a>

<ol class="list-group list-group-numbered">
    @foreach ($songs as $song)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{$song->name}}</div>
                <a href="/song/delete/{{ $song->id }}">Hapus</a>
                <a href="/song/edit/{{ $song->id }}">Edit</a>
                <a href="{{$song->url}}">Download</a>
            </div>
        </li>
    @endforeach
</ol>

@endsection