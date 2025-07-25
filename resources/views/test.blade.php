<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Portfolio Tria</title>
</head>

<body>
    <img src="{{ Storage::url('hebatmaju@gmail.com/foto1.png') }}" alt="Nama Gambar">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tria Elvafizani</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Portfolio</a>
                    <a class="nav-link" href="#">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container text-center">
            <img src="https://i.ibb.co/tqzYyYV/tria-elvafizani.jpg" width="250" class="rounded-circle">
            <h1 class="display-4">Tria Elvafizani</h1>
            <p class="lead">UI/UX Designer | Frontend Dev</p>
        </div>
    </div>

    {{-- About --}}
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>About</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>Saya adalah lulusan baru dari program S1 Teknik Informatika yang memiliki semangat tinggi dan
                    antusiasme dalam mengembangkan desain antarmuka (UI/UX) yang memukau dan merancang pengalaman
                    pengguna yang luar biasa. Dengan latar belakang pendidikan saya dalam ilmu komputer, saya memiliki
                    dasar yang kuat dalam pemrograman dan pemahaman teknis yang mendalam.</p>
            </div>
            <div class="col">
                <p>Selama studi S1 saya, saya telah aktif belajar dan berpartisipasi dalam proyek-proyek pengembangan
                    perangkat lunak, yang memberi saya pemahaman mendalam tentang pengembangan perangkat lunak. Selain
                    itu, saya selalu merasa tertarik pada desain antarmuka yang estetis dan efisien. Saya telah
                    mengikuti kursus-kursus tambahan dan pelatihan untuk memahami prinsip-prinsip UI/UX Design dan
                    Frontend Development.</p>
            </div>
        </div>
    </div>

    {{-- Portfolio --}}
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Portfolio</h1>
            </div>
        </div>
        {{-- Card Image --}}
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <img src="https://sribulancer-production-sg.s3.ap-southeast-1.amazonaws.com/attachment/111637-2023265-portfolio-infinid2.png"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://sribulancer-production-sg.s3.ap-southeast-1.amazonaws.com/attachment/111637-2023265-portfolio-infinid2.png"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://sribulancer-production-sg.s3.ap-southeast-1.amazonaws.com/attachment/111637-2023265-portfolio-infinid2.png"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <img src="https://sribulancer-production-sg.s3.ap-southeast-1.amazonaws.com/attachment/111637-2023265-portfolio-infinid2.png"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://sribulancer-production-sg.s3.ap-southeast-1.amazonaws.com/attachment/111637-2023265-portfolio-infinid2.png"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://sribulancer-production-sg.s3.ap-southeast-1.amazonaws.com/attachment/111637-2023265-portfolio-infinid2.png"
                        class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
-->
</body>

</html>
