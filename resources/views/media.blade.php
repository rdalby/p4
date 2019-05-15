@extends('layouts.master')
@include('layouts.form')

@section('title')
    Media
@endsection

@section('head')
    <link href={{ asset('/css/p4.css') }} rel='stylesheet'>
@endsection


@section('content')
    <h1 class="w3-xxxlarge w3-text-teal"><b>Happy</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">

    <hr>
    <div class="w3-row-padding">
    @foreach($happyMedias as $happyMedia)
    <div class='media cf custom-control-inline w3-half'>
        <ul>
            <li>
                <a href='/media/{{ $happyMedia->id }}'><h3>{{ $happyMedia->title }}</h3></a>
                @if($happyMedia->type->name != 'Music')
        <img class='cover' src='{{ $happyMedia->cover }}' alt='Cover image for media {{ $happyMedia->title }}'>
        @endif
                @if($happyMedia->type->name == 'Music')
                    <div class='cover'>
                        <iframe width="200" height="150" src='<?= $happyMedia['url'] ?>'
                                frameborder="0"
                                allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                @endif
          <p>  Mood {{ $happyMedia->mood->name }}</p>
<p>Type {{$happyMedia->type->name }}</p>
                <p> by {{ $happyMedia->author->getFullName() }}</p>
                <p> Added {{ $happyMedia->created_at->format('m/d/y g:ia') }}</p>
            </li>
        </ul>
    </div>
    @endforeach
    </div>
    <div class="w3-row-padding">
    <h1 class="w3-xxxlarge w3-text-teal"><b>Meh</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">
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
    </div>
    <div class="w3-row-padding">
    <h1 class="w3-xxxlarge w3-text-teal"><b>Mad</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">
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
    </div>
    <div class="w3-row-padding">
   <h1 class="w3-xxxlarge w3-text-teal"><b>Excited</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">
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
    </div>
    <div class="w3-row-padding">
    <h1 class="w3-xxxlarge w3-text-teal"><b>Sad</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">
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
    </div>
@endsection

