<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    @yield('head')
</head>


<body>
@if(session('alert'))
    <div class='alert'>{{ session('alert') }}</div>
@endif
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-teal w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;"
     id="mySidebar"><br>

    <div class="w3-container">
        <h3 class="w3-padding-64"><a href='/'><img src={{ asset('images/p4-logo-small.jpg') }} id='logo' alt='p4 logo'
                                                   class='logo'></a></h3>
    </div>


    @if (Route::has('login'))
        <div class="w3-bar-block">
            @auth
                <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-hover-white">Home</a>
                @foreach(config('app.nav1') as $link => $label)

                    <a href='/{{ $link }}' class="w3-bar-item w3-button w3-hover-white">{{ $label }}</a>

                @endforeach

                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a href='#' onClick='document.getElementById("logout").submit();'
                       class="w3-bar-item w3-button w3-hover-white">Logout</a>
                </form>

            @else
                <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hover-white">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hover-white">Register</a>
                @endif
                @foreach(config('app.nav') as $link => $label)

                    <a href='/{{ $link }}' class="w3-bar-item w3-button w3-hover-white">{{ $label }}</a>

                @endforeach
            @endauth
        </div>
    @endif


</nav>


!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    @yield('heading')


    <section>
        <table>
            <tr>
                @yield('content')
            </tr>

        </table>

    </section>
</div>


<footer>
    &copy; {{ date('Y') }}
    <a href='https://github.com/rdalby/p4'>View this project on Github</a>
</footer>
</body>
</html>