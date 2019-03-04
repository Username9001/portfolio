@extends('layouts.app')

@section('content')

        <div id="mugen-description" class="project-single">
            <div class="project-hero-video">
                <div class="project-header">
                    <video autoplay controls="controls" id="escaperoomVideo">
                        <source src="/storage/mugen-video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        
            <div class="project-text" id="mugen-text">
                <ul class="team">
                    <li>P.J.M de Koning&nbsp;|&nbsp;</li>
                    <li>P.H.R. Meulendijks&nbsp;|&nbsp;</li>
                    <li>S. Suzuki&nbsp;|&nbsp;</li>
                    <li>E.Y. Wubbels</li>
                </ul>
                <div class="project-description">
                    
                    <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                        "It is designed to mimic the natural opening movement of a flower, giving the music a blooming aesthetic."
                        <hr>
                    </blockquote>
                    <p>
                        The Mugen is a speaker that can be rotated around its own axis, providing the
                        user with the freedom to direct the music coming out of the speakers to any
                        direction they want. 
                    </p>
                    <img src="/storage/mugen-detail-6.jpg" alt="" class='detail-image' data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                    <span>Mugen first iteration</span>
                    <p>
                        It is designed to mimic the natural opening movement of
                        a flower, giving the music a ‘blooming’ aesthetic. This is configured by using
                        different modes, that are allocated to several magnetic contact points in the
                        corners of the pyramids.
                    </p>

                    <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                        "The way it closes makes me feel like I'm in control of the sound more directly."
                        <hr>
                        <span class="bc-span">User during interview</span>
                    </blockquote>
                    <img src="/storage/mugen-detail-4.jpg" alt="" class='detail-image'>
                    <span>New span to give detailed description</span>
                    <p>
                        By rotating the speakers outwards, the volume increases. Rotate them inwards to close and the music eventually stops.
                        It is completely wireless thanks to the use of bluetooth and
                        LiPo batteries, making it retain its dynamics without being interrupted by
                        cables or buttons.
                    </p>
                    <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                        "I may have dropped the transistors, but you blew up the batteries"
                        <hr>
                        <span class="bc-span">P.H.R. Meulendijks</span>
                    </blockquote>
                    <p>
                        Due to the size and shape of the speakers, it was necessary to transfer from the regular Arduino Uno to a smaller scaled Arduino Mini. Next to this the circuit boards needed to be small enough to fit in the pyramids, while retaining enough space to hold the amplifiers and other components. For this I made custom circuit boards.
                    </p>
                    <img src="/storage/mugen-detail-5.png" alt="" class='detail-image' style="filter:invert(100%)" data-aos="fade" data-aos-duration="2500" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                    <span>Custom printed circuit board layout for Mugen controller</span>
                    <video controls="controls" id="mugen-video" data-aos="zoom-in-down" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                        <source src="/storage/mugen-video.mp4" type="video/mp4">
                    </video>                    
                    <p>
                        The Mugen speakers give a haptic enhancement to the volume when you rotate it, as seen above. When two speakers move towards each other, the volume goes down and eventually when they touch and close, the volume drops to zero.
                    </p>
                    <img src="/storage/mugen-detail.jpg" alt="" class='detail-image'>
                    <span>Mugen being used during a bbq</span>
                    <div class="responsibilities">    
                        <h3>Responsibilities</h3>
                        <ul class="resp-list">
                            <li>Programming Arduino</li>
                            <li>Managing electronics</li>
                            <li>Creating custom circuit boards</li>
                        </ul>
                    </div>
                    <a href="https://github.com/Username9001/mugen/blob/master/Mugen_arduino.ino" target="_blank" rel="noopener noreferrer">
                        <button>Code</button>
                    </a>
     
                    <a href="/storage/reports/mugen-report.pdf" download>
                        <button>
                            <h3>Report</h3>
                            <img class="download" src="/storage/download-solid.svg" alt="download link">
                        </button>
                    </a>
                </div>

            </div>
        </div>

        <style>
        #mugen-video {
            width: 120%;
            margin-left: -10%;
        }
        </style>

@endsection