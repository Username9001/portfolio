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
        <div class="project-description">
            <blockquote>
                "How to create a multi-user interface that controls the illumination scheme of the breakout area?"
                <hr>
                <span class="bc-span">Project Description</span>
            </blockquote>
            <p>
                The project goal
                was to create a multi-user interface for a special assigned room. This room is called the breakout area
                and it is equipped with Philips Hue lights. In this report we will answer the main question: ‘How to
                create a multi-user interface that controls the illumination scheme of the breakout area?’
            </p>

            <img src="/storage/helios-detail-2.jpg" alt="" class='detail-image'>
            <span>More spans to span descriptions</span>
            <p>
                With the premise that we live in a society with an ever increasing pace, where people need to quickly
                assimilate new information and go straight to business, we believe the demand for intuitive, multi-
                user and direct feedback systems will increase accordingly.
            </p>
            <blockquote>
                "Quote about user research"
                <hr>
                <span class="bc-span">User #59238</span>
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quo unde qui et consequuntur expedita nulla enim molestiae amet voluptate? Quam corrupti ut iusto ea necessitatibus, commodi voluptatum sequi id.
            </p>
            <img src="/storage/helios-detail-3.jpg" alt="" class='detail-image'>
            <span>More spans to span descriptions</span>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt omnis nobis, inventore blanditiis nostrum tempora fuga, nemo accusamus suscipit nam expedita enim!
            </p>
            <blockquote>
                "Quote about user research"
                <hr>
                <span class="bc-span">User #66987</span>
            </blockquote>
        </div>
    </div>
</div>


@endsection