@extends("layouts.public")

@section("title", "Add Your Comic")

@section("content")
    <div class="container bigger-container">
        <div class="row">
            <div class="col">
                <div class="box text-white mt-5 mb-5">
                    <div class="d-flex flex-column gap-3">

                        <form action="{{ route("comics.store") }}" method="POST">
                            @csrf()

                            <div class="mb-3">
                                <label for="title" class="form-label">TITLE</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid 
                                @enderror" value="{{old("title")}}">
                                @error("title")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            
                            <div class="mb-3">
                                <label for="description" class="form-label">DESCRIPTION</label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid 
                                @enderror" value="{{old("description")}}"></textarea>
                                @error("description")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                                
                            <div class="mb-3">
                                <label for="thumb" class="form-label">COMIC COVER</label>
                                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid                                   
                                @enderror" value="{{old("thumb")}}">
                                @error("thumb")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <div class="mb-3">
                                <label for="price" class="form-label">PRICE</label>
                                <input type="number" step="0.01" name="price" id="price" class="form-control  @error('price') is-invalid                                   
                                @enderror" value="{{old("price")}}">
                                @error("price")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="series" class="form-label">SERIES</label>
                                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid     
                                @enderror" value="{{old("series")}}">
                                @error("series")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="date" class="form-label">SALE DATE</label>
                                <input type="date" name="sale_date" id="date" class="form-control @error('sale_date') is-invalid                                   
                                @enderror" value="{{old("sale_date")}}">
                                @error("series")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="type" class="form-label">TYPE</label>
                                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid                                   
                                @enderror" value="{{old("type")}}">
                                @error("type")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="artists" class="form-label">ARTISTS</label>
                                <input type="text" name="artists" id="artists" class="form-control @error('artists') is-invalid                                   
                                @enderror" value="{{old("artists")}}">
                                @error("artists")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="writers" class="form-label">WRITERS</label>
                                <input type="text" name="writers" id="writers" class="form-control @error('writers') is-invalid                                    
                                @enderror" value="{{old("writers")}}">
                                @error("writers")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
    
                            <div class="text-center mb-5 d-flex gap-4">
                                <button class="btn btn-primary mt-5 mb-4 px-5 fw-bold bottom-button">ADD</button>   
                                <a class="btn btn-primary mt-5 mb-4 px-5 fw-bold bottom-button" href="{{route("comics.index")}}">CANCEL</a>   
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
