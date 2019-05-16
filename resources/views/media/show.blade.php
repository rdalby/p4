@extends('layouts.master')

@section('title')
    Playlist
@endsection

@section('head')
    <link href={{ asset('/css/p4.css') }} rel='stylesheet'>

@endsection

@section('heading')
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Playlist</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Showcase</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>
@endsection

@section('content')


    <div class='book cf'>


        <div class="w3-row-padding">
            @foreach($medias as $media)
                <div class="w3-half div-test">

                    <h3>{{ $media->title }}</h3></a>
                    @if($media->type->name != 'Music')
                        <img class='cover' src='{{ $media->cover }}'
                             alt='Cover image for media {{ $media->title }}'>
                    @endif
                    @if($media->type->name == 'Music')
                        <div class='cover'>
                            <iframe width="200" height="150" src='<?= $media['url'] ?>'
                                    frameborder="0"
                                    allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    @endif
                    <p> Mood {{ $media->mood->name }}</p>
                    <p>Type {{$media->type->name }}</p>
                    <p> by {{ $media->author->getFullName() }}</p>
                    <p> Added {{ $media->created_at->format('m/d/y g:ia') }}</p>

                </div>
            @endforeach
        </div>


    </div>
@endsection