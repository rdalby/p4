@section('formTest')
    <form method='POST' action='/media/media-process'>
        @csrf
        <div class='instructions'>
            * Required field
        </div>
        <fieldset>
            <label>* Name
                <input type='text' name='userName' value='{{ $userName ?? ''  }}'>
                @include('error', ['fieldName' => 'userName'])
            </label><br>
            <label>* Mood
                <select name='mood'>
                    <option value='{{ $mood ?? ''  }}'>{{ $mood ?? ''  }}</option>
                    <option value='happy'>Happy</option>
                    <option value='excited'>Excited</option>
                    <option value='mad'>Mad</option>
                    <option value='sad'>Sad</option>
                    <option value='meh'>Meh</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <label>Media Preference:</label><br>
            <label>
                <input type='checkbox'
                       name='comicCheck' @isset($comicCheck){{ ($comicCheck) ? 'checked' : '' }}@endisset>
                Comic
            </label>
            <label>
                <input type='checkbox' name='bookCheck' @isset($bookCheck){{ ($bookCheck) ? 'checked' : '' }}@endisset>
                Book
            </label>
            <label>
                <input type='checkbox'
                       name='videoCheck' @isset($videoCheck){{ ($videoCheck) ? 'checked' : '' }}@endisset>
                Video
            </label>
            <label>
                <input type='checkbox'
                       name='musicCheck' @isset($musicCheck){{ ($musicCheck) ? 'checked' : '' }}@endisset>
                Music
            </label>
        </fieldset>

        <input type='submit' value='Search' class='btn btn-primary'>
    </form>
@endsection