@extends('layouts.layout')

@section('page-title', 'Homepage')

@section('main-content')



<div class="container row">
    <h2 class="text-center fw-bold text-danger bg-black py-2 rounded-5">I nostri Prodotti:</h2>
    @foreach ($movies as $movie)
        <div class="col-2">
                <div class="card border-0">
                    <div class="card-body bg-warning py-4 rounded-4">
                        <h3>{{$movie->title}}</h3>
                        {{-- button che ci permette di indicizzare la rotta di ogni singolo elemento ad un altra rotta --}}
                        <a href="{{ route('movies.singleMovie',['id' => $movie->id]) }}" class="btn btn-success">click me </a>
                    </div>

                </div>      
        </div>
    @endforeach
</div>

@endsection