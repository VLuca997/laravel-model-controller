<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


//MOVIE MODEL
use App\Models\Movie;


class MainController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('home', [
            'movies' =>  $movies,
        ]);
    }

    //richiamo della rotta parametrica in web.php, l'id nella funzione show, non deve per forza coincidere con quello immesso in web.php
    public function singleMovie($id){

    }
}
