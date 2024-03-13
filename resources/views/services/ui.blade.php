@extends('template-admin')
@section('title', 'UI/UX Design')
@section('css')
<style>

.tool {
    display: flex;
    align-items: center;
    margin: 10px;
}

.tool img {
    width: 50px; /* Atur lebar gambar sesuai kebutuhan */
    height: auto;
    margin-right: 10px;
}

.tool span {
    font-family: 'Poppins', sans-serif;
    font-size: 24px;
    font-weight: bold;
    color: #000000;
}
</style>
@endsection

@section('main')    
        {{-- Banner 1 --}}
        <div id="banner1">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="mt-5 container">
                            <div>
                                <h1 class="mt-5"
                                    style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #000000; font-weight: bold;">
                                    Layanan Desain UI/UX</h1>
                                <p class="space-between"
                                    style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 20px;">
                                    Kami menggunakan UI/UX design practices untuk membuat desain aplikasi dan website yang
                                    baik
                                    sesuai dengan kebutuhan user Anda.
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=6287888971186&text=Saya%20ingin%20order%20jasa%20UI/UX%20dan%20bayar%20hanya%20setelah%20saya%20puas" type="button" class="btn btn-primary btn-lg">Hubungi Kami</a>
                            </div>
                        </div>

                    </div>
                    {{-- Gambar animasi UI/UX --}}
                    <div class="col-md">
                        <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/9HfZrwY/uiux.png">
                    </div>

                </div>
                <div class="mt-5 container">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #808080; font-weight: bold;">
                        LAYANAN</p>

                    <div class="row pt-2">
                        <div class="col-md-3 ">
                            <p style="font-family: 'Poppins', sans-serif; font-size: 20px;">
                                Wireframing <br> dan Prototyping</p>
                        </div>
                        <div class="col-md-3">
                            <p style="font-family: 'Poppins', sans-serif; font-size: 20px;">
                                Konsultasi <br> UI & UX</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner 2 --}}
        <div id="banner2">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="mt-5 container">
                            <div>
                                <h1 class="mt-5"
                                    style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #000000; font-weight: bold;">
                                    Desain untuk Website dan Mobile App</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mt-5 pt-3 container">
                            <p style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 16px;">
                                Membuat desain yang menarik sesuai dengan identitas brand Anda untuk berbagai platform,
                                Android, iOS, Web.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 container">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.ibb.co/h2wPNRC/desainmobile.png" class="card-img-top" alt="Desain Mobile">
                            <div class="card-body">
                                <h5 class="card-title">Desain Mobile</h5>
                                <p class="card-text">Desain yang cantik, kreatif, dan modern untuk semua ukuran layar
                                    device, baik Android maupun iOS. Desain dibuat sesuai dengan brand guideline, memiliki
                                    tampilan yang menarik, dan user experience terbaik.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.ibb.co/nBDnMwn/desainweb.png" class="card-img-top" alt="Desain Web">
                            <div class="card-body">
                                <h5 class="card-title">Desain Web</h5>
                                <p class="card-text">Desain web untuk laptop, tablet, dan PC dengan kualitas Full HD. Kami
                                    akan membantu Anda membangun identitas brand, memastikan website dimuat dengan cepat,
                                    dan tampilan yang responsif ke semua device.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.ibb.co/7pGns7k/desainmobile.png" class="card-img-top" alt="Desain Baru">
                            <div class="card-body">
                                <h5 class="card-title">Desain Terbaru</h5>
                                <p class="card-text">Kami akan melakukan riset tren terkini dan menganalisa identitas brand
                                    untuk membuat prototipe produk sesuai dengan tujuan, visi, dan desain brand Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner 3 --}}
        <div id="banner3">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="mt-5 container">
                            <div>
                                <!-- Apply the common class to the <h1> element -->
                                <h1 class="mt-5 ui-ux-text" style="font-size: 42px;">
                                    Pendekatan <br> UI/UX Kami
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mt-5 pt-3 container">
                            <p style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 16px;">
                                User Experience (UX) dan User Interface (UI) tidak bisa dipisahkan. Menggabungkan keduanya
                                akan menghasilkan desain yang user-friendly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 container">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <!-- Apply the common class to the <ul> element -->
                        <ul class="ui-ux-text">
                            <li>Mendeskripsikan struktur informasi</li>
                            <li>Menganalisa kompetitor</li>
                            <li>Membuat prototype dan melakukan pengujian</li>
                            <li>Membuat wireframe</li>
                            <li>Membuat desain yang interaktif</li>
                            <li>Melakukan riset</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-5">
                        <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/VC9KTKY/Frame-614.png">
                    </div>
                    <div class="col-md-4 mb-5">
                        <!-- Apply the common class to the <ul> element -->
                        <ul class="ui-ux-text">
                            <li>Mencari ide dan membuat mood board</li>
                            <li>Menyesuaikan dengan brand dan visualnya</li>
                            <li>Menentukan warna</li>
                            <li>Memilih ikon dan tipografi sesuai brand</li>
                            <li>Menentukan layout dan komponen desainnya</li>
                            <li>Membuat desain visual</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner 4 --}}
        <div id="banner3">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="mt-5 container">
                            <div>
                                <!-- Apply the common class to the <h1> element -->
                                <h1 class="mt-5 ui-ux-text" style="font-size: 42px;">
                                    Proses Desain <br> UI/UX Kami
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Step 1 --}}
            <div class="mt-5 container">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4 mb-5">
                        <!-- Content for Column 1 -->
                        <div class="col-md-12 mb-5">
                            <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/z2Y6TY0/step1.png">
                        </div>
                        <!-- Apply the common class to the <ul> element -->
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-4 mb-5">
                        <button type="button" class="btn btn-lg btn-primary" disabled>Step 1</button>
                        <h1 style="font-weight : bold; font-size: 40px;">Research</h1>
                        <p class="pt-3"><strong>(Research.)</strong> Pertama, desainer mengenali perusahaan Anda dan
                            mempelajari visi, tujuan, proses
                            penjualan, target audiens, dan aspek lainnya.
                        </p>
                        <p class="pt-5"><strong>(Desainer.)</strong> perusahaan serupa dan mempelajari layout, warna, dan
                            desainnya.
                        </p>
                        <p class="pt-5"><strong>(Behaviour.)</strong> Desainer mempelajari bagaimana users
                            berinteraksi dengan produk serupa untuk meningkatkan loyalitas dan memenuhi kebutuhan
                            konsumen.
                        </p>
                    </div>
                </div>
            </div>
            {{-- Step 2 --}}
            <div class="mt-5 container">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4 mb-5">
                        <button type="button" class="btn btn-lg btn-primary" disabled>Step 2</button>
                        <h1 style="font-weight : bold; font-size: 40px;">Referensi Desain & Pembuatan Mockup</h1>
                        <p class="pt-3">Pembuatan mockup adalah salah satu bagian penting dari desain produk. Desainer
                            akan memberikan referensi desain ataupun menampung masukan dari client agar dapat dikembangkan
                            menjadi beberapa tampilan mockup sehingga Anda bisa mendapatkan gambaran user journey website
                            Anda kedepannya.
                        </p>
                        <p class="pt-5">Setelah itu, desainer mengubah user journey menjadi prototipe yang bisa di-klik
                            sehingga user bisa menggunakan website tersebut. Desainer pun bisa menyesuaikannya kebutuhan dan
                            keinginan Anda.
                        </p>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-4 mb-5">
                        <!-- Content for Column 2 -->
                        <div class="col-md-12 mb-5">
                            <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/1RHVgJK/step2.png">
                        </div>
                        <!-- Apply the common class to the <ul> element -->
                    </div>
                </div>
            </div>
            {{-- Step 3 --}}
            <div class="mt-5 container">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4 mb-5">
                        <!-- Content for Column 1 -->
                        <div class="col-md-12 mb-5">
                            <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/FK04xrt/step3.png">
                        </div>
                        <!-- Apply the common class to the <ul> element -->
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-4 mb-5">
                        <button type="button" class="btn btn-lg btn-primary" disabled>Step 3</button>
                        <h1 style="font-weight : bold; font-size: 40px;">Visual Style</h1>
                        <p class="pt-3">Sebelum menyelesaikan pembuatan UI, desainer akan membuat dua hingga tiga konsep
                            visual dari salah satu layar device untuk ditunjukkan tampilannya dan bisa Anda pilih.
                        </p>
                        <p class="pt-5">Pilihan konsep visual yang diberikan mungkin berbeda baik dari segi warna, font,
                            maupun elemen grafis lainnya. Jika Anda memiliki brand guideline dengan informasi warna palet
                            dan logo perusahaan, ini akan memudahkan desainer kami dalam membuat visual style.
                        </p>
                    </div>
                </div>
            </div>
            {{-- Step 4 --}}
            <div class="mt-5 container">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4 mb-5">
                        <button type="button" class="btn btn-lg btn-primary" disabled>Step 4</button>
                        <h1 style="font-weight : bold; font-size: 40px;">Proses Desain</h1>
                        <p class="pt-3">Desain produk dimulai. Desainer membuat panduan UI style yang berisi warna, font,
                            dan elemen desain lainnya. Ini akan membantu desainer dan developer web untuk mengikuti style
                            yang dipilih. Setelah itu, desainer akan membuat UI akhir untuk setiap layar device berdasarkan
                            wireframe yang dibuat sebelumnya.
                        </p>
                        <p class="pt-5">Setelah semua tampilan selesai, diteruskan ke developer bersama dengan ikon dan
                            elemen grafis lainnya yang digunakan untuk desain.
                        </p>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-4 mb-5">
                        <!-- Content for Column 2 -->
                        <div class="col-md-12 mb-5">
                            <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/vvyFW2Q/step4.png">
                        </div>
                        <!-- Apply the common class to the <ul> element -->
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner 5 --}}
        <div id="banner5">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="mt-5 container">
                            <div>
                                <h1 class="mt-5"
                                    style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #000000; font-weight: bold;">
                                    Ada Pertanyaan?</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mt-5 pt-3 container">
                            <p style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 16px;">
                                Tim kami akan menghubungi Anda untuk berkonsultasi tentang proyek Anda dan menjawab segala
                                pertanyaan terkait desain.
                            </p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mt-5 pt-3 container">
                            <a href="https://api.whatsapp.com/send?phone=6287888971186&text=Saya%20ingin%20order%20jasa%20UI/UX%20dan%20bayar%20hanya%20setelah%20saya%20puas" type="button" class="btn btn-primary btn-lg">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner 6 --}}
        <div id="banner6" class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="container">
                            <div>
                                <h1 class="mt-5"
                                    style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #000000;">
                                    UI-UX Tools</h1>
                                <p class="space-between"
                                    style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 20px;">
                                    Dengan menggunakan tools yang sudah terbukti ini, kami memastikan Anda menerima hasil
                                    desain
                                    yang diharapkan dalam deadline yang sudah ditentukan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md">
                            <div class="elementor-widget-container">
                                <div class="tool">
                                    <img class="img-fluid" src="https://onero.id/wp-content/uploads/2022/06/logos_figma.png">
                                    <span>Figma</span>
                                </div>
                                <div class="tool">
                                    <img class="img-fluid" src="https://onero.id/wp-content/uploads/2022/06/vscode-icons_file-type-ai.png">
                                    <span>Adobe Illustrator</span>
                                </div>
                                <div class="tool">
                                    <img class="img-fluid" src="https://onero.id/wp-content/uploads/2022/06/vscode-icons_file-type-photoshop.png">
                                    <span>Adobe Photoshop</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Our Portofolio --}}
                <div class="card my-5">
                    <div class="card-body">
                        <h1 class="mt-1"
                            style="font-family: 'Poppins', sans-serif; font-size: 28px; text-align:center; color: #000000; font-weight: bold;">
                            Pelajari lebih lanjut mengenai case study dan portfolio kami
                        </h1>

                         <!-- Card List -->
                        <div class="row justify-content-center">
                            {{-- Katalog 1 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Website Undangan Digital</h5>
                                    <img src="https://i.ibb.co/5cvxXpP/Mockup-desain-web-undangan.png" class="card-img-top" alt="Desain Digital Invitation">
                                    <p class="card-text">Desain web untuk undangan digital pernikahan, aqiqah, khitanan, dan acara lainnya.</p>
                                    <a href="https://www.veed.io/view/3bbf5231-f822-4cf3-b688-2702e620928d?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/ARR3DiIWyyqMAngj13FxgV/Desain-Website-Undangan-Digital?page-id=0%3A1&type=design&node-id=2-4434&viewport=408%2C474%2C0.05&t=WYcL6BOeMbHGY5Fv-1&scaling=scale-down&starting-point-node-id=2%3A4434&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            {{-- Katalog 2 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Aplikasi Transfer Uang ke Luar Negeri</h5>
                                    <img src="https://i.ibb.co/NKDgqp1/Desain-Aplikasi-Kirim-Uang.png" class="card-img-top" alt="Desain Pengiriman Uang">
                                    <p class="card-text">Desain aplikasi pengiriman uang online yang memudahkan pengguna dalam melakukan transaksi.</p>
                                    <a href="https://www.veed.io/view/d23f9f4b-cb9d-4a9e-b872-f5fe8ccc7ab7?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/OhFQtt4LmuWuJi4xnLoT82/Desain-Aplikasi-Transfer-Uang-ke-Luar-Negeri?page-id=4%3A2196&type=design&node-id=4-2198&viewport=408%2C307%2C0.09&t=FWCEaW5VIEDozhLK-1&scaling=scale-down&starting-point-node-id=4%3A2198&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            {{-- Katalog 3 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Website Perpustasakan Digital</h5>
                                    <img src="https://i.ibb.co/4s8VXvV/library.png" class="card-img-top" alt="Desain Perpustakaan">
                                    <p class="card-text">Desain website perpustakaan digital yang memudahkan pengguna dalam mencari buku dan melakukan peminjaman.</p>
                                    <a href="https://www.veed.io/view/68f1dbec-5be2-4fce-9c76-ecc9010c00f8?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/lsX3mgLxHiZyMjIMKVWQrZ/LibraTech?page-id=0%3A1&type=design&node-id=2-198&viewport=408%2C307%2C0.05&t=qFyq48jMUMXNKUkG-1&scaling=scale-down&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            {{-- Katalog 4 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Aplikasi Public Tranportation</h5>
                                    <img src="https://i.ibb.co/PtwHbxd/Public-app.png" class="card-img-top" alt="Desain Perpustakaan">
                                    <p class="card-text">Desain aplikasi public transportation yang memudahkan pengguna dalam mencari transportasi umum di daerah Jabodetabek.</p>
                                    <a href="https://www.veed.io/view/4b25bfdc-5f03-4794-90cf-1f8980163b2f?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/717igCCoD6mQpQwwhFB0Xt/PUBLICAPP?page-id=0%3A1&type=design&node-id=125-2272&viewport=632%2C1134%2C0.2&t=WCTQmDj7YPqLYCRv-1&scaling=scale-down&starting-point-node-id=125%3A2023&show-proto-sidebar=1&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
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
                    <div class="col-md">
                        <div class="mt-5 container">
                            <div>
                                <h1 class="mt-5"
                                    style="font-family: 'Poppins', sans-serif; font-size: 42px; color: #000000; font-weight: bold;">
                                    About Us</h1>
                                <p class="space-between"
                                    style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 20px;">
                                    Kelebihan kami terletak pada aspek kerjasama Team. Oleh karena itu, kami mengembangkan
                                    proyek dan produk dengan desain dan strategi bersama dengan Team kami yang ahli di
                                    bidangnya.
                                </p>
                                <p class="space-between"
                                    style="padding-inline-end: 100px; font-family: 'Poppins', sans-serif; font-size: 20px;">
                                    Kami melakukan ini untuk membantu meningkatkan goal bisnis dan mengubah paradigma Anda
                                    mengenai potensi dari Internet dan Teknologi.
                                </p>
                                <a href="#" class="mt-3 mb-5">
                                    More About Company</a>
                            </div>
                        </div>
                    </div>
                    {{-- Gambar animasi UI/UX --}}
                    <div class="col-md">
                        <img class="img-fluid mt-4 pt-4" src="https://i.ibb.co/fGyhnf3/aboutus.png">
                    </div>
                </div>
            </div>
        </div>
@endsection
