@extends('layouts.app')

@section('content')

<div id="bfs-description" class="project-single">
    <div class="project-hero-image">
        <div class="project-header">
            <h1>Basic Formgiving Skills</h1>
        </div>
        
        <a href="#bfs-text" class="scroll-down" aria-label="scroll"></a>
    </div>
    <div class="project-text" id="bfs-text">
        <ul class="team">
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">
            <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                "What the hell is that...&nbsp;&nbsp;&nbsp;...Is that a socket?!"
                <hr>
                <span class="bc-span">T. de Jong</span>
            </blockquote>
            <p>
                In this course I learned about formgiving skills. Through ideation of form and critically arguing my choices and creating these forms in a short amount of time.
            </p>
            <img src="/storage/bfs-detail.jpg" alt="" class='detail-image lazy' data-aos="fade" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
            <span>Socket based on cube & sphere</span>
            <p>
                During the course I made four objects, each within one or two weeks. Starting out horribly I made some decent progress towards the end. Below are the assignments final deliverables.
            </p>
            <div class="shift-left">
                <blockquote data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                    Socket Copy
                        <img src="/storage/bfs-detail-2.jpg" alt="" class='detail-image lazy'>
                        <span class="right">Deliverable 1: Copying an existing socket shape</span>
                </blockquote>
                <blockquote style="margin-left:15%;" data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                    Form Combination
                        <img src="/storage/bfs-detail-3.jpg" alt="" class='detail-image lazy'>
                        <span class="right">Deliverable 2: Combine two shapes into a coherent shape. Combined a box with a cilinder, adding a lip for flow.</span>
                </blockquote>
                <blockquote style="margin-left:30%;" data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                    Form Copies in Different Materials
                        <img src="/storage/bfs-detail-4.jpg" alt="" class='detail-image lazy'>
                        <span class="right">Deliverable 3: Copying a single shape in different materials. Materials used: Stone, Wood, Aluminium</span>
                    </blockquote>                
                <blockquote style="margin-left:45%;" data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                    Design a socket
                        <img src="/storage/bfs-detail-5.jpg" alt="" class='detail-image lazy'>
                        <span class="right">Deliverable 4: This socket is the combination of two essential spacial shapes, the cube and the sphere. Made robust to withstand the clumsiness people experience when plugging their electronics in sockets.</span>
                </blockquote>
            </div>
            <p>
                For the third and fourth deliverable I wanted to use Aluminium. To do this I made a casting oven and went over countless failed iterations, while eventually getting a decent shape for the third deliverable. The fourth, however was a shape that was a bit too much for a garden oven. 
            </p>
            <a href="/storage/reports/bfs-report.pdf" download>
                <button>
                    Report
                    <img class="download" src="/storage/download-solid.svg" alt="download link">
                </button>
            </a>
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
    padding-top: 20%;
    font-size: 7.2rem;
}
@media (max-width: 800px) {
    .project-header h1 {
        font-size: 4.8rem;
    }
}

@media (max-width: 580px) {
    blockquote {
        margin-left: -10%!important;
    }
    .project-header h1 {
        font-size: 3.2rem;
        padding-top: 60%;
    }
}

</style>

@endsection
