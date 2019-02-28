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
        <div class="project-description">
            <blockquote>
                "Hi there Cyborg Hunters, it's me, Drake."
                <hr>
                <span class="bc-span">-Drake, 2018</span>
            </blockquote>
            <p>
                Escape the evil cyborgs in this escape room adventure.
            </p>
            <img src="/storage/escaperoom-header.jpg" alt="" class='detail-image'>
            <span>Span describing the escape room and use of OOCSI</span>
            <p>
                This escape room was part of a bigger game containing multiple escape rooms.
                The tokens and minigames that were part of this game were carried out by using the tools that we supplied and programmed.
            </p>
            <blockquote>
                "Why won't it work, and why is the server kicking us out over and over again."
                <hr>
                <span class="bc-span">-me, while overloading the server</span>
            </blockquote>
            <blockquote>
                "I'm sorry guys, something is wrong with the servers, we are looking into it."
                <hr>
                <span class="bc-span">-lecturer, after i crashed the servers</span>
            </blockquote>
            <p>
                These tools work together on the OOCSI network, where they can communicate and let the players have a constant thread running through the areas.
            </p>
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