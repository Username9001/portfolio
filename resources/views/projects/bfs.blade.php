@extends('layouts.app')

@section('content')

<div id="bfs-description" class="project-single">
    <div class="project-hero-image">
        <div class="project-header">
            <h1>Basic Formgiving Skills</h1>
        </div>
        
        <a href="#bfs-text" class="scroll-down"></a>
    </div>
    <div class="project-text" id="bfs-text">
        <ul class="team">
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">
            <blockquote>
                "Let's go make something cool!"
                <hr>
                <span class="bc-span">Me, sometime</span>
            </blockquote>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium ea animi velit eaque, molestiae ipsa consectetur odit? Consectetur, officiis! Corporis omnis cum delectus itaque expedita. Porro nisi ab recusandae. Quas!
            </p>
            <img src="/storage/bfs-detail.jpg" alt="" class='detail-image'>
            <span>Socket based on cube & sphere</span>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ea accusamus deleniti veniam unde mollitia eos. Cumque unde esse nam.
            </p>
            <blockquote>
                "What the hell is that...&nbsp;&nbsp;&nbsp;...Is that a socket?!"
                <hr>
                <span class="bc-span">T. de Jong</span>
            </blockquote>
            <p>
                This socket is the combination of two essential spacial shapes, the cube and the sphere.
                Made robust to withstand the clumsiness people experience when plugging their electronics in sockets.
            </p>
            <div class="shift-left">
                <blockquote>
                    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta neque deserunt iusto. "
                        <img src="/storage/bfs-detail-2.jpg" alt="" class='detail-image'>
                        <span>assignment #</span>
                </blockquote>
                <blockquote style="margin-left:15%;">
                    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta neque deserunt iusto. "
                        <img src="/storage/bfs-detail-3.jpg" alt="" class='detail-image'>
                        <span>assignment #</span>
                </blockquote>
                <blockquote style="margin-left:30%;">
                        "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta neque deserunt iusto. "
                        <img src="/storage/bfs-detail-4.jpg" alt="" class='detail-image'>
                        <span>assignment #</span>
                    </blockquote>                
                <blockquote style="margin-left:45%;">
                    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta neque deserunt iusto. "
                        <img src="/storage/bfs-detail-5.jpg" alt="" class='detail-image'>
                        <span>assignment #</span>
                </blockquote>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, doloremque beatae. In incidunt repellat sit.
            </p>
        </div>
    </div>
</div>

<style>
.scroll-down, .scroll-down:before {
    border: 2px solid black;
}
.scroll-down:before {
    border-width: 0 0 2px 2px;
}
.project-header h1 {
    padding-top: 6vh;
}
@media (max-width: 580px) {
    blockquote {
        margin-left: -10%!important;
    }
}

</style>

@endsection
