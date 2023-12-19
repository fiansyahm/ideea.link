@extends('template-admin')
@section('navbar_video','bg-primary text-white')
@section('main')
<h1>Daftar Video</h1>

<a href="/video/create" class="btn btn-success mb-3">Tambah Video</a>

<ol class="list-group list-group-numbered">
    @foreach ($videos as $video)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{$video->name}}</div>
                <iframe src="https://www.veed.io/embed/{{$video->url}}" width="744" height="504" frameborder="0" title="Template Bunga Goyang (2) Wulan Agung.mp4" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="d-flex align-items-center">
                <a href="/video/delete/{{ $video->id }}" class="btn btn-danger me-2">Hapus</a>
                <a href="/video/edit/{{ $video->id }}" class="btn btn-primary">Edit</a>
                <a href="/video/show/{{ $video->id }}" class="btn btn-success">Show</a>
            </div>
        </li>
    @endforeach
</ol>

@endsection
