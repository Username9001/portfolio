@extends('layouts.app')

@section('content')

<div id="escaperoom-description" class="project-single">
    <div class="project-hero-video">
        <div class="project-header">
            <video autoplay controls="controls" id="escaperoomVideo">
                <source src="/storage/escaperoom.mp4" type="video/mp4">
            </video>
        </div>
        {{-- <a href="#escaperoom-text" class="scroll-down"></a> --}}
    </div>

    <div class="project-text" id="escaperoom-text">
        <ul class="team">
            <li>B. van Bunder&nbsp;|&nbsp;</li>
            <li>P. de Koning&nbsp;|&nbsp;</li>
            <li>N. Kool&nbsp;|&nbsp;</li>
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">
            <blockquote>
                "Hi there Cyborg Hunters, it's me, Drake."
                <hr>
                <span class="bc-span">-Drake, 2018</span>
            </blockquote>
            <p>
                The goal of this course was to create a simple puzzle using a microcontroller, and then to connect these puzzles to an overlaying network. Allowing for communication between the different microcontrollers.
            </p>
            <img src="/storage/escaperoom-header.jpg" alt="" class='detail-image'>
            <span>Span describing the escape room and use of OOCSI</span>
            <p>
                
            </p>
            <blockquote>
                "Why won't it work, and why is the server kicking us out over and over again?"
                <hr>
                <span class="bc-span">me, while overloading the server</span>
            </blockquote>
            <blockquote>
                "I'm sorry guys, something is wrong with the servers, we are looking into it."
                <hr>
                <span class="bc-span">lecturer, after i crashed the servers</span>
            </blockquote>
            <p>
                These tools work together on the OOCSI network, where they can communicate and let the players have a constant thread running through the areas.
            </p>
            <img src="/storage/escaperoom-header.jpg" alt="" class='detail-image'>
            <span>description</span>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ea pariatur eaque voluptate praesentium, facere fugiat corrupti, quae fuga dolor et porro a vitae ullam asperiores ducimus consequatur quibusdam unde.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo accusamus voluptas assumenda minus sit numquam et sed error quia est.
            </p>
            <blockquote>
                "Quote about OOCSI network"
                <hr>
                <span class="bc-span">someone</span>
            </blockquote>
        </div>
    </div>
</div>

<style>
.project-header h1 {
    position: absolute;
    margin-top: 30vh;
}
</style>

@endsection