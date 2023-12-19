@extends('invitation.template')
@section('main')
 
    <div class="mx-3 mt-5 rounded" style="color: white;background-image: url(https://marketplace.canva.com/EAFNFlMpIKw/1/0/1600w/canva-pink-watercolor-linktree-background-CJpXvOkftQY.jpg);">
        <h1 class="text-center">Register Aqiqah Invitation</h1>
        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/add-aqiqah" method="post">
            @csrf
            <div class="row">
                <div class="col-md-5 text-white mb-5 card" style="background-image: url('https://i.ibb.co/NS92FLH/foto-laki2.jpg');">
                  <h3 class="text-center">Form Identitas</h3>
                  <div class="mb-3">
                    <label for="nickname" class="form-label">Nama Panggilan<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('nickname') is-invalid @enderror" id="nickname" name="nickname" placeholder="ADI">
                    @error('nickname')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="fullname" class="form-label">Nama Lengkap <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" placeholder="Adi Firmansyah">
                    @error('fullname')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="child" class="form-label">Urutan (Anak Kedua) <a style="color:orange;">(Wajib)</a> </label>
                    <input type="text" class="form-control @error('child') is-invalid @enderror" id="child" name="child" placeholder="Kedua">
                    @error('child')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="fathername" class="form-label">Nama Ayah <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fathername') is-invalid @enderror" id="fathername" name="fathername" placeholder="Bapak Dwi Darmono">
                    @error('fathername')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="mothername" class="form-label">Nama Ibu <a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('mothername') is-invalid @enderror" id="mothername" name="mothername" placeholder="Ibu Ningsih Rukmini">
                    @error('mothername')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="photo" class="form-label">Link Foto (<a href="https://youtu.be/reUeJ5q8WQU">Lihat Tutorial</a>) </label>
                    <input type="text" class="form-control" id="photo" name="photo" placeholder="https://i.ibb.co/NS92FLH/foto-laki2.jpg (boleh dikosongi)">
                  </div>
                  <div class="mb-3">
                    <label for="instagram" class="form-label">Username instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="cristiano">
                  </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                  <div class="bg-info text-white mb-5 card" style="background-image: url('https://media.istockphoto.com/id/1480712755/id/foto/defokus-glitter-hijau-emas-bokeh-abstrak-background-dengan-lampu-bokeh-lampu-vintage.jpg?s=612x612&w=0&k=20&c=tJDwioqTTDFwd6h64WQn4kcTAIcIRKd8jE36GdgaC40=');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                      <div class="mb-3 text-center">
                        <h3 class="text-center">Form Tanggal & Tempat Acara</h3>
                        <label for="date">Tanggal Acara <a style="color:orange;">(Wajib)</a></label>
                        <input class="form-control @error('date') is-invalid @enderror" id="date" name="date" type="date" />
                        @error('date')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="hour-start">Waktu mulai Acara <a style="color:orange;">(Wajib)</a></label>
                                <input class="form-control @error('hourStart') is-invalid @enderror" id="hourStart" name="hourStart" type="time" />
                                @error('hourStart')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="hour-end">Waktu selesai Acara</label>
                                <input class="form-control @error('hourEnd') is-invalid @enderror" id="hourEnd" name="hourEnd" type="time" />
                                @error('hourEnd')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="place-name" class="form-label">Nama Tempat <a style="color:orange;">(Wajib)</a></label>
                                <input type="text" class="form-control @error('placeName') is-invalid @enderror" id="placeName" name="placeName" placeholder="Ballroom Kamboja, My Tower Hotel Surabaya">
                                @error('placeName')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="place-address" class="form-label">Alamat Tempat <a style="color:orange;">(Wajib)</a></label>
                                <input type="text" class="form-control @error('placeAddress') is-invalid @enderror" id="placeAddress" name="placeAddress" placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur">
                                @error('placeAddress')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3 text-center mx-2">
                                <label for="google-address" class="form-label">Alamat Gmap <a style="color:orange;">(Wajib)</a></label>
                                <input type="text" class="form-control @error('googleAddress') is-invalid @enderror" id="googleAddress" name="googleAddress" placeholder="https://maps.app.goo.gl/pKsatZc8hMRwpiUHA">
                                @error('googleAddress')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
                      <input type="text" class="form-control" id="bank" name="bank" placeholder="BRI">
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="account-name" class="form-label">Nama Pemilik Rekening Pertama</label>
                      <input type="text" class="form-control" id="accountName" name="accountName" placeholder="Fira Permata">
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="account-number" class="form-label">Rekening Pertama</label>
                      <input type="text" class="form-control" id="accountNumber" name="accountNumber" placeholder="86093939393">
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
                      <input type="text" class="form-control" id="giftAddress" name="giftAddress" placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur">
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="gift-address" class="form-label">Form Ucapan </label>
                      <select id="congratulations" name="congratulations" class="form-select" aria-label="Default select example">
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
                        <option value="1" selected>Pilih Tema</option>
                        <option value="1">Premium 1</option>
                        {{-- <option value="2">Premium 2</option>
                        <option value="3">Premium 3</option> --}}
                      </select>
                    </div>
                    <div class="mb-3 text-center mx-2">
                      <label for="music" class="form-label">Pilihan Lagu</label>
                      <select id="music" onchange="play()" name="music" class="form-select" aria-label="Default select example">
                        <option value="https://web.sebarundangan.xyz/wp-content/uploads/2023/11/backsound-AQIQAH-DIGITAL.mp3" selected>Pilih Lagu</option>
                        <option value="https://web.sebarundangan.xyz/wp-content/uploads/2023/11/backsound-AQIQAH-DIGITAL.mp3">Lagu 1</option>
                        
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
              <div class="col-md-12">
                <div class="mb-3 text-center">
                  <label for="code" class="form-label">Kode</label>
                  <input type="text" class="form-control" id="code" name="code" placeholder="masukkan kode buat undangan">
                </div>
              </div>
            </div>
          
            <div class="text-center">
              <button class="btn btn-lg mx-auto d-flex" style="color: white;background-color:pink;">
                  Buat Undangan
              </button>
            </div>
        
        </form>
    </div>
@endsection

                  
              