@extends('layouts.master')
@include('layouts.form')

@section('title')

@endsection

@section('head')
@endsection
@section('heading')
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Playlist</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Search</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>
@endsection

@section('content')
    <table>
        <tr>
            <td>
                @yield('formTest')
            </td>
            <td>
                @if($playlist)
                    <div>
                        <h1 class="w3-xxxlarge w3-text-teal"><b>Playlists:</b></h1>
                        <hr style="width:50px;border:5px solid teal" class="w3-round">
                        @foreach($playlist as $playlists)
                            <p><a href='/playlist/{{ $playlists->id }}'>{{$playlists->name}}</p>
                        @endforeach
                        <br>
                        <br>
                    </div>
                @endif

            </td>
        </tr>
    </table>

@endsection