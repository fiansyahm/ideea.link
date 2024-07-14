@extends('template-admin')
@section('navbar_menu_ideelink', 'bg-primary text-white')
@section('main')
    <div class="mx-3 mt-5 rounded bg-dark text-white">
        <h1 class="text-center">Register ideelink</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/add-ideelink"
            method="post">
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="theme" class="form-label">Tema Ideelink</label>
                        <select type="text" class="form-select form-control @error('theme') is-invalid @enderror" id="theme"
                            name="theme" value="{{ old('theme') }}" placeholder="Tema Undangan">
                            <option value="1">Tema 1</option>
                            <option value="2">Tema 2</option>
                            <option value="3">Tema 3</option>
                        </select>
                        @error('theme')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <h1 class="text-center">Registrasi</h1>
                
                <div class="mb-3">
                    <label for="name_account" class="form-label">Nama Akun<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('name_account') is-invalid @enderror" id="name_account" name="name_account"
                        value="{{ old('name_account') }}" placeholder="Tulis nama akun">
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
                    <input type="text" class="form-control @error('youtube') is-invalid @enderror" id="youtube" name="youtube"
                        value="{{ old('youtube') }}" placeholder="youtube">
                    @error('youtube')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tiktok" class="form-label">tiktok</label>
                    <input type="text" class="form-control @error('tiktok') is-invalid @enderror" id="tiktok" name="tiktok"
                        value="{{ old('tiktok') }}" placeholder="tiktok">
                    @error('tiktok')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="instagram" class="form-label">instagram</label>
                    <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram"
                        value="{{ old('instagram') }}" placeholder="instagram">
                    @error('instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="googleplay" class="form-label">googleplay</label>
                    <input type="text" class="form-control @error('googleplay') is-invalid @enderror" id="googleplay" name="googleplay"
                        value="{{ old('googleplay') }}" placeholder="googleplay">
                    @error('googleplay')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telegram" class="form-label">telegram</label>
                    <input type="text" class="form-control @error('telegram') is-invalid @enderror" id="telegram" name="telegram"
                        value="{{ old('telegram') }}" placeholder="telegram">
                    @error('telegram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="whatsapp" class="form-label">whatsapp</label>
                    <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp"
                        value="{{ old('whatsapp') }}" placeholder="whatsapp">
                    @error('whatsapp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="shopee" class="form-label">shopee</label>
                    <input type="text" class="form-control @error('shopee') is-invalid @enderror" id="shopee" name="shopee"
                        value="{{ old('shopee') }}" placeholder="shopee">
                    @error('shopee')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tiktokshop" class="form-label">tiktokshop</label>
                    <input type="text" class="form-control @error('tiktokshop') is-invalid @enderror" id="tiktokshop" name="tiktokshop"
                        value="{{ old('tiktokshop') }}" placeholder="tiktokshop">
                    @error('tiktokshop')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>  

                <div class="mb-3">
                    <label for="tokopedia" class="form-label">tokopedia</label>
                    <input type="text" class="form-control @error('tokopedia') is-invalid @enderror" id="tokopedia" name="tokopedia"
                        value="{{ old('tokopedia') }}" placeholder="tokopedia">
                    @error('tokopedia')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
              </div>  
            </div>

            <div class="text-center">
                <button class="btn btn-warning mx-auto d-flex text-white">
                    Kirim Form
                </button>
            </div>

        </form>
    </div>
@endsection
