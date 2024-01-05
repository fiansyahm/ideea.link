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

            hr.dotted {
                border: none;
                border-top: 6px dotted #808080;
                /* Mengatur garis putus-putus dengan ketebalan 2px dan warna hitam (#000) */
                width: 70%;
                /* Mengatur panjang garis menjadi 50% dari lebar parent */
                margin: 50px auto;
                /* Memberikan jarak atas dan bawah, serta menengahkan garis */
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
                                    entry</em>) dengan biaya <strong>terjangkau, aman, cepat, dan 24 jam</strong> tersedia
                                di
                                berbagai kota di Indonesia secara online maupun offline. Dilakukan oleh individu maupun tim
                                yang siap mengerjakan <strong>puluhan hingga ribuan data sekaligus</strong>
                            </p>

                            <p class="light-gray-color"><strong>✅</strong>Input Data di Excel<br><strong>✅</strong>Input
                                Data di
                                Website<br><strong>✅</strong>Input Data Produk di Marketplace<br><strong>✅</strong>Input
                                Data Formulir<br><strong>✅</strong>Input Data Barang<br><strong>✅</strong>Input Data
                                Penjualan<br><strong>✅</strong>Input Data Keuangan<br><strong>✅</strong>Input Data
                                Inventaris<br><strong>✅</strong>Input Data
                                Siswa/Mahasiswa/Karyawan/Warga<br><strong>✅</strong>Input
                                Data Penelitian atau Riset<br><strong>✅</strong>Input Data Sesuai Permintaan</p>

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
            <p class="text-center light-gray-color">Tidak hanya satu atau dua orang saja yang siap bekerja untuk input data,
                di Jagoketik.com tersedia hingga puluhan Jagoan Ketik Profesional yang selalu siap membantumu 24/7 hari. Ini
                keuntungan ketika kamu menggunakan jasa input data di Ideea.Link:
            </p>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item">1. Tersedia 24/7 hari tanpa libur;</li>
                <li class="list-group-item">2. Siap membantu input data hingga ribuan atau bahkan jutaan data sekaligus;
                </li>
                <li class="list-group-item">3. Dapat melakukan pelbagai jenis input data, seperti: Excel (spreadsheet),
                    website, produk di marketiplace, formulir, tabulasi, dan lain sebagainya;</li>
                <li class="list-group-item">4. Dapat melayani input data online maupun panggilan (offline) di pelbagai kota
                    di Indonesia;</li>
                <li class="list-group-item">5. Garansi uang kembali 100% jika terlambat menyelesaikan; </li>
                <li class="list-group-item">6. Gratis revisi tanpa batasan hingga hasil sesuai;</li>
                <li class="list-group-item">7. Perlindungan kebijakan privasi keamanan dokumen dan pengguna jasa;</li>
            </ol>
        </div>

        <div class="container">
            <h1 class="text-center">Masih mau coba pakai jasa input data di tempat lain?</h1>
            <p class="text-center light-gray-color">Pertimbangkan keuntungan dan risikonya! Jangan hanya karena murah maka
                mengorbankan waktu dan keamanan. Sudah tepat kamu mengunjungi website ini karena hanya di Jagoketik.com kamu
                akan mendapatkan 100% pelayanan prima yang tidak ditemukan di tempat lain.
            </p>
        </div>

        <hr class="dotted">

        <div class="container">
            <h1 class="text-center">Berpengalaman dan Profesional</h1>
            <p class="text-center light-gray-color">Jagoketik.com telah dipercaya oleh ratusan klien baik invidu,
                perusahaan,
                hingga pemerintahan untuk melakukan input data mulai dari puluhan data hinga jutaan data dalam waktu singkat
                dengan hasil maksimal.
            </p>
            <p class="text-center light-gray-color">
                Berangkat dari kesuksesan-kesuksesan itu, Jagoketik.com bersemangat untuk membantu lebih banyak orang lagi
                guna melakukan input data pelbagai jenis data secara online maupun offline di seluruh kota di Indonesia
            </p>
            <div class="button-container">
                <button class="btn btn-primary" type="button">LIHAT TESTIMONIAL</button>
            </div>
        </div>

        <div class="container">
            <h1 class="text-center">Harga Jasa Input Data (Data Entry)</h1>
            <p class="text-center light-gray-color">Berapa harga jasa input data (data entry)? Berikut Jagoketik.com
                tawarkan
                harga input data terbaik yang pastinya tidak akan mengecewakan. Jika mengecewakan, kami kembalikan uang kamu
                100% atau bebas revisi sampai hasil sesuai seperti yang kamu inginkan!
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Harga Input Data Santai</h5>
                            <p class="card-text">Butuh jasa input data (data entry) deadline santai hingga 5 hari dengan
                                harga termurah? Pilih paket harga ini!</p>
                            <ul class="list-fitur">
                                <li>Deadline kurang dari 5 hari (120 jam)</li>
                                <li>Input data di Excel (Spreadsheet)</li>
                                <li>Garansi uang kembali 100% jika terlambat</li>
                                <li>Gratis revisi tanpa batasan waktu atau kesempatan</li>
                                <li>Gratis backup file dokumen seumur hidup</li>
                                <li>Perlindungan keamanan privasi dokumen</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Rp250/cell</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Harga Input Data Reguler</h5>
                            <p class="card-text">Butuh jasa input data (data entry) deadline reguler hingga 3 hari dengan
                                harga terjangkau? Pilih paket harga ini!</p>
                            <ul class="list-fitur">
                                <li>Deadline kurang dari 3 hari (72 jam)</li>
                                <li>Input data di Excel (Spreadsheet)</li>
                                <li>Garansi uang kembali 100% jika terlambat</li>
                                <li>Gratis revisi tanpa batasan waktu atau kesempatan</li>
                                <li>Gratis backup file dokumen seumur hidup</li>
                                <li>Perlindungan keamanan privasi dokumen</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Rp400/cell</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Harga Input Data Kilat</h5>
                            <p class="card-text">Butuh jasa input data (data entry) deadline cepat/kilat dengan harga
                                terbaik? Pilih paket harga ini!</p>
                            <ul class="list-fitur">
                                <li>Deadline kurang dari 1 hari (24 jam)</li>
                                <li>Input data di Excel (Spreadsheet)</li>
                                <li>Garansi uang kembali 100% jika terlambat</li>
                                <li>Gratis revisi tanpa batasan waktu atau kesempatan</li>
                                <li>Gratis backup file dokumen seumur hidup</li>
                                <li>Perlindungan keamanan privasi dokumen</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Rp750/cell</a>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-center">Mau konsultasi atau negosiasi?</h3>
            <p class="text-center light-gray-color">Butuh jasa input data dengan jumlah ratusan atau bahkan jutaan data
                dalam waktu singkat?
                Admin selalu siap 24/7 via WhatsApp maupun telepon. Klik WhatsApp atau telepon di bawah
                *Syarat dan ketentuan berlaku!
            </p>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="inner-content">
                            <!-- Your existing content -->

                            <!-- Centered button container -->
                            <div class="button-container">
                                <button class="btn btn-primary" type="button">WHATSAPP</button>
                                <button class="btn btn-primary" type="button">TELEPON</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- FAQ --}}

        <div class="container">
            <h1 class="mt-5 mb-4 text-center">Frequently Asked Questions (FAQ)</h1>

            <!-- Accordion component for FAQ -->
            <div class="accordion" id="faqAccordion">
                <!-- Question 1 -->
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Berapa gaji seorang data entry?
                        </button>
                    </h4>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Gaji seorang data entry tergantung dari perusahaan dan UMR setempat. Data entry bukanlah
                            pekerjaan tungkal melainkan bagian dari job description. <p></p>
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apa yang dimaksud dengan input data?
                        </button>
                    </h4>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Input data adalah kegiatan mamasukkan (input) data ke dalam software komputer agar data dapat
                                disajikan dan dibaca sebagai sebuah informasi yang kredibel serta terukur.</p>
                        </div>
                    </div>
                </div>
                {{-- Question 3 --}}
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Data entry itu seperti apa?
                        </button>
                    </h4>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Data entry atau input data adalah pekerjaan memasukkan sebuah data ke dalam software komputer
                                seperti Excel, Word, dan lain sebagainya.</p>
                        </div>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apa itu data entry freelance?
                        </button>
                    </h4>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Data entry freelance adalah pekerjaan lepas tanpa terikat kontrak di sebuah perusahaan dan
                                dapat bekerja di banyak tempat untuk melakukan input data (data entry)</p>
                        </div>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana cara input data?
                        </button>
                    </h4>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Cara input data harus mengikuti instruksi atau permintaan klien dan Freelance atau pekerja
                                harus mampu memahami cara memasukkan data (input data).</p>
                        </div>
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Berapa harga jasa input data atau entry data?
                        </button>
                    </h4>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Harga jasa input data atau entry data dapat dihitung per cell (Excel/Spreadsheet) mulai dari
                                Rp250/cell. Selain itu, harga input data juga dapat dilakukan secara borongan tanpa harus
                                menghitung satuan. Ini cukup menguntungkan jika data yang ingin dimasukkan ada jutaan dalam
                                waktu singkat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS and Popper.js for the accordion functionality -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>

@endsection
