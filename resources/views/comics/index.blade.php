@extends("layouts.public")

@section("content")
    <div class="container">        
        <div class="row g-4">

            @foreach ( $comics as $singleComic )
            <div class="col-2">
                <div class="card h-100">
                    <a href="{{route('comics.show', $singleComic->id)}}">
                        <img src="{{$singleComic["thumb"]}}" class="card-img-top" alt="">
                    </a>
                    <div class="card-body">
                        <p class="card-text">{{strtoupper($singleComic["series"])}}</p>
                    </div>
                </div>               
            </div>              
            @endforeach
        </div>
    </div>
@endsection