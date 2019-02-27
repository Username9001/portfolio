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
                Holdie seems like a regular pencil holder. Though when you almost forgot about it, it will remind you that it’s still around by shaking and lighting up to grab your attention.
            </p>
            <img src="/storage/escaperoom-header.jpg" alt="" class='detail-image'>
            <p>
                Through capacitive sensors in the double bottom of the pencil holder it registers the last time someone was using it. If it hasn’t been used for over a day it reminds you to leave your laptop and do some writing instead by grabbing your attention.
            </p>
        </div>
    </div>
</div>


@endsection