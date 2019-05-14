@extends('layouts.master')
@include('layouts.form')

@section('title')

@endsection

@section('head')
@endsection

@section('content')
    <table>
        <tr>
            <td>
                @yield('formTest')
            </td>
            <td>


                @if($mood)
                    <h1>@if($userName) {{ $userName }} @endif your results are below for your current mood:
                        <em>{{ $mood }}</em></h1>
                    @if(count($mediaResults) == 0)
                        No matches found.
                    @else
                        <fieldset>
                            <ul>
                                @foreach($mediaResults as $mood => $media)
                                    <div class='media'>
                                        <h3>{{ $mood }}</h3>
                                        <li class="displayMediaResult">
                                            {{ $media['title'] }}
                                        </li>
                                    </div>
                                    @if($media['song_url'] != null)
                                        <div class='cover'>
                                            <iframe width="560" height="315" src='<?= $media['song_url'] ?>'
                                                    frameborder="0"
                                                    allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                        </div>
                                    @endif
                                    @if($media['cover_url'] != null)
                                        <img src='{{ $media['cover_url'] }}' alt='video image {{ $mood }}'>

                                    @endif
                                @endforeach
                            </ul>
                        </fieldset>
                    @endif

                @endif
            </td>
        </tr>
    </table>

@endsection

