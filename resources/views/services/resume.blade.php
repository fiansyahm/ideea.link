@extends('template-admin')
@section('title', 'Web Personal Profile')
@section('main')
        {{-- cdn boostrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        {{-- cdn jquery --}}
        <div class="fixed-top bg-primary text-white">
            <div class="output"></div>
        </div>
        <div class="container">
            <h1 class="text-center"><strong>Jasa Pembuatan Personal Profile</strong> Elegan dan Interaktif</span></h1>
            <div class="img img-fluid text-center justify-content-center my-5">
                <img class="img img-fluid text-center justify-content-center"
                    src="https://i.ibb.co/FzDGyBn/personal-profile.png"
                    alt="izin" width="500" height="500" style="border: 2px solid #000; /* Warna hitam */">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="inner-content">
                            <p class="text-center light-gray-color"><strong>No. 1 Pembuatan Web Personal Profile</strong></p>

                            <p class="text-center light-gray-color">Menyediakan layanan pembuatan personal profile dengan biaya <strong>terjangkau, aman, cepat, dan 24 jam</strong> tersedia
                                di
                                berbagai kota di Indonesia secara online maupun offline. Dilakukan oleh individu maupun tim
                                yang siap mengerjakan <strong>puluhan hingga ratusan personal profile sekaligus</strong>
                            </p>

                            <p class="light-gray-color">Dapatkan hasil terbaik dengan <strong>garansi uang kembali
                                    100%</strong> jika terlambat, <strong>revisi gratis tanpa batasan</strong> waktu, dan
                                <strong>jaminan
                                    keamanan data</strong>. Pesan layanan penginputan data sekarang, klik WhatsApp di bawah!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="inner-content">
                            <!-- Your existing content -->

                            <!-- Centered button container -->
                            <div class="button-container">
                                <a href="https://api.whatsapp.com/send?phone=6287888971186&text=Saya%20ingin%20order%20jasa%20entry%20data%20dan%20bayar%20hanya%20setelah%20saya%20puas" class="btn btn-primary" type="button">WHATSAPP</a>
                                <a href="#price" class="btn btn-primary" type="button">LIHAT CONTOH</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- end Biaya Mengurus? -->

        </div>

        <div class="container">
            <h1 class="text-center mt-5">Kenapa Membuat Personal Profile di IDEEA.LINK</h1>
            <p class="text-center light-gray-color">Tidak hanya satu atau dua orang yang mempercayakan pembuatan personal
                profile di ideea.link. Puluhan orang telah menggunakan jasa kami. Berikut beberapa alasan kenapa
                kamu harus menggunakan jasa kami:
            </p>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item">1. Tersedia 24/7 hari tanpa libur;</li>
                <li class="list-group-item">2. Hasil terbaik dengan garansi uang kembali 100% jika terlambat;</li>
                <li class="list-group-item">3. Revisi gratis tanpa batasan waktu atau kesempatan;</li>
                <li class="list-group-item">4. Jaminan keamanan data;</li>
                <li class="list-group-item">5. Harga terjangkau dan murah;</li>
            </ol>
        </div>

        <div class="container">
            <h1 class="text-center mt-5">Masih mau coba pakai jasa input data di tempat lain?</h1>
            <p class="text-center light-gray-color">Pertimbangkan keuntungan dan risikonya! Jangan hanya karena murah maka
                mengorbankan waktu dan keamanan. Sudah tepat kamu mengunjungi website ini karena hanya di ideea.link kamu
                akan mendapatkan 100% pelayanan prima yang tidak ditemukan di tempat lain.
            </p>
        </div>

        <hr class="dotted">
        {{-- Berpengalaman dan Profesional --}}
        <div class="container">
            <h1 class="text-center mt-5">Berpengalaman dan Profesional</h1>
            <p class="text-center light-gray-color">ideea.link telah dipercaya oleh ratusan klien baik invidu,
                maupun perusahaan
            </p>
            <p class="text-center light-gray-color">
                Berangkat dari kesuksesan-kesuksesan itu, ideea.link bersemangat untuk membantu lebih banyak orang lagi
                guna membuat company profile secara online maupun offline di seluruh kota di Indonesia
            </p>
            {{-- <div class="button-container">
                <button class="btn btn-primary" type="button">LIHAT TESTIMONIAL</button>
            </div> --}}
        </div>

        <div class="container">
            <h1 id="price" class="text-center mt-5">Contoh Personal Profile</h1>
            <p class="text-center light-gray-color">Berikut beberapa contoh personal profile yang telah kami buat</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Personal Profile</strong> 1</h5>
                            <img class="img img-fluid text-center justify-content-center"
                    src="https://i.ibb.co/FzDGyBn/personal-profile.png"
                    alt="izin" width="500" height="500" style="border: 2px solid #000; /* Warna hitam */">
                            <ul class="list-fitur">
                                <li> Isi Form Langsung Jadi </li>
                                <li> Desain Elegan dan Interaktif </li>
                                <li> Bisa Edit Kapanpun </li>
                            </ul>
                            <a href="/personal-profile/1" class="btn btn-primary text-white">Lihat Contoh</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Personal Profile</strong> 2</h5>
                            <img class="img img-fluid text-center justify-content-center"
                    src="https://i.ibb.co/NxsCTc0/Screenshot-2024-01-27-121430.png"
                    alt="izin" width="500" height="500" style="border: 2px solid #000; /* Warna hitam */">
                            <ul class="list-fitur">
                                <li> Isi Form Langsung Jadi </li>
                                <li> Desain Elegan dan Interaktif </li>
                                <li> Bisa Edit Kapanpun </li>
                            </ul>
                            <a href="/personal-profile/6" class="btn btn-primary text-white">Lihat Contoh</a> 
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-center mt-5">Mau konsultasi atau negosiasi?</h3>
            <p class="text-center light-gray-color">Kami siap membantu kamu. Klik tombol di bawah untuk menghubungi kami
                melalui WhatsApp
            </p>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="inner-content text-center">
                            <!-- Your existing content -->

                            <!-- Centered button container -->
                            <div class="img img-fluid my-5" id="kontak">
                                <a href="https://api.whatsapp.com/send?phone=6287888971186&text=Saya%20ingin%20order%20jasa%20entry%20data%20dan%20bayar%20hanya%20setelah%20saya%20puas" target="_blank">
                                    <img width="300px" height="100px" class="text-center justify-content-center" src="https://internetindihomebekasi.files.wordpress.com/2020/02/wa-only.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS and Popper.js for the accordion functionality -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
