@extends('layouts.master')

@section('title')

@endsection

@section('head')
@endsection

@section('content')


    <div class='user'>
        <p>Name: {{ $user->user->getName() }}</p>
        <p>email: {{ $user->user->getEmail() }}</p>

        <p>password: {{ $user->user->getPassword() }}</p>
    </div>
@endsection