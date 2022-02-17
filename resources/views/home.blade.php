@extends('layout.base')

@section('content')
    @foreach ($movies as $movie)
    <ul>
        <li>
            <h1>{{ $movie->title }}</h1>
        </li>
    </ul>  
    @endforeach
@endsection