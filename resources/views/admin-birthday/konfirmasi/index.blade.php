@extends('template-admin')

@section('navbar_konfirmasi', 'bg-primary text-white')

@section('main')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Id Couple</th>
                <th scope="col">Guest Name</th>
                <th scope="col">Ucapan Wedding</th>
                <th scope="col">Konfirmasi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($konfirmasi as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data['id-couple'] }}</td>
                    <td>{{ $data['guest-name'] }}</td>
                    <td>{{ $data['ucapan-wedding'] }}</td>
                    <td>{{ $data['confirmation-attendance'] }}</td>
                    <td>
                        <a href="/konfirmasi/delete/{{ $data->id }}" class="btn btn-danger mb-3">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
