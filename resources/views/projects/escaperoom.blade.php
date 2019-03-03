@extends('layouts.app')

@section('content')

<div id="escaperoom-description" class="project-single">
    <div class="project-hero-video">
        <div class="project-header">
            <video autoplay controls="controls" id="escaperoomVideo">
                <source src="/storage/escaperoom.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <div class="project-text" id="escaperoom-text">
        <ul class="team">
            <li>B. van Bunder&nbsp;|&nbsp;</li>
            <li>P.J. de Koning&nbsp;|&nbsp;</li>
            <li>N.M. Kool&nbsp;|&nbsp;</li>
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">
            <div class="responsibilities">
                <h3>Responsibilities</h3>
                <ul class="resp-list">
                    <li>Programming Arduino</li>
                    <li>Managing Electronics</li>
                    <li>Movie Editing</li>
                </ul>
            </div>
            <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                "Hi there Cyborg Hunters, it's me, Drake."
                <hr>
                <span class="bc-span">Drake, 2018</span>
            </blockquote>
            <p>
                The goal of this course was to create a simple puzzle using a microcontroller, and then to connect these puzzles to an overlaying network. Allowing for communication between the different microcontrollers.
            </p>
            <img src="/storage/escaperoom-header.jpg" alt="" class='detail-image'>
            <span>The cyborgs heart used in the escape room</span>
            <p>
                
            </p>
            <blockquote data-aos="fade-left" data-aos-duration="1600" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                "Why won't it respond, and why is the server kicking us out over and over again?"
                <hr>
                <span class="bc-span">me, while overloading the server</span>
            </blockquote>
            <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" data-aos-delay="700">
                "I'm sorry none of you can connect, something is wrong with the server, we are looking into it."
                <hr>
                <span class="bc-span">lecturer, after i crashed the servers</span>
            </blockquote>
            <p>
                These tools work together on the OOCSI network, where they can communicate and let the players have a constant thread running through the areas.
            </p>
            <img src="/storage/escaperoom-detail-4.jpg" alt="" class='detail-image'>
            <span style="padding-bottom:20px;">empty escape room</span>

            <img src="/storage/escaperoom-detail-2.jpg" alt="" class='detail-image'>
            <span>full escape room</span>
            <p>
                The goal for the players is to decide whether to trust the cyborg or the AI or none of the above, and pick the right phone number accordingly. During this they are faced with other challenges such as a seemingly dead cyborg in the middle of the room. 
            </p>
            <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                "We're sorry, the number you have dialed is not in service at this time..."
                <hr>
                <span>Response of dialing the wrong number</span>
                <hr>
                <img src="/storage/escaperoom-detail.jpg" alt="" class='detail-image' style="width:40%; margin-left:0;">
                <hr>
                <span>instructions</span>
            </blockquote>
            <a href="/storage/reports/escaperoom-report.pdf" download>
                <button>
                    Report
                    <img class="download" src="/storage/download-solid.svg" alt="download link">
                </button>
            </a>
        </div>
    </div>
</div>

@endsection