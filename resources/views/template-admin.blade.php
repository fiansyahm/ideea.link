<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <!-- Tambahkan link CSS Anda di sini, termasuk Bootstrap jika tidak menggunakan CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
</head>
<body>
    <div class="container-fluid">
        @if(Auth::check())
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">{{ Auth::user()->email }}</a></li>
              @if(Auth::user()->isAdmin=='1')
              <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Status:Admin</a></li>
              @else
                <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Status:User</a></li>
              @endif
              <li class="nav-item"><a href="/session/logout" class="nav-link">Logout</a></li>
            </ul>
          </header>
        @else
        @endif
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <!-- Tambahkan menu dan navigasi sidebar di sini -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_dashboard')" href="/admin/wedding/dashboard">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_menu_wedding')" data-bs-toggle="collapse" href="#submenu_wedding_1" aria-expanded="false" aria-controls="submenu_wedding_1">
                            Wedding Invitation
                        </a>
                        <div class="collapse" id="submenu_wedding_1">
                            <ul class="nav flex-column pl-2 border border-primary">
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/wedding/list">
                                        Daftar Undangan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/wedding/konfirmasi">
                                        Daftar Konfirmasi
                                    </a>
                                </li>
                                <!-- Tambahkan lebih banyak submenu sesuai kebutuhan Anda -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_menu_khitan')" data-bs-toggle="collapse" href="#submenu_wedding" aria-expanded="false" aria-controls="submenu_wedding">
                            Khitan Invitation
                        </a>
                        <div class="collapse" id="submenu_wedding">
                            <ul class="nav flex-column pl-2 border border-primary">
                                <li class="nav-item">
                                    <a class="nav-link @yield('navbar_produk')" href="/admin/khitan/list">
                                        Daftar Undangan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @yield('navbar_konfirmasi')" href="/khitan/konfirmasi">
                                        Daftar Konfirmasi
                                    </a>
                                </li>
                                <!-- Tambahkan lebih banyak submenu sesuai kebutuhan Anda -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_menu_aqiqah')" data-bs-toggle="collapse" href="#submenu_aqiqah" aria-expanded="false" aria-controls="submenu_aqiqah">
                            Aqiqah Invitation
                        </a>
                        <div class="collapse" id="submenu_aqiqah">
                            <ul class="nav flex-column pl-2 border border-primary">
                                <li class="nav-item">
                                    <a class="nav-link @yield('navbar_produk')" href="/admin/aqiqah/list">
                                        Daftar Undangan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @yield('navbar_konfirmasi')" href="/aqiqah/konfirmasi">
                                        Daftar Konfirmasi
                                    </a>
                                </li>
                                <!-- Tambahkan lebih banyak submenu sesuai kebutuhan Anda -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_menu_polaroid')" data-bs-toggle="collapse" href="#submenu_polaroid" aria-expanded="false" aria-controls="submenu_polaroid">
                            Polaroid
                        </a>
                        <div class="collapse" id="submenu_polaroid">
                            <ul class="nav flex-column pl-2 border border-primary">
                                <li class="nav-item">
                                    <a class="nav-link @yield('navbar_produk')" href="/polaroid/home">
                                        Menu Utama
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @yield('navbar_konfirmasi')" href="/polaroid/background">
                                        Background Foto
                                    </a>
                                </li>
                                <!-- Tambahkan lebih banyak submenu sesuai kebutuhan Anda -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_code')" href="/code">
                            Kode
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_song')" href="/song">
                            Lagu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_video')" href="/video">
                            Video
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_menu_attendance')" href="/myattendance">
                            Attendance
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_pendingpayment')" href="/pendingpayment">
                            Pending Payment
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_menu_catalog')" href="/catalog">
                            Catalog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_menu_order')" href="/order/pending/all">
                            Order
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navbar_menu_rating')" href="/rating">
                            Rating
                        </a>
                    </li>
                    
                    <!-- Tambahkan lebih banyak menu utama sesuai kebutuhan Anda -->
                </ul>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Tambahkan konten utama Anda di sini -->
                @if(Auth::check())
                    @yield('main')
                @else
                @endif
            </main>
        </div>
        
    </div>

    <!-- Tambahkan script JavaScript Anda di sini jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- <script src="/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>
