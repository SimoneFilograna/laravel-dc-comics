@extends("layouts.public")
@section("title", "DC Comics")

@section("content")
    <div class="container pt-5 position-relative">        

        <div>
            <a class="btn btn-primary current-button" href="#" role="button">CURRENT SERIES</a>
        </div>

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
            
            <div class="text-center mb-5">
                <a class="btn btn-primary mt-5 mb-4 px-5 fw-bold bottom-button" href="{{route("comics.create")}}" role="button">ADD YOUR COMIC</a>
            </div>
        </div>
    </div>

    @include("partials.merch")
@endsection