@extends('invitation.template')

@section('main')
    <div class="container">
        <h2 class="text-center">Daftar Katalog Kami</h2>
        <div class="row">
            @foreach ($catalogs as $index => $catalog)
                @if ($index % 2 == 0)
                <div class="col-md-4 mb-2 d-flex flex-row justify-content-center">
                @endif

                <div class="card mx-2" style="width:40%">
                    <img src="{{$catalog->image}}" style="height: 40vh" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10px;">{{$catalog->name}}</h5>
                        <p class="card-text" style="font-size: 9px;text-align: justify;">{{$catalog->description}}</p>
                        <a href="{{$catalog->url}}" class="btn btn-dark" style="font-size: 9px;">Lihat Detail</a>
                    </div>
                </div>
                

                @if (($index + 1) % 2 == 0 || $loop->last)
                    </div>
                @endif
            @endforeach            
        </div>
    </div>
@endsection
