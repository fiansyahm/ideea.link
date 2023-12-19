@extends('invitation.template')
@section('main')
<div class="container text-center">
    <h1>Selamat Wedding Invitation Webmu Berhasil Dibuat</h1>
    @if (session('status'))
         <div class="alert alert-success">
             {{ session('status') }}
         </div>
     @endif
    <img src="https://media.istockphoto.com/id/1167132635/vector/wedding-invitation-with-flowers-peony-and-leaves-watercolor-isolated-on-white.jpg?s=612x612&w=0&k=20&c=_S2rSkpLJOKwILtPDBf-NiU9WFJ3ebyugXPuZibk63Q=" class="img-fluid my-5" alt="wedding-icon">
     <form id="wedding-icon">
       <div class="mb-3">
         <label for="link" class="form-label">Click copy link undangan anda disini. Dan share ke teman teman anda, Link Ini Hanya Dapat Dipakai Setelah Pembayaran</label>
         <input class="form-control text-center" type="text" value="https://akad.in/invitation-wedding/{{$id}}/namatamu" id="myInput">
       </div>
       <button class="btn btn-secondary mb-2" onclick="myFunction()">Copy Link Undangan</button>
     </form>
     <form id="wedding-icon">
       <div class="mb-3">
         <label for="link" class="form-label">Cek Ucapan disini</label>
         <input class="form-control text-center" type="text" value="https://akad.in/list-guest-wedding/{{$id}}" id="myConfrimation">
       </div>
       <button class="btn btn-secondary mb-2" onclick="myFunction1()">Copy Link Ucapan</button>
     </form>
     
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
<div class="container my-5">
  <div class="row">
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Lihat Demo Undangan</h5>
                  <p class="card-text">Anda Dapat Melihat Demo Undangan Selama 6 Jam Sebelum Terhapus, Bayar segera agar undangan tidak terhapus.</p>
                  <a href="/pending-invitation-wedding/{{$id}}/namatamu" class="btn btn-primary">Lihat Demo Undangan</a>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Pembayaran</h5>
                  <p class="card-text">Selesaikan Pembayaran agar link tidak terhapus.</p>
                  <a href="/midtrans/{{$code}}/10000" class="btn btn-primary">Bayar Sekarang</a>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection