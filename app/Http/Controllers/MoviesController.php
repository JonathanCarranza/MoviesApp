<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movies::get();
        return view('movies.index', compact('movies'));
    }

    public function movie(Movies $movie){
        $movie = Movies ::findOrFail($movie->id);
        return view('movie',['movie' => $movie] );
    }

    public function destroy($id){
        Movies::destroy($id);
        return back();
    }

    public function create (){
        return view('movies.create');
    }
    //el nombre store puede ser reemplazado por cualquier otro.. solo lo ponen normalmente así :)
    public function store(Request $request){
        $movie = new Movies();
        $movie->title = $request->title;
        $movie->director = $request->director;
        $movie->image = $request->image;
        $movie->genero = $request->genero;
        $movie->description = $request->description;
    
        $movie->save(); //INSERT INTO, eso significa el save
        return redirect() -> route('movies.index');
    }

    public function edit(Movies $movie){
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movies $movie){
        $movie->title = $request->title;
        $movie->director=$request->director;
        $movie->image=$request->image;
        $movie->genero=$request->genero;
        $movie->description=$request->description;
        $movie->save();
        return redirect() -> route('movies.index');
    }

    public function allMoviesApi(){
        $movies = Movies::all(); //esto es como hacerle select * from a la base de datos
        return response ()-> json($movies);
    }
}
