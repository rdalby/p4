@extends('layouts.master')

@section('title')

@endsection

@section('head')
@endsection

@section('content')


    <div class='user'>
        <p>Name: {{ $name }}</p>
        <p>email: {{ $email }}</p>

        <p>password: {{ $password }}</p>
    </div>
@endsection