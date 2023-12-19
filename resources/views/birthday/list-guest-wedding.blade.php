@extends('invitation.template')
@section('main')
   <div class="text-center" style="background:deeppink">
       <div class="container p-2">
        <h1 class="text-white">Selamat Wedding Invitation Webmu Berhasil Dibuat</h1>
        @foreach($confirmation as $guest)
                <div class="card my-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $guest['guest-name'] }}</h5>
                        <p class="card-text">Ucapan Wedding: {{ $guest['ucapan-wedding'] }}</p>
                        @if($guest['confirmation-attendance'] == 0)
                            <p class="card-text">Konfirmasi: Hadir</p>
                        @elseif($guest['confirmation-attendance'] == 1)
                            <p class="card-text">Konfirmasi: Tidak Hadir</p>
                        @else
                            <p class="card-text">Konfirmasi: Ragu-ragu</p>
                        @endif
                    </div>
                </div>
        @endforeach
       </div>
   </div>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
        
        function setMymargin() {
            const output = document.querySelector(".output");
            output.innerHTML = `scrollTop: ${window.scrollY} <br>
                                scrollLeft: ${window.scrollX} <br>
                                `;
        }

        // document ready,scroll,ets
        $(document).ready(function() {
            // $("#disc").click(function() {
            //     var style = checkMarginLeft();
            //     if (style.marginLeft.toString() == "110px") {
            //         playAudio();
            //     } else {
            //         stopAudio();
            //     }
            // });
        });

        $(document).scroll(function() {

            // setMymargin();
            var y = window.scrollY;
            if (y <= 10) {
                $("#wedding-icon").slideDown(1000);
            }
            else if (y <= 700) {
                $("#penting").fadeIn(10000);
            } 
            else if (y <= 1300) {
                $("#syarat").slideDown(10000);
            } 
            else if (y <= 2100) {
                $("#urus").fadeIn(10000);
            } 
            else if (y <= 3000) {
                $("#biaya").slideDown(10000);
            }
            
        });
    </script>
@endsection