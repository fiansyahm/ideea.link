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
                                <a href="https://api.whatsapp.com/send?phone=6285812570358&text=Saya%20ingin%20order%20jasa%20UI/UX%20dan%20bayar%20hanya%20setelah%20saya%20puas" type="button" class="btn btn-primary btn-lg">Hubungi Kami</a>
                            </div>
                        </div>

                    </div>
                    {{-- Gambar animasi UI/UX --}}
                    <div class="col-md">
                        <img class="img-fluid mt-4 pt-4" src="https://akad.in/storage/images/1zd5yoYwkd2d0piADAMpgO3ccSBF472huEaJ83SP.png">
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
                            <img src="https://akad.in/storage/images/40fmcPgh2RZx0bHYnuCVmirfIe11jbANBNFmHrOU.png" class="card-img-top" alt="Desain Mobile">
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
                            <img src="https://akad.in/storage/images/VCYWsRDQgvuKrbSD8NMiKyWfxVu7hMqJ1AFxFPJ2.png" class="card-img-top" alt="Desain Web">
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
                            <img src="https://akad.in/storage/images/n5nwaz9YqAaXF11i7XEu3an21A3YSv2b5DBmU1jP.png" class="card-img-top" alt="Desain Baru">
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
                        <img class="img-fluid mt-4 pt-1" src="https://akad.in/storage/images/eW0rDeL1v9CvfbzCprrsTkYHDjSPKdlri1PKxEnS.png">
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
                            <img class="img-fluid mt-4 pt-4" src="https://akad.in/storage/images/LzZikTccWEKLAB1pL7f1TU9whB3El7vSdYqXYTrl.png">
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
                            <img class="img-fluid mt-4 pt-4" src="https://akad.in/storage/images/UPfiKrgd3JBItRQBzQmXTmJjF3gvaAdlJEcCV3DP.png">
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
                            <img class="img-fluid mt-4 pt-4" src="https://akad.in/storage/images/Und7fxV0g1OwdbEd4U5U23S8a7Pb2bNp1lPcBoy1.png">
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
                            <img class="img-fluid mt-4 pt-4" src="https://akad.in/storage/images/JvwyvqEhLPO2ethsqv1tXqjNhdMcf4TdVil8sWKY.png">
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
                            <a href="https://api.whatsapp.com/send?phone=6285812570358&text=Saya%20ingin%20order%20jasa%20UI/UX%20dan%20bayar%20hanya%20setelah%20saya%20puas" type="button" class="btn btn-primary btn-lg">Hubungi Kami</a>
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
                                    <img src="https://akad.in/storage/images/orRT5OxAoZdvA0bEX5mBseejnwnPM5Su5mVOfHCf.png" class="card-img-top" alt="Desain Digital Invitation">
                                    <p class="card-text">Desain web untuk undangan digital pernikahan, aqiqah, khitanan, dan acara lainnya.</p>
                                    <a href="https://www.veed.io/view/3bbf5231-f822-4cf3-b688-2702e620928d?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/ARR3DiIWyyqMAngj13FxgV/Desain-Website-Undangan-Digital?page-id=0%3A1&type=design&node-id=2-4434&viewport=408%2C474%2C0.05&t=WYcL6BOeMbHGY5Fv-1&scaling=scale-down&starting-point-node-id=2%3A4434&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            {{-- Katalog 2 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Aplikasi Transfer Uang ke Luar Negeri</h5>
                                    <img src="https://akad.in/storage/images/qlpTolTnuAN9a3MDpXEGMLD7OBEJGT5TrwyDY4i5.png" class="card-img-top" alt="Desain Pengiriman Uang">
                                    <p class="card-text">Desain aplikasi pengiriman uang online yang memudahkan pengguna dalam melakukan transaksi.</p>
                                    <a href="https://www.veed.io/view/d23f9f4b-cb9d-4a9e-b872-f5fe8ccc7ab7?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/OhFQtt4LmuWuJi4xnLoT82/Desain-Aplikasi-Transfer-Uang-ke-Luar-Negeri?page-id=4%3A2196&type=design&node-id=4-2198&viewport=408%2C307%2C0.09&t=FWCEaW5VIEDozhLK-1&scaling=scale-down&starting-point-node-id=4%3A2198&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            {{-- Katalog 3 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Website Perpustasakan Digital</h5>
                                    <img src="https://akad.in/storage/images/u8fNXsUmIAvVQodAZlE04IyvzrcAYZUXAk4aWEnv.png" class="card-img-top" alt="Desain Perpustakaan">
                                    <p class="card-text">Desain website perpustakaan digital yang memudahkan pengguna dalam mencari buku dan melakukan peminjaman.</p>
                                    <a href="https://www.veed.io/view/68f1dbec-5be2-4fce-9c76-ecc9010c00f8?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/lsX3mgLxHiZyMjIMKVWQrZ/LibraTech?page-id=0%3A1&type=design&node-id=2-198&viewport=408%2C307%2C0.05&t=qFyq48jMUMXNKUkG-1&scaling=scale-down&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            {{-- Katalog 4 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Aplikasi Public Tranportation</h5>
                                    <img src="https://akad.in/storage/images/66IQdQIp0spJSwfG19IWGhhtBM671h7JvCPD1rvM.png" class="card-img-top" alt="Desain Perpustakaan">
                                    <p class="card-text">Desain aplikasi public transportation yang memudahkan pengguna dalam mencari transportasi umum di daerah Jabodetabek.</p>
                                    <a href="https://www.veed.io/view/4b25bfdc-5f03-4794-90cf-1f8980163b2f?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/717igCCoD6mQpQwwhFB0Xt/PUBLICAPP?page-id=0%3A1&type=design&node-id=125-2272&viewport=632%2C1134%2C0.2&t=WCTQmDj7YPqLYCRv-1&scaling=scale-down&starting-point-node-id=125%3A2023&show-proto-sidebar=1&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            {{-- Katalog 5 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Aplikasi Food Order</h5>
                                    <img src="https://akad.in/storage/images/xloNLkAPvPo6rwdzHxp1K4AVzl53BPsTkA6bgfwn.png" class="card-img-top" alt="Desain Food Order">
                                    <p class="card-text">Desain aplikasi food order yang memudahkan pengguna dalam memesan makanan tanpa perlu antri ditempat.</p>
                                    <a href="https://www.veed.io/view/9dd8059b-3cd2-49c7-ace9-8c3470126b31?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/4CmY3fV7TupN2Yt8hm0BuO/Food-Order?page-id=0%3A1&type=design&node-id=1-266&viewport=561%2C310%2C0.12&t=AZlgHEN3TXxaeSxo-1&scaling=scale-down&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            {{-- Katalog 6 --}}
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Aplikasi Chatting</h5>
                                    <img src="https://akad.in/storage/images/nUzlcDGB2ecIjkFd76Nuk6CHiv2psvbtEX7J7G2z.png" class="card-img-top" alt="Desain Chatting App">
                                    <p class="card-text">Desain aplikasi chatting yang memudahkan pengguna dalam berkomunikasi dengan keluarga diberbagai negara.</p>
                                    <a href="https://www.veed.io/view/d8348b18-2cd4-4fab-b889-fd51517c9bb6?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/AspM2uqjYc91P1ZX0YEgtE/Chatting-App?page-id=0%3A1&type=design&node-id=1-794&viewport=-112%2C255%2C0.05&t=RNMl2TppeAPqoYIo-1&scaling=scale-down&starting-point-node-id=1%3A794&mode=design" class="btn btn-success">Link Figma</a>
                                </div>
                            </div>
                            <div class="col-md-5 mx-2 card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Desain Aplikasi Coffee Shop</h5>
                                    <img src="https://akad.in/storage/images/J0a30XklQCMCvukAKZH3HCW6OhRLAw0C1XKtYXPL.png" class="card-img-top" alt="Desain Chatting App">
                                    <p class="card-text">Desain aplikasi coffee shop yang memudahkan pengguna dalam memesan kopi tanpa perlu mengantri.</p>
                                    <a href="https://www.veed.io/view/8ebbfe1d-849e-4d43-b59e-0ef3fca23f2d?panel=share" class="btn btn-primary">Lihat Demo</a>
                                    <a href="https://www.figma.com/proto/EbJ4EthHkef6SRXS3u7bVm/Kavore?page-id=0%3A1&node-id=1-1553&viewport=1030%2C615%2C0.13&t=qaxvz33U1H0FpPbo-1&scaling=scale-down&starting-point-node-id=1%3A1553&show-proto-sidebar=1" class="btn btn-success">Link Figma</a>
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
                        <img class="img-fluid mt-4 pt-4" src="https://akad.in/storage/images/MrQu8t4rdedOg05VElKxSigVZvVHvr0gZWNwLUcI.png">
                    </div>
                </div>
            </div>
        </div>
@endsection
