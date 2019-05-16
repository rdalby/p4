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
        <br>
        <br>

    </div>

    <div>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Playlists:</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
        @foreach($playlist as $playlists)
            <p><a href='/playlist/{{ $playlists->id }}'>{{$playlists->name}}</p>
            <li><a href='/playlist/{{ $playlists->id }}/delete'><i class="fas fa-trash"></i> Delete</a>
                @endforeach

                <br>
    </div>
@endsection