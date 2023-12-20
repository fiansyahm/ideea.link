@extends('template-admin')
@section('title', 'Website')
@section('main')
    {{-- cdn boostrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- cdn jquery --}}
    <div class="fixed-top bg-primary text-white">
        <div class="output"></div>
    </div>
    <div class="container">
    <h1 class="text-center">Apakah Website itu?</h1>
    <div class="img img-fluid text-center justify-content-center my-5">
        <img class="img img-fluid text-center justify-content-center" src="https://www.jmc.co.id/blog/wp-content/uploads/2020/01/Mengapa-Website-Dianggap-Sebagai-Alat-Bisnis-yang-Sangat-Powerful.jpg" alt="izin" width="500" height="500">
    </div>
    <div class="Intro">
        <p>Website adalah kumpulan halaman yang berisi informasi tertentu dan dapat diakses dengan mudah oleh siapapun, kapanpun, dan di manapun melalui internet.</p>
    </div>
    <!-- PIRT? -->
    <h1 class="mt-5">Apakah Website itu penting?</h1>
    <div class="Intro">
        <p class="">
            Web sangatlah penting digunakan untuk menampilkan informasi produk kita atau perusahaan kita. Apalagi di jaman serba digital ini, dengan adanya website menambah kepercayaan usaha kita. Beberapa keuntungan dari memiliki website antara lain:
            <br>
        </p>
        <ol class="list-group list-group-numbered" style="background-color: black;color:white">
            <li class="list-group-item" style="background-color: black;color:white">Mendapatkan kepercayaan dari pelanggan.</li>
            <li class="list-group-item" style="background-color: black;color:white">Mendapatkan kemudahan dalam melakukan promosi produk menggunakan website</li>
            <li class="list-group-item" style="background-color: black;color:white">Mendapatkan kenaikan penjualan dengan mengarahkan pembeli ke website kita</li>
            <li class="list-group-item" style="background-color: black;color:white">Membantu menyampaikan informasi ke customer sehingga memudahkan customer melakukan pembelian</li>
        </ol>
    </div>
    <!-- END PIRT? -->


    <!-- Biaya Mengurus? -->
    <h1 class="mt-5">Biaya Pembuatan Website</h1>
    <div class="Intro">
        <p class="">
            Kami disini dapat membantu kakak untuk membuat website untuk membantu bisnis kakak semakin berkembang. <b>Pembayaran setelah web jadi</b>. Hanya dengan Rp99.000, anda dapat memiliki website anda sendiri.<br>
            <br>
            Berminat?Hubungi Kontak dibawah ini. https://Izintermurah.com, Membantu keperluan websitemu dengan cepat dan mudah.
        </p>
    </div>
    <!-- end Biaya Mengurus? -->
    <div class="img img-fluid my-5" id="kontak">
        <a href="https://api.whatsapp.com/send?phone=6282195796488&text=Saya%20ingin%20order%20website%20dan%20bayar%20hanya%20setelah%20saya%20puas" target="_blank">
            <img width="" height="" class="text-center justify-content-center" src="https://lapakjaya.com/wp-content/uploads/2020/04/hubungi-kami-wa-2.png" alt="">
        </a>
    </div>

    <!-- Biaya Mengurus? -->
    <h1 class="my-5 text-center">Daftar Website Kami</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://i.ibb.co/WfYnvRf/jasa-florist.png" alt="Card image">
                    <div class="card-body">
                    <h6 class="card-title">Website Jual Karangan Bunga</h6>
                    <a href="https://izintermurah.com/rosmelia-florist-bunga-papan-ucapan" class="btn btn-primary">Kunjungi Web</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://i.ibb.co/YNzbHdL/foto-undangan.png" alt="Card image">
                    <div class="card-body">
                    <h6 class="card-title">Website Wedding Invitation</h6>
                    <a href="https://akad.in/invitation-wedding/17/tamu" class="btn btn-primary">Kunjungi Web</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://i.ibb.co/G9QXGhY/plavon-pvc.png" alt="Card image">
                    <div class="card-body">
                    <h6 class="card-title">Website Jasa Plavon PVC</h6>
                    <a href="https://izintermurah.com/jasa-plavon-pvc" class="btn btn-primary">Kunjungi Web</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://i.ibb.co/grZbKS6/food.png" alt="Card image">
                    <div class="card-body">
                    <h6 class="card-title">Website Katalog Makanan</h6>
                    <a href="https://izintermurah.com/contoh1" class="btn btn-primary">Kunjungi Web</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://i.ibb.co/PZ7gf5N/foto-kopi-herbal.png" alt="Card image">
                    <div class="card-body">
                    <h6 class="card-title">Website Jualan Herbal</h6>
                    <a href="https://izintermurah.com/website/herbal" class="btn btn-primary">Kunjungi Web</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://i.ibb.co/PzLcCyk/ucapan.png" alt="Card image">
                    <div class="card-body">
                    <h6 class="card-title">Website Ucapan</h6>
                    <a href="https://izintermurah.com/website/birthday" class="btn btn-primary">Kunjungi Web</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Biaya Mengurus? -->

    </div>
@endsection