@extends('invitation.template')
@section('main')
<div class="container my-5">
  <div class="row">
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Undangan Pernikahan</h5>
                  <p class="card-text">Selamat datang di acara pernikahan kami. Klik tombol di bawah untuk register.</p>
                  <a href="/register-wedding" class="btn btn-primary">Buat Undangan</a>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Undangan Khitan</h5>
                  <p class="card-text">Selamat datang di acara khitan kami. Klik tombol di bawah untuk register.</p>
                  <a href="/register-khitan" class="btn btn-primary">Buat Undangan</a>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Undangan Aqiqah</h5>
                  <p class="card-text">Selamat datang di acara aqiqah kami. Klik tombol di bawah untuk register.</p>
                  <a href="/register-aqiqah" class="btn btn-primary">Buat Undangan</a>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

                  
              