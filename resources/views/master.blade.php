<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <link href={{ asset('/css/p4.css') }} rel='stylesheet'>

    @yield('head')
</head>
<body>
<header>
    <a href='/'><img src={{ asset('images/p4-logo.jpg') }} id='logo' alt='p4 logo' class='logo'></a>
</header>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>


<section>
    <table>
        <tr>
            @yield('content')
        </tr>

    </table>

</section>

<footer>
    &copy; {{ date('Y') }}
    <a href='https://github.com/rdalby/p4'>View this project on Github</a>
</footer>
</body>
</html>