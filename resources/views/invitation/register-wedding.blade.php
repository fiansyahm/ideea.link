@extends('invitation.template')
@section('main')
 
    <div class="mx-3 mt-5 rounded" style="color: white;background-image: url(https://marketplace.canva.com/EAFNFlMpIKw/1/0/1600w/canva-pink-watercolor-linktree-background-CJpXvOkftQY.jpg);">
        <h1 class="text-center">Register Wedding Invitation</h1>
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
          
            <div class="row">
              <div class="col-md-6">
                  <div class="bg-info text-white mb-5 card" style="background-image: url('https://media.istockphoto.com/id/1480712755/id/foto/defokus-glitter-hijau-emas-bokeh-abstrak-background-dengan-lampu-bokeh-lampu-vintage.jpg?s=612x612&w=0&k=20&c=tJDwioqTTDFwd6h64WQn4kcTAIcIRKd8jE36GdgaC40=');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                      <div class="mb-3 text-center">
                        <h3 class="text-center">Form Tanggal & Tempat Akad</h3>
                        <label for="solemnization-title">Judul Acara Akad </label>
                        <input class="form-control @error('solemnizationTitle') is-invalid @enderror" id="solemnizationTitle" name="solemnizationTitle" type="text" value="Akad Nikah" placeholder="Akad Nikah" />
                        @error('solemnizationTitle')
                          <div class="alert alert-danger">Kolom Wajib Diisi</div>
                        @enderror
                      </div>
                      <div class="mb-3 text-center">
                        <label for="solemnization-date">Tanggal Akad </label>
                        <input class="form-control @error('solemnizationDate') is-invalid @enderror" id="solemnizationDate" name="solemnizationDate" type="date" value="{{ old('solemnizationDate') }}" />
                        @error('solemnizationDate')
                          <div class="alert alert-danger">Kolom Wajib Diisi</div>
                        @enderror
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="solemnization-hour-start">Waktu mulai Akad </label>
                                <input class="form-control @error('solemnizationHourStart') is-invalid @enderror" id="solemnizationHourStart" name="solemnizationHourStart" type="time" value="{{old('solemnizationHourStart')}}" />
                                @error('solemnizationHourStart')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="solemnization-hour-end">Waktu selesai Akad</label>
                                <input class="form-control @error('solemnizationHourEnd') is-invalid @enderror" id="solemnizationHourEnd" name="solemnizationHourEnd" type="time" value="{{old('solemnizationHourEnd')}}" />
                                @error('solemnizationHourEnd')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="place-name" class="form-label">Nama Tempat </label>
                                <input type="text" class="form-control @error('solemnizationPlaceName') is-invalid @enderror" id="solemnizationPlaceName" name="solemnizationPlaceName" placeholder="Ballroom Kamboja, My Tower Hotel Surabaya" value="{{old('solemnizationPlaceName')}}" />
                                @error('solemnizationPlaceName')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="place-address" class="form-label">Alamat Tempat </label>
                                <input type="text" class="form-control @error('solemnizationPlaceAddress') is-invalid @enderror" id="solemnizationPlaceAddress" name="solemnizationPlaceAddress" placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur" value="{{old('solemnizationPlaceAddress')}}" />
                                @error('solemnizationPlaceAddress')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Alamat Gmap </label>
                                <input type="text" class="form-control @error('solemnizationGoogleAddress') is-invalid @enderror" id="solemnizationGoogleAddress" name="solemnizationGoogleAddress" placeholder="https://maps.app.goo.gl/pKsatZc8hMRwpiUHA" value="{{old('solemnizationGoogleAddress')}}" />
                                @error('solemnizationGoogleAddress')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="bg-info text-white mb-5 card" style="background-image: url('https://cdn.pixabay.com/photo/2012/11/06/03/46/background-64258_1280.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                      <div class="mb-3 text-center">
                        <h3 class="text-center">Form Tanggal & Tempat Resepsi</h3>
                        <label for="wedding-title">Judul Acara Resepsi </label>
                        <input class="form-control @error('weddingTitle') is-invalid @enderror" id="weddingTitle" name="weddingTitle" type="text" value="Resepsi Pernikahan" placeholder="Resepsi Pernikahan" />
                        @error('weddingTitle')
                          <div class="alert alert-danger">Kolom Wajib Diisi</div>
                        @enderror
                      </div>
                      <div class="mb-3 text-center">
                        <label for="wedding-date">Tanggal Resepsi </label>
                        <input class="form-control @error('weddingDate') is-invalid @enderror" id="weddingDate" name="weddingDate" type="date" value="{{old('weddingDate')}}" />
                        @error('weddingDate')
                          <div class="alert alert-danger">Kolom Wajib Diisi</div>
                        @enderror
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="wedding-hour-start">Waktu mulai Resepsi </label>
                                <input class="form-control @error('weddingHourStart') is-invalid @enderror" id="weddingHourStart" name="weddingHourStart" type="time" value="{{old('weddingHourStart')}}" />
                                @error('weddingHourStart')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="wedding-hour-end">Waktu selesai Resepsi</label>
                                <input class="form-control @error('weddingHourEnd') is-invalid @enderror" id="weddingHourEnd" name="weddingHourEnd" type="time" value="{{old('weddingHourEnd')}}" />
                                @error('weddingHourEnd')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="place-name" class="form-label">Nama Tempat </label>
                                <input type="text" class="form-control @error('weddingPlaceName') is-invalid @enderror" id="weddingPlaceName" name="weddingPlaceName" placeholder="Ballroom Kamboja, My Tower Hotel Surabaya" value="{{old('weddingPlaceName')}}" />
                                @error('weddingPlaceName')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="place-address" class="form-label">Alamat Tempat </label>
                                <input type="text" class="form-control @error('weddingPlaceAddress') is-invalid @enderror" id="weddingPlaceAddress" name="weddingPlaceAddress" placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur" value="{{old('weddingPlaceAddress')}}" />
                                @error('weddingPlaceAddress')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Alamat Gmap </label>
                                <input type="text" class="form-control @error('weddingGoogleAddress') is-invalid @enderror" id="weddingGoogleAddress" name="weddingGoogleAddress" placeholder="https://maps.app.goo.gl/pKsatZc8hMRwpiUHA" value="{{old('weddingGoogleAddress')}}" />
                                @error('weddingGoogleAddress')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="bg-info text-white mb-5 card" style="background-image: url('https://cdn.pixabay.com/photo/2014/04/01/11/46/bokeh-302457_960_720.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                      <div class="mb-3 text-center">
                        <h3 class="text-center">Form Tanggal & Tempat Ngunduh Mantu</h3>
                        <label for="ngunduh-title">Judul Acara Ngunduh Mantu</label>
                        <input class="form-control @error('ngunduhTitle') is-invalid @enderror" id="ngunduhTitle" name="ngunduhTitle" type="text" value="Ngunduh Mantu" placeholder="Ngunduh Mantu" />
                        @error('ngunduhTitle')
                          <div class="alert alert-danger">Kolom Wajib Diisi</div>
                        @enderror
                      </div>
                      <div class="mb-3 text-center">
                        <label for="ngunduh-date">Tanggal Ngunduh Mantu</label>
                        <input class="form-control @error('ngunduhDate') is-invalid @enderror" id="ngunduhDate" name="ngunduhDate" type="date" value="{{old('ngunduhDate')}}" />
                        @error('ngunduhDate')
                          <div class="alert alert-danger">Kolom Wajib Diisi</div>
                        @enderror
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="ngunduh-hour-start">Waktu mulai Ngunduh Mantu</label>
                                <input class="form-control @error('ngunduhHourStart') is-invalid @enderror" id="ngunduhHourStart" name="ngunduhHourStart" type="time" value="{{old('ngunduhHourStart')}}" />
                                @error('ngunduhHourStart')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="ngunduh-hour-end">Waktu selesai Ngunduh Mantu</label>
                                <input class="form-control @error('ngunduhHourEnd') is-invalid @enderror" id="ngunduhHourEnd" name="ngunduhHourEnd" type="time" value="{{old('ngunduhHourEnd')}}" />
                                @error('ngunduhHourEnd')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="place-name" class="form-label">Nama Tempat</label>
                                <input type="text" class="form-control @error('ngunduhPlaceName') is-invalid @enderror" id="ngunduhPlaceName" name="ngunduhPlaceName" placeholder="Ballroom Kamboja, My Tower Hotel Surabaya" value="{{old('ngunduhPlaceName')}}" />
                                @error('ngunduhPlaceName')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="place-address" class="form-label">Alamat Tempat</label>
                                <input type="text" class="form-control @error('ngunduhPlaceAddress') is-invalid @enderror" id="ngunduhPlaceAddress" name="ngunduhPlaceAddress" placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur" value="{{old('ngunduhPlaceAddress')}}" />
                                @error('ngunduhPlaceAddress')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Alamat Gmap</label>
                                <input type="text" class="form-control @error('ngunduhGoogleAddress') is-invalid @enderror" id="ngunduhGoogleAddress" name="ngunduhGoogleAddress" placeholder="https://maps.app.goo.gl/pKsatZc8hMRwpiUHA" value="{{old('ngunduhGoogleAddress')}}" />
                                @error('ngunduhGoogleAddress')
                                  <div class="alert alert-danger">Kolom Wajib Diisi</div>
                                @enderror
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="bg-info text-white mb-5 card" style="background-image: url('https://poetrafoto.files.wordpress.com/2019/04/foto-prewedding-hijab-simple-unik-outdoor-muslimah-syari-romantis-emiadam-lokasi-di-pantai-jogja-1.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                      <div class="mb-3 text-center">
                        <h3 class="text-center">Form Foto Prewed</h3>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3 text-center mx-2">
                              <label for="theme" class="form-label">Pilihan Opsi <a href="https://youtu.be/reUeJ5q8WQU">Tutorial Upload Foto</a></label>
                              <select id="fotoPrewedding" name="fotoPrewedding" class="form-select" aria-label="Default select example">
                                <option value="0" selected>Pilih Opsi Aktif/Tidak</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Foto 1</label>
                                <input type="file" class="form-control" id="foto1" name="foto1" placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp" value="{{old('foto1')}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Foto 2</label>
                                <input type="file" class="form-control" id="foto2" name="foto2" placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp" value="{{old('foto2')}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Foto 3</label>
                                <input type="file" class="form-control" id="foto3" name="foto3" placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp" value="{{old('foto3')}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Foto 4</label>
                                <input type="file" class="form-control" id="foto4" name="foto4" placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp" value="{{old('foto4')}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Foto 5</label>
                                <input type="file" class="form-control" id="foto5" name="foto5" placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp" value="{{old('foto5')}}">
                              </div>
                          </div>
                          <div class="col-md-12">
                            <div class="mb-3 text-center mx-2">
                              <label for="ourstoryvideo">Video Prewed (Link Youtube) </label>
                              <input class="form-control" id="ourstoryvideo" name="ourstoryvideo" type="text" value="{{old('ourstoryvideo')}}" />
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                  <div class="bg-info text-white mb-5 card" style="background-image: url('https://www.harianinhuaonline.com/wp-content/uploads/2018/02/fireinthesky-lanternfestival-home-1.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <h3 class="text-center">Form Kado</h3>
                    <div class="mb-3 text-center mx-2">
                      <label for="bank" class="form-label">Nama Bank Pertama</label>
                      <input type="text" class="form-control" id="bank" name="bank" placeholder="BRI" value="{{old('bank')}}">
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="account-name" class="form-label">Nama Pemilik Rekening Pertama</label>
                      <input type="text" class="form-control" id="accountName" name="accountName" placeholder="Fira Permata" value="{{old('accountName')}}">
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="account-number" class="form-label">Rekening Pertama</label>
                      <input type="text" class="form-control" id="accountNumber" name="accountNumber" placeholder="86093939393" value="{{old('accountNumber')}}">
                    </div>

                    <div class="mb-3 text-center mx-2">
                      <label for="bank2" class="form-label">Nama Bank Kedua</label>
                      <input type="text" class="form-control" id="bank2" name="bank2" placeholder="BCA" value="{{old('bank2')}}">
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="account-name2" class="form-label">Nama Pemilik Rekening Kedua</label>
                      <input type="text" class="form-control" id="accountName2" name="accountName2" placeholder="Adi Firmansyah" value="{{old('accountName2')}}">
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="account-number2" class="form-label">Rekening Kedua</label>
                      <input type="text" class="form-control" id="accountNumber2" name="accountNumber2" placeholder="043185737" value="{{old('accountNumber2')}}">
                    </div>

                    <div class="mb-3 text-center mx-2">
                      <label for="gift-address" class="form-label">Alamat Kirim Kado </label>
                      <input type="text" class="form-control" id="giftAddress" name="giftAddress" placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur" value="{{old('giftAddress')}}">
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="gift-address" class="form-label">Form Ucapan </label>
                      <select id="congratulations" name="congratulations" class="form-select" aria-label="Default select example" value="{{old('congratulations')}}">
                        <option value="0" selected>Pilih Ketersediaan</option>
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="bg-info text-white mb-5 card" style="background: url('https://img.lovepik.com/background/20211022/medium/lovepik-gorgeous-fireworks-background-image_401892827.jpg') center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <h3 class="text-center">Form Tema</h3>
                    <div class="mb-3 text-center mx-2">
                      <label for="theme" class="form-label">Pilihan Tema</label>
                      <select id="theme" name="theme" class="form-select" aria-label="Default select example">
                        <option value="5" selected>Pilih Tema</option>
                        {{-- <option value="1">Premium 1</option>
                        <option value="2">Premium 2</option>
                        <option value="3">Premium 3</option>
                        <option value="4">Premium 4</option> --}}
                        <option value="5">Klasik 1</option>
                        <option value="6">Klasik 2</option>
                        <option value="7">Klasik 3</option>
                        <option value="8">Klasik 4</option>
                        <option value="9">Klasik 5</option>
                        <option value="10">Klasik 6</option>
                        <option value="17">Luxury 1</option>
                        <option value="18">Luxury 2</option>
                        <option value="19">Luxury 3</option>
                        {{-- <option value="20">Luxury 4</option>
                        <option value="21">Luxury 5</option>
                        <option value="22">Luxury 6</option>
                        <option value="23">Luxury 7</option>
                        <option value="24">Luxury 8</option> --}}
                        <option value="25">Watercolor 1</option>
                        <option value="26">Watercolor 2</option>
                        <option value="27">Watercolor 3</option>
                      </select>
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="music" class="form-label">Pilihan Lagu</label>
                      <select id="music" onchange="play()" name="music" class="form-select" aria-label="Default select example">
                        <option value="https://github.com/fiansyahm/JQuery/raw/main/beautiful.mp3?raw=true" selected>Pilih Lagu</option>
                        @foreach ($songs as $song)
                          <option value="{{$song->url}}">{{$song->name}}</option>
                        @endforeach
                        <option value="">STOP MAININ LAGU</option>
                      </select>
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="timezone" class="form-label">Timezone</label>
                      <select id="timezone" name="timezone" class="form-select" aria-label="Default select example">
                        <option value="WIB" selected>Pilih Waktu</option>
                        <option value="WIB">WIB</option>
                        <option value="WITA">WITA</option>
                        <option value="WIT">WIT</option>
                      </select>
                    </div>
                    
                    <script>
                      var previousAudio = null; // Inisialisasi elemen audio sebelumnya
                    
                      function play() {
                        alert("Lagu akan dimainkan");
                        var audioUrl = document.getElementById("music").value;
                    
                        // Hentikan audio sebelumnya (jika ada)
                        if (previousAudio) {
                          previousAudio.pause();
                        }
                    
                        // Buat audio baru dan mainkan
                        var audio = new Audio(audioUrl);
                        audio.id = "audioElement"; // Beri ID ke elemen audio untuk referensi lebih lanjut
                        audio.play();
                    
                        // Perbarui referensi ke audio yang sedang diputar
                        previousAudio = audio;
                      }
                    </script>
                    
                    
                    
                    
                  </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-6">
                  <div class="bg-info text-white mb-5 card" style="background-image: url('https://www.wiranurmansyah.com/wp-content/uploads/2014/01/ES_021.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <h3 class="text-center">Form Our Story</h3>
                    <div class="mb-3 text-center mx-2">
                      <label for="ourstoryoption" class="form-label">Pilihan Opsi</label>
                      <select id="ourstoryoption" name="ourstoryoption" class="form-select" aria-label="Default select example" value="{{old('ourstoryoption')}}">
                        <option value="0" selected>Pilih Opsi Aktif/Tidak</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                      </select>
                    </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorydate1">Tanggal Our Story 1</label>
                                <input class="form-control" id="ourstorydate1" name="ourstorydate1" type="text" value="{{old('ourstorydate1')}}" />
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorytitle1">Judul Our Story 1</label>
                                <input class="form-control" id="ourstorytitle1" name="ourstorytitle1" type="text" value="{{old('ourstorytitle1')}}" />
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorydescription1">Deskripsi Our Story 1</label>
                                <input class="form-control" id="ourstorydescription1" name="ourstorydescription1" type="textarea" value="{{old('ourstorydescription1')}}" />
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorydate2">Tanggal Our Story 2</label>
                                <input class="form-control" id="ourstorydate2" name="ourstorydate2" type="text" value="{{old('ourstorydate2')}}" />
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorytitle2">Judul Our Story 2</label>
                                <input class="form-control" id="ourstorytitle2" name="ourstorytitle2" type="text" value="{{old('ourstorytitle2')}}" />
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorydescription2">Deskripsi Our Story 2</label>
                                <input class="form-control" id="ourstorydescription2" name="ourstorydescription2" type="textarea" value="{{old('ourstorydescription2')}}" />
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorydate3">Tanggal Our Story 3</label>
                                <input class="form-control" id="ourstorydate3" name="ourstorydate3" type="text" value="{{old('ourstorydate3')}}" />
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorytitle3">Judul Our Story 3</label>
                                <input class="form-control" id="ourstorytitle3" name="ourstorytitle3" type="text" value="{{old('ourstorytitle3')}}" />
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourstorydescription3">Deskripsi Our Story 3</label>
                                <input class="form-control" id="ourstorydescription3" name="ourstorydescription3" type="textarea" value="{{old('ourstorydescription3')}}" />
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="mb-3 text-center mx-2">
                                <label for="ourlivestreaming">Video Our Story (Link Youtube) </label>
                                <input class="form-control" id="ourlivestreaming" name="ourlivestreaming" type="text" value="{{old('ourlivestreaming')}}" />
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
            </div>

            <div class="row">

              {{-- <div class="col-md-12">
                <label for="code-option" class="form-label">Proses Pembayaran</label>
                <select id="code-option" name="code-option" class="form-select" aria-label="Default select example">
                  <option value="0" selected>Pilih Opsi</option>
                  <option value="1">Sudah Bayar</option>
                  <option value="0">Lihat Demo Dulu, Jika Saya Puas, Saya Akan Bayar</option>
                </select>
              </div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script>
                $(document).ready(function(){
                  $("#code-option").change(function(){
                    if($(this).val() == "1"){
                      $("#code").show();
                      $("#code").val("");
                    }else{
                      $("#code").hide();
                      $("#code").val("midtrans");
                    }
                  });
                });
              </script> --}}
              <div class="col-md-12">
                <div class="mb-3 text-center">
                  <label for="code" class="form-label">Kode</label>
                  <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" placeholder="masukkan kode jika sudah bayar, kalau belum dikosongi saja" value="{{old('code')}}" style="display: block">
                  @error('code')
                    <div class="alert alert-danger">Kode Wajib Diisi</div>
                  @enderror
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
            <script>
                function simulateProcess() {
                    return new Promise(function(resolve, reject) {
                        // Menggantikan ini dengan proses yang sebenarnya
                        // Simulasi proses selama 2 detik
                        setTimeout(function() {
                            resolve(); // Proses selesai
                        }, 2000);
                    });
                }

                document.getElementById('buatUndangan').addEventListener('click', function() {
                    // Menampilkan spinner
                    document.getElementById('loadingSpinner').classList.remove('d-none');

                    // Menyembunyikan tombol
                    this.style.display = 'none';

                    simulateProcess().then(function() {
                        // Sembunyikan spinner setelah proses selesai
                        document.getElementById('loadingSpinner').classList.add('d-none');

                        // Menampilkan kembali tombol
                        document.getElementById('buatUndangan').style.display = 'block';
                    });
                });
            </script>
        
        </form>
    </div>
@endsection

                  
              