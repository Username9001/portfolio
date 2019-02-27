<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Erik Wubbels</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Rambla:700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="navbar" class="navigation">
            <div class="navbar-logo">
                <a href="/"><h1>Erik</h1></a>
            </div>
            <ul class="navbar-navigation">
                <a href="/#projects"><li>Projects </li></a>
                <a href="/about" id="about-toggle"><li>About </li></a>
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
    </body>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{!! asset('/js/app.js') !!}"></script>
    <script>
        AOS.init();
    </script>

    <script type="text/javascript">
        var timer;

        $(window).on('mousemove, touchmove', function () {
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

    typewriter.typeString('I am Erik Wubbels, industrial designer and web developer.')
        .pauseFor(600)
        .typeString(' Scroll down to view the projects I have worked on. ')
        .pauseFor(600)
        .typeString('<a href="/about">Or click here to read more about me.</a>')
        .pauseFor(60000)
        .start();
    </script>
</html>
