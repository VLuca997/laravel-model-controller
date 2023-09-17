@extends('layouts.layout')

@section('page-title', 'Contact')

@section('main-content')

<div class="col-2">
   
            <h2>{{$movie->title}}</h2>
            <span>
                <p>{{$movie->original_title}}</p>
                <p>{{$movie->date}}</p>
                <p>{{$movie->nationality}}</p>
                <p>{{$movie->vote}}</p>

            </span>
            {{-- button che ci permette di indicizzare la rotta di ogni singolo elemento ad un altra rotta --}}
           
</div>

@endsection