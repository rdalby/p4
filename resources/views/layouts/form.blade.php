@section('formTest')
    <form method='POST' action='/media/media-process'>
        @csrf
        <div class='instructions'>
            * Search by name or mood
        </div>
        <fieldset>
            <label> Name
                <input type='text' name='userName' value='{{ $userName ?? ''  }}'>
                @include('error', ['fieldName' => 'userName'])
            </label><br>
            <label> Mood
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
        <br>

        <input type='submit' value='Search' class='btn btn-primary'>
    </form>
@endsection