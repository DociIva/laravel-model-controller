<!-- ESTENSIONE -->
@extends('layouts.main')

@section('content')
    
 <div class="container">
    <div class="cards">
             <!--LOOP-->
            @foreach ($movies as $movie)
             <div class="card">
               <h1>Tilolo : {{ $movie->title}}</h1>
               <h3>Titolo-Originale : {{ $movie->original_title }}</h3>
               <h3>Nazione : {{ $movie->nationality }}</h3>
               <h3>Data : {{ $movie->date }}</h3>
               <h3>Voto : {{ $movie->vote }}</h3>
             </div>
            @endforeach
    </div>
 </div>
@endsection