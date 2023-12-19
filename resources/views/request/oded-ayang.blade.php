<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{$wedding->nicknameMale}} & {{$wedding->nicknameFemale}} Wedding</title>
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
        
        #disc {
            margin-left: 60px;
            margin-right: 20px;
            margin-top: 8px;
            margin-bottom: 20px;
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
            background: url("https://img.freepik.com/premium-photo/concept-wedding-accessories-with-wedding-rings-white-wooden-background_185193-69932.jpg?w=2000") no-repeat center center;
            background-size: cover;
            height: 665px;
        }

        /* 3 */
        #date_time {
            background-image: url("https://png.pngtree.com/background/20210715/original/pngtree-white-clean-floral-background-picture-image_1278785.jpg");
            background-size: cover;
            /* height: 1300px; */
        }

        /* 5 */
        #prewed{
            background: url("https://th.bing.com/th/id/OIP.Hphy6i0lumv_MxdE0loKhAHaD4?pid=ImgDet&amp;w=474&amp;h=248&amp;rs=1") no-repeat center center;
            background-size: cover;
            /* height: 1300px; */
        }

        /* 6 */
        #ucapan-doa{
            background: url("https://cdn.pixabay.com/photo/2016/03/29/15/28/flower-1288493_960_720.jpg") no-repeat center center;
            background-size: cover;
            /* height: 1300px; */
        }

        /* 7 */
        #gift{
            background: url("https://1.bp.blogspot.com/-VjXRQlM-FPA/XuDsvuN9GgI/AAAAAAAAF_4/qRQhfndGWFApxPa9DIWcgxn4ghk1rWiSwCLcBGAsYHQ/s1920/cat-air-biru.jpg") no-repeat center center;
            background-size: cover;
            /* height: 1300px; */
        }

        /* 8 */
        #special-thanks{
            background: url("https://e0.pxfuel.com/wallpapers/557/641/desktop-wallpaper-white-flower-white-floral.jpg") no-repeat center center;
            background-size: cover;
            /* height: 1300px; */
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

    <div id="card" class="card fixed-top">
        <audio id="sound" src="{{$wedding->music}}" preload="auto" controls></audio>
        <!-- <audio id="sound" src="thismoment.mp3" preload="auto" controls></audio> -->
        <img id="disc" src="https://i.pinimg.com/originals/76/33/63/763363a3be941b93610d58f8fb54e638.png" alt="" height="35" width="35" />
    </div>

    <div class="fixed-top">
        <div class="output"></div>
    </div>

    <div class="fixed-top">
        <div class="text-center">
            <div class="" id="welcomeMessage" style="height:665px;background-color: rgba(255, 255, 255, 0.8);padding-top: 200px;">
                <h1 style="font-size:60px">
                    {{$wedding->nicknameMale}} & {{$wedding->nicknameFemale}}
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
    

    <div class="top p-5 text-center m-0">
        <h2 class="" style="margin-top: 200px;display:none" id="title-pernikahan">
            PERNIKAHAN
        </h2>
        <h1 style="font-size:60px;display:none" id="loversname">
            {{$wedding->nicknameMale}} & {{$wedding->nicknameFemale}}
        </h1>
        <h2 style="font-size:30px;display:none" id="date-wedding-1"></h2>
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

        <div id="ayat" class="quote-1 p-3 text-center bg-light m-0" style="display:none;">
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
        
            <div class="mx-3" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-4  m-0 p-0">
                        <div class="card text-center shadow-lg bg-body-tertiary rounded">
                            <a data-fancybox="gallery" href="{{$wedding->photoMale}}">
                            <img id="foto-profil-1" style="display: none;" class="card-img-top img-fluid p-3 pb-5" src="{{$wedding->photoMale}}" alt="..." />
                            </a>    
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-body text-center m-0 p-0">
                            <h1 class="card-title text-secondary" id="nickname-profil-1" style="display: none;font-size: 40px;">{{$wedding->nicknameMale}}</h1>
                            <h2 class="card-subtitle fw-bold" id="fullname-profil-1" style="display: none;font-size: 30px">{{$wedding->fullnameMale}}</h2>
                            <div class="position-relative mb-3">
                                <hr style="display:none" id="hr-1" class="border border-secondary border-2 opacity-50 position-absolute top-0 start-50 translate-middle-x" width="50%">
                            </div>
                            <div class="mb-5 mt-0 p-0" id="family-profil-1" style="display: none">
                                <p class="m-0 p-0" style="font-size:14px;font-weight:bold">Putra {{$wedding->childMale}}</p>
                                <p class="m-0 p-0" style="font-size:18px">{{$wedding->fathernameMale}}<br> & <br>{{$wedding->mothernameMale}}</p>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-md-4">-->

                    <!--</div>-->
                </div>

                <img id="image-and" style="display: none;" height="50px" width="50px" class="img-fluid m-0 p-0" src="https://www.seekpng.com/png/detail/161-1618947_ampersand-png-png-royalty-free-library.png" class="text-center"/>
                
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body text-center">
                            <h1 class="card-title text-secondary" id="nickname-profil-2" style="display: none;font-size: 40px">{{$wedding->nicknameFemale}}</h1>
                            <h2 class="card-subtitle fw-bold" id="fullname-profil-2" style="display: none;font-size: 30px">{{$wedding->fullnameFemale}}</h2>
                            <div class="position-relative mb-3">
                                <hr style="display:none" id="hr-2" class="border border-secondary border-2 opacity-50 position-absolute top-0 start-50 translate-middle-x" width="50%">
                            </div>
                            <div class="mb-5 mt-0 p-0" id="family-profil-2" style="display:none">
                                <p class="m-0 p-0" style="font-size:14px;font-weight:bold">Putri {{$wedding->childFemale}}</p>
                                <p class="m-0 p-0" style="font-size:18px">{{$wedding->fathernameFemale}}<br> & <br>{{$wedding->mothernameFemale}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mt-5 shadow-lg bg-body-tertiary rounded">
                            <a data-fancybox="gallery" href="{{$wedding->photoFemale}}">
                                <img id="foto-profil-2" style="display: none" class="card-img-top img-fluid p-3 pb-5" src="{{$wedding->photoFemale}}" alt="... " />
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div id="date_time" class="text-center bg-light">
            <img id="ring" style="display: none;" height="100" width="100" class="img-fluid mt-5" src="https://i.ibb.co/G5vtt4B/wedding-ring-weddings-events-luxurious-hotel-lindos-rhodes-1.png" alt="wedding ring">
            <h2 class="mb-4" id="waktu-tempat" style="display:none;font-size: 35px">Waktu & Tempat</h2>
            <div id="card-time" style="display:none">
                <div class="card d-inline-flex" style="width: 5rem;background: linear-gradient(to bottom, #E6F7FF, white);">
                    <div class="card-body">
                        <div class="m-0 p-0" style="display:none;" id="days-card">
                            <h5 id="days" class="card-title">00</h5>
                            <p class="card-title">Hari</p>
                        </div>
                    </div>
                </div>
                <div class="card d-inline-flex" style="width: 5rem;background: linear-gradient(to bottom, #E6F7FF, white);">
                    <div class="card-body">
                        <div class="m-0 p-0" style="display:none;" id="hours-card">
                            <h5 id="hours" class="card-title">00</h5>
                            <p class="card-title">Jam</p>
                        </div>
                    </div>
                </div>
                <div class="card d-inline-flex" style="width: 5rem;background: linear-gradient(to bottom, #E6F7FF, white);">
                    <div class="card-body">
                        <div class="m-0 p-0" style="display:none;" id="minutes-card">
                            <h5 id="minutes" class="card-title">00</h5>
                            <p class="card-title">Menit</p>
                        </div>
                    </div>
                </div>
                <div class="card d-inline-flex" style="width: 5rem;background: linear-gradient(to bottom, #E6F7FF, white);">
                    <div class="card-body">
                        <div class="m-0 p-0" style="display:none;" id="seconds-card">
                            <h5 id="seconds" class="card-title">00</h5>
                            <p class="card-title">Detik</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-5" id="ayat-2" style="display: none;">
                <div class="card-body mt-4 card bg-white" style="border-radius: 20px;background: linear-gradient(to bottom, #E6F7FF, white);">
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


        <div id="akad-resepsi" class="bg-light">
            <div class="container text-center"> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="lokasi pb-5" id="weddinglokasidetail1" style="display:none">
                            <div class="card d-inline-flex mt-5" style="width: 100%;background: linear-gradient(to bottom, #FAF9F6, white);">
                                <div class="card-body shadow-lg p-3 bg-body-tertiary rounded">
                                <h1 class="card-title fw-bold" style="font-size: 40px">Akad</h1>
                                <hr>
                                <div>
                                    <p style="font-size: 17px" class="m-0 p-0" id="day-wedding-1">-</p>
                                    <h2 style="font-size: 25px" class="m-0 p-0" id="date-wedding-2-1">- - -</h2>
                                    <p style="font-size: 17px" class="m-0 p-0">{{$wedding->solemnizationHourStart}} - 
                                    @if($wedding->solemnizationHourEnd != '23:59')
                                    {{$wedding->solemnizationHourEnd}} 
                                    @else
                                    Selesai
                                    @endif
                                    WIB</p>
                                    <h2 style="font-size: 25px" class="m-0 p-0"> {{$wedding->solemnizationPlaceName}}</h2>
                                    <p style="font-size: 17px" class="m-0 p-0"> {{$wedding->solemnizationPlaceAddress}}</p>
                                </div>
                                <a href="{{$wedding->solemnizationGoogleAddress}}" type="button" class="btn btn-secondary my-5">
                                    <i class='fa fa-map' style='font-size:18px'></i>
                                    Lihat Lokasi
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="lokasi pb-5 text-center" id="weddinglokasidetail2" style="display:none">
                            <div class="card d-inline-flex mt-5" style="width: 100%;display: none;background: linear-gradient(to bottom, #FAF9F6, white);">
                            <div class="card-body shadow-lg p-3 bg-body-tertiary rounded">
                                <h1 class="card-title fw-bold" style="font-size: 40px">{{$wedding->weddingTitle}}</h1>
                                <hr>
                                <div>
                                    <p style="font-size: 17px" class="m-0 p-0" id="day-wedding-2">-</p>
                                    <h2 style="font-size: 25px" class="m-0 p-0" id="date-wedding-2-2">- - -</h2>
                                    <p style="font-size: 17px" class="m-0 p-0">{{$wedding->weddingHourStart}} - 
                                    @if($wedding->weddingHourEnd != '23:59')
                                    {{$wedding->weddingHourEnd}} 
                                    @else
                                    Selesai
                                    @endif
                                    WIB</p>
                                    <h2 style="font-size: 25px" class="m-0 p-0">{{$wedding->weddingPlaceName}}</p>
                                    <p style="font-size: 17px" class="m-0 p-0">{{$wedding->weddingPlaceAddress}}</p>
                                </div>
                                <a href="{{$wedding->weddingGoogleAddress}}" type="button" class="btn btn-secondary my-5">
                                    <i class='fa fa-map' style='font-size:18px'></i>
                                    Lihat Lokasi
                                </a>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    @if($wedding->ngunduhGoogleAddress != null)
                    <div class="col-md-6">
                        <div class="lokasi pb-5 text-center" id="weddinglokasidetail3" style="display:none">
                            <div class="card d-inline-flex mt-5" style="width: 100%;display: none;background: linear-gradient(to bottom, #FAF9F6, white);">
                            <div class="card-body shadow-lg p-3 bg-body-tertiary rounded">
                                <h1 class="card-title fw-bold" style="font-size: 40px">{{$wedding->ngunduhTitle}}</h1>
                                <hr>
                                <div>
                                    <p style="font-size: 17px" class="m-0 p-0" id="day-wedding-3">-</p>
                                    <h2 style="font-size: 25px" class="m-0 p-0" id="date-wedding-2-3">- - -</h2>
                                    <p style="font-size: 17px" class="m-0 p-0">{{$wedding->ngunduhHourStart}} - 
                                    @if($wedding->ngunduhHourEnd != '23:59')
                                    {{$wedding->ngunduhHourEnd}} 
                                    @else
                                    Selesai
                                    @endif
                                    WIB</p>
                                    <h2 style="font-size: 25px" class="m-0 p-0">{{$wedding->ngunduhPlaceName}}</p>
                                    <p style="font-size: 17px" class="m-0 p-0">{{$wedding->ngunduhPlaceAddress}}</p>
                                </div>
                                <a href="{{$wedding->ngunduhGoogleAddress}}" type="button" class="btn btn-secondary my-5">
                                    <i class='fa fa-map' style='font-size:18px'></i>
                                    Lihat Lokasi
                                </a>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    @endif
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
                @if($wedding->fotoPrewedding == 1)
                <div id="photo-prewed" class="container text-center pb-5" style="display:none">
                    <div class="row">
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="{{$wedding->foto1}}">
                                <img id="" style="" class="img-fluid" src="{{$wedding->foto1}}" alt="... " />
                            </a>
                        </div>
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="{{$wedding->foto2}}">
                                <img id="" style="" class="img-fluid" src="{{$wedding->foto2}}" alt="... " />
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="{{$wedding->foto3}}">
                                <img id="" style="" class="img-fluid" src="{{$wedding->foto3}}" alt="... " />
                            </a>
                        </div>
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="{{$wedding->foto4}}">
                                <img id="" style="" class="img-fluid" src="{{$wedding->foto4}}" alt="... " />
                            </a>
                        </div>
                        <div class="col m-0 p-1">
                            <a data-fancybox="gallery" href="{{$wedding->foto5}}">
                                <img id="" style="" class="img-fluid" src="{{$wedding->foto5}}" alt="... " />
                            </a>
                        </div>
                    </div>
                </div>
                @endif
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
                                <input type="text" class="form-control" id="guest" name="guest" value="{{$guest}}" hidden>
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
            <div class="text-center bg-light m-0 py-5" id="special-thanks">
                <h2 class="m-0 p-0" style="font-size: 20px;">Terimakasih</h2>
                <h1 style="font-size: 60px;">{{$wedding->nicknameMale}} & {{$wedding->nicknameFemale}}</h1>
                <h2 style="font-size: 20px;">Keluarga Besar</h2>
                <p style="font-size: 15px;">Kel. Bpk Odih Nardi (Wa Odih) & Ibu Herawati (Bunda)</p>
                <p style="font-size: 15px;">{{$wedding->fathernameMale}}  &  {{$wedding->mothernameMale}}</p>
                <p class="m-0 p-0" style="font-size: 15px;">{{$wedding->fathernameFemale}}  &  {{$wedding->mothernameFemale}}</p> 
            </div>
            <div class="text-center d-flex justify-content-center pt-3 m-0 bg-light">
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
            
            const [ngunduhmydate, ngunduhindonesiadate, ngunduharrDate]=getMyWeddingDate("{{$wedding->ngunduhDate}}");
            $("#day-wedding-3").text(ngunduharrDate[0]);
            $("#date-wedding-2-3").text(ngunduharrDate[1]);

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
            $("#disc").animate({
                    "margin-left": "7px",
                    transform: "rotate(360deg)",
                },
                "slow"
            );
            audio.play();
        }

        function stopAudio() {
            $("#disc").animate({
                    "margin-left": "60px",
                    transform: "rotate(360deg)",
                },
                "slow"
            );
            audio.pause();
        }

        function checkMarginLeft() {
            var p = document.getElementById("disc");
            var style = p.currentStyle || window.getComputedStyle(p);
            return style;
        }

        function playAudioFirstly(position) {
            var style = checkMarginLeft();
            var y = window.scrollY;
            if (flag==0 && y >= position && style.marginLeft.toString() == "60px") {
                flag = 1;
                $("#disc").animate({
                        "margin-left": "7px",
                        transform: "rotate(360deg)",
                    },
                    "slow"
                );

                setTimeout(function() {
                    audio.play();
                }, 1000);
            }
        }

        // document ready,scroll,ets
        $(document).ready(function() {
            $("#disc").click(function() {
                var style = checkMarginLeft();
                if (style.marginLeft.toString() == "60px") {
                    playAudio();
                } else {
                    stopAudio();
                }
            });
        });

        $(document).scroll(function() {

            // setMymargin();
            var y = window.scrollY;
            if (y >= 22) {
                $("#ayat").fadeIn(100);
                $("#dove").fadeIn(2500);
                $("#tanda-1").slideDown(2500);
                $("#tanda-2").slideDown(1500);
                $("#tanda-3").slideDown(1000);
            }
            if (y >= 400) {
                $("#foto-profil-1").fadeIn(5000);
                $("#image-and").fadeIn(10000);
                $("#nickname-profil-1").animate({
                    marginTop: '125px'
                }, {
                    duration: 2500,
                    start: function() {
                        $(this).css('display', 'block');
                    }
                });
                $("#nickname-profil-2").animate({
                    marginTop: '40px'
                }, {
                    duration: 5200,
                    start: function() {
                        $(this).css('display', 'block');
                    }
                });
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
            if (y >= 1700) {
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
            if(y >= 2700){
                $("#weddinglokasidetail1").fadeIn(7000);
                $("#weddinglokasidetail2").fadeIn(14000);
                $("#weddinglokasidetail3").fadeIn(21000);
            }
            if(y >= 3400){
                $("#bucket").fadeIn(2500);
                $("#momen").slideDown(2500);
                $("#bahagia-kami").slideDown(1500);
                $("#pernyataan-prewed").slideDown(1000);
                $("#photo-prewed").slideDown(5000);
            }
            if(y >= 4100){
                $("#ucapan-doa").fadeIn(10000);
            }
            if (y >= 4500){
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
            if (y >= 4600){
                $("#transfer-rekening").fadeIn(20000);
            }
            if (y >= 4600){
                $("#kirim-kado").fadeIn(20000);
                $("#konfirmasi").fadeIn(20000);
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>