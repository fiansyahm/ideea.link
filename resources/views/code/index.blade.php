@extends('template-admin')

@section('navbar_code', 'bg-primary text-white')

@section('main')
    @if (session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif
    {{-- create button --}}
    <div class="container-fluid">
        <h1 class="mt-4">Daftar Kode</h1>
        <a href="/code/create" class="btn btn-success mb-3">Tambah Kode</a>
        <ol class="list-group list-group-numbered">
            @foreach ($code as $data)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $data->kode }}</div>
                        <a href="/code/delete/{{ $data->kode }}">Hapus</a>
                        <a href="/code/update/{{ $data->id }}">Tandai</a>
                    </div>
                    @if($data->status == 0)
                        <span class="badge bg-danger rounded-pill">Terpakai</span>
                    @else
                        <span class="badge bg-success rounded-pill">Belum Terpakai</span>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
@endsection
