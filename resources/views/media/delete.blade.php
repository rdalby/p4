@extends('layouts.master')

@section('head')
    <link href='/css/books/delete.css' rel='stylesheet'>
@endsection

@section('title')
    Confirm deletion: {{ $playlist->name }}
@endsection

@section('content')
    <h1 class="w3-xxxlarge w3-text-teal"><b>Confirm Deletion</b></h1>
    <hr style="width:50px;border:5px solid teal" class="w3-round">

    <p>Are you sure you want to delete <strong>{{ $playlist->name }}</strong>?</p>


    <form method='POST' action='/playlist/{{ $playlist->id }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type='submit' value='Yes, delete it!' class='btn btn-danger btn-small'>
    </form>

    <p class='cancel'>
        <a href='/playlist/{{ $playlist->id }}'>No, I changed my mind.</a>
    </p>

@endsection
