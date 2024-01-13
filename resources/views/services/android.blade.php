@extends('template-admin')
@section('title', 'Android')
@section('main')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Android</title>
        <style>
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
            <h1 class="pt-5 mt-5 text-center" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #262626;">
                Aplikasi Yang <br>
                Kami Hadirkan</h1>
        </div>
    </div>

    <div class="row mt-5 pt-5">
        <div class="col-md-3 text-center">
            <img src="https://i.ibb.co/z2d0Xsj/android.png" width="80" height="80">
            <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Android</p>
        </div>
        <div class="col-md-3 text-center">
            <img src="https://i.ibb.co/CBfqJDV/ios.png" width="80" height="80">
            <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">IOS</p>
        </div>
        <div class="col-md-3 text-center">
            <img src="https://i.ibb.co/qp9xrLj/hybrid.png" width="80" height="80">
            <p style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #262626;">Hybrid</p>
        </div>
    </div>
</div>
    </body>

    {{-- https://www.jmc.co.id/mobile-apps --}}
@endsection
