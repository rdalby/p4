@section('formTest')
    <form method='POST' action='/media/media-process'>
        @csrf
        <div class='instructions'>
            * Search by playlist name or playlist mood
        </div>
        <fieldset>
            <label> Name
                <input type='text' name='playlistName' value='{{ $playlistName ?? ''  }}'>

            </label><br>
            <label> Mood
                <select name='mood'>
                    <option value='{{ $mood ?? ''  }}'>{{ $mood ?? ''  }}</option>
                    <option value='happy'>happy</option>
                    <option value='excited'>excited</option>
                    <option value='mad'>mad</option>
                    <option value='sad'>sad</option>
                    <option value='meh'>meh</option>
                </select>
            </label>
        </fieldset>
        <br>

        <input type='submit' value='Search' class='btn btn-primary'>
    </form>
@endsection