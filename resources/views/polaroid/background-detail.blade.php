@extends('template-admin')
@section('navbar_menu_polaroid', 'bg-primary text-white')
@section('main')
    <h1 class="text-center">List Background Foto Polaroid</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a href="/polaroid/background/create" class="btn btn-success mb-3">Tambah Background</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Url</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($themes as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data['name'] }}</td>
                    <td>
                        <img height="100px" width="100px" src="{{$data['url']}}" class="img-fluid" alt="Gambar Produk">
                    </td>
                    <td>
                        <a href="/polaroid/background/delete/{{ $data->id }}" class="btn btn-danger mb-3">Delete</a>
                        <a href="/polaroid/background/edit/{{ $data->id }}" class="btn btn-primary mb-3">Edit</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
