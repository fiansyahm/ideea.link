<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>About Us</title>
</head>

<body>
    <!-- Navbar -->
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

    <!-- Header -->
    <div class="text-center pt-4">
        <h1 style="font-family: 'Poppins', sans-serif; font-size: 48px;">Cerita Dibalik</h1>
        <h1 style="font-family: 'Poppins', sans-serif; font-size: 48px; color: #FFC727;">Akad.in</h1>
    </div>

    <!-- Introduction -->
    <div class="container text-center"
        style="background-image: url('https://i.ibb.co/42GRPv4/5.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 300px;">
        <p class="pt-4" style="font-family: 'Poppins', sans-serif;">Akad.in terbentuk pada tahun Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Explicabo sunt ut accusamus eos, voluptatibus culpa fuga? Consequatur,
            quod? Ratione repudiandae quisquam aut quae optio quibusdam voluptate magnam numquam odio temporibus.</p>
    </div>

    <!-- Team Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h1 style="color: #FFC727;">Tim Kami</h1>
            </div>
        </div>

        <!-- Card Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://as1.ftcdn.net/v2/jpg/06/26/08/46/1000_F_626084685_2UYGfnKKcImcXmzYTbgvAYNEpHp0q1Ml.jpg"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="text-bold text-left"><b>Muhammad Arifiansyah</b></p>
                        <p class="text-muted mb-4"><b>Chief Executive Officer</b></p>
                        <p>Lulusan Teknik Informatika ITS tahun 2023</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://as1.ftcdn.net/v2/jpg/06/26/08/46/1000_F_626084685_2UYGfnKKcImcXmzYTbgvAYNEpHp0q1Ml.jpg"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="text-bold text-left"><b>Muhammad Arifianto</b></p>
                        <p class="text-muted mb-4"><b>Chief Executive Officer</b></p>
                        <p>Lulusan Teknik Fisika ITS tahun 2023</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://as1.ftcdn.net/v2/jpg/06/26/08/46/1000_F_626084685_2UYGfnKKcImcXmzYTbgvAYNEpHp0q1Ml.jpg"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="text-bold text-left"><b>Tria Elvafizani</b></p>
                        <p class="text-muted mb-4"><b>Chief Product Officer</b></p>
                        <p>Lulusan Teknik Informatika UB tahun 2023</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Footer --}}
        <footer class="bg-warning text-white text-center py-3">
            <div class="container">
                <p>&copy; 2023 Akad.in. All rights reserved.</p>
            </div>
        </footer>
        <!-- Bootstrap JS (optional, but required for some features) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-GLhlTQ8iKJEeaZ6zgPnFt6V9U1/AAKJLcC8PzDP5NqIbbVd1MqQbTFOEFJgvm9E" crossorigin="anonymous"></script>
</body>

</html>
