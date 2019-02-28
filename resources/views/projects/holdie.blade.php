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
        <ul class="team">
            {{-- <li>Team:</li> --}}
            <li>T. de Jong&nbsp;|&nbsp;</li>
            <li>B. Muntinga&nbsp;|&nbsp;</li>
            <li>S. Teekens&nbsp;|&nbsp;</li>
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">
            {{-- <h2>Project Description</h2> --}}
            <blockquote>
                "Bug an object without adding new functionality to it. It should maintain it’s original purpose, while getting a character that people can bond and interact with."
                <hr>
                <span class="bc-span">project description</span>
            </blockquote>
            <img src="/storage/holdie-detail.jpg" alt="" class='detail-image'/>
            <span>Detail of Holdie the pencil holder</span>
            <h2>Approach</h2>
            <p>
                    We created a bugged pencilholder named Holdie. Holdie is long
                    forgotten, covered in dust on your desk, overwhelmed by modern technology.
                    While all he wants is to love, to be loved and to get a bit of attention every
                    now and then. 
            </p>
            <blockquote>
                "Quote From Interview"
                <hr>
                <span class="bc-span">Crazy 1st year student</span>
            </blockquote>
            <p>
                    Therefore Holdie tries to connect and interact with people. He
                    tries to get your attention and when he does feel love and affection, he gets
                    this warm feeling from within and shows his love to you.
            </p>
            <img src="/storage/holdie-header.jpg" alt="" class='detail-image'>
            <span>More detail description</span>
            <p>
                More description about the design process and multiple iterations of the form of Holdie
            </p>
            <p>
                Description part about how the technology works and makes itself noticable.
            </p>
            <blockquote>
                "Quote about Holdie getting someone throwing their laptops away and becoming a writer"
                <hr>
                <span class="bc-span">1st year student</span>
            </blockquote>
        </div>
    </div>
</div>


@endsection