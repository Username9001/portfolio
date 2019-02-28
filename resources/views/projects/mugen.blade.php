@extends('layouts.app')

@section('content')

        <div id="mugen-description" class="project-single">
            <div class="project-hero-image">
                <div class="project-header">
                    <h1>Mugen</h1>
                </div>
                <a href="#mugen-text" class="scroll-down"></a>
            </div>
            <div class="project-text" id="mugen-text">
                <ul class="team">
                    <li>P. de Koning&nbsp;|&nbsp;</li>
                    <li>P.H.R. Meulendijks&nbsp;|&nbsp;</li>
                    <li>S. Suzuki&nbsp;|&nbsp;</li>
                    <li>E.Y. Wubbels</li>
                </ul>
                <div class="project-description">
                    <blockquote>
                        "It is designed to mimic the natural opening movement of a flower, giving the music a blooming aesthetic."
                        <hr>
                        <span class="bc-span">S. Suzuki</span>
                    </blockquote>
                    <p>
                        The Mugen is a speaker that can be rotated around its own axis, providing the
                        user with the freedom to direct the music coming out of the speakers to any
                        direction they want. 
                    </p>
                    <img src="/storage/mugen-detail.jpg" alt="" class='detail-image'>
                    <span>Mugen detail description</span>
                    <p>
                        It is designed to mimic the natural opening movement of
                        a flower, giving the music a ‘blooming’ aesthetic. This is configured by using
                        different modes, that are allocated to several magnetic contact points in the
                        corners of the pyramids.
                    </p>
                    <blockquote>
                        "Something about the feedback on the rotation"
                        <hr>
                        <span class="bc-span">Feedback giver</span>
                    </blockquote>
                    <img src="/storage/mugen-detail-2.jpg" alt="" class='detail-image'>
                    <span>New span to give detailed description</span>
                    <p>
                        By rotating the speakers outwards, the volume increases. Rotate them inwards to close and the music eventually stops.
                        It is completely wireless thanks to the use of bluetooth and
                        LiPo batteries, making it retain its dynamics without being interrupted by
                        cables or buttons.
                    </p>
                    <blockquote>
                        "I may have dropped the transistors, but you blew up the batteries"
                        <hr>
                        <span class="bc-span">P.H.R. Meulendijks</span>
                    </blockquote>

                </div>
                <div class="project-images">

                </div>
            </div>
        </div>


@endsection