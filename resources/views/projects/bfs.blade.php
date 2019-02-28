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
        <div class="project-description">
            <p>
                I am able to make shapes out of materials.
            </p>
            <img src="/storage/bfs-detail.jpg" alt="" class='detail-image'>
            <p>
                Shaping things in shapes is fun.
            </p>
            <p>
                This socket is the combination of two essential spacial shapes, the cube and the sphere.
                Made robust to withstand the clumsiness people experience when plugging their electronics in sockets.
            </p>
        </div>
    </div>
</div>


@endsection