@extends('template-admin')
@section('navbar_menu_polaroid', 'bg-primary text-white')
@section('main')
    <h1 class="text-center">List Tema Background Foto Polaroid</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    {{-- buatkan list dengan foreach $themes --}}
    <ul class="list-group">
        @foreach($themes as $data)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$data}}
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/polaroid/background/detail/{{$data}}" class="btn btn-success mb-3">Detail</a>
            </div>
        </li>
        @endforeach
    </ul>
@endsection
