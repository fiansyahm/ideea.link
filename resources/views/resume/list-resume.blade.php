@extends('template-admin')
@section('navbar_menu_resume', 'bg-primary text-white')
@section('main')

   <div class="container text-center">
       <h6>Web Resume Berhasil Dibuat</h6>
       @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
       <img src="https://www.uph.edu/wp-content/uploads/2024/01/Featured-images-Website-7-Tips-CV.jpg" height="500px" width="500px" class="img-fluid" alt="wedding-icon">
       <h5 class="mb-1">Screenshot Tampilan Ini</h5>
       <form id="wedding-icon" class="mb-5">
        <div class="mb-3">
          <h4 class="my-3">ID Resume</h4>
          <input class="form-control text-center" type="text" value="{{$resume->id}}">
        </div>
        <h4 class="mb-3 text-center">Pilih Menu</h4>
        <a href="/personal-profile/{{$resume['id']}}" class="btn btn-success mr-2">Lihat Resume</a>
        <a href="/user/resume/edit/{{$resume['id']}}/{{$resume['nickname']}}/{{$resume['fullname']}}" class="btn btn-warning">Edit For User</a>
        {{-- copy link undangan --}}
        <button class="btn btn-info" onclick="myFunction()">Copy Link Resume</button>
        {{-- <a href="/q&a" class="btn btn-secondary mb-2">Tutorial Revisi,dll</a> --}}
      </form> 
        {{-- <form id="wedding-icon">
          <div class="mb-3 border border-secondary p-3">
            <h3>Pertanyaan Lainnya?</h3>
            <a href="/q&a" class="btn btn-primary mb-2">Klik Disini</a>
          </div>
        </form> --}}

        
        <script>
            function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            
            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
            }
            function myFunction1() {
            // Get the text field
            var copyText = document.getElementById("myConfrimation");
            
            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
            }
            function myFunction2() {
            // Get the text field
            var copyText = document.getElementById("myEdit");

             // Select the text field
             copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
            }

        </script>
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