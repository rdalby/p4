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
            <div class="w3-half div-test">

                <a href='/media/{{ $happyMedia->id }}'><h3>{{ $happyMedia->title }}</h3></a>
                @if($happyMedia->type->name != 'Music')
                    <img class='cover' src='{{ $happyMedia->cover }}'
                         alt='Cover image for media {{ $happyMedia->title }}'>
                @endif
                @if($happyMedia->type->name == 'Music')
                    <div class='cover'>
                        <iframe width="200" height="150" src='<?= $happyMedia['url'] ?>'
                                frameborder="0"
                                allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                @endif
                <p> Mood {{ $happyMedia->mood->name }}</p>
                <p>Type {{$happyMedia->type->name }}</p>
                <p> by {{ $happyMedia->author->getFullName() }}</p>
                <p> Added {{ $happyMedia->created_at->format('m/d/y g:ia') }}</p>

            </div>
        @endforeach
    </div>

    <h1 class="w3-xxxlarge w3-text-teal"><b>Meh</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">
    <hr>
    <div class="w3-row-padding">
        @foreach($mehMedias as $mehMedia)
            <div class="w3-half div-test">

                <a href='/media/{{ $mehMedia->id }}'><h3>{{ $mehMedia->title }}</h3></a>
                @if($mehMedia->type->name != 'Music')
                    <img class='cover' src='{{ $mehMedia->cover }}'
                         alt='Cover image for media {{ $mehMedia->title }}'>
                @endif
                @if($mehMedia->type->name == 'Music')
                    <div class='cover'>
                        <iframe width="200" height="150" src='<?= $mehMedia['url'] ?>'
                                frameborder="0"
                                allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                @endif
                <p> Mood {{ $mehMedia->mood->name }}</p>
                <p>Type {{$mehMedia->type->name }}</p>
                <p> by {{ $mehMedia->author->getFullName() }}</p>
                <p> Added {{ $mehMedia->created_at->format('m/d/y g:ia') }}</p>

            </div>
        @endforeach
    </div>

    <h1 class="w3-xxxlarge w3-text-teal"><b>Mad</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">
    <hr>
    <div class="w3-row-padding">
        @foreach($madMedias as $madMedia)
            <div class="w3-half div-test">

                <a href='/media/{{ $madMedia->id }}'><h3>{{ $madMedia->title }}</h3></a>
                @if($madMedia->type->name != 'Music')
                    <img class='cover' src='{{ $madMedia->cover }}'
                         alt='Cover image for media {{ $madMedia->title }}'>
                @endif
                @if($madMedia->type->name == 'Music')
                    <div class='cover'>
                        <iframe width="200" height="150" src='<?= $madMedia['url'] ?>'
                                frameborder="0"
                                allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                @endif
                <p> Mood {{ $madMedia->mood->name }}</p>
                <p>Type {{$madMedia->type->name }}</p>
                <p> by {{ $madMedia->author->getFullName() }}</p>
                <p> Added {{ $madMedia->created_at->format('m/d/y g:ia') }}</p>

            </div>
        @endforeach
    </div>

    <h1 class="w3-xxxlarge w3-text-teal"><b>Excited</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">
    <hr>
    <div class="w3-row-padding">
        @foreach($excitedMedias as $excitedMedia)
            <div class="w3-half div-test">

                <a href='/media/{{ $excitedMedia->id }}'><h3>{{ $excitedMedia->title }}</h3></a>
                @if($excitedMedia->type->name != 'Music')
                    <img class='cover' src='{{ $excitedMedia->cover }}'
                         alt='Cover image for media {{ $excitedMedia->title }}'>
                @endif
                @if($excitedMedia->type->name == 'Music')
                    <div class='cover'>
                        <iframe width="200" height="150" src='<?= $excitedMedia['url'] ?>'
                                frameborder="0"
                                allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                @endif
                <p> Mood {{ $excitedMedia->mood->name }}</p>
                <p>Type {{$excitedMedia->type->name }}</p>
                <p> by {{ $excitedMedia->author->getFullName() }}</p>
                <p> Added {{ $excitedMedia->created_at->format('m/d/y g:ia') }}</p>

            </div>
        @endforeach
    </div>

    <h1 class="w3-xxxlarge w3-text-teal"><b>Sad</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">
    <hr>
    <div class="w3-row-padding">
        @foreach($sadMedias as $sadMedia)
            <div class="w3-half div-test">

                <a href='/media/{{ $sadMedia->id }}'><h3>{{ $sadMedia->title }}</h3></a>
                @if($sadMedia->type->name != 'Music')
                    <img class='cover' src='{{ $sadMedia->cover }}'
                         alt='Cover image for media {{ $sadMedia->title }}'>
                @endif
                @if($sadMedia->type->name == 'Music')
                    <div class='cover'>
                        <iframe width="200" height="150" src='<?= $sadMedia['url'] ?>'
                                frameborder="0"
                                allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                @endif
                <p> Mood {{ $sadMedia->mood->name }}</p>
                <p>Type {{$sadMedia->type->name }}</p>
                <p> by {{ $sadMedia->author->getFullName() }}</p>
                <p> Added {{ $sadMedia->created_at->format('m/d/y g:ia') }}</p>

            </div>
        @endforeach
    </div>
@endsection

