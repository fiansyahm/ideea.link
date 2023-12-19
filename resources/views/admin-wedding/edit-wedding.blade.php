@section('main')
    <div class="mx-3 mt-5 rounded"
        style="color: white;background-image: url(https://marketplace.canva.com/EAFNFlMpIKw/1/0/1600w/canva-pink-watercolor-linktree-background-CJpXvOkftQY.jpg);">
        <h1 class="text-center">Register Wedding Invitation</h1>
        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/update-wedding"
            method="post">
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="id-bridge" class="form-label">ID Undangan<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"
                            name="id" value="{{ $wedding['id'] }}" placeholder="ID Undangan">
                        @error('id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 text-white mb-5 card"
                    style="background-image: url('https://i.ibb.co/NS92FLH/foto-laki2.jpg');">
                    <h3 class="text-center">Form Mempelai Pria</h3>
                    <div class="mb-3">
                        <label for="nickname-male" class="form-label">Nama Panggilan Mempelai Pria <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('nicknameMale') is-invalid @enderror"
                            id="nicknameMale" name="nicknameMale" value="{{ $wedding->nicknameMale }}" placeholder="ADI">
                        @error('nicknameMale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fullname-male" class="form-label">Nama Lengkap Mempelai Pria <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('fullnameMale') is-invalid @enderror"
                            id="fullnameMale" name="fullnameMale" value="{{ $wedding->fullnameMale }}"
                            placeholder="Adi Firmansyah, SH">
                        @error('fullnameMale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="child-male" class="form-label">Urutan (Anak Kedua) <a style="color:orange;">(Wajib)</a>
                        </label>
                        <input type="text" class="form-control @error('childMale') is-invalid @enderror" id="childMale"
                            name="childMale" value="{{ $wedding->childMale }}" placeholder="Kedua">
                        @error('childMale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fathername-male" class="form-label">Nama Ayah Mempelai Pria <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('fathernameMale') is-invalid @enderror"
                            id="fathernameMale" name="fathernameMale" value="{{ $wedding->fathernameMale }}"
                            placeholder="Bapak Dwi Darmono">
                        @error('fathernameMale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="mothername-male" class="form-label">Nama Ibu Mempelai Pria <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('mothernameMale') is-invalid @enderror"
                            id="mothernameMale" name="mothernameMale" value="{{ $wedding->mothernameMale }}"
                            placeholder="Ibu Ningsih Rukmini">
                        @error('mothernameMale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="photo-male" class="form-label">Foto Mempelai Pria (dalam bentuk link google
                            drive)</label>
                        <input
                            @if(Auth::check() && Auth::user()->isAdmin == 1)
                            type="text" 
                            @else
                            type="file"
                            @endif
                            class="form-control" id="photoMale" name="photoMale"
                            value="{{ $wedding->photoMale }}"
                            placeholder="https://i.ibb.co/NS92FLH/foto-laki2.jpg (boleh dikosongi)"
                            >
                        @if($wedding->photoMale != null && Auth::check() && Auth::user()->isAdmin == 1)
                        <a class="btn btn-primary" href="{{ $wedding->photoMale }}" target="_blank">Lihat Foto</a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="instagram-male" class="form-label">Username instagram Mempelai Pria</label>
                        <input type="text" class="form-control" id="instagramMale" name="instagramMale"
                            value="{{ $wedding->instagramMale }}" placeholder="cristiano">
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 bg-primary text-white mb-5 card"
                    style="background-image: url('https://i.ibb.co/Z6QySdq/foto-perempuan.jpg');">
                    <h3 class="text-center">Form Mempelai Wanita</h3>
                    <div class="mb-3">
                        <label for="nickname-female" class="form-label">Nama Panggilan Mempelai Wanita <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('nicknameFemale') is-invalid @enderror"
                            id="nicknameFemale" name="nicknameFemale" value="{{ $wedding->nicknameFemale }}"
                            placeholder="Fira">
                        @error('nicknameFemale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fullname-female" class="form-label">Nama Lengkap Mempelai Wanita <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('fullnameFemale') is-invalid @enderror"
                            id="fullnameFemale" name="fullnameFemale" value="{{ $wedding->fullnameFemale }}"
                            placeholder="Fira Permata, S.Pd">
                        @error('fullnameFemale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="child-female" class="form-label">Urutan (Anak Pertama) <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('childFemale') is-invalid @enderror"
                            id="childFemale" name="childFemale" value="{{ $wedding->childFemale }}"
                            placeholder="Pertama">
                        @error('childFemale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fathername-female" class="form-label">Nama Ayah Mempelai Wanita <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('fathernameFemale') is-invalid @enderror"
                            id="fathernameFemale" name="fathernameFemale" value="{{ $wedding->fathernameFemale }}"
                            placeholder="Bapak Darso Permono">
                        @error('fathernameFemale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="mothername-female" class="form-label">Nama Ibu Mempelai Wanita <a
                                style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('mothernameFemale') is-invalid @enderror"
                            id="mothernameFemale" name="mothernameFemale" value="{{ $wedding->mothernameFemale }}"
                            placeholder="Ibu Rukmini Handayani">
                        @error('mothernameFemale')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="photo-female" class="form-label">Foto Mempelai Wanita (dalam bentuk link google
                            drive)</label>
                        <input 
                            @if(Auth::check() && Auth::user()->isAdmin == 1)
                            type="text" 
                            @else
                            type="file"
                            @endif
                            class="form-control" id="photoFemale" name="photoFemale"
                            value="{{ $wedding->photoFemale }}"
                            placeholder="https://i.ibb.co/Z6QySdq/foto-perempuan.jpg (boleh dikosongi)">
                        @if($wedding->photoFemale != null && Auth::check() && Auth::user()->isAdmin == 1)
                        <a class="btn btn-primary" href="{{ $wedding->photoFemale }}" target="_blank">Lihat Foto</a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="instagram-female" class="form-label">Username instagram Mempelai Wanita</label>
                        <input type="text" class="form-control" id="instagramFemale" name="instagramFemale"
                            value="{{ $wedding->instagramFemale }}" placeholder="kate.winslet.official">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6"
                    @if(Auth::check() && Auth::user()->isAdmin == 1)
                            
                    @elseif($wedding->solemnizationPlaceName == null)
                        style="display: none;"
                    @endif
                    >
                    <div class="bg-info text-white mb-5 card"
                        style="background-image: url('https://media.istockphoto.com/id/1480712755/id/foto/defokus-glitter-hijau-emas-bokeh-abstrak-background-dengan-lampu-bokeh-lampu-vintage.jpg?s=612x612&w=0&k=20&c=tJDwioqTTDFwd6h64WQn4kcTAIcIRKd8jE36GdgaC40=');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="mb-3 text-center">
                            <h3 class="text-center">Form Tanggal & Tempat Akad</h3>
                            <label for="solemnization-title">Judul Acara Akad </label>
                            <input class="form-control @error('solemnizationTitle') is-invalid @enderror" id="solemnizationTitle" name="solemnizationTitle" type="text" value="{{$wedding->solemnizationTitle}}" placeholder="Akad Nikah" />
                            @error('solemnizationTitle')
                            <div class="alert alert-danger">Kolom Wajib Diisi</div>
                            @enderror
                        </div>
                        <div class="mb-3 text-center">
                            <label for="solemnization-date">Tanggal Akad <a style="color:orange;">(Wajib)</a></label>
                            <input class="form-control @error('solemnizationDate') is-invalid @enderror"
                                id="solemnizationDate" name="solemnizationDate"
                                value="{{ $wedding->solemnizationDate }}" type="date" />
                            @error('solemnizationDate')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="solemnization-hour-start">Waktu mulai Akad <a
                                            style="color:orange;">(Wajib)</a></label>
                                    <input class="form-control @error('solemnizationHourStart') is-invalid @enderror"
                                        id="solemnizationHourStart" name="solemnizationHourStart"
                                        value="{{ $wedding->solemnizationHourStart }}" type="time" />
                                    @error('solemnizationHourStart')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="solemnization-hour-end">Waktu selesai Akad</label>
                                    <input class="form-control @error('solemnizationHourEnd') is-invalid @enderror"
                                        id="solemnizationHourEnd" name="solemnizationHourEnd"
                                        value="{{ $wedding->solemnizationHourEnd }}" type="time" />
                                    @error('solemnizationHourEnd')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="place-name" class="form-label">Nama Tempat <a
                                            style="color:orange;">(Wajib)</a></label>
                                    <input type="text"
                                        class="form-control @error('solemnizationPlaceName') is-invalid @enderror"
                                        id="solemnizationPlaceName" name="solemnizationPlaceName"
                                        value="{{ $wedding->solemnizationPlaceName }}"
                                        placeholder="Ballroom Kamboja, My Tower Hotel Surabaya">
                                    @error('solemnizationPlaceName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="place-address" class="form-label">Alamat Tempat <a
                                            style="color:orange;">(Wajib)</a></label>
                                    <input type="text"
                                        class="form-control @error('solemnizationPlaceAddress') is-invalid @enderror"
                                        id="solemnizationPlaceAddress" name="solemnizationPlaceAddress"
                                        value="{{ $wedding->solemnizationPlaceAddress }}"
                                        placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur">
                                    @error('solemnizationPlaceAddress')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="google-address" class="form-label">Alamat Gmap <a
                                            style="color:orange;">(Wajib)</a></label>
                                    <input type="text"
                                        class="form-control @error('solemnizationGoogleAddress') is-invalid @enderror"
                                        id="solemnizationGoogleAddress" name="solemnizationGoogleAddress"
                                        value="{{ $wedding->solemnizationGoogleAddress }}"
                                        placeholder="https://maps.app.goo.gl/pKsatZc8hMRwpiUHA">
                                    @error('solemnizationGoogleAddress')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6"
                    @if(Auth::check() && Auth::user()->isAdmin == 1)
                            
                    @elseif($wedding->weddingPlaceName == null)
                        style="display: none;"
                    @endif
                    >
                    <div class="bg-info text-white mb-5 card"
                        style="background-image: url('https://cdn.pixabay.com/photo/2012/11/06/03/46/background-64258_1280.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="mb-3 text-center">
                            <h3 class="text-center">Form Tanggal & Tempat Resepsi</h3>
                            <label for="wedding-title">Judul Acara Resepsi </label>
                            <input class="form-control @error('weddingTitle') is-invalid @enderror" id="weddingTitle" name="weddingTitle" type="text" value="{{$wedding->weddingTitle}}" placeholder="Resepsi Pernikahan" />
                            @error('weddingTitle')
                            <div class="alert alert-danger">Kolom Wajib Diisi</div>
                            @enderror
                        </div>
                        <div class="mb-3 text-center">
                            <label for="wedding-date">Tanggal Resepsi <a style="color:orange;">(Wajib)</a></label>
                            <input class="form-control @error('weddingDate') is-invalid @enderror" id="weddingDate"
                                name="weddingDate" value="{{ $wedding->weddingDate }}" type="date" />
                            @error('weddingDate')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="wedding-hour-start">Waktu mulai Resepsi <a
                                            style="color:orange;">(Wajib)</a></label>
                                    <input class="form-control @error('weddingHourStart') is-invalid @enderror"
                                        id="weddingHourStart" name="weddingHourStart"
                                        value="{{ $wedding->weddingHourStart }}" type="time" />
                                    @error('weddingHourStart')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="wedding-hour-end">Waktu selesai Resepsi</label>
                                    <input class="form-control @error('weddingHourEnd') is-invalid @enderror"
                                        id="weddingHourEnd" name="weddingHourEnd" value="{{ $wedding->weddingHourEnd }}"
                                        type="time" />
                                    @error('weddingHourEnd')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="place-name" class="form-label">Nama Tempat <a
                                            style="color:orange;">(Wajib)</a></label>
                                    <input type="text"
                                        class="form-control @error('weddingPlaceName') is-invalid @enderror"
                                        id="weddingPlaceName" name="weddingPlaceName"
                                        value="{{ $wedding->weddingPlaceName }}"
                                        placeholder="Ballroom Kamboja, My Tower Hotel Surabaya">
                                    @error('weddingPlaceName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="place-address" class="form-label">Alamat Tempat <a
                                            style="color:orange;">(Wajib)</a></label>
                                    <input type="text"
                                        class="form-control @error('weddingPlaceAddress') is-invalid @enderror"
                                        id="weddingPlaceAddress" name="weddingPlaceAddress"
                                        value="{{ $wedding->weddingPlaceAddress }}"
                                        placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur">
                                    @error('weddingPlaceAddress')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="google-address" class="form-label">Alamat Gmap <a
                                            style="color:orange;">(Wajib)</a></label>
                                    <input type="text"
                                        class="form-control @error('weddingGoogleAddress') is-invalid @enderror"
                                        id="weddingGoogleAddress" name="weddingGoogleAddress"
                                        value="{{ $wedding->weddingGoogleAddress }}"
                                        placeholder="https://maps.app.goo.gl/pKsatZc8hMRwpiUHA">
                                    @error('weddingGoogleAddress')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6"
                    @if(Auth::check() && Auth::user()->isAdmin == 1)
                        
                    @elseif($wedding->ngunduhPlaceName == null)
                        style="display: none;"
                    @endif
                    >
                    <div class="bg-info text-white mb-5 card"
                        style="background-image: url('https://cdn.pixabay.com/photo/2014/04/01/11/46/bokeh-302457_960_720.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="mb-3 text-center">
                            <h3 class="text-center">Form Tanggal & Tempat Ngunduh Mantu</h3>
                            <label for="ngunduh-title">Judul Acara Ngunduh Mantu</label>
                            <input class="form-control @error('ngunduhTitle') is-invalid @enderror" id="ngunduhTitle" name="ngunduhTitle" type="text" value="{{$wedding->ngunduhTitle}}" placeholder="Ngunduh Mantu" />
                            @error('ngunduhTitle')
                            <div class="alert alert-danger">Kolom Wajib Diisi</div>
                            @enderror
                        </div>
                        <div class="mb-3 text-center">
                            <label for="ngunduh-date">Tanggal Ngunduh Mantu</label>
                            <input class="form-control @error('ngunduhDate') is-invalid @enderror" id="ngunduhDate"
                                name="ngunduhDate" value="{{ $wedding->ngunduhDate }}" type="date" />
                            @error('ngunduhDate')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ngunduh-hour-start">Waktu mulai Ngunduh Mantu</label>
                                    <input class="form-control @error('ngunduhHourStart') is-invalid @enderror"
                                        id="ngunduhHourStart" name="ngunduhHourStart"
                                        value="{{ $wedding->ngunduhHourStart }}" type="time" />
                                    @error('ngunduhHourStart')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ngunduh-hour-end">Waktu selesai Ngunduh Mantu</label>
                                    <input class="form-control @error('ngunduhHourEnd') is-invalid @enderror"
                                        id="ngunduhHourEnd" name="ngunduhHourEnd" value="{{ $wedding->ngunduhHourEnd }}"
                                        type="time" />
                                    @error('ngunduhHourEnd')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="place-name" class="form-label">Nama Tempat</label>
                                    <input type="text"
                                        class="form-control @error('ngunduhPlaceName') is-invalid @enderror"
                                        id="ngunduhPlaceName" name="ngunduhPlaceName"
                                        value="{{ $wedding->ngunduhPlaceName }}"
                                        placeholder="Ballroom Kamboja, My Tower Hotel Surabaya">
                                    @error('ngunduhPlaceName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="place-address" class="form-label">Alamat Tempat</label>
                                    <input type="text"
                                        class="form-control @error('ngunduhPlaceAddress') is-invalid @enderror"
                                        id="ngunduhPlaceAddress" name="ngunduhPlaceAddress"
                                        value="{{ $wedding->ngunduhPlaceAddress }}"
                                        placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur">
                                    @error('ngunduhPlaceAddress')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="google-address" class="form-label">Alamat Gmap</label>
                                    <input type="text"
                                        class="form-control @error('ngunduhGoogleAddress') is-invalid @enderror"
                                        id="ngunduhGoogleAddress" name="ngunduhGoogleAddress"
                                        value="{{ $wedding->ngunduhGoogleAddress }}"
                                        placeholder="https://maps.app.goo.gl/pKsatZc8hMRwpiUHA">
                                    @error('ngunduhGoogleAddress')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bg-info text-white mb-5 card"
                        style="background-image: url('https://poetrafoto.files.wordpress.com/2019/04/foto-prewedding-hijab-simple-unik-outdoor-muslimah-syari-romantis-emiadam-lokasi-di-pantai-jogja-1.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="mb-3 text-center">
                            <h3 class="text-center">Form Foto Prewed</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="theme" class="form-label">Pilihan Opsi</label>
                                    <select id="fotoPrewedding" name="fotoPrewedding" class="form-select"
                                        aria-label="Default select example">
                                        @if ($wedding->fotoPrewedding != null)
                                            <option value="{{ $wedding->fotoPrewedding }}" selected>
                                                @if($wedding->fotoPrewedding == 1)
                                                Ya
                                                @else
                                                Tidak
                                                @endif
                                            </option>
                                        @endif
                                        <option value="0">Pilih Opsi</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="google-address" class="form-label">Foto 1</label>
                                    <input 
                                        @if(Auth::check() && Auth::user()->isAdmin == 1)
                                        type="text" 
                                        @else
                                        type="file"
                                        @endif
                                        class="form-control " id="foto1" name="foto1"
                                        placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp"
                                        value="{{ $wedding->foto1 }}"
                                        >
                                    @if($wedding->foto1 != null && Auth::check() && Auth::user()->isAdmin == 1)
                                    <a class="btn btn-primary" href="{{ $wedding->foto1 }}" target="_blank">Lihat Foto</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="google-address" class="form-label">Foto 2</label>
                                    
                                    <input 
                                        @if(Auth::check() && Auth::user()->isAdmin == 1)
                                        type="text" 
                                        @else
                                        type="file"
                                        @endif
                                        class="form-control " id="foto2" name="foto2"
                                        placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp"
                                        value="{{ $wedding->foto2 }}"
                                        >
                                    @if($wedding->foto2 != null && Auth::check() && Auth::user()->isAdmin == 1)
                                    <a class="btn btn-primary" href="{{ $wedding->foto2 }}" target="_blank">Lihat Foto</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="google-address" class="form-label">Foto 3</label>
                                    <input 
                                        @if(Auth::check() && Auth::user()->isAdmin == 1)
                                        type="text"
                                        @else
                                        type="file"
                                        @endif
                                        class="form-control " id="foto3" name="foto3"
                                        placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp"
                                        value="{{ $wedding->foto3 }}"
                                        >
                                    @if($wedding->foto3 != null && Auth::check() && Auth::user()->isAdmin == 1)
                                    <a class="btn btn-primary" href="{{ $wedding->foto3 }}" target="_blank">Lihat Foto</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="google-address" class="form-label">Foto 4</label>
                                    <input 
                                        @if(Auth::check() && Auth::user()->isAdmin == 1)
                                        type="text" 
                                        @else
                                        type="file"
                                        @endif
                                        class="form-control " id="foto4" name="foto4"
                                        placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp"
                                        value="{{ $wedding->foto4 }}"
                                        >
                                    @if($wedding->foto4 != null && Auth::check() && Auth::user()->isAdmin == 1)
                                    <a class="btn btn-primary" href="{{ $wedding->foto4 }}" target="_blank">Lihat Foto</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="google-address" class="form-label">Foto 5</label>
                                    <input
                                        @if(Auth::check() && Auth::user()->isAdmin == 1) 
                                        type="text" 
                                        @else
                                        type="file"
                                        @endif
                                        class="form-control " id="foto5" name="foto5"
                                        placeholder="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp"
                                        value="{{ $wedding->foto5 }}"
                                        >
                                    @if($wedding->foto5 != null && Auth::check() && Auth::user()->isAdmin == 1)
                                    <a class="btn btn-primary" href="{{ $wedding->foto5 }}" target="_blank">Lihat Foto</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-center mx-2">
                                  <label for="ourstoryvideo">Video Prewed (Link Youtube) </label>
                                  <input class="form-control" id="ourstoryvideo" name="ourstoryvideo" type="text" value="{{ $wedding->ourstoryvideo }}" placeholder="https://www.youtube.com/embed/9bZkp7q19f0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="bg-info text-white mb-5 card"
                        style="background-image: url('https://www.harianinhuaonline.com/wp-content/uploads/2018/02/fireinthesky-lanternfestival-home-1.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <h3 class="text-center">Form Kado</h3>
                        <div class="mb-3 text-center mx-2">
                            <label for="bank" class="form-label">Nama Bank</label>
                            <input type="text" class="form-control" id="bank" name="bank"
                                value="{{ $wedding->bank }}" placeholder="BRI">
                        </div>
                        <div class="mb-3 text-center mx-2">
                            <label for="account-name" class="form-label">Nama Pemilik Rekening</label>
                            <input type="text" class="form-control" id="accountName" name="accountName"
                                value="{{ $wedding->accountName }}" placeholder="Fira Permata">
                        </div>
                        <div class="mb-3 text-center mx-2">
                            <label for="account-number" class="form-label">Rekening </label>
                            <input type="text" class="form-control" id="accountNumber" name="accountNumber"
                                value="{{ $wedding->accountNumber }}" placeholder="86093939393">
                        </div>
                        <div class="mb-3 text-center mx-2">
                            <label for="bank2" class="form-label">Nama Bank Kedua</label>
                            <input type="text" class="form-control" id="bank2" name="bank2" 
                                value="{{ $wedding->bank2 }}" placeholder="BCA">
                          </div>
                          <div class="mb-3 text-center mx-2">
                            <label for="account-name2" class="form-label">Nama Pemilik Rekening Kedua</label>
                            <input type="text" class="form-control" id="accountName2" name="accountName2"
                                value="{{ $wedding->accountName2 }}" placeholder="Adi Firmansyah">
                          </div>
                          <div class="mb-3 text-center mx-2">
                            <label for="account-number2" class="form-label">Rekening Kedua</label>
                            <input type="text" class="form-control" id="accountNumber2" name="accountNumber2"
                                value="{{ $wedding->accountNumber2 }}" placeholder="043185737">
                          </div>
                        <div class="mb-3 text-center mx-2">
                            <label for="gift-address" class="form-label">Alamat Kirim Kado </label>
                            <input type="text" class="form-control" id="giftAddress" name="giftAddress"
                                value="{{ $wedding->giftAddress }}"
                                placeholder="Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur">
                        </div>
                        <div class="mb-3 text-center mx-2">
                            <label for="gift-address" class="form-label">Form Ucapan </label>
                            <select id="congratulations" name="congratulations" class="form-select"
                                aria-label="Default select example">
                                @if ($wedding->congratulations != null)
                                    <option value="{{ $wedding->congratulations }}" selected>
                                        @if($wedding->congratulations == 1)
                                        Ya
                                        @else
                                        Tidak
                                        @endif
                                    </option>
                                @endif
                                <option value="0">Pilih Ketersediaan</option>
                                <option value="0">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-info text-white mb-5 card"
                        style="background: url('https://img.lovepik.com/background/20211022/medium/lovepik-gorgeous-fireworks-background-image_401892827.jpg') center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <h3 class="text-center">Form Tema</h3>
                        <div class="mb-3 text-center mx-2">
                            <label for="theme" class="form-label">Pilihan Tema</label>
                            <select id="theme" name="theme" class="form-select"
                                aria-label="Default select example">
                                @if ($wedding->theme != null)
                                    <option value="{{ $wedding->theme }}" selected>{{ $wedding->theme }}</option>
                                @endif
                                <option value="5">Pilih Tema</option>
                                <option value="1">Premium 1</option>
                                <option value="2">Premium 2</option>
                                <option value="3">Premium 3</option>
                                <option value="4">Premium 4</option>
                                <option value="5">Klasik 1</option>
                                <option value="6">Klasik 2</option>
                                <option value="7">Klasik 3</option>
                                <option value="8">Klasik 4</option>
                                <option value="9">Klasik 5</option>
                                <option value="10">Klasik 6</option>
                                {{-- <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option> --}}
                                <option value="17">Luxury 1</option>
                                <option value="18">Luxury 2</option>
                                <option value="19">Luxury 3</option>
                                <option value="20">Luxury 4</option>
                                <option value="21">Luxury 5</option>
                                <option value="22">Luxury 6</option>
                                <option value="25">Watercolor 1</option>
                                <option value="26">Watercolor 2</option>
                                <option value="27">Watercolor 3</option>
                                <option value="28">Watercolor 4</option>
                                <option value="29">Watercolor 5</option>
                                <option value="30">Watercolor 6</option>
                            </select>
                        </div>
                        <div class="mb-3 text-center mx-2">
                            <label for="music" class="form-label">Pilihan Lagu</label>
                            <select id="music" onchange="play()" name="music" class="form-select"
                                aria-label="Default select example">
                                @if ($wedding->music != null)
                                    <option value="{{ $wedding->music }}" selected>{{ $wedding->music }}</option>
                                @endif
                                <option value="https://github.com/fiansyahm/JQuery/raw/main/beautiful.mp3?raw=true">Pilih
                                    Lagu</option>
                                @foreach ($songs as $song)
                                    <option value="{{ $song->url }}">{{ $song->name }}</option>
                                @endforeach
                                    <option value="">STOP MAININ LAGU</option>
                            </select>
                        </div>

                        <div class="mb-3 text-center mx-2">
                            <label for="timezone" class="form-label">Timezone</label>
                            <select id="timezone" name="timezone" class="form-select" aria-label="Default select example">
                                @if ($wedding->timezone != null)
                                    <option value="{{ $wedding->timezone }}" selected>{{ $wedding->timezone }}</option>
                                @endif
                              <option value="WIB">Pilih Waktu</option>
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
                    <div class="bg-info text-white mb-5 card"
                        style="background-image: url('https://www.wiranurmansyah.com/wp-content/uploads/2014/01/ES_021.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <h3 class="text-center">Form Our Story</h3>
                        <div class="mb-3 text-center mx-2">
                            <label for="ourstoryoption" class="form-label">Pilihan Opsi</label>
                            <select id="ourstoryoption" name="ourstoryoption" class="form-select"
                                aria-label="Default select example">
                                @if ($wedding->ourstoryoption != null)
                                    <option value="{{ $wedding->ourstoryoption }}" selected>
                                        @if($wedding->ourstoryoption == 1)
                                        Ya
                                        @else
                                        Tidak
                                        @endif
                                    </option>
                                @endif
                                <option value="0">Pilih Opsi Aktif/Tidak</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorydate1">Tanggal Our Story 1</label>
                                    <input class="form-control" id="ourstorydate1" name="ourstorydate1" type="text"
                                        value="{{ $wedding->ourstorydate1 }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorytitle1">Judul Our Story 1</label>
                                    <input class="form-control" id="ourstorytitle1" name="ourstorytitle1" type="text"
                                        value="{{ $wedding->ourstorytitle1 }}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorydescription1">Deskripsi Our Story 1</label>
                                    <input class="form-control" id="ourstorydescription1" name="ourstorydescription1"
                                        type="textarea" value="{{ $wedding->ourstorydescription1 }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorydate2">Tanggal Our Story 2</label>
                                    <input class="form-control" id="ourstorydate2" name="ourstorydate2" type="text"
                                        value="{{ $wedding->ourstorydate2 }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorytitle2">Judul Our Story 2</label>
                                    <input class="form-control" id="ourstorytitle2" name="ourstorytitle2" type="text"
                                        value="{{ $wedding->ourstorytitle2 }}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorydescription2">Deskripsi Our Story 2</label>
                                    <input class="form-control" id="ourstorydescription2" name="ourstorydescription2"
                                        type="textarea" value="{{ $wedding->ourstorydescription2 }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorydate3">Tanggal Our Story 3</label>
                                    <input class="form-control" id="ourstorydate3" name="ourstorydate3" type="text"
                                        value="{{ $wedding->ourstorydate3 }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorytitle3">Judul Our Story 3</label>
                                    <input class="form-control" id="ourstorytitle3" name="ourstorytitle3" type="text"
                                        value="{{ $wedding->ourstorytitle3 }}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourstorydescription3">Deskripsi Our Story 3</label>
                                    <input class="form-control" id="ourstorydescription3" name="ourstorydescription3"
                                        type="textarea" value="{{ $wedding->ourstorydescription3 }}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-center mx-2">
                                    <label for="ourlivestreaming">Video Our Story (Link Youtube) </label>
                                    <input class="form-control" id="ourlivestreaming" name="ourlivestreaming" type="text"
                                        value="{{ $wedding->ourlivestreaming }}" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-lg mx-auto d-flex" style="color: white;background-color:pink;">
                    Update Undangan
                </button>
            </div>

        </form>
    </div>
@endsection
