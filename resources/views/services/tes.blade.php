<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
    <style>

        #banner1,#banner2,#banner3,#banner4 {
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }


    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Rochester&display=swap"
        rel="stylesheet">

</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFC727;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: #FFFEFE;">Akad.in</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #FFFEFE;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #FFFEFE;">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Banner 1 --}}
    <div class="jumbotron" id="banner1" style="background-image: url('https://i.ibb.co/1bfvQxs/1.jpg');">
        <div class="container text-center">
            <h1 class="pt-4" style="font-family: 'Rochester', cursive; font-size: 54px;">Bagikan Momen Terindah <br>
                dalam Hidupmu
                dengan <br> Undangan Digital</h1>
            <br>
            <p style="font-family: 'Poppins', sans-serif; font-size: 16px;">"Kami dengan senang hati menawarkan layanan
                <br> pembuatan
                undangan pernikahan digital yang <br> anggun dan mengesankan untuk membuat <br> momen spesial Anda tak
                terlupakan."
            </p>
            <a class="btn btn-lg my-4 text-white" href="#" role="button"
                style="background-color: #FFC727;">Konsultasi Di sini</a>
        </div>
    </div>

    {{-- Banner 2 --}}
    <div id="banner2" style="background-image: url('https://i.ibb.co/SxBCWhN/2.png');">
        <div class="row">
            <div class="col-md">
                <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/prtTWBW/Group-3.png">
            </div>
            <div class="col-md" style="display: flex; align-items: center; justify-content: center;">
                <div class="mt-5 container">
                    <div class="">
                        <h1 class="mt-5" style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #FFC727;">Apa
                            Itu Undangan Digital?</h1>
                        <p style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 20px;">"Undangan
                            digital adalah bentuk undangan yang disampaikan melalui media elektronik seperti email, pesan teks,
                            atau media sosial, yang memiliki manfaat dalam hal efisiensi, distribusi, dan fleksibilitas."</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Section Kelebihan Undangan --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="pt-5 mt-5 text-center" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #262626;">
                        Kelebihan Undangan Digital</h1>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-md-3 text-center">
                    <img src="https://i.ibb.co/M8b3m38/design.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                        Desain Elegan dan Mewah</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami menawarkan
                        desain undangan yang elegan dan mewah agar pernikahan Anda menjadi momen tak terlupakan</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://i.ibb.co/jG7tDH6/hemat.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                        Hemat Biaya</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami memberikan
                        layanan undangan digital yang hemat biaya, tetapi tetap efektif dalam memberikan informasi
                        tentang pernikahan Anda.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://i.ibb.co/nkTfr6h/paper.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                        Hemat Kertas</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami turut menjaga
                        alam dengan mengurangi penggunaan kertas pada undangan pernikahan Anda.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://i.ibb.co/fqzxGny/payment.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                        Pembayaran Diakhir</p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Pembayaran dapat
                        dilakukan saat web sudah jadi dan tidak ada revisi lagi.</p>
                </div>
            </div>

        </div>
    </div>
    

    {{-- Banner 3 --}}
    <div id="banner3" style="background-image: url('https://i.ibb.co/XtBJqk5/3.jpg');">
        <div class="container">
            <h1 class="text-center mt-5 pt-5"
                style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #FFC727;">Harga Paket Undangan Online
            </h1>
            <div class="row d-flex align-items-center justify-content-center h-100 mt-5">
                <div class="col-md-4 mb-5">
                    <div class="card text-center">
                        <div class="card-header" style="background-color: #ECC44B; color: white;">
                            <h3>Paket Gold</h3>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Rp.49 K</h2>
                            <ul style="text-align: left; list-style-type: disc; padding-left: 20px;">
                                <li>&#10004; Informasi Pernikahan</li>
                                <li>&#10004; Musik</li>
                                <li>&#10004; Foto Pengantin Asli/Animasi</li>
                                <li>&#10004; Countdown Waktu Pernikahan</li>
                                <li>&#10004; Maps Lokasi Pernikahan</li>
                                <li>&#10004; Wedding Gift</li>
                                <li>&#10004; Foto Prewed</li>
                                <li>&#10004; Form Ucapan</li>
                                <li>&#10004; Free Revisi</li>
                            </ul>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="#" class="btn btn-success">Pesan Sekarang</a>
                                <a href="#" class="btn btn-secondary">Tema 1</a>
                                <a href="#" class="btn btn-secondary">Tema 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card text-center">
                        <div class="card-header" style="background-color: #BABABC; color: white;">
                            <h3>Paket Silver</h3>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Rp.29 K</h2>
                            <ul style="text-align: left; list-style-type: disc; padding-left: 20px;">
                                <li>&#10004; Informasi Pernikahan</li>
                                <li>&#10004; Musik</li>
                                <li>&#10004; Foto Pengantin Asli/Animasi</li>
                                <li>&#10004; Countdown Waktu Pernikahan</li>
                                <li>&#10004; Maps Lokasi Pernikahan</li>
                                <li>&#10004; Wedding Gift</li>
                                <li><span>&#10006; Foto Prewed</li>
                                <li><span>&#10006; Form Ucapan</li>
                                <li><span>&#10006; Free Revisi</li>
                            </ul>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="#" class="btn btn-success">Pesan Sekarang</a>
                                <a href="#" class="btn btn-secondary">Tema 1</a>
                                <a href="#" class="btn btn-secondary">Tema 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Banner 4 --}}
    <div id="banner4" style="background-image: url('https://i.ibb.co/DYFSSPh/4.jpg');">
        <h1 class="mt-5 text-center" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #262626;">
            Alur Pemesanan</h1>
        <div class="row mt-5 pt-5">
            <div class="col-md-3 text-center mb-5">
                <img src="https://i.ibb.co/vXgTm4M/konsultasi.png" width="80" height="80">
                <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                    1. Konsultasi Undangan</p>
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Anda dapat menghubungi
                    kami untuk berkonsultasi tentang undangan Anda</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <img src="https://i.ibb.co/GPrvzYM/undangan.png" width="80" height="80">
                <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                    2. Pembuatan Undangan</p>
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami akan mulai membuat
                    undangan Anda setelah mendapatkan persetujuan dari Anda.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <img src="https://i.ibb.co/1nNWcKq/link.png" width="80" height="80">
                <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                    3. Pengiriman Link Undangan</p>
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Kami akan mengirimkan
                    link undangan kepada Anda setelah kami selesai membuat undangan.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <img src="https://i.ibb.co/JRfmRhx/pembayaran.png" width="80" height="80">
                <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #FFC727; font-weight: bold;">
                    4. Pembayaran Undangan</p>
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Pembayaran dapat
                    dilakukan saat web sudah jadi dan tidak ada revisi lagi.</p>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="bg-warning text-white text-center py-3">
        <div class="container">
            <p>&copy; 2023 Akad.in. All rights reserved.</p>
        </div>
    </footer>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</body>

</html>
