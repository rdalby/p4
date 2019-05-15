@extends('layouts.master')

@section('title')
    Add media
@endsection

@section('content')

    <h1>Add media</h1>

    <form method='POST' action='/media/create'>
        <div class='details'>* All Fields Required fields</div>
        {{ csrf_field() }}

        <table>
            <tr>
                <td>
        <label for='title'>Title</label>
                </td>
                <td>
        <input type='text' name='title' id='title' value='{{ old('title') }}'>
                </td>
            </tr>
            <tr>
                <td>
        <label for='author_id'>Creator</label>
                </td>
                <td>
                <select name='author_id'>
            <option value=''>Choose one...</option>
            @foreach($authors as $author)
                <option value='{{ $author->id }}' {{ (old('author_id') == $author->id) ? 'selected' : '' }}>{{ $author->getFullName() }}</option>
            @endforeach
        </select>
                </td>
            </tr>
            <tr>
                <td>
        <label for='cover_url'>Cover</label>
                </td>
                <td>
        <input type='text' name='cover' id='cover' value='{{ old('cover', 'http://') }}'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='url'>URL</label>
                </td>
                <td>
                    <input type='text' name='url' id='url' value='{{ old('url', 'http://') }}'>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Type</label>
                </td>
                <td>
                    <select name="type">
                        @foreach($types as $type)
                            <option value='{{ $type->id }}' {{ (old('type') == $type->id) ? 'selected' : '' }}>{{ $type->name }}</option>
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
        <input type='submit' class='btn btn-primary' value='Add media'>
    </form>

    @if(count($errors) > 0)
        <div class='error globalFormError'>Please fix the errors above.</div>
    @endif

@endsection