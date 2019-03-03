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
            <li>A.F. Bundel&nbsp;|&nbsp;</li>
            <li>N.N. Valiera Mascarenhas&nbsp;|&nbsp;</li>
            <li>S.J.M. Vughs&nbsp;|&nbsp;</li>
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">
            <div class="responsibilities">
                <h3>Responsibilities</h3>
                <ul class="resp-list">
                    <li>Programming Arduino</li>
                    <li>Managing electronics</li>
                    <li>Formgiving</li>
                </ul>
            </div>
            <video autoplay controls="controls" id="helios-video">
                <source src="/storage/helios-video.mp4" type="video/mp4">
            </video>
            <blockquote data-aos="fade-left" data-aos-duration="1800" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                "Create a multi-user interface that controls the illumination scheme for communal spaces"
                <hr>
                <span class="bc-span">Project Description</span>
            </blockquote>
            <p>
                Helios was designed to be an intuitive way of controlling the lighting within a shared environemnt.
                Using gestures to assign lighting schemes to parts of the room, you control your own part of the area.
            </p>
            <img src="/storage/helios-detail.jpg" alt="" class='detail-image' style="object-fit:cover; height: 300px;" data-aos="fade" data-aos-duration="3000" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
            <span>Helios close up</span>
            <p>
                The final form of the Helios panel mirrors the sun, displaying straight lines centered from within, creating a bird's eye view from the room reflected in the panel.
            </p>
            <img src="/storage/helios-detail-6.jpg" alt="" class='detail-image' style="height: 480px;" data-aos="fade" data-aos-duration="3000" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
            <span>Fully functional</span>
            <p>
                The system works using a Leap Motion technology to track your gestures and sends this information through the panel to the Philips Hue System.
            </p>
            <blockquote data-aos="fade-left" data-aos-duration="1800" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                "Why would you want a party mode?"
                <hr>
                <span class="bc-span">Confused user during interview</span>
            </blockquote>
            <img src="/storage/helios-detail-4.jpg" alt="" class='detail-image' data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
            <span>Helios at a demonstration</span>
            {{-- <img src="/storage/helios-detail-6.png" alt="" class='detail-image' data-aos="fade" data-aos-duration="2500" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom"> --}}
            {{-- <span>Helios close-up</span> --}}
            <a href="https://github.com/Username9001/helios.git" target="_blank">
                <button>Code</button>
            </a>
            <a href="/storage/reports/helios-report.pdf" download>
                <button>
                    Report
                    <img class="download" src="/storage/download-solid.svg" alt="download link">
                </button>
            </a>
        </div>
    </div>
</div>

<style scoped>
    .detail-image {
        object-fit: cover;
    }
    #helios-video {
        margin: -40px 0 40px 0;
    }
</style>
@endsection