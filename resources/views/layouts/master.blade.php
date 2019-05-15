<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    @yield('head')
</head>

<style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
    .w3-half img:hover{opacity:1}
</style>


<body>
@if(session('alert'))
    <div class='alert'>{{ session('alert') }}</div>
@endif
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-teal w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h3 class="w3-padding-64"><a href='/'><img src={{ asset('images/p4-logo-small.jpg') }} id='logo' alt='p4 logo' class='logo'></a></h3>
    </div>
    <div class="w3-bar-block">

            @foreach(config('app.nav') as $link => $label)

                        <a href='/{{ $link }}' class="w3-bar-item w3-button w3-hover-white">{{ $label }}</a>

            @endforeach

    </div>
</nav>


!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Media</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Showcase</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>

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