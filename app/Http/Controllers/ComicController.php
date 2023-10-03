<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();

        return view("comics.index",[ "comics" => $comics]);
    }
    
    public function show($id){
        $comic = Comic::findOrFail($id);
        
        return view("comics.show", ["comic" => $comic]);
    }
    
    public function create(){
        return view("comics.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "required|string",
            "price" => "required|integer",
            "series"=>"nullable|string",
            "sale_date" => "nullable|date",
            "type" => "nullable|string",
            "artists" => "required|string",
            "writers" => "required|string"
        ]);

        $data["artists"] = explode(",", $data["artists"]);
        $data["writers"] = explode(",", $data["writers"]);

        $newComic = new Comic();

        $newComic->fill($data);
        // $newComic["title"] = $data["title"];
        // $newComic["description"] = $data["description"];
        // $newComic["thumb"] = $data["thumb"];
        // $newComic["price"] = $data["price"];
        // $newComic["series"] = $data["series"];
        // $newComic["sale_date"] = $data["sale_date"];
        // $newComic["artists"] = explode(",", $data["artists"]);
        // $newComic["writers"] = explode(",", $data["writers"]);


        $newComic->save();

        return redirect()->route("comics.index");
    }
}
