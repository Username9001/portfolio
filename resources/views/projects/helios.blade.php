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
            <video autoplay controls="controls" id="helios-video">
                <source src="/storage/helios-video.mp4" type="video/mp4">
            </video>
            <blockquote>
                "Create a multi-user interface that controls the illumination scheme for communal spaces"
                <hr>
                <span class="bc-span">Project Description</span>
            </blockquote>
            <p>
                Helios was designed to be an intuitive way of controlling the lighting within a shared environemnt.
                Using gestures to assign lighting schemes to parts of the room, you control your own part of the area.
            </p>
            <img src="/storage/helios-detail.jpg" alt="" class='detail-image' style="height: 400px">
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
            <img src="/storage/helios-detail-6.jpg" alt="" class='detail-image' style="height: 480px;">
            <span>More spans to span descriptions</span>
            <p>
                The system works using a Microsoft Kinect to track your gestures and sends this information through the panel to the Philips Hue System.
            </p>
            <blockquote>
                "Why would you want a party mode?"
                <hr>
                <span class="bc-span">Confused user during interview</span>
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nobis veniam quas animi odit illo inventore accusantium, blanditiis amet quos soluta deserunt facere doloremque, vitae id sunt a? Fugit dolore eaque, architecto inventore magnam quas recusandae, obcaecati quia ipsa sapiente atque. Voluptatum ex beatae soluta non nemo sunt aut doloremque?
            </p>
            <img src="/storage/helios-detail-4.jpg" alt="" class='detail-image'>
            <span>Helios at a demonstration</span>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, mollitia natus reprehenderit voluptatibus repellat nulla?
            </p>
            <img src="/storage/helios-detail-6.png" alt="" class='detail-image'>
            <span>Helios close-up</span>

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