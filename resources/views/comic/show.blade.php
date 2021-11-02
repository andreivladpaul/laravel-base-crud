@extends('layouts.app')

@section('content')

        <p>Title:  {!!$comic['title']!!}</p><br>
        <p>Description: {!!$comic['description']!!}</p> <br>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <p>Price:  {!!$comic['price']!!}</p>
        <p>Type: {!!$comic['type']!!}</p>
        <p>Serie:  {!!$comic['series']!!}</p>


@endsection
