@extends('layouts.master')

@section('title')

@endsection

@section('head')
@endsection

@section('content')


    <div class='user'>
        <p>Name: {{ $name }}</p>
        <p>email: {{ $email }}</p>

        <p>password: {{ $password }}</p>
    </div>

    <div>
        <p>Playlists:</p>
        @foreach($playlist as $playlists)
        <p>{{$playlists->name}}</p>
            @endforeach
    </div>
@endsection