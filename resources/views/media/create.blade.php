@extends('layouts.master')

@section('title')
    Add media
@endsection

@section('heading')
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Media</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Create</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>
@endsection

@section('content')


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
                    @include('error', ['fieldName' => 'title'])
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
                    @include('error', ['fieldName' => 'author'])
                </td>
            </tr>
            <tr>
                <td>
                    <label for='cover_url'>Cover</label>
                </td>
                <td>
                    <input type='text' name='cover' id='cover' value='{{ old('cover', 'http://') }}'>
                    @include('error', ['fieldName' => 'cover'])
                </td>
            </tr>
            <tr>
                <td>
                    <label for='url'>URL</label>
                </td>
                <td>
                    <input type='text' name='url' id='url' value='{{ old('url', 'http://') }}'>
                    @include('error', ['fieldName' => 'url'])
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
                    @include('error', ['fieldName' => 'type'])
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
                    @include('error', ['fieldName' => 'mood'])
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