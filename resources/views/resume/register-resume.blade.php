@extends('invitation.template')
@section('main')
 
    <div class="mx-3 mt-5 rounded" style="color: white;background-image: url(https://marketplace.canva.com/EAFNFlMpIKw/1/0/1600w/canva-pink-watercolor-linktree-background-CJpXvOkftQY.jpg);">
        <h1 class="text-center">Register Resume/CV</h1>
        @if (session('status'))
            <div class="alert alert-success m-3">
                {{ session('status') }}
            </div>
        @endif
        {{-- show alert if one of them error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                Cek Kolom-Kolom Wajib Diisi, isi ngawur jika bingung, nanti direvisi. 
                Total Kolom WAJIB yang belum diisi: {{ $errors->count() }}
            </div>
        @endif
        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/add-wedding" method="post">
            @csrf
            <div class="row">
                <div class="col-md-5 text-white mb-5 card" style="background-image: url('https://i.ibb.co/NS92FLH/foto-laki2.jpg');">
                  <h3 class="text-center">Form Mempelai Pria</h3>
                  <div class="mb-3">
                    <label for="nickname-male" class="form-label">Nama Panggilan Mempelai Pria <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('nicknameMale') is-invalid @enderror" id="nicknameMale" name="nicknameMale" placeholder="ADI" value="{{ old('nicknameMale') }}">
                    @error('nicknameMale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="fullname-male" class="form-label">Nama Lengkap Mempelai Pria <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fullnameMale') is-invalid @enderror" id="fullnameMale" name="fullnameMale" placeholder="Adi Firmansyah, SH" value="{{ old('fullnameMale') }}">
                    @error('fullnameMale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="child-male" class="form-label">Urutan (Anak Kedua) <a style="color:orange;">(Wajib)</a> </label>
                    <input type="text" class="form-control @error('childMale') is-invalid @enderror" id="childMale" name="childMale" placeholder="Kedua" value="{{ old('childMale') }}">
                    @error('childMale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="fathername-male" class="form-label">Nama Ayah Mempelai Pria <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fathernameMale') is-invalid @enderror" id="fathernameMale" name="fathernameMale" placeholder="Bapak Dwi Darmono" value="{{ old('fathernameMale') }}">
                    @error('fathernameMale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="mothername-male" class="form-label">Nama Ibu Mempelai Pria <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('mothernameMale') is-invalid @enderror" id="mothernameMale" name="mothernameMale" placeholder="Ibu Ningsih Rukmini" value="{{ old('mothernameMale') }}">
                    @error('mothernameMale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="photo-male" class="form-label">Link Foto Mempelai Pria (<a href="https://youtu.be/reUeJ5q8WQU">Lihat Tutorial</a>) </label>
                    <input type="file" class="form-control" id="photoMale" name="photoMale" placeholder="https://i.ibb.co/NS92FLH/foto-laki2.jpg (boleh dikosongi)" value="{{ old('photoMale') }}">
                  </div>
                  <div class="mb-3">
                    <label for="instagram-male" class="form-label">Username instagram Mempelai Pria</label>
                    <input type="text" class="form-control" id="instagramMale" name="instagramMale" placeholder="cristiano" value="{{ old('instagramMale') }}">
                  </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 bg-primary text-white mb-5 card" style="background-image: url('https://i.ibb.co/Z6QySdq/foto-perempuan.jpg');">
                  <h3 class="text-center">Form Mempelai Wanita</h3>
                  <div class="mb-3">
                    <label for="nickname-female" class="form-label">Nama Panggilan Mempelai Wanita <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('nicknameFemale') is-invalid @enderror" id="nicknameFemale" name="nicknameFemale" placeholder="Fira" value="{{ old('nicknameFemale') }}">
                    @error('nicknameFemale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="fullname-female" class="form-label">Nama Lengkap Mempelai Wanita <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fullnameFemale') is-invalid @enderror" id="fullnameFemale" name="fullnameFemale" placeholder="Fira Permata, S.Pd" value="{{ old('fullnameFemale') }}">
                    @error('fullnameFemale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="child-female" class="form-label">Urutan (Anak Pertama) <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('childFemale') is-invalid @enderror" id="childFemale" name="childFemale" placeholder="Pertama" value="{{ old('childFemale') }}">
                    @error('childFemale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="fathername-female" class="form-label">Nama Ayah Mempelai Wanita <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fathernameFemale') is-invalid @enderror" id="fathernameFemale" name="fathernameFemale" placeholder="Bapak Darso Permono" value="{{ old('fathernameFemale') }}">
                    @error('fathernameFemale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="mothername-female" class="form-label">Nama Ibu Mempelai Wanita <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('mothernameFemale') is-invalid @enderror" id="mothernameFemale" name="mothernameFemale" placeholder="Ibu Rukmini Handayani" value="{{ old('mothernameFemale') }}">
                    @error('mothernameFemale')
                      <div class="alert alert-danger">Kolom Wajib Diisi</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="photo-female" class="form-label">Link Foto Mempelai Wanita (<a href="https://youtu.be/reUeJ5q8WQU">Lihat Tutorial</a>) </label>
                    <input type="file" class="form-control" id="photoFemale" name="photoFemale" placeholder="https://i.ibb.co/Z6QySdq/foto-perempuan.jpg (boleh dikosongi)" value="{{ old('photoFemale') }}">
                  </div>
                  <div class="mb-3">
                    <label for="instagram-female" class="form-label">Username instagram Mempelai Wanita</label>
                    <input type="text" class="form-control" id="instagramFemale" name="instagramFemale" placeholder="kate.winslet.official" value="{{ old('instagramFemale') }}">
                  </div>
                </div>
            </div>
          
            <div class="text-center">
              <button id="buatUndangan" class="btn btn-lg mx-auto d-flex" style="color: white;background-color:pink;">
                  Buat Undangan
              </button>
              <div id="loadingSpinner" class="d-none">
                  <div class="spinner-border text-primary" role="status">
                      <span class="visually-hidden">Loading...</span>
                  </div>
              </div>
            </div>
        
        </form>
    </div>
@endsection

                  
              