@extends("layouts.public")
@section("title", "Edit Comic")

@section("content")
<div class="container bigger-container">
    <div class="row">
        <div class="col">
            <div class="box text-white mt-5 mb-5">
                <div class="d-flex flex-column gap-3">

                    <form action="{{ route("comics.update", $comic->id) }}" method="POST">
                        @csrf()
                        @method("PUT")

                        <div class="mb-3">
                            <label for="title" class="form-label">TITLE</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{old("title", $comic->title)}}">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">DESCRIPTION</label>
                            <textarea name="description" id="description" class="form-control">{{old("description", $comic->description)}}</textarea>
                        </div>
                            
                        <div class="mb-3">
                            <label for="thumb" class="form-label">COMIC COVER</label>
                            <input type="text" name="thumb" id="thumb" class="form-control" value="{{old("thumb", $comic->thumb)}}">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">PRICE</label>
                            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{old("price", $comic->price)}}">
                        </div>

                        <div class="mb-3">
                            <label for="series" class="form-label">SERIES</label>
                            <input type="text" name="series" id="series" class="form-control" value="{{old("series", $comic->series)}}">
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">SALE DATE</label>
                            <input type="date" name="sale_date" id="date" class="form-control" value="{{old("sale_date", $comic->sale_date)}}">
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">TYPE</label>
                            <input type="text" name="type" id="type" class="form-control" value="{{old("type", $comic->type)}}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="artists" class="form-label">ARTISTS</label>
                            <input type="text" name="artists" id="artists" class="form-control" value="{{old("artists", implode(",", $comic->artists))}}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="writers" class="form-label">WRITERS</label>
                            <input type="text" name="writers" id="writers" class="form-control" value="{{old("artists", implode(",", $comic->writers))}}">
                        </div>
                        

                        <div class="text-center mb-5 d-flex gap-4">
                            <button class="btn btn-primary mt-5 mb-4 px-5 fw-bold bottom-button">ADD CHANGES</button>   
                            <a class="btn btn-primary mt-5 mb-4 px-5 fw-bold bottom-button" href="{{route("comics.index")}}">CANCEL</a>   
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection