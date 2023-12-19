@extends('invitation.template')
@section('main')
    @if($size == "2R")
    <div id="printer" class="my-0 container">
        @foreach ($files as $index => $file)
            @if ($index % 9 == 0)
                <div style="margin-bottom: 100px;">
            @endif

            @if ($index % 3 == 0)
                <div class="d-flex flex-row my-0"> 
            @endif

            <div class="col-md-1 my-0 mx-0">
                <div class="border border-dark background-style" id="photo-{{$index}}" style="width: 278px; height: 416px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ Storage::url($file) }}" alt="Foto {{$index}}" style="width: 231px; height: 323px; margin-top: -35px;">
                </div>
            </div>

            @if (($index + 1) % 3 == 0 || $loop->last)
                </div>
            @endif

            @if (($index + 1) % 9 == 0 || $loop->last)
                </div>
            @endif
        @endforeach

    </div>
    @elseif($size == "3R")
    <div id="printer" class="my-0 container">
        @foreach ($files as $index => $file)
            @if ($index % 4 == 0)
                <div style="margin-bottom: 100px;">
            @endif

            @if ($index % 2 == 0)
                <div class="d-flex flex-row my-0"> 
            @endif

            <div class="col-md-1 my-0 mx-0">
                <div class="border border-dark background-style" id="photo-{{$index}}" style="width: 417px; height: 601px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ Storage::url($file) }}" alt="Foto {{$index}}" style="width: 324px; height: 463px; margin-top: -35px;">
                </div>
            </div>

            @if (($index + 1) % 2 == 0 || $loop->last)
                </div>
            @endif

            @if (($index + 1) % 4 == 0 || $loop->last)
                </div>
            @endif
        @endforeach

    </div>
    @elseif($size == "4R")
    <div id="printer" class="my-0 container">
        @foreach ($files as $index => $file)
            @if ($index % 2 == 0)
                <div style="margin-bottom: 100px;">
            @endif

            @if ($index % 1 == 0)
                <div class="d-flex flex-row my-0"> 
            @endif

            <div class="col-md-1 my-0 mx-0">
                <div class="border border-dark background-style" id="photo-{{$index}}" style="width: 463px; height: 695px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ Storage::url($file) }}" alt="Foto {{$index}}" style="width: 370px; height: 556px; margin-top: -35px;">
                </div>
            </div>

            @if (($index + 1) % 1 == 0 || $loop->last)
                </div>
            @endif

            @if (($index + 1) % 2 == 0 || $loop->last)
                </div>
            @endif
        @endforeach

    </div>
    @elseif($size == "5R")
    <div id="printer" class="my-0 container">
        @foreach ($files as $index => $file)
            @if ($index % 2 == 0)
                <div style="margin-bottom: 100px;">
            @endif

            @if ($index % 1 == 0)
                <div class="d-flex flex-row my-0"> 
            @endif

            <div class="col-md-1 my-0 mx-0">
                <div class="border border-dark background-style" id="photo-{{$index}}" style="width: 602px; height: 834px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ Storage::url($file) }}" alt="Foto {{$index}}" style="width: 556px; height: 695px; margin-top: -35px;">
                </div>
            </div>

            @if (($index + 1) % 1 == 0 || $loop->last)
                </div>
            @endif

            @if (($index + 1) % 2 == 0 || $loop->last)
                </div>
            @endif
        @endforeach

    </div>
    @elseif($size == "10R")
    <div id="printer" class="my-0 container">
        @foreach ($files as $index => $file)
            @if ($index % 2 == 0)
                <div style="margin-bottom: 100px;">
            @endif

            @if ($index % 1 == 0)
                <div class="d-flex flex-row my-0"> 
            @endif

            <div class="col-md-1 my-0 mx-0">
                <div class="border border-dark background-style" id="photo-{{$index}}" style="width: 927px; height: 1159px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ Storage::url($file) }}" alt="Foto {{$index}}" style="width: 927px; height: 1159px; margin-top: -35px;">
                </div>
            </div>

            @if (($index + 1) % 1 == 0 || $loop->last)
                </div>
            @endif

            @if (($index + 1) % 2 == 0 || $loop->last)
                </div>
            @endif
        @endforeach
    </div>
    @endif

     <div class="btn-group my-3" role="group" aria-label="Basic example">
        @if ($prev != 0)
            <a href="/polaroid/list/{{$photo}}/{{$prev}}/{{$size}}" type="button" class="btn btn-primary">Prev</a>
        @endif
        <a href="/polaroid/list/{{$photo}}/{{$next}}/{{$size}}" type="button" class="btn btn-primary">Next</a>
    </div>

    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #printer, #printer * {
                visibility: visible;
            }

            #printer {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>

    <div class="mb-3 text-center mx-2">
        <label for="theme" class="form-label">Pilihan Tema Semua</label>
        <select id="theme" onchange="change()" name="theme" class="form-select" aria-label="Default select example">
        <option value="https://i.pinimg.com/236x/73/86/91/7386913fa79d798a7bd8742bb05b320a.jpg" selected>Pilih Tema</option>
        @foreach ($themes as $data)
            <option value="{{$data['url']}}">{{$data['name']}}</option>
        @endforeach
        
        </select>
    </div>
    <table class="table table-striped table-hover">
        <tbody>
            @foreach ($files as $index => $file)
            <tr>
                <td>
                    Tema Foto {{$index+1}}
                </td>
                <td>
                    <select id="theme-{{$index}}" onchange="ubah('{{$index}}')" name="theme-{{$index}}" class="form-select" aria-label="Default select example">
                        <option value="https://i.pinimg.com/236x/73/86/91/7386913fa79d798a7bd8742bb05b320a.jpg" selected>Pilih Tema</option>
                        @foreach ($themes as $data)
                        <option value="{{$data['url']}}">{{$data['name']}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
  <script>
    function change() {
      var theme = document.getElementById("theme").value;
      var elements = document.getElementsByClassName("background-style");
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.backgroundImage = "url('" + theme + "')";
            elements[i].style.backgroundSize = "cover"; // Menambahkan baris ini untuk mengatur background-size
        }
    }

    function ubah(index) {
      var theme = document.getElementById("theme-"+index).value;
      var elements = document.getElementById("photo-"+index);
      elements.style.backgroundImage = "url('" + theme + "')";
      elements.style.backgroundSize = "cover"; // Menambahkan baris ini untuk mengatur background-size
    }

  </script>
@endsection
