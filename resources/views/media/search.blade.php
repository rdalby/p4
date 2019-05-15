@extends('layouts.master')
@include('layouts.form')

@section('title')

@endsection

@section('head')
@endsection
@section('heading')
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Playlist</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Search</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>
@endsection

@section('content')
    <table>
        <tr>
            <td>
                @yield('formTest')
            </td>
            <td>


                @if($mood)
                    <h1>Your results are below for your current mood:
                        <em>{{ $mood }}</em></h1>
                    @if(count($playlistResults) == 0)
                        No matches found.
                    @else
                        <fieldset>
                            <ul>
                                @foreach($playlistResults as $mood => $playlist)
                                    <div class='media'>
                                        <h3>{{ $mood }}</h3>
                                        <li class="displayMediaResult">
                                            {{ $playlist['name'] }}
                                        </li>
                                    </div>
                                @endforeach
                            </ul>
                        </fieldset>
                    @endif

                @endif

            </td>
        </tr>
    </table>

@endsection