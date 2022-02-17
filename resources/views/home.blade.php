@extends('layout.base')

@section('content')
    @foreach ($movies as $movie)
    <ul>
        <li><h1>Titolo: {{ $movie->title }}</h1></li>
        <li><h2>Nazionalità: {{ $movie->nationality }}</h2></li>
        <li><h2>Data uscita: {{ $movie->date }}</h2></li>
        <li><h2>Voto: {{ $movie->vote }}</h2></li>
    </ul>  
    @endforeach
@endsection