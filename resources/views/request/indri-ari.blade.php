<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{$wedding->nicknameFemale}} & {{$wedding->nicknameMale}} Wedding</title>
    <!-- cdn jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/004/328/835/original/muslim-wedding-in-white-dress-illustration-free-vector.jpg" />
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Great+Vibes&family=Lato:wght@400;700&family=Dancing+Script&=Caveat:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
        }
        h1 {
            font-family: 'Great Vibes', cursive;
        }
        h2 {
            font-family: 'Dancing Script', cursive;
        }
        p {
            font-family: 'Caveat', cursive;
        }

        
        audio {
            display: none;
        }
        
        #container {
            height: 180px;
            width: 180px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 24px;
            position: relative;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
            transition: 0.5s linear;
        }
        
        
        #card {
            margin-top: 25px;
            margin-left: 25px;
            height: 50px;
            width: 50px;
            opacity: 0.5;
        }

        /* 1 */
        .top {
            background: url("https://weddingbells.mblycdn.com/wb/resized/2016/08/640x852/funky-glam-wedding-ottawa45.jpg") no-repeat center center;
            background-size: cover;
            height: 665px;
        }

        /* 2 */
        #ayat {
            background:#D3D7CF;
        }

        /* 3 */
        #date_time {
            background-image: url("https://cdn.shopify.com/s/files/1/0565/7431/2643/files/background.jpg?v=1641291483");
            background-size: cover;
            /* height: 1300px; */
        }

        /* 4 */
        #akad-resepsi{
            background:#D3D7CF;
        }

        /* 5 */
        #prewed{
            background-image: url("https://cdn.shopify.com/s/files/1/0565/7431/2643/files/background.jpg?v=1641291483");
            background-size: cover;
            /* height: 1300px; */
        }

        /* 6 */
        #ucapan-doa{
            background:#D3D7CF;
        }

        /* 7 */
        #gift{
            background: url("https://cdn.shopify.com/s/files/1/0565/7431/2643/files/background.jpg?v=1641291483");
            background-size: cover;
            /* height: 1300px; */
        }

        /* 8 */
        #special-thanks{
            background:#D3D7CF;
        }

        /* 9 */
        #special-thanks{
            background:#D3D7CF;
        }

        .scroll-icon {
            position: fixed;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            opacity: 1;
            transition: opacity 0.3s ease-in-out, bottom 0.3s ease-in-out;
        }

        .scroll-icon.hidden {
            opacity: 0;
        }

        .swipe-text {
            position: absolute;
            bottom: 15px;
            left: 60%;
            transform: translate(-50%, -50%);
            font-size: 14px;
            opacity: 0;
            animation: moveUpDown 2s infinite;
        }

        .box-container {
            height: 400px;
            position: relative;
        }

        .box1,
        .box2,
        .box3,
        .box4 {
            width: 200px;
            height: 200px;
            background-color: #3498db; /* warna biru untuk kotak pertama */
            position: absolute;
        }

        .box1 {
            top: 0px; /* jarak vertikal dari sisi atas */
            left: 15px; /* jarak horizontal dari sisi kiri */
            width: 260px;
            height: 300px;
        }

        .box2 {
            background-color: white; /* warna merah untuk kotak kedua */
            top: 40px; /* jarak vertikal dari sisi atas */
            height: 350px;
            width: 250px;
        }

        .box3 {
            background-color: white; /* warna merah untuk kotak kedua */
            top: 50px; /* jarak vertikal dari sisi atas */
            height: 350px;
            width: 250px;
            right: 15px; /* jarak horizontal dari sisi kanan */
        }

        /* Additional styling for the image inside box2 */
        #foto-profil-1,#foto-profil-2 {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio and cover the box */
        }

        @keyframes  moveUpDown {
            0%, 100% {
                transform: translate(-50%, -50%) translateY(-10px);
                opacity: 0;
            }
            50% {
                transform: translate(-50%, -50%) translateY(10px);
                opacity: 1;
            }
        }
        

    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Euphoria+Script&family=Marck+Script&family=Princess+Sofia&family=Rouge+Script&family=Square+Peg&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</head>

