@extends('layouts.app')

@section('content')
    @foreach ($comics as $comic)
        <p>Title: {{$comic['title']}} </p>
       <a href="{{route('comics.show', $comic['id'])}}">details</a>

        <br>
    @endforeach
@endsection
