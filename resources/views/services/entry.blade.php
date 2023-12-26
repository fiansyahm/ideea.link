@extends('template-admin')
@section('title', 'Website')
@section('main')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        /* Add margin to the table of contents div */
        #table-of-contents {
            margin-left: 100px;
            /* Adjust the margin as needed */
        }

        /* Center the buttons */
        .button-container {
            text-align: center;
        }
    </style>
</head>

<body>
    {{-- cdn boostrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- cdn jquery --}}
    <div class="fixed-top bg-primary text-white">
        <div class="output"></div>
    </div>
    <div class="container">
        <h1 class="text-center"><strong>Layanan Penginputan Data</strong> (Data Entry) Excel, Website, Produk, Formulir,
            Keanggotaan, dan Lainnya, 24 Jam</span></h1>
        <div class="img img-fluid text-center justify-content-center my-5">
            <img class="img img-fluid text-center justify-content-center"
                src="https://www.jmc.co.id/blog/wp-content/uploads/2020/01/Mengapa-Website-Dianggap-Sebagai-Alat-Bisnis-yang-Sangat-Powerful.jpg"
                alt="izin" width="500" height="500">
        </div>


        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="inner-content">

                        <p class="text-center light-gray-color"><strong>No. 1 Layanan Penginputan Data Ekonomis untuk
                                Berbagai Jenis Data, Online/Offline 24 Jam</strong></p>

                        <p class="text-center light-gray-color">Menyediakan layanan penginputan data (<em>data
                                entry</em>)
                            dengan biaya <strong>terjangkau, aman, cepat, dan 24 jam</strong> tersedia di berbagai kota
                            di
                            Indonesia secara online maupun offline. Dilakukan oleh individu maupun tim yang siap
                            mengerjakan
                            <strong>puluhan hingga ribuan data sekaligus</strong>
                        </p>

                        <p class="light-gray-color"><strong>✅</strong>Input Data di Excel<br><strong>✅</strong>Input Data di
                            Website<br><strong>✅</strong>Input Data Produk di Marketplace<br><strong>✅</strong>Input Data
                            Formulir<br><strong>✅</strong>Input Data Barang<br><strong>✅</strong>Input Data
                            Penjualan<br><strong>✅</strong>Input Data Keuangan<br><strong>✅</strong>Input Data
                            Inventaris<br><strong>✅</strong>Input Data
                            Siswa/Mahasiswa/Karyawan/Warga<br><strong>✅</strong>Input Data Penelitian atau
                            Riset<br><strong>✅</strong>Input Data Sesuai Permintaan</p>

                        <p class="light-gray-color">Dapatkan hasil terbaik dengan <strong>garansi uang kembali
                                100%</strong>
                            jika terlambat, <strong>revisi gratis tanpa batasan</strong> waktu, dan <strong>jaminan
                                keamanan
                                data</strong>. Pesan layanan penginputan data sekarang, klik WhatsApp di bawah!</p>
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
                            <button class="btn btn-primary" type="button">WHATSAPP</button>
                            <button class="btn btn-primary" type="button">LIHAT HARGA</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- https://jagoketik.com/jasa-input-data/ --}}
        <!-- end Biaya Mengurus? -->

    </div>
    <div class="container">
        <!-- Table of Contents -->
        <div id="table-of-contents" mt-5>
            <h5>Daftar Isi</h5>
            <ul>
                <li><a href="#section1">1 Jasa Input Data (Data Entry) Excel, Website, Produk, Formulir, Keanggotaan,
                        dan Lainnya, 24 Jam</a></li>
                <li><a href="#section2">2 Kenapa Input Data di Ideea.Link</a></li>
                <li><a href="#section3">2.1 Masih mau coba pakai jasa input data di tempat lain?</a></li>
                <li><a href="#section4">3 Berpengalaman dan Profesional</a></li>
                <li><a href="#section5">4 Harga Jasa Input Data (Data Entry)</a></li>
                <li><a href="#section6">4.1 Harga Input Data Santai</a></li>
                <li><a href="#section7">4.2 Harga Input Data Reguler</a></li>
                <li><a href="#section8">4.3 Harga Input Data Kilat</a></li>
                <li><a href="#section9">4.4 Mau konsultasi atau negosiasi?</a></li>
                <li><a href="#section10">5 Frequently Asked Questions (FAQ)</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center">Kenapa Input Data di IDEEA.LINK</h1>
    </div>

</body>

</html>

@endsection
