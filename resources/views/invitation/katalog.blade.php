<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Katalog</title>
    {{-- boostrap 5 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
</head>

<body>
    <?php
        $catalogs_web_data = json_encode($data['catalogs_web_data']);
        $catalogs_video_data = json_encode($data['catalogs_video_data']);
        $catalogs_filter_data = json_encode($data['catalogs_filter_data']);

        $catalogs_web_data = json_decode($catalogs_web_data);
        $catalogs_video_data = json_decode($catalogs_video_data);
        $catalogs_filter_data = json_decode($catalogs_filter_data);
    ?>
    <div class="container">
        <h1 class="text-center">Daftar Katalog Kami</h1>
        {{-- make 3 type button: Pernikahan,Khitan,Aqiqah --}}
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="btn-group d-flex" role="group" aria-label="Basic outlined example">
                    <a href="/katalog/wedding" class="btn btn-outline-primary">Pernikahan</a>
                    <a href="/katalog/khitan" class="btn btn-outline-primary">Khitan</a>
                    <a href="/katalog/aqiqah" class="btn btn-outline-primary">Aqiqah</a>
                </div>
            </div>
        </div>
        <h3 class="text-center">Undangan Web</h3>
        <div class="row">
            @foreach ($catalogs_web_data as $index => $catalog)
                @if ($loop->iteration % 2 == 1)
                    <div class="col-md-4 mb-2 d-flex flex-row justify-content-center">
                @endif

                <div class="card mx-2" style="width:40%">
                    <img src="{{ $catalog->image }}" style="height: 40vh" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10px;">{{ $catalog->name }}</h5>
                        <p class="card-text" style="font-size: 9px; text-align: justify;">{{ $catalog->description }}</p>
                        <a href="{{ $catalog->url }}" class="btn btn-dark" style="font-size: 9px;">Lihat Detail</a>
                    </div>
                </div>
                
                @if ($loop->iteration % 2 == 0 || $loop->last)
                    </div>
                @endif
            @endforeach            
        </div>
        <h3 class="text-center mt-5">Undangan Video</h3>
        <div class="row">
            @foreach ($catalogs_video_data as $index => $catalog)
                @if ($loop->iteration % 2 == 1)
                    <div class="col-md-4 mb-2 d-flex flex-row justify-content-center">
                @endif

                <div class="card mx-2" style="width:40%">
                    <img src="{{ $catalog->image }}" style="height: 40vh" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10px;">{{ $catalog->name }}</h5>
                        <p class="card-text" style="font-size: 9px; text-align: justify;">{{ $catalog->description }}</p>
                        <a href="{{ $catalog->url }}" class="btn btn-dark" style="font-size: 9px;">Lihat Detail</a>
                    </div>
                </div>
                
                @if ($loop->iteration % 2 == 0 || $loop->last)
                    </div>
                @endif
            @endforeach            
        </div>
        <h3 class="text-center mt-5">Filter</h3>
        <div class="row">
            @foreach ($catalogs_filter_data as $index => $catalog)
                @if ($loop->iteration % 2 == 1)
                    <div class="col-md-4 mb-2 d-flex flex-row justify-content-center">
                @endif

                <div class="card mx-2" style="width:40%">
                    <img src="{{ $catalog->image }}" style="height: 40vh" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 10px;">{{ $catalog->name }}</h5>
                        <p class="card-text" style="font-size: 9px; text-align: justify;">{{ $catalog->description }}</p>
                        <a href="{{ $catalog->url }}" class="btn btn-dark" style="font-size: 9px;">Lihat Detail</a>
                    </div>
                </div>
                
                @if ($loop->iteration % 2 == 0 || $loop->last)
                    </div>
                @endif
            @endforeach            
</body>
