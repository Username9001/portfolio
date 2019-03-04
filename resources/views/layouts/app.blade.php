<?php
ob_start("ob_gzhandler");
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio of Erik Wubbels, User Experience designer and web developer.">
        <meta name="theme-color" content="#151515"/>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Web App Manifest --}}
        <link rel="manifest" href="/manifest.json">
        <link rel="icon" href="/images/icons/icon-72x72.png">

        <title>Erik Wubbels</title>

        <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Google Analytics --}}
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106607115-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-106607115-2');
        </script>

    </head>
    <body class="smooth">
        <div id="app">
            <div id="navbar" class="navigation">
                <div class="navbar-logo">
                    <a href="/" name="home"><h1>Erik</h1></a>
                </div>
                <ul class="navbar-navigation">
                    <li><a href="/about" id="about-toggle">About </a></li>
                    <li class="dropdown">Projects 
                        <ul class="dropdown-content">
                            <li><a href="/projects/holdie">holdie</a></li>
                            <li><a href="/projects/helios">helios</a></li>
                            <li><a href="/projects/mugen">mugen</a></li>
                            <li><a href="/projects/olio">olio</a></li>
                            <li><a href="/projects/bfs">Formgiving</a></li>
                            <li style="margin-bottom:10px;"><a href="/projects/escaperoom">escape</a></li>
                            <li><a href="/clickb4it">clickb4it</a></li>
                            <li><a href="/tomstech">TomsTech</a></li>
                        </ul>
                    </li>
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

    <script src="{!! asset('/js/app.js') !!}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.4/jquery.lazy.min.js"></script>
    <script>
        $(function() {
            $('.lazy').lazy();
        });
    </script>


</html>
