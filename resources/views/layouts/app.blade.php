<?php
ob_start("ob_gzhandler");
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio of Erik Wubbels, User Experience designer and web developer.">
        <meta name="theme-color" content="#141414"/>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Erik Wubbels</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet" type="text/css"> --}}
        {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> --}}
        
        {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
        <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        

    </head>
    <body>
        <div id="app">
            <div id="navbar" class="navigation">
                <div class="navbar-logo">
                    <a href="/" name="home"><h1>Erik</h1></a>
                </div>
                <ul class="navbar-navigation">
                    <li><a href="/#projects" name="projects">Projects </a></li>
                    <li><a href="/about" id="about-toggle" name="about">About </a></li>
                </ul>
            </div>

            <div class="main">
                @yield('content')
            </div>

            <div class="footer">
                <div class="copyright-message">
                    <h5>&copy;Erik Wubbels 2019</h5>
                </div>
            </div>
        </div>
    </body>

    <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>

    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{!! asset('/js/app.js') !!}"></script>
    <script>
        AOS.init();
    </script>

    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.4/jquery.lazy.min.js"></script>
    <script>
        $(function() {
            $('.lazy').lazy();
        });
    </script>

    <script type="text/javascript">
        var timer;

        $(window).on('mousemove touchmove', function () {
        $('#navbar').addClass('show');
        try {
            clearTimeout(timer);
        } catch (e) {}
        timer = setTimeout(function () {
            $('#navbar').removeClass('show');
        }, 1800);
        });
    </script>

    <script src="https://unpkg.com/typewriter-effect/dist/core.js"></script>
    

    <script>
    var writer = document.getElementById('welcome-message');

    var typewriter = new Typewriter(writer, {
        loop: true,
        delay: 60
    });

    typewriter.typeString('I am Erik Wubbels, user experience designer and web developer.')
        .pauseFor(600)
        .typeString(' Scroll down to view the projects I have worked on. ')
        .pauseFor(600)
        .typeString('<a href="/about">Or click here to read more about me.</a>')
        .pauseFor(60000)
        .start();
    </script>
</html>
