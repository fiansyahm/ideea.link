
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Akad.in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="icon" href="https://i.ibb.co/ChJ0gQ7/logo-akad-new.png" />

<style>
    @yield('style')

    .navbar-toggler {
        order: -1; /* Mengubah urutan tampilan tombol burger menu */
    }

    .navbar-brand {
        margin: 0 auto; /* Meletakkan logo di tengah secara horizontal */
        display: block; /* Membuat logo menjadi elemen blok untuk mengatur lebar */
        text-align: center; /* Mengatur teks di tengah secara horizontal */
    }

    #banner1,#banner2,#banner3,#banner4 {
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

</style>

</head>

<body>
     {{-- Navbar --}}
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFC727;">
        <div class="container">
            <a class="navbar-brand" href="/" style="color: #FFFEFE;">Akad.in</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/" style="color: #FFFEFE;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/katalog" style="color: #FFFEFE;">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #FFFEFE;">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Banner 1 --}}

    @yield('main')

     {{-- Footer --}}
     <footer class="bg-warning text-white text-center py-3">
        <div class="container">
            <p>&copy; 2023 Akad.in. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <!-- cdn awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</body>

</html>