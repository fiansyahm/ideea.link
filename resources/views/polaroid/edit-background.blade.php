@extends('template-admin')
@section('navbar_menu_polaroid', 'bg-primary text-white')
@section('main')
{{-- form edit background --}}
<div class="container my-5">
    <h1 class="text-center">Edit Background Foto Polaroid</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="/polaroid/background/update/{{$themes->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="theme" class="form-label">Nama Tema</label>
            <input type="text" class="form-control" id="theme" name="theme" placeholder="Masukkan Nama Tema" value="{{$themes->theme}}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Background</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="{{$themes->name}}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Url Background</label>
            <input type="text" name="url" id="url" class="form-control" value="{{$themes->url}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>

@endsection
