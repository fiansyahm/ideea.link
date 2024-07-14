@extends('template-wpadmin')
@section('navbar_watermark','active')
@section('main')
    <div class="container" >
        <h1 class="text-center">Form Watermark</h1>
        <form enctype="multipart/form-data" class="mx-5 mb-5" class="ps-checkout__form" action="/register-watermark" method="post">
            @csrf
         <div class="mb-3" style="display: none">
            <label for="formFile" class="form-label">Jenis Perizinan</label>
            <select class="form-select" aria-label="Default select example" name="izin" id="izin">
              {{-- <option selected>Open this select menu</option> --}}
              <option value="1">NIB</option>
              <option value="2">PIRT</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="text-watermark" class="form-label">Text Watermark</label>
            <input type="text" class="form-control" id="text-watermark" name="text_watermark" placeholder="Masukkan text watermark">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Input File</label>
            <input class="form-control" type="file" id="file" name="file">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection