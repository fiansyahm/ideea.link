@extends('template-admin')
@section('title', 'Android')
@section('main')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Android</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            ul {
                list-style: none;
                padding: 0;
            }

            li {
                margin-bottom: 10px;
            }

            .dot-icon {
                margin-right: 10px;
            }
        </style>
    </head>

    <body>
        {{-- Banner 1 --}}
        <div id="banner1">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="mt-5 container">
                            <div>
                                <h1 class="mt-5 mb-5"
                                    style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #000000; font-weight: bold;">
                                    Menghadirkan Mobile Apps Yang Mudah Digunakan</h1>
                                <button type="button" class="btn btn-primary btn-lg">Konsultasi GRATIS</button>
                            </div>
                        </div>
                    </div>
                    {{-- Gambar animasi Android --}}
                    <div class="col-md mb-5">
                        <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/vDzn8H4/android.png">
                    </div>
                </div>
            </div>
        </div>
        {{-- Banner 2 --}}
        <div id="banner2">
            <div class="mt-5 container">
                <div>
                    <h1 class="mt-5"
                        style="font-family: 'Poppins', sans-serif; font-size: 36px; color: #000000; font-weight: bold; text-align:center;">
                        Dipercaya oleh 600+ klien</h1>
                    <p class="space-between"
                        style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 16px; text-align:center; ">
                        Ideealink ikut serta memajukan berbagai daerah disegenap penjuru tanah air Indonesia.
                    </p>
                    <img class="img-fluid mt-4 pt-4 mb-4 pb-4"
                        src="https://www.seekpng.com/png/full/292-2923588_peta-indonesia-png-indonesia-map-hd.png">
                </div>
            </div>
        </div>
        {{-- Banner 3 --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="pt-5 mt-5 text-center"
                        style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #262626;">
                        Aplikasi Yang <br>
                        Kami Hadirkan</h1>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-md-4 text-center">
                    <img src="https://i.ibb.co/z2d0Xsj/android.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Android</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="https://i.ibb.co/CBfqJDV/ios.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">IOS</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="https://i.ibb.co/qp9xrLj/hybrid.png" width="80" height="80">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Hybrid</p>
                </div>
            </div>
        </div>
        {{-- Banner 4 --}}
        <div id="banner4" style="background-image: url('your-image-url.jpg'); background-size: cover;">
            <div class="row">
                <div class="col-md">
                    <img class="img-fluid mt-4 pt-4 mb-4 pb-4" src="https://i.ibb.co/rvFY4NG/banner-4.png">
                </div>
                <div class="col-md" style="display: flex; align-items: center; justify-content: center;">
                    <div class="container">
                        <div class="container">
                            <h1 class="mt-1"
                                style="font-family: 'Poppins', sans-serif; font-size: 24px; font-color:#00000;">Siapa Saja
                                Yang Perlu Menggunakan Mobile Apps?
                            </h1>
                            <ul>
                                <li><span class="dot-icon"><i class="fas fa-circle"></i></span>Perusahaan yang ingin lebih
                                    berkembang melalui digital.</li>
                                <li><span class="dot-icon"><i class="fas fa-circle"></i></span>Instansi pemerintah untuk
                                    meningkatkan pelayanan masyarakat.</li>
                                <li><span class="dot-icon"><i class="fas fa-circle"></i></span>Perusahaan startup yang
                                    membutuhkan dukungan tim developer.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner 5 --}}
        <div id="banner5" style="background-image: url('your-image-url.jpg'); background-size: cover;">
            <div class="row">
                <div class="col-md" style="display: flex; align-items: center; justify-content: center;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="pt-5 mt-5 text-center"
                                    style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #262626;">
                                    Mengapa Ideea.Link?</h1>
                            </div>
                        </div>

                        <div class="row mt-5 pt-5">
                            <div class="col-md-3 text-center">
                                <img src="https://i.ibb.co/Cvrhyvc/creative-12515656.png" width="80" height="80">
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626; font-weight: bold;">
                                    Inovatif</p>

                            </div>
                            <div class="col-md-3 text-center">
                                <img src="https://i.ibb.co/pzcpbh5/special-offer-10700119.png" width="80"
                                    height="80">
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626; font-weight: bold;">
                                    Bergaransi</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <img src="https://i.ibb.co/Bsd5Tjv/socialmedia-2833443.png" width="80" height="80">
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626; font-weight: bold;">
                                    User Experience Testing</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <img src="https://i.ibb.co/n0g15Tt/clock-3506839.png" width="80" height="80">
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626; font-weight: bold;">
                                    Tepat Waktu</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md">
                    <img class="img-fluid mt-4 pt-4 mb-4 pb-4" src="https://i.ibb.co/CWzygGk/banner5.png">
                </div>
            </div>
        </div>


        {{-- Banner 6 --}}
        <div id="banner6" style="background-image: url('your-image-url.jpg'); background-size: cover;">
            <div class="row">
                <div class="col-md" style="display: flex; align-items: center; justify-content: center;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="pt-5 mt-5 text-center"
                                    style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #262626;">
                                    PORTOFOLIO</h1>
                                <p>Di bawah ini merupakan contoh dari jasa pembuatan aplikasi android kami.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-5 pt-5">
                            <div class="col-md-4 text-center">
                                <img src="https://i.ibb.co/567S6BZ/Device.png" width="180" height="360">
                                <p class="mt-3"
                                    style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #262626; font-weight: bold;">
                                    Aplikasi Akad.in</p>
                                <p class="mt-3"
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626; font-align:center;">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus adipisci hic
                                    molestias tempora quisquam, amet voluptates recusandae eligendi provident aspernatur
                                    minima aut. Sint ad voluptas voluptatem saepe ex veritatis quis!</p>

                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://i.ibb.co/567S6BZ/Device.png" width="180" height="360">
                                <p class="mt-3"
                                    style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #262626; font-weight: bold;">
                                    Aplikasi Akad.in</p>
                                <p class="mt-3"
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626; font-align:center;">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus adipisci hic
                                    molestias tempora quisquam, amet voluptates recusandae eligendi provident aspernatur
                                    minima aut. Sint ad voluptas voluptatem saepe ex veritatis quis!</p>

                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://i.ibb.co/567S6BZ/Device.png" width="180" height="360">
                                <p class="mt-3"
                                    style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #262626; font-weight: bold;">
                                    Aplikasi Akad.in</p>
                                <p class="mt-3"
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626; font-align:center;">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus adipisci hic
                                    molestias tempora quisquam, amet voluptates recusandae eligendi provident aspernatur
                                    minima aut. Sint ad voluptas voluptatem saepe ex veritatis quis!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner 7 --}}
        <div id="banner7">
            <div class="container">
                <div class="row">
                    <div class="col-md mb-5">
                        <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/8cZs388/unsplash-MMUp-T2-C5-Pnk.png">
                    </div>
                    <div class="col-md">
                        <div class="mt-5 container">
                            <div>
                                <h1 class="mt-5"
                                    style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #262626; font-weight: bold;">
                                    Siap mengembangakan bisnis Anda bersama Ideea.Link?</h1>
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #262626;">
                                    Tim kami akan memberikan rancangan pembiayaan dan proses kerja yang ideal.</p>
                                <button type="button" class="mt-5 btn btn-primary btn-lg">Yuk Konsultasi GRATIS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    {{-- https://www.jmc.co.id/mobile-apps --}}
@endsection
