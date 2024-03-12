<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="html template">
    <meta name="keyword" content="your keyword goes to here">
    <meta name="author" content="themexriver">
    <title>{{$wedding->nicknameMale}} & {{$wedding->nicknameFemale}} Wedding</title>
    <link href="{{ asset('theme/theme4/images/favicon.png')}}" rel="icon">
    <link href="{{ asset('theme/theme4/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('theme/theme4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('theme/theme4/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('theme/theme4/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{ asset('theme/theme4/css/nivo-lightbox.css')}}" rel="stylesheet">
    <link href="{{ asset('theme/theme4/css/nivo-default.css')}}" rel="stylesheet">
    <link href="{{ asset('theme/theme4/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('theme/theme4/css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
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
        .fixed-top {
            position: fixed;
            top: 400px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%; /* Atur lebar kartu sesuai kebutuhan */
            z-index: 1000; /* Atur z-index agar kartu selalu di atas elemen lain */
        }
    </style>
</head>

<body>
    <div class="site-loder">
        <div class="heart"></div>
    </div> <!-- end of site-loder -->

    <div id="card" class="card fixed-top">
        <audio id="sound" src="{{$wedding->music}}" style="display:none" preload="auto" controls></audio>
        <!-- <audio id="sound" src="thismoment.mp3" preload="auto" controls></audio> -->
        <img id="disc" src="https://i.pinimg.com/originals/76/33/63/763363a3be941b93610d58f8fb54e638.png" alt="" height="35" width="35" />
    </div>

    <div class="fixed-top">
        <div class="output"></div>
    </div>

    <header id="home">
        <nav class="navbar" id="nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/">{{$wedding->nicknameMale}}<i class="fa fa-heart"></i> {{$wedding->nicknameFemale}}</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#couple">Couple</a></li>
                        <li><a href="#story">Story</a></li>
                        <li><a href="#event">Events</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#people">People</a></li>
                        <li><a href="#gift">Gift</a></li>
                        <li><a href="#rsvp">RSVP</a></li>
                        <li><a href="#rsvp">RSVP</a></li>
                        <li><a href="#rsvp">RSVP</a></li>
                    </ul>
                </div>
            </div>
        </nav> <!-- end of nav -->

        <div class="title">
            <h1>{{$wedding->nicknameMale}} &amp; {{$wedding->nicknameFemale}}</h1>
            <p class="date" id="date-wedding-1">14.04.2016</p>
        </div>

        <div class="slider">
            <div class="slide-item slide-img-1"></div>
            <div class="slide-item slide-img-2"></div>
        </div> <!-- end of slider -->
    </header>  <!-- end of header -->

    <section class="count-down section-padding">
        <h2 class="hidden">Count Down</h2>
        <div class="container">
            <div class="row" id="clock-1">
                <div class="col col-xs-3 col-sm-3 time">
                    <div class='days_dash' data-vp-add-class="visible" data-vp-offset="0">
                        <div class="wrapper-digit">
                            <div class='digit' style="padding-left: 0px;
                            padding-right: 110px;
                            padding-top: 0;
                            padding-bottom: 0;" id="days"></div>
                            <p class='note dash_title'>Days</p>
                        </div>
                    </div>
                </div>

                <div class="col col-xs-3 col-sm-3 time">
                    <div class='hours_dash' data-vp-add-class="visible" data-vp-offset="0">
                        <div class="wrapper-digit">
                            <div class='digit' style="padding-left: 0px;
                            padding-right: 70px;
                            padding-top: 0;
                            padding-bottom: 0;" id="hours"></div>
                            <p class='note dash_title'>Hours</p>
                        </div>
                    </div>
                </div>

                <div class="col col-xs-3 col-sm-3 time">
                    <div class='minutes_dash' data-vp-add-class="visible" data-vp-offset="0">
                        <div class="wrapper-digit">
                            <div class='digit' style="padding-left: 0px;
                            padding-right: 110px;
                            padding-top: 0;
                            padding-bottom: 0;" id="minutes"></div>
                            <p class='note dash_title'>Minutes</p>
                        </div>
                    </div>
                </div>

                <div class="col col-xs-3 col-sm-3 time">
                    <div class='seconds_dash' data-vp-add-class="visible" data-vp-offset="0">
                        <div class="wrapper-digit">
                            <div class='digit' style="padding-left: 0px;
                            padding-right: 110px;
                            padding-top: 0;
                            padding-bottom: 0;" id="seconds"></div>
                            <p class='note dash_title'>Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of count-down -->

    <section class="announciation section-padding" id="couple">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="">
                        <img class="img-fluid" height="100px" width="100px" style="display:none" id="dove" src="https://png.pngtree.com/png-clipart/20220102/original/pngtree-pigeon-couple-png-image_6990814.png" alt="" />
                    </div>
                    <h2 id="tanda-1" class="fs-2 my-0 p-0" style="display:none;">
                        Pasangan Mempelai
                    </h2>
                    <p id="tanda-3" style="display:none;font-size: 12px;">
                        Maha Suci Allah Subhanahu wa Ta'ala yang<br/> telah menciptakan makhluk-Nya berpasang-pasangan.<br/> Ya Allah,perkenankanlah dan Ridhoilah Pernikahan<br/>Kami.
                    </p>
                </div>
            </div>

            <div class="row content">
                <div class="col col-sm-12 col-md-8 col-md-offset-2">
                    <div class="col col-sm-6 col-md-6 col-lg-5">
                        <div class="thumbnail">
                            <div class="frame">
                                <img src="{{ asset('theme/theme4/images/home/announcement/frame.png')}}" alt="Frame">
                                <img src="{{ asset('theme/theme4/images/home/announcement/hover-frame.png')}}" alt="Hover Frame" class="hover-frame">
                                <img src="{{$wedding->photoMale}}" alt="{{$wedding->photoMale}}">

                                <div class="social">
                                    <div>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3>{{$wedding->nicknameMale}}</h3>
                            <h4>The groom</h4>
                            <h2 class="card-subtitle fw-bold" id="fullname-profil-2" style=";font-size: 20px">{{$wedding->fullnameMale}}</h2>
                            <div class="mb-5 mt-0 p-0" id="family-profil-2" style="">
                                <p class="m-0 p-0" style="font-size:14px;font-weight:bold">Putra {{$wedding->childMale}} dari:</p>
                                <p class="m-0 p-0" style="font-size:18px">{{$wedding->fathernameMale}}<br>{{$wedding->mothernameMale}}</p>
                                @if($wedding->instagramMale != null)
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <a href="{{$wedding->instagramMale}}" class="card-link text-secondary" style="font-size:14px">@blmada</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-md-6 col-lg-5 col-lg-offset-2">
                        <div class="thumbnail">
                            <div class="frame">
                                <img src="{{ asset('theme/theme4/images/home/announcement/frame.png')}}" alt="Frame">
                                <img src="{{ asset('theme/theme4/images/home/announcement/hover-frame.png')}}" alt="Hover Frame" class="hover-frame">
                                <img src="{{$wedding->photoFemale}}" alt="{{$wedding->photoFemale}}">

                                <div class="social">
                                    <div>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3>{{$wedding->nicknameFemale}}</h3>
                            <h4>The bride</h4>
                            <h2 class="card-subtitle fw-bold" id="fullname-profil-1" style=";font-size: 20px">{{$wedding->fullnameFemale}}</h2>
                            <div class="mb-5 mt-0 p-0" id="family-profil-1" style="">
                                <p class="m-0 p-0" style="font-size:14px;font-weight:bold">Putri {{$wedding->childFemale}} dari:</p>
                                <p class="m-0 p-0" style="font-size:18px">{{$wedding->fathernameFemale}}<br>{{$wedding->mothernameFemale}}</p>
                                @if($wedding->instagramFemale != null)
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <a href="{{$wedding->instagramFemale}}" class="card-link text-secondary" style="font-size:14px">@blmada</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end of container -->
    </section> <!-- end of announciation -->

    <section class="happy-couple section-padding" data-parallax="scroll" data-image-src="images/home/happy-couple-bg.jpg">
        <div class="overlay"></div>
        <div class="container">
            <div class="col">
                <h2>Happy Couples Need Parallax Elements</h2>
                <div>
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-heart"></i>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of happy-couple -->

    <section class="love-story section-padding" id="story">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Our Love Story</h2>
                    <p>Di dalam buku cinta kita, setiap halaman adalah kisah yang kita tulis bersama. Dari bab pertama yang penuh keajaiban hingga akhir yang tak terduga, kita menemukan makna cinta sejati di setiap baris yang kita bagi.</p>
                </div>
            </div>

            <div class="row content">
                @if($wedding->ourstorydate1 != null)
                    <div class="row">
                        <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2">
                            <div class="col col-xs-8 col-sm-8">
                                <h3>{{$wedding->ourstorydate1}}</h3>
                                <h4>{{$wedding->ourstorytitle1}}</h4>
                                <p>{{$wedding->ourstorydescription1}}</p>
                            </div>
                            <div class="col col-xs-4 col-sm-4">
                                <div class="frame">
                                    <img src="{{ asset('theme/theme4/images/home/love-story/img-frame-right.png')}}" alt="Frame">
                                    <img src="https://png.pngtree.com/png-vector/20221113/ourmid/pngtree-black-dance-wedding-couple-silhouette-illustration-on-transparent-background-png-image_6443490.png" alt="Love picture">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($wedding->ourstorydate2 != null)
                <div class="row middle-row">
                    <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2 middle">
                        <div class="col col-xs-4 col-sm-4">
                            <div class="frame padding-left">
                                <img src="{{ asset('theme/theme4/images/home/love-story/img-frame-left.png')}}" alt="Frame">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv-ufpENy5wfq6PEk5RJK5WB8Q9HMqkctHCQqBVd8lgO7wSsCmjhruREgwZZ127TeeQOo&usqp=CAU" alt="Love picture">
                            </div>
                        </div>
                        <div class="col col-xs-8 col-sm-8">
                            <h3>{{$wedding->ourstorydate2}}</h3>
                            <h4>{{$wedding->ourstorytitle2}}</h4>
                            <p>{{$wedding->ourstorydescription2}}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if($wedding->ourstorydate3 != null)
                <div class="row">
                    <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2">
                        <div class="col col-xs-8 col-sm-8">
                            <h3>{{$wedding->ourstorydate3}}</h3>
                            <h4>{{$wedding->ourstorytitle3}}</h4>
                            <p>{{$wedding->ourstorydescription3}}</p>
                        </div>
                        <div class="col col-xs-4 col-sm-4">
                            <div class="frame">
                                <img src="{{ asset('theme/theme4/images/home/love-story/img-frame-right.png')}}" alt="Frame">
                                <img src="images/home/love-story/img-3.jpg" alt="Love picture">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div> <!-- end of content -->
        </div> <!-- end of container -->
    </section> <!-- end of love-story --> 

    <section class="event section-padding" id="event">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>The Wedding Events</h2>
                    <p>Pernikahan adalah perjalanan yang indah yang dimulai dari dua hati yang saling mencintai.</p>
                </div>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col col-md-5">
                        <img src="https://png.pngtree.com/png-clipart/20220206/ourlarge/pngtree-islamic-marriage-agreement-png-image_4380207.png" height="305px" width="305px" alt="Event Picture" class="">
                    </div>
                    <div class="col col-md-7">
                        <h3>{{$wedding->solemnizationTitle}}</h3>
                        <p><span><i class="fa fa-calendar"></i><span id="day-wedding-1">-</span>, &nbsp;<span id="date-wedding-2-1"></span>,</span> <span><i class="fa fa-clock-o"></i>
                        <span>{{$wedding->solemnizationHourStart}} - 
                            @if($wedding->solemnizationHourEnd != '23:59')
                            {{$wedding->solemnizationHourEnd}} 
                            WIB
                            @else
                            Selesai
                            @endif
                            ,</span>
                        ,</span> <span><i class="fa fa-map-marker"></i>{{$wedding->solemnizationPlaceName}}</span></p> 
                        <p>Akad nikah adalah janji abadi untuk saling mencintai, menghormati, dan mendukung satu sama lain sepanjang perjalanan hidup.</p>
                        <a href="{{$wedding->solemnizationGoogleAddress}}" type="button" class="btn btn-secondary">
                            <i class='fa fa-map' style='font-size:18px'></i>
                            Lihat Lokasi
                        </a>
                    </div>
                </div>

                <div class="row middle">
                    <div class="col col-md-5 hidden-lg hidden-md">
                        <img src="https://i.pinimg.com/736x/34/0e/ed/340eede7f2eb236b816bbd88931ebc70.jpg" height="305px" width="305px" alt="Event Picture" class="">
                    </div>
                    <div class="col col-md-7">
                        <h3>{{$wedding->weddingTitle}}</h3>
                        <p><span><i class="fa fa-calendar"></i><span id="day-wedding-2">-</span>, &nbsp;<span id="date-wedding-2-2"></span>,</span> <span><i class="fa fa-clock-o"></i>
                        <span>{{$wedding->weddingHourStart}} - 
                            @if($wedding->weddingHourEnd != '23:59')
                            {{$wedding->weddingHourEnd}} 
                            WIB
                            @else
                            Selesai
                            @endif
                            ,</span>
                        ,</span> <span><i class="fa fa-map-marker"></i>{{$wedding->weddingPlaceName}}</span></p> 
                        <p>Dalam suasana resepsi pernikahan, setiap detail menjadi semakin berarti, setiap senyuman menjadi semakin cerah, dan setiap lagu menjadi semakin indah.</p>
                        <a href="{{$wedding->weddingGoogleAddress}}" type="button" class="btn btn-secondary">
                            <i class='fa fa-map' style='font-size:18px'></i>
                            Lihat Lokasi
                        </a>
                    </div>
                    <div class="col col-md-5 hidden-sm hidden-xs">
                        <img src="https://i.pinimg.com/736x/34/0e/ed/340eede7f2eb236b816bbd88931ebc70.jpg" height="305" width="305" alt="Event Picture" class="">
                    </div>
                </div>

                @if($wedding->ngunduhGoogleAddress != null)
                <div class="row">
                    <div class="col col-md-5">
                        <img src="https://cdn.pnghd.pics/data/6/animasi-untuk-undangan-pernikahan-5.jpg" height="305" width="305" alt="Event Picture" class="">
                    </div>
                    <div class="col col-md-7">
                        <h3>{{$wedding->ngunduhTitle}}</h3>
                        <p><span><i class="fa fa-calendar"></i><span id="day-wedding-3">-</span>, &nbsp;<span id="date-wedding-2-3"></span>,</span> <span><i class="fa fa-clock-o"></i>
                        <span>{{$wedding->ngunduhHourStart}} - 
                            @if($wedding->ngunduhHourEnd != '23:59')
                            {{$wedding->ngunduhHourEnd}} 
                            WIB
                            @else
                            Selesai
                            @endif
                            ,</span>
                        ,</span> <span><i class="fa fa-map-marker"></i>{{$wedding->ngunduhPlaceName}}</span></p> 
                        <p>Menerima seorang menantu adalah menghadiahkan keluarga dengan tambahan cinta, keberagaman, dan kebahagiaan.</p>
                        <a href="{{$wedding->ngunduhGoogleAddress}}" type="button" class="btn btn-secondary">
                            <i class='fa fa-map' style='font-size:18px'></i>
                            Lihat Lokasi
                        </a>
                    </div>
                </div>
                @endif
            </div> <!-- end of content -->
        </div> <!-- end of container -->
    </section> <!-- end of event--> 

    <section class="gallery section-padding" id="gallery">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Photo Album</h2>
                    <p>Dalam setiap foto, terdapat kisah yang ingin diceritakan, emosi yang ingin diabadikan, dan kenangan yang tak terlupakan.</p>
                </div>
            </div>
        </div> <!-- end of container -->

        <div class="row content">
            <ul id="filter">
                <li><a href="#" class="active" data-group="all">All</a></li>
                <li><a href="#" data-group="engagement">Engagement</a></li>
                <li><a href="#" data-group="wedding">Wedding</a></li>
                <li><a href="#" data-group="honeymoon">Honeymoon</a></li>
            </ul>

            <div class="row" id="shuffle-wrapper">
                @if($wedding->fotoPrewedding == 1)
                    <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "engagement", "wedding"]'>
                        <a href="{{$wedding->foto1}}" data-lightbox-gallery="gallery1">
                            <div class="overlay"></div>
                            <img src="{{$wedding->foto1}}" alt="Gallery image" class="img img-responsive">
                        </a>
                    </div>
                    <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "engagement", "wedding"]'>
                        <a href="{{$wedding->foto2}}" data-lightbox-gallery="gallery1">
                            <div class="overlay"></div>
                            <img src="{{$wedding->foto2}}" alt="Gallery image" class="img img-responsive">
                        </a>
                    </div>
                    <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "engagement", "wedding"]'>
                        <a href="{{$wedding->foto3}}" data-lightbox-gallery="gallery1">
                            <div class="overlay"></div>
                            <img src="{{$wedding->foto3}}" alt="Gallery image" class="img img-responsive">
                        </a>
                    </div>
                    <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "engagement", "wedding"]'>
                        <a href="{{$wedding->foto4}}" data-lightbox-gallery="gallery1">
                            <div class="overlay"></div>
                            <img src="{{$wedding->foto4}}" alt="Gallery image" class="img img-responsive">
                        </a>
                    </div>
                @endif
            </div>
        </div> <!-- end of content -->
    </section> <!-- end of gallery--> 

    <section class="groomsmen-bridesmaids section-padding" id="people">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Pernikahan Kami</h2>
                    <p style="font-size: 18px;" class="text-center">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang
                        demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."</p>
                    <h1 style="display: none;font-size: 20px;font-weight: bold" id="ayat-pasangan-1">- Q.S. Ar-Rum : 21 -</h1>
                </div>
            </div>
        </div> <!-- end of container -->

        <div class="row content">
            <div class="container">
                <div class="col col-xs-6 col-sm-3">
                    <div class="frame">
                        <a href="#">
                            <img src="{{ asset('theme/theme3/images/home/groomsmen-bridesmaids/img-frame.png')}}" alt="Frame" class="img img-responsive hidden-xs">
                            <img src="{{ asset('theme/theme3/images/home/groomsmen-bridesmaids/img-frame-sm.png')}}" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                            <img src="{{$wedding->photoMale}}" width="255px" height="257px" alt="Image">
                        </a>
                        <div class="overlay">
                            <div><span>THE GROOM</span></div>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <div class="frame">
                        <a href="#">
                            <img src="{{ asset('theme/theme3/images/home/groomsmen-bridesmaids/img-frame.png')}}" alt="Frame" class="img img-responsive hidden-xs">
                            <img src="{{ asset('theme/theme3/images/home/groomsmen-bridesmaids/img-frame-sm.png')}}" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                            <img src="{{$wedding->photoFemale}}" width="255px" height="257px" alt="Image">
                        </a>
                        <div class="overlay">
                            <div><span>The Bridge</span></div>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <div class="frame">
                        <a href="#">
                            <img src="{{ asset('theme/theme3/images/home/groomsmen-bridesmaids/img-frame.png')}}" alt="Frame" class="img img-responsive hidden-xs">
                            <img src="{{ asset('theme/theme3/images/home/groomsmen-bridesmaids/img-frame-sm.png')}}" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                            <img src="{{$wedding->photoMale}}" width="255px" height="257px" alt="Image">
                        </a>
                        <div class="overlay">
                            <div><span>The Groom</span></div>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <div class="frame">
                        <a href="#">
                            <img src="{{ asset('theme/theme3/images/home/groomsmen-bridesmaids/img-frame.png')}}" alt="Frame" class="img img-responsive hidden-xs">
                            <img src="{{ asset('theme/theme3/images/home/groomsmen-bridesmaids/img-frame-sm.png')}}" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                            <img src="{{$wedding->photoFemale}}" width="255px" height="300px" alt="Image">
                        </a>
                        <div class="overlay">
                            <div><span>The Bridge</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of content -->
    </section> <!-- end of groomsmen-bridesmaids--> 

    {{-- <section class="journal section-padding">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>From Our Journal</h2>
                    <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
                </div>
            </div>

            <div class="row content">
                <div class="col col-sm-4">
                    <div class="frame">
                        <a href="#">
                            <img src="images/home/journal/frame.png" alt="Frame">
                            <img src="images/home/journal/img-1.jpg" alt="Journal">
                        </a>
                        <div class="overlay">
                            <div><span>Wedding Preparations</span></div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="frame">
                        <a href="#">
                            <img src="images/home/journal/frame.png" alt="Frame">
                            <img src="images/home/journal/img-2.jpg" alt="Journal">
                        </a>
                        <div class="overlay">
                            <div><span>Wedding Preparations</span></div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="frame">
                        <a href="#">
                            <img src="images/home/journal/frame.png" alt="Frame">
                            <img src="images/home/journal/img-3.jpg" alt="Journal">
                        </a>
                        <div class="overlay">
                            <div><span>Wedding Preparations</span></div>
                        </div>
                    </div>
                </div>
                
                <div class="link">
                    <a href="#" class="btn btn-default">Load More</a>
                    <a href="#" class="btn btn-default">See Journal</a>
                </div>
            </div> <!-- end of content -->
        </div> <!-- end of container -->
    </section> <!-- end of journal-->  --}}

    <section class="gift-registration section-padding" id="gift">
        <div class="overlay"></div>
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Wedding Gift</h2>
                    <p>Terimakasih atas doa dan restu dari anda semua. Untuk kado cashless maupun fisik bisa dikirimkan di bawah ini</p>
                </div>
            </div>

            <div class="container text-center">
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
        </div> <!-- end of container -->
    </section> <!-- end of gift-registration--> 

    <section class="rsvp section-padding" id="rsvp">
        <div class="overlay"></div>
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Ucapkan Sesuatu</h2>
                    <p>Berikan Ucapan dan Doa Restu.</p>
                    <div class="row text-center my-3" style="text-align: center;">
                        <div class="col-md-4  d-flex justify-content-center">
                            <div class="opacity-100 bg-success text-light fw-bold rounded pt-2 m-0 p-0" style="height:5rem">
                                <p class="m-0 p-0">{{$hadir}} Hadir</p>
                            </div>
                        </div>
                        <div class="col-md-4  d-flex justify-content-center">
                            <div class="opacity-100 bg-danger text-light fw-bold rounded pt-2 m-0 p-0" style="height:5rem">
                                <p class="m-0 p-0">{{$tidakhadir}} Tidak Hadir</p>
                            </div>
                        </div>
                        <div class="col-md-4  d-flex justify-content-center">
                            <div class="opacity-100 bg-warning text-light fw-bold rounded pt-2 m-0 p-0" style="height:5rem">
                                <p class="m-0 p-0">{{$raguhadir}} Masih Ragu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row content" style="margin-top:20px">
                <div class="from-wrapper col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <form enctype="multipart/form-data" class="form-inline" class="ps-checkout__form" action="/confirmation-wedding" method="post">
                        @csrf
                        <div class="form-group col col-sm-12">
                            <input type="text" class="form-control" id="id-couple" name="id-couple" value="{{$wedding->id}}" style="display: none">
                        </div>
                        <div class="form-group col col-sm-12">
                            <input type="text" class="form-control" id="guest" name="guest" value="{{$guest}}" style="display: none">
                        </div>
                        <div class="form-group col col-sm-12">
                            <label class="sr-only" for="name">Nama Anda</label>
                            <input type="text" class="form-control" id="guest-name" name="guest-name" placeholder="Nama Anda" required>
                        </div>
                        <div class="form-group col col-sm-12">
                            <select class="form-control" name="confirmation-attendance" id="confirmation-attendance">
                                <option value="0" selected>Konfirmasi Kehadiran</option>
                                <option value="1">Konfirmasi Tidak Hadir</option>
                                <option value="2">Masih Ragu</option>
                            </select>
                        </div>
                        <div class="form-group col col-sm-12">
                            <textarea placeholder="Tinggalkan ucapan disini" id="floatingTextarea" name="ucapan-wedding" required></textarea>
                        </div>
                        <div class="form-group submit col-sm-12">
                            <input class="btn btn-default" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div> <!-- end of content -->
        </div> <!-- end of container -->
    </section> <!-- end of rsvp --> 

    <footer>
        <div class="row">
            <h2>{{$wedding->nicknameMale}} &amp; {{$wedding->nicknameFemale}}</h2>
            <span id="date-wedding-2-last" class="date">24 April 2016 </span>
        </div>

        <div class="row">
            <div class="container">
                <div class="col col-sm-6">
                    <p>Copyright &copy; 2023 Akad.in. All Rights Reserved</p>
                </div>
                <div class="col col-sm-6">
                    <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=6281358746018&text=Saya%20mau%20pesan%20undangannya%20kak"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/akaddotin"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> <!-- end of footer -->
    <!-- cdn jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('theme/theme4/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/classie.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/nivo-lightbox.min.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/jquery.lwtCountdown-1.0.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/parallax.min.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/index-script.js') }}"></script>
    <script src="{{ asset('theme/theme4/js/common-script.js') }}"></script>

    <script>
        // change background url in header .slider .slide-img-1
        var url1 = "{{$wedding->foto1}}";
        $(".slider .slide-img-1").css("background-image", "url(" + url1 + ")");
        var url2 = "{{$wedding->foto2}}";
        $(".slider .slide-img-2").css("background-image", "url(" + url2 + ")");

        // static file
        var flag = 0;
        const audio = $("#sound")[0];
        audio.play();
        // call functions firstly
        playAudioFirstly(0);
        
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
            $("#date-wedding-2-last").text(arrDate[1]);

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

        function playAudio(){
            var mydisc= document.getElementById("disc");
            mydisc.style.marginLeft = "7px";
            mydisc.style.transform = "rotate(360deg)";
            audio.play();
        }

        function stopAudio() {
            var mydisc= document.getElementById("disc");
            mydisc.style.marginLeft = "60px";
            mydisc.style.transform = "rotate(0deg)";
            audio.pause();
        }

        function checkMarginLeft() {
            var p = document.getElementById("disc");
            var style = p.currentStyle || window.getComputedStyle(p);
            return style;
        }

        function playAudioFirstly(position) {
            var discplay = document.getElementById("disc");
            var style = checkMarginLeft();
            var y = window.scrollY;
            if (flag==0 && y >= position && style.marginLeft.toString() == "60px") {
                discplay.style.marginLeft = "7px";
                discplay.style.transform = "rotate(360deg)";
                flag = 1;
                audio.play();
            }
        }

        // document ready,scroll,ets
        var discplay = document.getElementById("disc");
        discplay.addEventListener("click", function() {
            var style = checkMarginLeft();
            if (style.marginLeft.toString() == "60px") {
                playAudio();
            } else {
                stopAudio();
            }
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
            if(y >= 2500){
                $("#weddinglokasidetail1").fadeIn(7000);
                $("#weddinglokasidetail2").fadeIn(14000);
                $("#weddinglokasidetail3").fadeIn(21000);
                $("#save-the-date").fadeIn(28000);
            }
            if(y >= 2800){
                $("#bucket").fadeIn(2500);
                $("#momen").slideDown(2500);
                $("#bahagia-kami").slideDown(1500);
                $("#pernyataan-prewed").slideDown(1000);
                $("#photo-prewed").slideDown(5000);
            }
            if(y >= 3600){
                $("#ucapan-doa").fadeIn(10000);
            }
            if (y >= 4200){
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

</body>
</html>
