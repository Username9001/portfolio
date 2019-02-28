@extends('layouts.app')

@section('content')

<div id="helios-description" class="project-single">
    <div class="project-hero-image">
        <div class="project-header">
            <h1>Helios</h1>
        </div>
        
        <a href="#helios-text" class="scroll-down"></a>
    </div>
    <div class="project-text" id="helios-text">
        <ul class="team">
            {{-- <li>Team:</li> --}}
            <li>A. Bundel&nbsp;|&nbsp;</li>
            <li>N. Mascarenhas&nbsp;|&nbsp;</li>
            <li>S. Vughs&nbsp;|&nbsp;</li>
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">
            <blockquote>
                "Create a multi-user interface that controls the illumination scheme for communal spaces"
                <hr>
                <span class="bc-span">Project Description</span>
            </blockquote>
            <p>
                Helios was designed to be an intuitive way of controlling the lighting within a shared environemnt.
                Using gestures to assign lighting schemes to parts of the room, you control your own part of the area.
            </p>
            <img src="/storage/helios-detail-2.jpg" alt="" class='detail-image'>
            <span>More span descriptions</span>
            <p>
                Something something project description
            </p>
            <blockquote>
                "Quote about user research"
                <hr>
                <span class="bc-span">User #59238</span>
            </blockquote>
            <p>
                The system had gone through a handful of iterations before arriving at the final choice for the Helios panel.
                Displaying straight lines centered from within, creating a bird's eye view from the room reflected in the panel.
            </p>
            <img src="/storage/helios-detail-3.jpg" alt="" class='detail-image'>
            <span>More spans to span descriptions</span>
            <p>
                The system works using a Microsoft Kinect to track your gestures and sends this information through the panel to the Philips Hue System.
            </p>
            <blockquote>
                "Why would you want a party mode?"
                <hr>
                <span class="bc-span">Confused user during interview</span>
            </blockquote>
        </div>
    </div>
</div>


@endsection