<!-- ESTENSIONE -->
@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="container cards">
                 <!--LOOP-->
                 @foreach ($movies as $movie)
                 <div class="card">
                  <h2>TITOLO : {{$movie->title}}</h2>
                 </div>
                 @endforeach
        </div>
    </div>
@endsection