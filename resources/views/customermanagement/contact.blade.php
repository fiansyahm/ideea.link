@extends('invitation.template')

@section('main')
<div class="container my-5">
    <form action="/contact/{{$product}}" method="post">
        <h2>Form Pesanan</h2>
        @csrf <!-- tambahkan ini untuk token CSRF -->

        <div class="mb-3">
            <label for="name" class="form-label">Nama Pembeli:</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon Pembeli:</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection
