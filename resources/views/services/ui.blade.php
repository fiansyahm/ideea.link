@extends('template-admin')
@section('title', 'UI/UX Design')
@section('main')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desain UI/UX</title>
        <style>
            .space-between {
                margin-bottom: 50px;
                /* Adjust the value according to your preference */
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
                                <h1 class="mt-5"
                                    style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #000000; font-weight: bold;" >
                                    Layanan Desain UI/UX</h1>
                                <p class="space-between"
                                    style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 20px;">
                                    Kami menggunakan UI/UX design practices untuk membuat desain aplikasi dan website yang
                                    baik
                                    sesuai dengan kebutuhan user Anda.
                                </p>
                                <button type="button" class="btn btn-primary btn-lg">Hubungi Kami</button>
                            </div>
                        </div>

                    </div>
                    {{-- Gambar animasi UI/UX --}}
                    <div class="col-md">
                        <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/WHTmjZ7/rafiki.png">
                    </div>

                </div>
                <div class="mt-5 container">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #808080; font-weight: bold;">
                        LAYANAN</p>
                </div>

            </div>
        </div>


    </body>
    https://onero.id/services/ui-ux-design-service/

    </html>
@endsection
