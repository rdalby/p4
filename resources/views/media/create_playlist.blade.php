@extends('layouts.master')

@section('title')
    Create Playlist
@endsection

@section('content')

    <h1>Create Playlist</h1>

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