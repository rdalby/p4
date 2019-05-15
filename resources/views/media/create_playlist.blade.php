@extends('layouts.master')

@section('title')
    Create Playlist
@endsection

@section('heading')
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Playlist</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Create</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>
@endsection

@section('content')


    <form method='POST' action='/media/create/playlist'>
        <div class='details'>* All Fields Required fields</div>
        {{ csrf_field() }}

        <table>
            <tr>
                <td>
                    <label for='name'>Playlist Name</label>
                </td>
                <td>
                    <input type='text' name='name' id='playlistName' value='{{ old('playlistName') }}'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='title'>Creator</label>
                </td>
                <td>
                    <select multiple="multiple" name='title[]' id="title">
                        @foreach($titles as $title)
                            <option value='{{ $title->id }}' {{ (old('title') == $title->id) ? 'selected' : '' }}>{{ $title->title }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Mood</label>
                </td>
                <td>
                    <select name="mood">
                        @foreach($moods as $mood)
                            <option value='{{ $mood->id }}' {{ (old('mood') == $mood->id) ? 'selected' : '' }}>{{ $mood->name }}</option>
                        @endforeach
                    </select>

                </td>
            </tr>

        </table>
        <br>
        <input type='submit' class='btn btn-primary' value='Create Playlist'>
    </form>

    @if(count($errors) > 0)
        <div class='error globalFormError'>Please fix the errors above.</div>
    @endif

@endsection