@extends('invitation.template')

@section('main')
<div class="container my-5">
    <form action="/rating/{{$id}}" method="post">
        <h2>Form Pesanan</h2>
        @csrf <!-- tambahkan ini untuk token CSRF -->

        <div class="mb-3">
            <label for="rating" class="form-label">Rating:</label>
            <input type="text" class="form-control" name="rating" id="rating" required>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Comment:</label>
            <input type="text" class="form-control" name="comment" id="comment" required>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection
