@section('main')
    <div class="mx-3 mt-5 rounded bg-dark text-white">
        <h1 class="text-center">Edit Ideelink</h1>
        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/update-ideelink"
            method="post">
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="id-bridge" class="form-label">ID ideelink</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"
                            name="id" value="{{ $ideelink['id'] }}" placeholder="ID ideelink" readonly>
                        @error('id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="theme" class="form-label">Tema ideelink</label>
                        <select type="text" class="form-control @error('theme') is-invalid @enderror" id="theme"
                            name="theme" value="{{ $ideelink->theme }}" placeholder="Tema ideelink">
                            <option @if($ideelink->theme == '1') selected @endif value="1">Tema 1</option>
                            <option @if($ideelink->theme == '2') selected @endif value="2">Tema 2</option>
                            <option @if($ideelink->theme == '3') selected @endif value="3">Tema 3</option>
                        </select>
  
                        @error('theme')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <h1 class="text-center">Profil</h1>
                    <div class="mb-3">
                        <label for="name_account" class="form-label">Nama Akun<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('name_account') is-invalid @enderror" id="name_account"
                            name="name_account" value="{{ $ideelink['name_account'] }}" placeholder="Tulis nama akun">
                        @error('name_account')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>
                
                <div class="col-md-2"></div>

                <div class="col-md-5">
                    <h1 class="text-center">Sosial Media</h1>
                    <div class="mb-3">
                        <label for="youtube" class="form-label">youtube</label>
                        <input type="text" class="form-control @error('youtube') is-invalid @enderror" id="youtube"
                            name="youtube" value="{{ $ideelink['youtube'] }}" placeholder="youtube">
                        @error('youtube')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tiktok" class="form-label">tiktok</label>
                        <input type="text" class="form-control @error('tiktok') is-invalid @enderror" id="tiktok"
                            name="tiktok" value="{{ $ideelink['tiktok'] }}" placeholder="tiktok">
                        @error('tiktok')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="instagram" class="form-label">instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram"
                            name="instagram" value="{{ $ideelink['instagram'] }}" placeholder="instagram">
                        @error('instagram')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="googleplay" class="form-label">googleplay</label>
                        <input type="text" class="form-control @error('googleplay') is-invalid @enderror" id="googleplay"
                            name="googleplay" value="{{ $ideelink['googleplay'] }}" placeholder="googleplay">
                        @error('googleplay')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="telegram" class="form-label">telegram</label>
                        <input type="text" class="form-control @error('telegram') is-invalid @enderror" id="telegram"
                            name="telegram" value="{{ $ideelink['telegram'] }}" placeholder="telegram">
                        @error('telegram')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="whatsapp" class="form-label">whatsapp</label>
                        <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp"
                            name="whatsapp" value="{{ $ideelink['whatsapp'] }}" placeholder="whatsapp">
                        @error('whatsapp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="shopee" class="form-label">shopee</label>
                        <input type="text" class="form-control @error('shopee') is-invalid @enderror" id="shopee"
                            name="shopee" value="{{ $ideelink['shopee'] }}" placeholder="shopee">
                        @error('shopee')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tiktokshop" class="form-label">tiktokshop</label>
                        <input type="text" class="form-control @error('tiktokshop') is-invalid @enderror" id="tiktokshop"
                            name="tiktokshop" value="{{ $ideelink['tiktokshop'] }}" placeholder="tiktokshop">
                        @error('tiktokshop')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tokopedia" class="form-label">tokopedia</label>
                        <input type="text" class="form-control @error('tokopedia') is-invalid @enderror" id="tokopedia"
                            name="tokopedia" value="{{ $ideelink['tokopedia'] }}" placeholder="tokopedia">
                        @error('tokopedia')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-warning mx-auto d-flex text-white">
                    Update ideelink
                </button>
            </div>

        </form>
    </div>
@endsection
