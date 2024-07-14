@extends('template-admin')
@section('navbar_menu_ideelink', 'bg-primary text-white')
@section('main')

   <div class="container text-center">
       <h6>Web ideelink Berhasil Dibuat</h6>
       @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
       <img src="https://seranking.com/es/blog/wp-content/uploads/sites/13/2021/09/que-es-una-url.png" height="500px" width="500px" class="img-fluid" alt="wedding-icon">
       <h5 class="mb-1">Screenshot Tampilan Ini</h5>
       <div id="wedding-icon" class="mb-5">
        <div class="mb-3">
          <h4 class="my-3">ID ideelink</h4>
          <input class="form-control text-center" type="text" value="{{$ideelink->id}}">
        </div>
        <h4 class="mb-3 text-center">Pilih Menu</h4>
        <a id="myInput" href="/ideelink/{{$ideelink['id']}}" class="btn btn-success mr-2">Lihat ideelink</a>
        <a href="/user/ideelink/edit/{{$ideelink['id']}}/{{$ideelink['name_account']}}" class="btn btn-warning mr-2">Edit For User</a>
        {{-- copy link undangan --}}
        <button class="btn btn-info mr-2" onclick="myFunction()">Copy Link ideelink</button>
        {{-- <a href="/q&a" class="btn btn-secondary mb-2">Tutorial Revisi,dll</a> --}}
      </div> 
        {{-- <form id="wedding-icon">
          <div class="mb-3 border border-secondary p-3">
            <h3>Pertanyaan Lainnya?</h3>
            <a href="/q&a" class="btn btn-primary mb-2">Klik Disini</a>
          </div>
        </form> --}}

        
        <script>
            function myFunction() {
                alert("Copied the text:");
                // Get the text field
                var copyText = document.getElementById("myInput");
                console.log(copyText);
                // Copy the text inside the text field
                navigator.clipboard.writeText(copyText.href);
                
                // Alert the copied text
                alert("Copied the text: " + copyText.href);
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