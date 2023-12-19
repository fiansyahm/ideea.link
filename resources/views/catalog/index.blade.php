@extends('template-admin')
@section('navbar_menu_catalog','bg-primary text-white')
@section('main')
<h1>Daftar Katalog</h1>

<a href="/catalog/create" class="btn btn-success mb-3">Tambah Katalog</a>

<ol class="list-group list-group-numbered">
    @foreach ($catalogs as $catalog)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{ $catalog->name }}({{ $catalog->code }})</div>
                <p>{{ $catalog->description }}</p>
                <img src="{{ $catalog->image }}" alt="" width="100px" height="100px">
            </div>
            <a href="/catalog/edit/{{ $catalog->id }}" class="btn btn-warning">Edit</a>
            <a href="/catalog/delete/{{ $catalog->id }}" class="btn btn-danger">Delete</a>
            <a href="{{ $catalog->url }}" class="btn btn-primary">Show</a>
        </li>
    @endforeach
</ol>

@endsection
