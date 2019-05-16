@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('head')
    <link href={{ asset('/css/p4.css') }} rel='stylesheet'>
@endsection


@section('content')
    <p>Hello please login to add media, create/save custom playlists. Otherwise you are free to browse user made
        playlists and media sorted by mood</p>

@endsection