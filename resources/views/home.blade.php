@extends('layout.main')

@section('content')

<h1>MOVIES</h1>
     @foreach ($movies as $movie )

        <ul>
            <li>{{$movie['title']}}</li>
            <li>{{$movie['original_title']}}</li>
            <li>{{$movie['nationality']}}</li>
            <li>{{$movie['date']}}</li>
            <li>{{$movie['vote']}}</li>

        </ul>
            
            
     @endforeach
    
@endsection