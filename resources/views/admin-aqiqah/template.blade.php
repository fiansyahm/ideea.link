<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <!-- Tambahkan link CSS Anda di sini, termasuk Bootstrap jika tidak menggunakan CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <!-- Tambahkan menu dan navigasi sidebar di sini -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_dashboard')" href="/admin/khitan/dashboard">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_produk')" href="/admin/khitan/list">
                            Daftar Undangan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_konfirmasi')" href="/konfirmasi">
                            Daftar Konfirmasi
                        </a>
                    </li>

                    <!-- Tambahkan lebih banyak menu sesuai kebutuhan Anda -->
                </ul>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Tambahkan konten utama Anda di sini -->
                @yield('main')
            </main>
        </div>
    </div>

    <!-- Tambahkan script JavaScript Anda di sini jika diperlukan -->
</body>
</html>
