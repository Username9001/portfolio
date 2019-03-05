@extends('layouts.app')

@section('content')

<div id="holdie-description" class="project-single">
    <div class="project-hero-image">
        <div class="project-header">
            <h1>Holdie</h1>
        </div>
        <a href="#holdie-text" class="scroll-down" aria-label="scroll"></a>
    </div>

    <div class="project-text" id="holdie-text">
        <ul class="team">
            {{-- <li>Team:</li> --}}
            <li>T. de Jong&nbsp;|&nbsp;</li>
            <li>B.J. Muntinga&nbsp;|&nbsp;</li>
            <li>S. Teekens&nbsp;|&nbsp;</li>
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">

            {{-- <h2>Project Description</h2> --}}
            <blockquote data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                Bug an object without adding new functionality to it. It should maintain it’s original purpose, while getting a character that people can bond and interact with
                <hr>
                <span class="bc-span">project description</span>
            </blockquote>
            <img src="/storage/holdie-detail-3.jpg" alt="" class='detail-image lazy' data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" />
            <hr>
            <span>Detail of Holdie the pencil holder</span>
            <div>
                <p>
                    We created a bugged pencilholder named Holdie. Holdie is long
                    forgotten, covered in dust on your desk, overwhelmed by modern technology.
                    While all he wants is to love, to be loved and to get a bit of attention every
                    now and then. 
                </p>
            </div>
            <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                "Long forgotten, in a corner of your desk, stands Holdie..."
                <hr>
                <img src="/storage/holdie-detail-4.jpg" alt="" class='detail-image lazy' style="max-width:50%;">
            </blockquote>
            <blockquote style="text-align:right;" data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                "...shaking and blinking to grab your attention."
            </blockquote>
            <div>
                <p>
                    Therefore Holdie tries to connect and interact with people. He
                    tries to get your attention and when he does feel love and affection, he gets
                    this warm feeling from within and shows his love to you.
                </p>
            </div>
            <div data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                <img src="/storage/holdie-detail-5.jpg" alt="" class='detail-image lazy' style="object-fit: cover;height: 280px;">
                <span>More detail description</span>
            </div>
                <p>
                    This is done through blinking and shaking after not having using anything from the pencil holder for a about a day.
                </p>
            <div>
                <p>
                    The responsiveness is controlled by capacitive sensors in the on the inside of the 3D printed model of Holdie, measuring whether someone has been near to trigger a time-out on its cry for attention.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                <img src="/storage/holdie-detail.jpg" alt="" class='detail-image lazy'>
                <span class="right">text</span>
            </div>
            <div class="responsibilities">
                <h3>Responsibilities</h3>
                <ul class="main-responsibilities">
                    <li>Programming Arduino</li>
                    <li>Managing electronics</li>
                </ul>
            </div>
            <a href="https://github.com/Username9001/holdie/blob/master/Holdie_arduino.ino" rel="noopener noreferrer" target="_blank">
                <button>Code</button>
            </a>
            <a href="/storage/reports/holdie-report.pdf" download>
                <button>
                    Report
                    <img class="download" src="/storage/download-solid.svg" alt="download link">
                </button>
            </a>

        </div>
    </div>
</div>


@endsection