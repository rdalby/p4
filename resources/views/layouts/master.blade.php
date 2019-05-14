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