@extends('template-admin')
@section('navbar_menu_resume', 'bg-primary text-white')
@section('main')
    <div class="mx-3 mt-5 rounded bg-dark text-white">
        <h1 class="text-center">Edit Resume</h1>
        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/register-resume"
            method="post">
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="theme" class="form-label">ID Undangan</label>
                        <input type="text" class="form-control @error('theme') is-invalid @enderror" id="theme"
                            name="theme" value="{{ old('theme') }}" placeholder="Tema Undangan">
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
                    <label for="fullname" class="form-label">Nama Lengkap<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname"
                        value="{{ old('fullname') }}" placeholder="Nama Lengkap">
                    @error('fullname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nickname" class="form-label">Nama Panggilan<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('nickname') is-invalid @enderror" id="nickname" name="nickname"
                        value="{{ old('nickname') }}" placeholder="Nama Panggilan">
                    @error('nickname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                        value="{{ old('phone') }}" placeholder="Nomor Telepon">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat Lengkap<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                        value="{{ old('address') }}" placeholder="Alamat Lengkap">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="birth" class="form-label">Tempat, Tanggal Lahir<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('birth') is-invalid @enderror" id="birth" name="birth"
                        value="{{ old('birth') }}" placeholder="Tempat, Tanggal Lahir">
                    @error('birth')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website"
                        value="{{ old('website') }}" placeholder="Website">
                    @error('website')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="freelance" class="form-label">Freelance<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('freelance') is-invalid @enderror" id="freelance" name="freelance"
                        value="{{ old('freelance') }}" placeholder="Freelance">
                    @error('freelance')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Foto Profil<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo"
                        value="{{ old('photo') }}" placeholder="Foto Profil">
                    @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nationality" class="form-label">Negara Asal<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('nationality') is-invalid @enderror" id="nationality"
                        name="nationality" value="{{ old('nationality') }}" placeholder="Negara Asal">
                    @error('nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fax') is-invalid @enderror" id="fax" name="fax"
                        value="{{ old('fax') }}" placeholder="Fax">
                    @error('fax')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="job" class="form-label">Pekerjaan<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job"
                        value="{{ old('job') }}" placeholder="Pekerjaan">
                    @error('job')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="aboutme" class="form-label">About Me<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('aboutme') is-invalid @enderror" id="aboutme" name="aboutme"
                        value="{{ old('aboutme') }}" placeholder="About Me">
                    @error('aboutme')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
            
              <div class="col-md-2"></div>

              <div class="col-md-5">
                <h1 class="text-center">Sosial Media</h1>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" name="linkedin"
                        value="{{ old('linkedin') }}" placeholder="Linkedin">
                    @error('linkedin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram"
                        value="{{ old('instagram') }}" placeholder="Instagram">
                    @error('instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook"
                        value="{{ old('facebook') }}" placeholder="Facebook">
                    @error('facebook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label">Twitter</label>
                    <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter"
                        value="{{ old('twitter') }}" placeholder="Twitter">
                    @error('twitter')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="github" class="form-label">Github</label>
                    <input type="text" class="form-control @error('github') is-invalid @enderror" id="github" name="github"
                        value="{{ old('github') }}" placeholder="Github">
                    @error('github')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>  
            </div>

            <div class="row">
                <h1 class="text-center">Skill & Experience</h1>
                

            </div>


            <div class="text-center">
                <button class="btn btn-warning mx-auto d-flex text-white">
                    Update Resume
                </button>
            </div>

        </form>
    </div>
@endsection
