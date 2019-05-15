@extends('layouts.master')

@section('title')
    Your Books
@endsection

@section('head')
    <link href='/css/books/index.css' rel='stylesheet'>
    <link href='/css/books/_book.css' rel='stylesheet'>
@endsection

@section('content')
    <section id='newBooks'>
        <h2>Recently added books</h2>
        @foreach($newBooks as $book)
            @include('books._book')
        @endforeach
    </section>

    <section id='allBooks'>
        <h2>All books</h2>
        @foreach($books as $book)
            @include('books._book')
        @endforeach
    </section>
@endsection





@if($playlist)
    <h1>Your results are below for the playlist search:
        <em>{{ $playlist }}</em></h1>
    @if(count($playlistResults) == 0)
        No matches found.
    @else
        <fieldset>
            <ul>
                @foreach($playlistResults as $mood => $media)

                @endforeach
            </ul>
        </fieldset>
    @endif

@endif


