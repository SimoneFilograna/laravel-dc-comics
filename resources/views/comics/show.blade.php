@extends("layouts.public")

@section("title", "Comic Details")

@section("content") 
    <div class="detail-container text-white p-5">

        
        <div class="container bigger-container">
            
            <div class="modify-container d-flex justify-content-end align-items-center fs-3 gap-3">
                {{-- editbutton --}}
    
                <a href="{{route("comics.edit", $comic->id)}}"><i class="fa-solid fa-pen text-white"></i></a>
    
                {{-- DELETE BUTTON --}}
    
                <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="delete-button">
                        <a>
                            <i class="fa-regular fa-trash-can"></i>
                        </a>
                    </button>
                </form>

            </div>
            
            <div class="row row-cols-2 align-items-center">        
                <div class="col">
                    <div class="box px-5">
                        <h3 class="fs-1">{{$comic->title}}</h3>
                        <p>{{$comic->description}}</p>
                        <p> 
                            <strong>Artist:</strong> {{implode(",", $comic["artists"]) }}   
    
                        </p>
                        <p>
                            <strong>Writers:</strong> {{implode(",", $comic["writers"]) }}           
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

        <div class="text-center mt-5">
            <a class="btn btn-primary mt-5 mb-4 px-5 fw-bold bottom-button" 
                href="{{route("comics.index")}}" role="button">TORNA INDIETRO</a>
        </div>
    </div>
@endsection