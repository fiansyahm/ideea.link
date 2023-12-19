<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FIRA & ADI Wedding</title>
    <!-- cdn jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/004/328/835/original/muslim-wedding-in-white-dress-illustration-free-vector.jpg" />

    <style>
        .top {
            background-image: url("https://img.freepik.com/premium-photo/concept-wedding-accessories-with-wedding-rings-white-wooden-background_185193-69932.jpg?w=2000");
            background-size: cover;
            height: 600px;
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
            margin-left: 110px;
            margin-right: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        #card {
            margin-top: 40px;
            margin-left: 25px;
            height: 100px;
            width: 100px;
            opacity: 0.5;
        }
        
        #date_time {
            background-image: url("https://photoshop-kopona.com/uploads/posts/2020-06/1591261933_romantic-wedding-backgrounds-1.jpg");
            background-size: cover;
            /* height: 1300px; */
        }
    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Euphoria+Script&family=Marck+Script&family=Princess+Sofia&family=Rouge+Script&family=Square+Peg&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- https://unityinvitation.com/fandy-nabiila/?to=Reni -->

    <div class="top p-5 text-center m-0">
        <h1 class="" style="margin-top: 200px; font-family: 'Euphoria Script', cursive">
            PERNIKAHAN
        </h1>
        <h3 style="display: none; font-family: 'Marck Script', cursive" id="loversname">
            FIRA & ADI
        </h3>
        <h2 id="date-wedding-1"></h2>
    </div>

    <div id="ayat" class="quote-1 p-3 text-center bg-light m-0">
        <img class="img-fluid" style="display: none" id="dove" src="https://pngimage.net/wp-content/uploads/2018/06/%D0%B3%D0%BE%D0%BB%D1%83%D0%B1%D0%BA%D0%B8-png-1.png" alt="" />
        <p id="tanda-1" class="fs-3" style="font-family: 'Rouge Script', cursive; display: none">
            Bridge
        </p>
        <p id="tanda-2" class="fs-1" style="font-family: 'Rouge Script', cursive; display: none">
            Couple
        </p>
        <p id="tanda-3" style="display: none">
            "Maha Suci Allah Subhanahu wa Ta'ala yang telah<br />menciptakan makhluk-Nya berpasang-pasangan. Ya Allah,<br /> perkenankanlah dan Ridhoilah Pernikahan Kami."
        </p>

        <div class="mx-3 p-1" style="margin-top: 200px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mt-5 text-center" style="width: 18rem">
                        <img id="foto-profil-1" style="display: none" class="text-center card-img-top img-fluid p-3 pb-5" src="https://i.ibb.co/Z6QySdq/foto-perempuan.jpg" alt="..." />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mt-5" style="length: 25rem;">
                        <div class="card-body">
                            <h1 class="card-title" id="nickname-profil-1" style="margin-top: 1000px;font-family: 'Square Peg', cursive;font-size: 75px;">Fira</h1>
                            <h2 class="card-subtitle mb-2 text-muted" id="fullname-profil-1" style="margin-left: 100px;font-family: 'Princess Sofia', cursive; ">Fira Permata, S.Pd</h2>
                            <div id="family-profil-1" style="display: none">
                                <h6>Putra Ketiga</h6>
                                <p>Bapak Darso Permono<br> & <br>Ibu Rukmini Handayani</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">

                </div>
            </div>

            <p class="" style="font-family: 'Square Peg', cursive;font-size: 75px;">&</p>
            <div class="row">
                <div class="col-md-4 ">

                </div>
                <div class="col-md-4">
                    <div class="mt-5" style="length: 25rem;">
                        <div class="card-body">
                            <h1 class="card-title" id="nickname-profil-2" style="margin-top: 1000px;font-family: 'Square Peg', cursive;font-size: 75px;">Adi</h1>
                            <h2 class="card-subtitle mb-2 text-muted" id="fullname-profil-2" style="margin-right: 100px;font-family: 'Princess Sofia', cursive; ">Adi Firmansyah, SH</h2>
                            <div id="family-profil-2" style="display: none">
                                <h6>Putra Pertama</h6>
                                <p>Bapak Dwi Darmono<br> & <br>Ibu Ningsih Rukmini</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-5 text-center" style="width: 18rem ">
                        <img id="foto-profil-2" style="display: none" class="card-img-top img-fluid p-3 pb-5 " src="https://i.ibb.co/NS92FLH/foto-laki2.jpg" alt="... " />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="card" class="card fixed-top">
        <audio id="sound" src="https://github.com/fiansyahm/JQuery/blob/main/thismoment.mp3?raw=true" preload="auto" controls></audio>
        <!-- <audio id="sound" src="thismoment.mp3" preload="auto" controls></audio> -->
        <img id="disc" src="https://i.pinimg.com/originals/76/33/63/763363a3be941b93610d58f8fb54e638.png" alt="" height="70" width="70" />
    </div>

    <div class="fixed-top">
        <div class="output"></div>
    </div>

    <div id="date_time" class="text-center bg-primary">
        <img id="ring" style="display: none;" height="200" width="200" class="img-fluid mt-5" src="https://www.freepnglogos.com/uploads/wedding-ring-png/wedding-ring-weddings-events-luxurious-hotel-lindos-rhodes-1.png" alt="wedding ring">
        <h1 id="waktu-tempat" style="display:none; font-family: 'Square Peg', cursive;font-size: 65px;">Waktu & Tempat</h1>

        <div id="days-card" class="card d-inline-flex" style="width: 9rem;">
            <div class="card-body">
                <h5 id="days" class="card-title">00</h5>
                <p class="card-title">Hari</p>
            </div>
        </div>
        <div id="hours-card" class="card d-inline-flex" style="width: 9rem;">
            <div class="card-body">
                <h5 id="hours" class="card-title">00</h5>
                <p class="card-title">Jam</p>
            </div>
        </div>
        <div id="minutes-card" class="card d-inline-flex" style="width: 9rem;">
            <div class="card-body">
                <h5 id="minutes" class="card-title">00</h5>
                <p class="card-title">Menit</p>
            </div>
        </div>
        <div id="seconds-card" class="card d-inline-flex" style="width: 9rem;">
            <div class="card-body">
                <h5 id="seconds" class="card-title">00</h5>
                <p class="card-title">Detik</p>
            </div>
        </div>

        <div class="container">
            <div class="card-body">
                <p style="display: none;font-family: 'Dancing Script', cursive;font-size: 20px;font-weight: bold" id="ayat-pasangan-1" class="text-center">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang
                    demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."</p>
                <p style="display: none;font-family: 'Dancing Script', cursive;font-size: 20px;font-weight: bold" id="ayat-pasangan-2">- Q.S. Ar-Rum : 21 -</p>
            </div>

            <div class="card d-inline-flex mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Akad</h5>
                    <hr>
                    <p id="day-wedding-1">-</p>
                    <p id="date-wedding-2-1">- - -</p>
                    <p>16.00 - 17.00 WIB</p>
                    <svg height="25" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M302.8 312C334.9 271.9 408 174.6 408 120C408 53.7 354.3 0 288 0S168 53.7 168 120c0 54.6 73.1 151.9 105.2 192c7.7 9.6 22 9.6 29.6 0zM416 503l144.9-58c9.1-3.6 15.1-12.5 15.1-22.3V152c0-17-17.1-28.6-32.9-22.3l-116 46.4c-.5 1.2-1 2.5-1.5 3.7c-2.9 6.8-6.1 13.7-9.6 20.6V503zM15.1 187.3C6 191 0 199.8 0 209.6V480.4c0 17 17.1 28.6 32.9 22.3L160 451.8V200.4c-3.5-6.9-6.7-13.8-9.6-20.6c-5.6-13.2-10.4-27.4-12.8-41.5l-122.6 49zM384 255c-20.5 31.3-42.3 59.6-56.2 77c-20.5 25.6-59.1 25.6-79.6 0c-13.9-17.4-35.7-45.7-56.2-77V449.4l192 54.9V255z"/></svg>
                    <p>Ballroom -, My Tower Hotel Surabaya</p>
                    <p>Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60292•(031) 8439696</p>
                    <a href="https://www.google.com/maps/@-7.3347067,112.7202742,12z" class="btn btn-primary">Lihat Lokasi</a>
                </div>
            </div>
            <div class="d-inline-flex mx-5"></div>
            <div class="card d-inline-flex mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$wedding->weddingTitle}}</h5>
                    <hr>
                    <p id="day-wedding-2">-</p>
                    <p id="date-wedding-2-2">- - -</p>
                    <p>16.00 - 17.00 WIB</p>
                    <svg height="25" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M302.8 312C334.9 271.9 408 174.6 408 120C408 53.7 354.3 0 288 0S168 53.7 168 120c0 54.6 73.1 151.9 105.2 192c7.7 9.6 22 9.6 29.6 0zM416 503l144.9-58c9.1-3.6 15.1-12.5 15.1-22.3V152c0-17-17.1-28.6-32.9-22.3l-116 46.4c-.5 1.2-1 2.5-1.5 3.7c-2.9 6.8-6.1 13.7-9.6 20.6V503zM15.1 187.3C6 191 0 199.8 0 209.6V480.4c0 17 17.1 28.6 32.9 22.3L160 451.8V200.4c-3.5-6.9-6.7-13.8-9.6-20.6c-5.6-13.2-10.4-27.4-12.8-41.5l-122.6 49zM384 255c-20.5 31.3-42.3 59.6-56.2 77c-20.5 25.6-59.1 25.6-79.6 0c-13.9-17.4-35.7-45.7-56.2-77V449.4l192 54.9V255z"/></svg>
                    <p>Ballroom -, My Tower Hotel Surabaya</p>
                    <p>Jl. Rungkut Industri Raya No.4, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60292•(031) 8439696</p>
                    <a href="https://www.google.com/maps/@-7.3347067,112.7202742,12z" class="btn btn-primary">Lihat Lokasi</a>
                </div>
            </div>

        </div>

    </div>



    <script>
        // static file
        var flag = 0;
        const audio = $("#sound")[0];


        // functions

        var x = setInterval(function() {
            var mydatestr = "Dec 12, 2022 00:00:00";

            var mydate = new Date(mydatestr);
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var indonesiadate = mydate.toLocaleDateString('id', options);
            var arrDate = indonesiadate.split(',');
            $("#day-wedding-1").text(arrDate[0]);
            $("#date-wedding-2-1").text(arrDate[1]);
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
            $("#disc").animate({
                    "margin-left": "20px",
                    transform: "rotate(360deg)",
                },
                "slow"
            );
            audio.play();
        }

        function stopAudio() {
            $("#disc").animate({
                    "margin-left": "110px",
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

        function playAudioFirstly() {
            var style = checkMarginLeft();
            var y = window.scrollY;
            if (y >= 80 && style.marginLeft.toString() == "110px" && flag == 0) {
                flag = 1;
                $("#disc").animate({
                        "margin-left": "20px",
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
                if (style.marginLeft.toString() == "110px") {
                    playAudio();
                } else {
                    stopAudio();
                }
            });
        });

        $(document).scroll(function() {

            // setMymargin();
            var y = window.scrollY;
            if (y <= 10) {
                $("#loversname").fadeIn(4000);
            } else if (y <= 200) {
                playAudioFirstly();
                $("#dove").fadeIn(10000);
                $("#tanda-1").slideDown(10000);
                $("#tanda-2").slideDown(7000);
                $("#tanda-3").slideDown(4000);
            } else if (y <= 1400) {
                $("#foto-profil-1").fadeIn(50000);
                $("#nickname-profil-1").animate({
                    marginTop: '125px',
                }, 10000);
                $("#fullname-profil-1").animate({
                    marginLeft: '0px',
                }, 10000);
                $("#family-profil-1").fadeIn(50000);
            } else if (y <= 1850) {
                $("#foto-profil-2").fadeIn(50000);
                $("#nickname-profil-2").animate({
                    marginTop: '0px',
                }, 10000);
                $("#fullname-profil-2").animate({
                    marginRight: '0px',
                }, 10000);
                $("#family-profil-2").fadeIn(50000);
            } else if (y <= 2600) {
                $("#ring").show(10000);
                $("#waktu-tempat").fadeTo(10000, 0.5, function() {
                    $("#waktu-tempat").fadeTo(10000, 1.0);
                });
                $("#days-card").animate({
                    deg: 360
                }, {
                    duration: 12000,
                    step: function(now) {
                        $(this).css({
                            transform: 'rotate(' + now + 'deg)'
                        });
                    }
                });
                $("#hours-card").animate({
                    deg: 360
                }, {
                    duration: 15000,
                    step: function(now) {
                        $(this).css({
                            transform: 'rotate(' + now + 'deg)'
                        });
                    }
                });
                $("#minutes-card").animate({
                    deg: 360
                }, {
                    duration: 18000,
                    step: function(now) {
                        $(this).css({
                            transform: 'rotate(' + now + 'deg)'
                        });
                    }
                });
                $("#seconds-card").animate({
                    deg: 360
                }, {
                    duration: 21000,
                    step: function(now) {
                        $(this).css({
                            transform: 'rotate(' + now + 'deg)'
                        });
                    }
                });

                $("#ayat-pasangan-1").fadeIn(21000);
                $("#ayat-pasangan-2").fadeIn(21000);

            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>