<div class='media cf'>
    <img class='cover' src='{{ $media->cover }}' alt='Cover image for media {{ $media->title }}'>
    <a href='/media/{{ $media->id }}'><h3>{{ $media->title }}</h3></a>
    <ul>
        <li>Mood {{ $media->mood->name }}</li>
        <li>Type {{ $media->type->name }}</li>
        <li>by {{ $media->author->getFullName() }}</li>
        <li>Added {{ $media->created_at->format('m/d/y g:ia') }}</li>
    </ul>
</div>
