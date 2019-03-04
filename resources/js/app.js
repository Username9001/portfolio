window.$ = window.jQuery = require('jquery');

import AOS from 'aos';
AOS.init();

import Typewriter from 'typewriter-effect/dist/core';

// Navbar Animation
var timer;
$(window).on('mousemove touchmove', function (e) {
    var upSide = (window.innerHeight)/4;
    var mouseY=(e.pageY - $(window).scrollTop());
    if(mouseY<upSide) {
        $('#navbar').addClass('show');
    }
    try {
        clearTimeout(timer);
    } catch (e) {}
    if($('.dropdown-content').is(':hover')) {

    } else {
        timer = setTimeout(function () {
            $('#navbar').removeClass('show');
        }, 2800);
    }
});

// Typewriter
var writer = document.getElementById('welcome-message');
var typewriter = new Typewriter(writer, {
    loop: true,
    delay: 40
});
typewriter.typeString('I am Erik Wubbels, user experience designer and web developer.')
    .pauseFor(400)
    .typeString(' Scroll down to view some of my projects. ')
    .pauseFor(400)
    .typeString('<a href="/about">Or click here to read more about me.</a>')
    .pauseFor(60000)
    .start();

