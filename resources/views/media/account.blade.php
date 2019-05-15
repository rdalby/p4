@extends('layouts.master')

@section('title')
Account
@endsection

@section('head')
@endsection


@section('heading')
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Account</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Description</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>
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