<body>
    <!-- https://unityinvitation.com/fandy-nabiila/?to=Reni -->

    <div style="margin-left:300px;margin-bottom:50px" id="card" class="card fixed-bottom text-center justify-content-center">
        <i id="disc" class="fa fa-music fa-lg"></i>
        <audio id="sound" src="{{$wedding->music}}" preload="auto" controls></audio>
    </div>

    <div class="fixed-top bg-primary">
        <div class="output"></div>
    </div>

    <div class="fixed-top">
        <div class="text-center">
            <div class="" id="welcomeMessage" style="height:665px;background-color: rgba(255, 255, 255, 0.8);padding-top: 200px;">
                <h1 style="font-size:60px">
                    {{$wedding->nicknameFemale}} & {{$wedding->nicknameMale}}
                </h1>
                <h2 style="font-size:30px">
                    Kepada Yth, Bapak/Ibu/Saudara/i
                </h2>
                <h2 style="font-size:25px">
                    {{$guest}}
                </h2>
                <p>Silakan klik tombol di bawah untuk membuka undangan pernikahan.</p>
                <button id="bukaUndangan" class="btn btn-secondary">Buka Undangan</button>
            </div>     
        </div>
    </div>

    <script>
        // Ketika tombol "Buka Undangan" diklik
        document.getElementById("bukaUndangan").addEventListener("click", function() {
            // Sembunyikan pesan selamat datang
            document.getElementById("welcomeMessage").style.display = "none";
            document.getElementById("content-of-main").style.display = "block";
            document.getElementById("title-pernikahan").style.display = "block";
            document.getElementById("date-wedding-1").style.display = "block";
            document.getElementById("loversname").style.display = "block";
            playAudioFirstly(0);
        });
    </script>
    

    <div class="top m-0 text-white">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h1 id="initial-icon" style="color:white;" class="navbar-brand">{{$wedding->nicknameFemale[0]}} & {{$wedding->nicknameMale[0]}}</h1>
                <button onclick="changeIcon()" class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <script>
                    function changeIcon() {
                        alert('test');
                        var myColor = $('#initial-icon').css('color');

                        if (myColor === 'rgb(0, 0, 0)' || myColor.toLowerCase() === 'black') {
                            $('#initial-icon').animate({ color: 'white' }, 1000);
                        } else {
                            $('#initial-icon').animate({ color: 'black' }, 1000);
                        }
                    }

                </script>
            </div>
        </nav>
        <div class="m-2">
            <h1 style="margin-top: 350px;font-size:30px;display:none" id="loversname">
                {{$wedding->nicknameFemale}} & {{$wedding->nicknameMale}}
            </h1>
            <p class="" style="display:none" id="title-pernikahan">
                "The man dreams of a perfect woman and the woman dreams of a perfect man and they don't know that Allah created them to perfect one another." -Ahmad Al Shugairi
            </p>
            <h2 style="font-size:15px;display:none" id="date-wedding-1"></h2>
        </div>
    </div>

    <div style="display:none" id="content-of-main">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="scroll-icon" id="scrollIcon">
            <pre class="m-0 p-0 swipe-text">Swipe Up </pre>
            <i class="fa fa-chevron-down"></i>
            <i class="fa fa-chevron-down"></i>
            <i class="fa fa-chevron-down"></i>
        </div>
        <script>
            const scrollIcon = document.getElementById('scrollIcon');

            scrollIcon.addEventListener('click', () => {
                // Scroll smoothly to the next section
                window.scrollBy({
                    top: window.innerHeight,
                    behavior: 'smooth'
                });

                // Hide the scroll icon after clicking
                scrollIcon.style.display = 'none';
                });

                // Show the scroll icon when scrolling starts
                window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    scrollIcon.style.display = 'none';
                } else {
                    scrollIcon.style.display = 'block';
                }
            });
        </script>

        <div id="ayat" class="quote-1 p-3" style="display:none;">
            <div class="text-center">
                <div class="">
                    <img class="img-fluid" height="100px" width="100px" style="display:none" id="dove" src="https://png.pngtree.com/png-clipart/20220102/original/pngtree-pigeon-couple-png-image_6990814.png" alt="" />
                </div>
                <h2 id="tanda-1" class="fs-2 my-0 p-0" style="display:none;">
                    Pasangan
                </h2>
                <h1 id="tanda-2" class="my-0 p-0" style="display:none;font-size:45px;">
                    Mempelai
                </h1>
                <p id="tanda-3" style="display:none;font-size: 18px;">
                    Maha Suci Allah Subhanahu wa Ta'ala yang<br/> telah menciptakan makhluk-Nya<br/>berpasang-pasangan. Ya Allah,<br/>perkenankanlah dan Ridhoilah Pernikahan<br/>Kami.
                </p>
            </div>

            <div class="box-container">
                <div class="box1 bg-secondary">
                    <h1 class="text-white py-2 text-center">The Bridge</h1>
                </div>
                <div class="box2">
                    <img id="foto-profil-1" class="card-img-top img-fluid" src="https://cdn.pnghd.pics/data/398/gambar-kartun-tanpa-wajah-36.jpg" alt="..." />
                </div>
            </div>

            <div class="card-body m-0 p-0 pt-5">
                <h1 class="card-title text-secondary" id="nickname-profil-1" style="display: none;font-size: 30px;">{{$wedding->nicknameFemale}}</h1>
                <h2 class="card-subtitle fw-bold" id="fullname-profil-1" style="display: none;font-size: 20px"></h2>
                <div class="mb-5 mt-0 p-0" id="family-profil-1" style="display: none">
                    <p class="m-0 p-0" style="font-size:14px;font-weight:bold"></p>
                    <p class="m-0 p-0" style="font-size:18px"></p>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <a href="{{$wedding->instagramFemale}}" class="card-link text-secondary" style="font-size:14px">@blmada</a>
                </div>
            </div>
            
            <div class="box-container">
                <div class="box1 bg-secondary">
                    <h1 class="text-white py-2 text-center">The Groom</h1>
                </div>
                <div class="box3">
                    
                    <img id="foto-profil-2" class="card-img-top img-fluid" src="https://storage.googleapis.com/fastwork-static/6a19c479-994b-4572-8fb5-95bf378f71e6.jpg" alt="... " />
                            
                </div>
            </div>

            <div class="card-body m-0 p-0 pt-5 text-end">
                <h1 class="card-title text-secondary" id="nickname-profil-2" style="display: none;font-size: 30px;">{{$wedding->nicknameMale}}</h1>
                <h2 class="card-subtitle fw-bold" id="fullname-profil-2" style="display: none;font-size: 20px"></h2>
                <div class="mb-5 mt-0 p-0" id="family-profil-2" style="display: none">
                    <p class="m-0 p-0" style="font-size:14px;font-weight:bold"></p>
                    <p class="m-0 p-0" style="font-size:18px"></p>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <a href="{{$wedding->instagramMale}}" class="card-link text-secondary" style="font-size:14px">@blmada</a>
                </div>
            </div>
        </div>

        <div id="date_time" class="text-center bg-light">
            <img id="ring" style="display: none;" height="100" width="100" class="img-fluid mt-5" src="https://i.ibb.co/G5vtt4B/wedding-ring-weddings-events-luxurious-hotel-lindos-rhodes-1.png" alt="wedding ring">
            <h2 class="mb-4" id="waktu-tempat" style="display:none;font-size: 35px">Save The Date</h2>
            <div id="card-time" style="display:none">
                <div class="d-inline-flex" style="width: 5rem;background: none;">
                    <div class="m-0 p-0" style="display:none;" id="days-card">
                        <h5 id="days" class="card-title">00</h5>
                        <p class="card-title">HARI</p>
                    </div>
                </div>
                <div class="d-inline-flex" style="width: 5rem;background: none;">          
                    <div class="m-0 p-0" style="display:none;" id="hours-card">
                        <h5 id="hours" class="card-title">00</h5>
                        <p class="card-title">JAM</p>
                    </div>
                </div>
                <div class="d-inline-flex" style="width: 5rem;background: none;">
                    <div class="m-0 p-0" style="display:none;" id="minutes-card">
                        <h5 id="minutes" class="card-title">00</h5>
                        <p class="card-title">MENIT</p>
                    </div>
                </div>
                <div class="d-inline-flex" style="width: 5rem;background: none;">
                    <div class="m-0 p-0" style="display:none;" id="seconds-card">
                        <h5 id="seconds" class="card-title">00</h5>
                        <p class="card-title">DETIK</p>
                    </div>
                </div>
            </div>
            <div class="container pb-5" id="ayat-2" style="display: none;">
                <div class="mt-4" style="border-radius: 20px;background: none;">
                    <p style="font-size: 18px;" class="text-center">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang
                        demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."</p>
                    <h1 style="display: none;font-size: 20px;font-weight: bold" id="ayat-pasangan-1">- Q.S. Ar-Rum : 21 -</h1>
                </div>
            </div>
        </div>  
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Great+Vibes&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">


        <div id="akad-resepsi">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="lokasi" id="weddinglokasidetail1" style="display:none">
                            <div class="d-inline-flex mt-5" style="width: 100%;">
                                <div>
                                    <p class="card-title fw-bold" style="font-size: 40px">{{$wedding->solemnizationTitle}}</p>
                                    <div class="d-flex flex-row">
                                        <p style="font-size: 17px" class="m-0 p-0" id="day-wedding-1">-</p>
                                        <p style="font-size: 17px" class="m-0 p-0">,</p>
                                        <p style="font-size: 17px" class="m-0 p-0" id="date-wedding-2-1">- - -</p>
                                    </div>
                                    <p style="font-size: 17px" class="m-0 p-0">{{$wedding->solemnizationHourStart}} - Selesai WIB</p>
                                    <p style="font-size: 25px" class="m-0 p-0"> {{$wedding->solemnizationPlaceName}}</p>
                                    <p style="font-size: 17px" class="m-0 p-0"> {{$wedding->solemnizationPlaceAddress}}</p>
                                    <a href="{{$wedding->solemnizationGoogleAddress}}" type="button" class="btn btn-secondary">
                                        <i class='fa fa-map' style='font-size:18px'></i>
                                        Lihat Lokasi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="lokasi pb-5" id="weddinglokasidetail2" style="display:none">
                            <div class="d-inline-flex mt-2" style="width: 100%;">
                                <div>
                                    <p class="card-title fw-bold" style="font-size: 40px">Temu</p>
                                    <div class="d-flex flex-row">
                                        <p style="font-size: 17px" class="m-0 p-0" id="day-wedding-2">-</p>
                                        <p style="font-size: 17px" class="m-0 p-0">,</p>
                                        <p style="font-size: 17px" class="m-0 p-0" id="date-wedding-2-2">- - -</p>
                                    </div>
                                    <p style="font-size: 17px" class="m-0 p-0">{{$wedding->weddingHourStart}} - Selesai WIB</p>
                                    <p style="font-size: 25px" class="m-0 p-0"> {{$wedding->weddingPlaceName}}</p>
                                    <p style="font-size: 17px" class="m-0 p-0"> {{$wedding->weddingPlaceAddress}}</p>
                                    <a href="{{$wedding->weddingGoogleAddress}}" type="button" class="btn btn-secondary">
                                        <i class='fa fa-map' style='font-size:18px'></i>
                                        Lihat Lokasi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="justify-content-center text-center opacity-50">
                            <a href="https://calendar.google.com/calendar/u/0/r/eventedit
                            ?text=Akad+Nikah
                            &dates=2023MMDDTHHMMSS/2023MMDDTHHMMSS
                            &details=Akad+Nikah
                            &location=LocationName, LocationAddress
                            &ctz=Asia/Jakarta
                            &sprop=sprop
                            &sprop=name:" type="button" class="btn btn-secondary mb-5">
                                Simpan di Kalender
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="prewed" class="quote-1 p-3 text-center bg-light m-0">
            <div class="mb-5">
                <div class="">
                    <img id="bucket" class="img-fluid" height="100px" width="100px" style="display:none" src="https://www.freepnglogos.com/uploads/flower-bouquet-png/bouquet-ywllow-flowers-png-transparent-images-download-5.png" alt="" />
                </div>
                <h2 id="momen" class="fs-2 my-0 p-0" style="display:none;">
                    Momen
                </h2>
                <h1 id="bahagia-kami" class="my-0 p-0" style="display:none;font-size:45px;">
                    Bahagia Kami
                </h1>
                <p id="pernyataan-prewed" style="display:none;font-size: 18px;">
                    Kamu adalah sahabat dan kekasihku, dan<br/>aku tidak tahu sisi mana darimu yang paling<br/>aku kagumi. Aku menghargai setiap <br/>perjalanan yg telah kita lalui dan aku siap<br/>mengarungi cerita baru bersamamu
                </p>
                <div id="photo-prewed" class="container text-center pb-5" style="display:none">
                    <div class="row">
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp">
                                <img id="" style="" class="img-fluid" src="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/foto-prewedding_dWfgAnK.width-800.format-webp.webp" alt="... " />
                            </a>
                        </div>
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="https://image.popbela.com/content-images/post/20190116/3f6db873a189a2f928e4862f738b176d.jpg">
                                <img id="" style="" class="img-fluid" src="https://image.popbela.com/content-images/post/20190116/3f6db873a189a2f928e4862f738b176d.jpg" alt="... " />
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmHpQXYVMyVZ4_JcwugQnJpQafi0MOO8hP9-5usFbJDGB0-6M_mlhTRjffMAe16RbMPT8&usqp=CAU">
                                <img id="" style="" class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmHpQXYVMyVZ4_JcwugQnJpQafi0MOO8hP9-5usFbJDGB0-6M_mlhTRjffMAe16RbMPT8&usqp=CAU" alt="... " />
                            </a>
                        </div>
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="https://wp.onethreeonefour.com/wp-content/uploads/2017/05/bicycle-ever-after-studio-770x490.jpg">
                                <img id="" style="" class="img-fluid" src="https://wp.onethreeonefour.com/wp-content/uploads/2017/05/bicycle-ever-after-studio-770x490.jpg" alt="... " />
                            </a>
                        </div>
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="https://images.says.com/uploads/story_source/source_image/966786/4e4b.jpg">
                                <img id="" style="" class="img-fluid" src="https://images.says.com/uploads/story_source/source_image/966786/4e4b.jpg" alt="... " />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($wedding->congratulations == 1)
        <div class="m-0 p-0" id="ucapan-doa" style="display:none">
            <div class="container py-5">
                <div class="card bg-light opacity-75">
                    <div class="card-body">
                    
                        <div class="text-center">
                            <h2 id="ucapan-sesuatu" class="fs-2 my-0 p-0" style="">
                                Ucapan Sesuatu
                            </h2>
                            <h1 id="berikan-ucapan" class="my-2 p-0" style="font-size:30px;">
                                Berikan Ucapan & Do'a restu
                            </h1>
                            <p>{{$totalcomments}} Comments</p>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="row text-center d-flex justify-content-center my-3">
                                <div class="col text-center">
                                    <div class="opacity-100 bg-success text-light fw-bold rounded pt-2 m-0 p-0" style="width:5rem;height:5rem">
                                        <p class="m-0 p-0">{{$hadir}}</p>
                                        <p class="m-0 p-0">Hadir</p>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="opacity-100 bg-danger text-light fw-bold rounded pt-2 m-0 p-0" style="width:5rem;height:5rem">
                                        <p class="m-0 p-0">{{$tidakhadir}}</p>
                                        <p class="m-0 p-0">Tidak Hadir</p>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="opacity-100 bg-warning text-light fw-bold rounded pt-2 m-0 p-0" style="width:5rem;height:5rem">
                                        <p class="m-0 p-0">{{$raguhadir}}</p>
                                        <p class="m-0 p-0">Masih Ragu</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/confirmation-wedding" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" id="id-couple" name="id-couple" value="{{$wedding->id}}" hidden>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="guest-name" name="guest-name" placeholder="Nama">
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Tinggalkan ucapan disini" id="floatingTextarea" name="ucapan-wedding"></textarea>
                                    <label for="floatingTextarea">Ucapan</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="confirmation-attendance" id="confirmation-attendance">
                                    <option value="0" selected>Konfirmasi Kehadiran</option>
                                    <option value="1">Konfirmasi Tidak Hadir</option>
                                    <option value="2">Masih Ragu</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-secondary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        @if($wedding->bank != null)
        <div class="text-center m-0 p-0" id="gift">
            <h2 id="wedding-gift" style="display:none;font-size: 40px">Wedding Gift</h2>
            <img id="bear" style="display:none;" class="rounded-circle"  height="200" width="200" src="https://i.pinimg.com/564x/69/d6/68/69d668e95e99153af7bffe98334a658d.jpg" alt="Foto Beruang">
            <div class="container" >
                <p id="thanks-you" style="font-size:14px;display:none">Terimakasih atas doa dan restu dari anda semua. Untuk kado cashless maupun fisik bisa dikirimkan di bawah ini</p>
                <hr>
                <div class="row">
                    <div id="transfer-rekening" class="col-sm-6" style="display:none">
                        <h2 class="m-0 p-0" style="font-size: 30px">Transfer ke Rekening {{$wedding->bank}}</h2>
                        <p class="m-0 p-0 my-2"><img  height="100" width="200" src="https://www.gultomlawconsultants.com/wp-content/uploads/2014/08/Pengertian-Bank-dan-Jenis-Jenis-Usaha-Bank.jpg" alt="Bank logo"></p>
                        <p class="m-0 p-0" style="font-size:20px">a.n {{$wedding->accountName}}</p>
                        <p class="m-0 p-0" style="font-size:20px">{{$wedding->accountNumber}}</p>
                        <button type="button" class="btn btn-secondary mb-5" onclick="myFunction('{{$wedding->accountNumber}}')">Copy No. Rekening</button>
                    </div>
                    <div id="kirim-kado" class="col-sm-6" style="display:none">
                        <h2 class="m-0 p-0" style="font-size: 30px">Kirim Kado Fisik Ke Alamat</h2>
                        <p class="m-0 p-0 my-2"><img  height="100" width="100" src="https://png.pngtree.com/png-clipart/20221002/original/pngtree-3d-realistic-gift-box-with-red-color-and-gold-tape-png-image_8649915.png" alt="Kado logo"></p>
                        <p class="m-0 p-0" style="font-size:14px">{{$wedding->giftAddress}}</p>
                        <button type="button" class="btn btn-secondary mb-5" onclick="myFunction('{{$wedding->giftAddress}}')">Copy Alamat</button>
                    </div>
                </div>
            </div>
            <script>
                function myFunction(text) {
                
                // Copy the text inside the text field
                navigator.clipboard.writeText(text);
                
                // Alert the copied text
                alert("Copied the text: " + text);
                }
            </script>        
        </div>
        @endif

        <div class="m-0 p-0">
            <div class="text-center m-0 py-5" id="special-thanks">
                <h2 class="m-0 p-0" style="font-size: 20px;">Terimakasih</h2>
                <h1 style="font-size: 60px;">{{$wedding->nicknameFemale}} & {{$wedding->nicknameMale}}</h1>
                
            </div>
            <div class="text-center d-flex justify-content-center pt-3 m-0">
                <div class="d-flex m-0 p-0 row">
                    <div class="col-md-12 m-0 p-0">
                        <img height="50px" width="50px" class="img-fluid m-0 p-0" src="https://i.ibb.co/ChJ0gQ7/logo-akad-new.png"/>
                    </div>
                    <div class="col-md-12">
                        <i class="fa fa-whatsapp mx-2" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="d-flex m-0 p-0 translate-middle-x" style="height: 50px;">
                    <div class="vr m-0 p-0"></div>
                </div>
                <div class="d-flex row m-0 p-0">
                    <div class="col-md-12 m-0 p-0">
                        <img height="50px" width="50px" class="img-fluid m-0 p-0" src="https://i.ibb.co/BtpvZP7/akad-in-barcode.png"/>
                    </div>
                    <p class="col-md-12 m-0 p-0">@ 2023 akad.in</br>
                    All Rights Reserved</p>
                </div>
            </div>
        </div>

    </div>
    
    <script>

        // static file
        var flag = 0;
        const audio = $("#sound")[0];
        // call functions firstly
        // playAudioFirstly(0);
        
        function getMyWeddingDate(datetext) {
            let text = datetext;
            const myArray = text.split("-");
            var birthdateVal =myArray[1]+"/"+myArray[2]+"/"+myArray[0];
            console.log(birthdateVal);
            var mydate = new Date(birthdateVal);
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var indonesiadate = mydate.toLocaleDateString('id', options);
            var arrDate = indonesiadate.split(',');
            return [mydate, indonesiadate, arrDate];
        }


        // functions

        var x = setInterval(function() {
            var mydatestr = "Dec 12, 2022 00:00:00";
            // let text = {{$wedding->weddingDate}};
            
            const [solemnizationmydate, solemnizationindonesiadate, solemnizationarrDate]=getMyWeddingDate("{{$wedding->solemnizationDate}}");
            $("#day-wedding-1").text(solemnizationarrDate[0]);
            $("#date-wedding-2-1").text(solemnizationarrDate[1]);
            
            const [mydate, indonesiadate, arrDate]=getMyWeddingDate("{{$wedding->weddingDate}}");
            $("#day-wedding-2").text(arrDate[0]);
            $("#date-wedding-2-2").text(arrDate[1]);
            

            var countDownDate = mydate.getTime();
            var month=mydate.getMonth()+1;
            $("#date-wedding-1").text(mydate.getDate() + " . " + month + " . " + mydate.getFullYear());
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            if (days < 10) days = "0" + days;
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            if (hours < 10) hours = "0" + hours;
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            if (minutes < 10) minutes = "0" + minutes;
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            if (seconds < 10) seconds = "0" + seconds;
            $("#days").text(days);
            $("#hours").text(hours);
            $("#minutes").text(minutes);
            $("#seconds").text(seconds);

        }, 1000);

        function setMymargin() {
            const output = document.querySelector(".output");
            output.innerHTML = `scrollTop: ${window.scrollY} <br>
                                scrollLeft: ${window.scrollX} <br>
                                `;
        }

        function playAudio() {
            $("#disc").slideUp(2000).css("color", "red").slideDown(2000);
            audio.play();
        }

        function stopAudio() {
            $("#disc").slideUp(2000).css("color", "rgb(33, 37, 41)").slideDown(2000);
            audio.pause();
        }

        function checkMarginLeft() {
            var p = document.getElementById("disc");
            var style = p.currentStyle || window.getComputedStyle(p);
            return style;
        }

        function playAudioFirstly(position) {
            var discColor = $("#disc").css("color");
            var y = window.scrollY;
            if (flag==0 && y >= position && discColor == "rgb(33, 37, 41)") {
                flag = 1;
                $("#disc").slideUp(2000).css("color", "red").slideDown(2000);

                setTimeout(function() {
                    audio.play();
                }, 1000);
            }
        }

        // document ready,scroll,ets
        $(document).ready(function() {
            $("#disc").click(function() {
                var discColor = $("#disc").css("color");
                if (discColor == "rgb(33, 37, 41)") {
                    playAudio();
                } else {
                    stopAudio();
                }
            });
        });

        $(document).scroll(function() {

            setMymargin();
            var y = window.scrollY;
            if (y >= 22) {
                $("#ayat").fadeIn(100);
                $("#dove").fadeIn(2500);
                $("#tanda-1").slideDown(2500);
                $("#tanda-2").slideDown(1500);
                $("#tanda-3").slideDown(1000);
            }
            if (y >= 850) {
                $("#foto-profil-1").fadeIn(5000);
                $("#image-and").fadeIn(10000);
                $("#nickname-profil-1").show(2500);
                $("#nickname-profil-2").show(2500);
            }
            if (y >= 1200) {
                $("#hr-1,#hr-2").fadeIn(5000);
                $("#fullname-profil-1,#fullname-profil-2").animate({
                    marginLeft: '0px',
                }, {
                    duration: 1000,
                    start: function() {
                        $("#fullname-profil-1,#fullname-profil-2").fadeIn(1000);
                    }
                });
                $("#family-profil-1,#family-profil-2").slideDown(3000);
            }
            if (y >= 1500) {
                $("#foto-profil-2").fadeIn(10000);
            }
            if (y >= 1950) {
                $("#card-time").fadeIn(100);
                $("#ayat-2").fadeIn(100);
                $("#ring").show(500);
                $("#waktu-tempat").fadeIn(8000);
                $("#days-card,#hours-card,#minutes-card,#seconds-card").show(500);
                $("#ayat-pasangan-1").fadeIn(8000);

            }
            if(y >= 2000){
                $("#weddinglokasidetail1").fadeIn(7000);
                $("#weddinglokasidetail2").fadeIn(14000);
            }
            if(y >= 3000){
                $("#bucket").fadeIn(2500);
                $("#momen").slideDown(2500);
                $("#bahagia-kami").slideDown(1500);
                $("#pernyataan-prewed").slideDown(1000);
                $("#photo-prewed").slideDown(5000);
            }
            if(y >= 3500){
                $("#ucapan-doa").fadeIn(10000);
            }
            if (y >= 3600){
                 $("#wedding-gift").slideDown(1000);
                 $("#bear").fadeIn(20000);
                 $("#thanks-you").css({
                    display: 'block',
                    fontSize: '1px',
                    opacity: 0               // Mulai dari keadaan transparan
                }).animate({
                    fontSize: '14px',   // Akhiri dengan skala normal
                    opacity: 1               // Akhiri dengan keadaan penuh terlihat
                }, 10000);  // Durasi animasi dalam milidetik (20 detik)
            }
            if (y >= 4300){
                $("#transfer-rekening").fadeIn(20000);
                $("#kirim-kado").fadeIn(20000);
                $("#konfirmasi").fadeIn(20000);
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- https://our-wedding.link/preset%26design?preset_id=631be52580ef7a0a25250312#profile -->
</body>

</html>