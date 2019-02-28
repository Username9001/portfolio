@extends('layouts.app')

@section('content')

<div id="holdie-description" class="project-single">
    <div class="project-hero-image">
        <div class="project-header">
            <h1>Holdie</h1>
        </div>
        <a href="#holdie-text" class="scroll-down"></a>
    </div>

    <div class="project-text" id="holdie-text">
        <div class="project-description">
            <h2>Project Description</h2>
            <p>
                Bug an object without adding new functionality to it. It should maintain it’s original purpose, while getting a character that people can bond and interact with.
            </p>
            <img src="/storage/holdie-detail.jpg" alt="" class='detail-image'/>
            <span>Detail of Holdie the pencil holder</span>
            <h2>Approach</h2>
            <p>
                    We decided to create a bugged pencilholder named Holdie. Holdie is long
                    forgotten, covered in dust on your desk, overwhelmed by modern technology.
                    While all he wants is to love, to be loved and to get a bit of attention every
                    now and then. Therefore Holdie tries to connect and interact with people. He
                    tries to get your attention and when he does feel love and affection, he gets
                    this warm feeling from within and shows his love to you.
            </p>
            <img src="/storage/holdie-header.jpg" alt="" class='detail-image'>
            <span>More detail description</span>

        </div>
    </div>
</div>


@endsection