<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


//MOVIE MODEL
use App\Models\Movie;


class MainController extends Controller
{
    public function index(){
        $movies = Movie::all();//SELECT * FROM movies
        return view('home', [
            'movies' =>  $movies,
        ]);
    }

    //richiamo della rotta parametrica in web.php, l'id nella funzione show, non deve per forza coincidere con quello immesso in web.php
    public function singleMovie($id){


        // $movie = Movie::find($id);   //SELECT * FROM movies WHERE id = $id
            $movie = Movie::findOrFail($id); // falo stesso lavoro del find+abord, esempio di tutti i nostri commenti attuali.

        //controlli:
        // if (!$movie){// Se NON c'è oppure $movie == null
            // abort(404);//errore di pagina non trovata
        // }
        return view('singleMovie', [
            'movie'=> $movie
        ]);
    }
}
