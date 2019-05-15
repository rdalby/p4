@extends('layouts.master')
@include('layouts.form')

@section('title')
    Media
@endsection

@section('head')
@endsection


@section('content')

    <h2>Happy</h2>
    <hr>
    <div class="w3-row-padding">
    @foreach($happyMedias as $happyMedia)
    <div class='media cf w3-half'>
        <img class='cover' src='{{ $happyMedia->cover }}' alt='Cover image for media {{ $happyMedia->title }}'>
        <a href='/media/{{ $happyMedia->id }}'><h3>{{ $happyMedia->title }}</h3></a>
        <ul>
            <li>Mood {{ $happyMedia->mood->name }}</li>
            <li>Type {{ $happyMedia->type->name }}</li>
            <li>by {{ $happyMedia->author->getFullName() }}</li>
            <li>Added {{ $happyMedia->created_at->format('m/d/y g:ia') }}</li>
        </ul>
    </div>
    @endforeach
    </div>

    <h2>Meh</h2>
    <hr>
    @foreach($mehMedias as $mehMedia)
    <div class='media cf'>
        <img class='cover' src='{{ $mehMedia->cover }}' alt='Cover image for media {{ $mehMedia->title }}'>
        <a href='/media/{{ $mehMedia->id }}'><h3>{{ $mehMedia->title }}</h3></a>
        <ul>
            <li>Mood {{ $mehMedia->mood->name }}</li>
            <li>Type {{ $mehMedia->type->name }}</li>
            <li>by {{ $mehMedia->author->getFullName() }}</li>
            <li>Added {{ $mehMedia->created_at->format('m/d/y g:ia') }}</li>
        </ul>
    </div>
    @endforeach

    <h2>Mad</h2>
    <hr>
    @foreach($madMedias as $madMedia)
    <div class='media cf'>
        <img class='cover' src='{{ $madMedia->cover }}' alt='Cover image for media {{ $madMedia->title }}'>
        <a href='/media/{{ $madMedia->id }}'><h3>{{ $madMedia->title }}</h3></a>
        <ul>
            <li>Mood {{ $madMedia->mood->name }}</li>
            <li>Type {{ $madMedia->type->name }}</li>
            <li>by {{ $madMedia->author->getFullName() }}</li>
            <li>Added {{ $madMedia->created_at->format('m/d/y g:ia') }}</li>
        </ul>
    </div>
    @endforeach

    <h2>Excited</h2>
    <hr>
    @foreach($excitedMedias as $excitedMedia)
    <div class='media cf'>
        <img class='cover' src='{{ $excitedMedia->cover }}' alt='Cover image for media {{ $excitedMedia->title }}'>
        <a href='/media/{{ $excitedMedia->id }}'><h3>{{ $excitedMedia->title }}</h3></a>
        <ul>
            <li>Mood {{ $excitedMedia->mood->name }}</li>
            <li>Type {{ $excitedMedia->type->name }}</li>
            <li>by {{ $excitedMedia->author->getFullName() }}</li>
            <li>Added {{ $excitedMedia->created_at->format('m/d/y g:ia') }}</li>
        </ul>
    </div>
    @endforeach

    <h2>Sad</h2>
    <hr>
    @foreach($sadMedias as $sadMedia)
    <div class='media cf'>
        <img class='cover' src='{{ $sadMedia->cover }}' alt='Cover image for media {{ $sadMedia->title }}'>
        <a href='/media/{{ $sadMedia->id }}'><h3>{{ $sadMedia->title }}</h3></a>
        <ul>
            <li>Mood {{ $sadMedia->mood->name }}</li>
            <li>Type {{ $sadMedia->type->name }}</li>
            <li>by {{ $sadMedia->author->getFullName() }}</li>
            <li>Added {{ $sadMedia->created_at->format('m/d/y g:ia') }}</li>
        </ul>
    </div>
    @endforeach
@endsection

