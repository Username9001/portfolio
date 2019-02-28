@extends('layouts.app')

@section('content')

<div id="escaperoom-description" class="project-single">
    <div class="project-hero-video">
        <div class="project-header">
            <video autoplay controls="controls" id="escaperoomVideo">
                <source src="/storage/escaperoom.mp4" type="video/mp4">
            </video>
            <h1>Cyborg Escape Room</h1>
        </div>
        {{-- <a href="#escaperoom-text" class="scroll-down"></a> --}}
    </div>

    <div class="project-text" id="escaperoom-text">
        <div class="project-description">
            <p>
                Escape the evil cyborgs in this escape room adventure.
            </p>
            <img src="/storage/escaperoom-header.jpg" alt="" class='detail-image'>
            <p>
                This escape room was part of a bigger game containing multiple escape rooms.
                The tokens and minigames that were part of this game were carried out by using the tools that we supplied and programmed.
                These tools work together on the OOCSI network, where they can communicate and let the players have a constant thread running through the areas.
            </p>
        </div>
    </div>
</div>


@endsection