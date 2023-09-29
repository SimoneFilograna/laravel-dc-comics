@extends("layouts.public")

@section("content") 
    <div class="detail-container text-white p-5">

        <div class="container bigger-container">
            <div class="row row-cols-2 align-items-center">
                <div class="col">
                    <div class="box px-5">
                        <h3 class="fs-1">{{$comic->title}}</h3>
                        <p>{{$comic->description}}</p>
                        <p> 
                            <strong>Artist: </strong>
                            @foreach ([$comic->artists] as $artist)
                            {{$artist}}
                            @endforeach
                        </p>
                        <p>
                            <strong>Writers:</strong>          
                            @foreach ([$comic->writers] as $writer)
                                {{$writer}}
                            @endforeach
                        </p>
                        <p> <strong>Sale date:</strong> {{$comic->sale_date}}</p>
                        <p> <strong>Tipo:</strong> {{$comic->type}}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box px-5">
                        <img src="{{$comic->thumb}}" alt="">
                        <p class="mt-3"> <strong>Price: </strong>  {{$comic->price}} €</p>
                        <p> <strong>Series:</strong> {{$comic->series}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection