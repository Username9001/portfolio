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

            <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                Design a module for an escape room. Then make it communicate with other modules through a simple systems-interaction fabric, the OOCSI network. Lastly, make a level in an escape room, using these modules.
                <hr>
                <span>Project Description</span>
            </blockquote>
            <p>
                The module is a 3D printed beating heart, belonging to the dead cyborg that is in the middle of the room.
                This module is designed to create a tense and pressured atmosphere for the players. And help the level designers to use it as a measurement through light.
            </p>
            <img src="/storage/escaperoom-header.jpg" alt="" class='detail-image'>
            <span>The cyborg heart</span>
            <p>
                The goal of the level is to decide whether to trust the cyborg or the AI or none of the above, and pick the right phone number accordingly. During this they are faced with other challenges such as a seemingly dead cyborg in the middle of the room. 
            </p>
            <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                "We're sorry, the number you have dialed is not in service at this time..."
                <hr>
                <span>Response of dialing the wrong number</span>
                <hr>
                <img src="/storage/escaperoom-detail.jpg" alt="" class='detail-image lazy' style="width:40%; margin-left:0;">
                <hr>
                <span>instructions</span>
            </blockquote>
            <p>
                Facing different challenges and triggering the right modules will help you escape the room.
            </p>
            <img src="/storage/escaperoom-detail-4.jpg" alt="" class='detail-image lazy'>
            <span style="padding-bottom:20px;">empty escape room</span>

            <img src="/storage/escaperoom-detail-2.jpg" alt="" class='detail-image lazy'>
            <span>full escape room</span>
            <div class="responsibilities">
                <h3>Responsibilities</h3>
                <ul class="resp-list">
                    <li>Programming Arduino</li>
                    <li>Managing Electronics</li>
                    <li>Movie Editing</li>
                </ul>
            </div>
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