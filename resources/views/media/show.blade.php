@extends('layouts.master')

@section('title')
    {{ $user->name }}
@endsection

@section('head')
@endsection

@section('content')
    <h1>{{ $user->name }}</h1>

    <div class='book cf'>
        <p>
            @foreach($medias as $media)
                <img src='{{ $media->cover }}' class='cover' alt='Cover image for {{ $media->title }}'>
        <p>By {{ $media->author->getFullName() }}</p>
        <p>Added {{ $media->created_at->format('m/d/y') }}</p>
            @endforeach
        </p>

    </div>
@endsection