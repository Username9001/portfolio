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
            <img src="/storage/helios-detail-3.jpg" alt="" class='detail-image'>
            <span>More spans to span descriptions</span>
            <p>
                If one of the areas is occupied and already controlled you will see this through the lighting in the panel itself. 
            </p>
        </div>
    </div>
</div>


@endsection