@extends('invitation.template')
@section('style')
/* Styles for the WhatsApp button */
.whatsapp-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
}

@endsection

@section('main')

    <!-- Tombol WhatsApp -->
    <div class="whatsapp-button mr-5 mb-1">
        <a href="https://api.whatsapp.com/send?phone=6282195796488&text=Saya%20menemukan%20informasi%20tentang%20akad.in%20di%20internet,%20saya%20ingin%20memesan%20undangan,%20dan%20saya%20bersedia%20membayar%20jika%20saya%20puas." target="_blank">
            <img height="50px" width="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/WhatsApp_icon.png/598px-WhatsApp_icon.png" alt="WhatsApp">
        </a>
    </div>

    {{-- cdn --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Rochester&display=swap"
        rel="stylesheet">

    {{-- Banner 1 --}}
    <div class="jumbotron" id="banner1" style="background-image: url('https://i.ibb.co/1bfvQxs/1.jpg');">
        <div class="container text-center">
            <h1 class="pt-4" style="font-family: 'Rochester', cursive; font-size: 54px;">Bagikan Momen Terindah <br>
                dalam Hidupmu
                dengan <br> Undangan Digital</h1>
            <br>
            <p style="font-family: 'Poppins', sans-serif; font-size: 16px;">"Undangan pernikahan digital yang elegan dan tak terlupakan
                <br> Bayar diakhir jika hanya setelah Anda benar-benar puas!.""
            </p>
            <a class="btn btn-lg my-4 text-white" href="https://api.whatsapp.com/send?phone=6282195796488&text=Saya%20menemukan%20informasi%20tentang%20akad.in%20di%20internet,%20saya%20ingin%20memesan%20undangan,%20dan%20saya%20bersedia%20membayar%20jika%20saya%20puas.
            " role="button" style="background-color: #FFC727;">Hubungi WA Kami</a>
        </div>
    </div>

    {{-- Banner 2 --}}
    <div id="banner2" style="background-image: url('https://i.ibb.co/SxBCWhN/2.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid mt-4 pt-4" src="{{$androidpic}}">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="mt-5">
                        <h1 class="mt-5" style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #FFC727;">Apa
                            Itu Undangan Digital?</h1>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 20px;">"Undangan digital adalah bentuk
                            undangan yang disampaikan melalui media elektronik seperti email, pesan teks, atau media sosial,
                            yang memiliki manfaat dalam hal efisiensi, distribusi, dan fleksibilitas."</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="pt-5 mt-5 text-center"
                        style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #262626;">
                        Kelebihan Undangan Digital
                    </h1>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-md-3 text-center">
                    <img src="https://i.ibb.co/M8b3m38/design.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                        Desain Elegan dan Mewah</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami menawarkan desain
                        undangan yang elegan dan mewah agar pernikahan Anda menjadi momen tak terlupakan</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://i.ibb.co/jG7tDH6/hemat.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">Hemat
                        Biaya</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami memberikan layanan
                        undangan digital yang hemat biaya, tetapi tetap efektif dalam memberikan informasi tentang
                        pernikahan Anda.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://i.ibb.co/nkTfr6h/paper.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">Hemat
                        Kertas</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami turut menjaga alam
                        dengan mengurangi penggunaan kertas pada undangan pernikahan Anda.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://i.ibb.co/fqzxGny/payment.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                        Pembayaran Diakhir</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Bayar hanya jika sudah selesai dan anda puas.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- Banner 3 --}}
    <div id="banner3" style="background-image: url('https://i.ibb.co/XtBJqk5/3.jpg');">
        <div class="container">
            <h1 class="text-center mt-5 pt-5" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #FFC727;">
                Harga Paket Undangan Online
            </h1>
            <div class="row d-flex align-items-center justify-content-center h-100 mt-5">
                <div class="col-md-4 mb-5">
                    <div class="card text-center">
                        <div class="card-header" style="background-color: #ECC44B; color: white;">
                            <h3>Paket Gold</h3>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Rp.10 K</h2>
                            <ul class="list-group" style="text-align: left; list-style-type: disc; padding-left: 20px;">
                                <li class="list-group-item border-0">&#10004; Informasi Pernikahan</li>
                                <li class="list-group-item border-0">&#10004; Musik</li>
                                <li class="list-group-item border-0">&#10004; Foto Pengantin Asli/Animasi</li>
                                <li class="list-group-item border-0">&#10004; Countdown Waktu Pernikahan</li>
                                <li class="list-group-item border-0">&#10004; Maps Lokasi Pernikahan</li>
                                <li class="list-group-item border-0">&#10004; Wedding Gift</li>
                                <li class="list-group-item border-0">&#10004; Foto Prewed</li>
                                <li class="list-group-item border-0">&#10004; Form Ucapan</li>
                                <li class="list-group-item border-0">&#10004; Free Revisi</li>
                            </ul>
                            <div class="d-grid gap-2 col-6 mx-auto mt-2">
                                <a href="/register-wedding" class="btn btn-success">Pesan Sekarang</a>
                                <a href="/katalog" class="btn btn-secondary">Lihat Katalog</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 mb-5">
                    <div class="card text-center">
                        <div class="card-header" style="background-color: #BABABC; color: white;">
                            <h3>Paket Silver</h3>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Rp.29 K</h2>
                            <ul class="list-group" style="text-align: left; list-style-type: disc; padding-left: 20px;">
                                <li class="list-group-item border-0">&#10004; Informasi Pernikahan</li>
                                <li class="list-group-item border-0">&#10004; Musik</li>
                                <li class="list-group-item border-0">&#10004; Foto Pengantin Asli/Animasi</li>
                                <li class="list-group-item border-0">&#10004; Countdown Waktu Pernikahan</li>
                                <li class="list-group-item border-0">&#10004; Maps Lokasi Pernikahan</li>
                                <li class="list-group-item border-0">&#10004; Wedding Gift</li>
                                <li class="list-group-item border-0"><span>&#10006; Foto Prewed</li>
                                <li class="list-group-item border-0"><span>&#10006; Form Ucapan</li>
                                <li class="list-group-item border-0"><span>&#10006; Free Revisi</li>
                            </ul>
                            <div class="d-grid gap-2 col-6 mx-auto mt-2">
                                <a href="register-wedding" class="btn btn-success">Pesan Sekarang</a>
                                <a href="/katalog" class="btn btn-secondary">Lihat Katalog</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- Banner 4 --}}
    <div id="banner4" style="background-image: url('https://i.ibb.co/DYFSSPh/4.jpg');">
        <h1 class="text-center pt-5" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #262626;">
            Alur Pemesanan
        </h1>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center mb-5">
                    <img src="https://i.ibb.co/vXgTm4M/konsultasi.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">1.
                        Konsultasi Undangan</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Anda dapat menghubungi
                        kami untuk berkonsultasi tentang undangan Anda</p>
                </div>
                <div class="col-md-3 col-sm-6 text-center mb-5">
                    <img src="https://i.ibb.co/GPrvzYM/undangan.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">2.
                        Pembuatan Undangan</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami akan mulai membuat
                        undangan Anda setelah mendapatkan persetujuan dari Anda.</p>
                </div>
                <div class="col-md-3 col-sm-6 text-center mb-5">
                    <img src="https://i.ibb.co/1nNWcKq/link.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">3.
                        Pengiriman Link Undangan</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami akan mengirimkan
                        link undangan kepada Anda setelah kami selesai membuat undangan.</p>
                </div>
                <div class="col-md-3 col-sm-6 text-center mb-5">
                    <img src="https://i.ibb.co/JRfmRhx/pembayaran.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">4.
                        Bayar Jika Anda Puas</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Pembayaran dapat
                        dilakukan saat web sudah jadi dan anda puas. Jika tidak puas tidak harus bayar</p>
                </div>
            </div>
        </div>
    </div>
@endsection
