@extends('layouts.master')

@section('title')
    Add media
@endsection

@section('content')

    <h1>Add media</h1>

    <form method='POST' action='/media'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}
        <table>
            <tr>
                <td>
        <label for='title'>* Title</label>
                </td>
                <td>
        <input type='text' name='title' id='title' value='{{ old('title') }}'>
                </td>
            </tr>
            <tr>
                <td>
        <label for='author_id'>* Author</label>
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
        <label for='published_year'>* Published Year (YYYY)</label>
                </td>
                <td>
        <input type='text' name='published_year' id='published_year' value='{{ old('published_year') }}'>
                </td>
            </tr>
            <tr>
                <td>
        <label for='cover_url'>* Cover URL</label>
                </td>
                <td>
        <input type='text' name='cover_url' id='cover_url' value='{{ old('cover_url', 'http://') }}'>
                </td>
            </tr>
            <tr>
                <td>
        <label for='purchase_url'>* Purchase URL </label>
                </td>
                <td>
        <input type='text' name='purchase_url' id='purchase_url' value='{{ old('purchase_url', 'http://') }}'>
                </td>
            </tr>
            <tr>
                <td>
            <label>Mood</label>
                </td>
                <td>
                        <select>
                            @foreach($moods as $mood)
                               name='moods[]'
                            <option> {{ $mood->name }}</option>
                            @endforeach
                        </select>

                </td>
            </tr>

    </table>
        <input type='submit' class='btn btn-primary' value='Add book'>
    </form>

    @if(count($errors) > 0)
        <div class='error globalFormError'>Please fix the errors above.</div>
    @endif

@endsection