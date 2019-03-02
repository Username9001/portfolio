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
            <li>B.J. Muntinga&nbsp;|&nbsp;</li>
            <li>S. Teekens&nbsp;|&nbsp;</li>
            <li>E.Y. Wubbels</li>
        </ul>
        <div class="project-description">
            {{-- <h2>Project Description</h2> --}}
            <blockquote data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                "Bug an object without adding new functionality to it. It should maintain it’s original purpose, while getting a character that people can bond and interact with."
                <hr>
                <span class="bc-span">project description</span>
            </blockquote>
            <img src="/storage/holdie-detail-3.jpg" alt="" class='detail-image' data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" />
            <hr>
            <span>Detail of Holdie the pencil holder</span>
            <div>
                <h2>Approach</h2>
                <p>
                        We created a bugged pencilholder named Holdie. Holdie is long
                        forgotten, covered in dust on your desk, overwhelmed by modern technology.
                        While all he wants is to love, to be loved and to get a bit of attention every
                        now and then. 
                </p>
            </div>
            <div>
                <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                    "Quote From Interview"
                    <hr>
                    <span class="bc-span">Random</span>
                </blockquote>
                <p>
                        Therefore Holdie tries to connect and interact with people. He
                        tries to get your attention and when he does feel love and affection, he gets
                        this warm feeling from within and shows his love to you.
                </p>
            </div>
            <div data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                <img src="/storage/holdie-detail-5.jpg" alt="" class='detail-image' style="object-fit: cover;height: 280px;">
                <span>More detail description</span>
            </div>
                <p>
                    More description about the design process and multiple iterations of the form of Holdie
                </p>
            <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
                "Quote about Holdie getting someone throwing their laptops away and becoming a writer"
                <hr>
                <span class="bc-span">1st year student</span>
                <hr>
                <img src="/storage/holdie-detail-4.jpg" alt="" class='detail-image' style="max-width:50%; float:right;">
            </blockquote>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia esse repellat nesciunt autem distinctio consequuntur earum optio beatae in a, voluptatem possimus? Dignissimos, rerum. Possimus provident dolorem repellendus aliquam delectus impedit modi itaque quae? A fugit dolor illum corrupti incidunt?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi facilis minima voluptatum modi necessitatibus odit molestiae? Molestiae laborum quaerat voluptate doloremque qui?
                </p>
            </div>
            <img src="/storage/holdie-detail.jpg" alt="" class='detail-image' data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom" >
        </div>
    </div>
</div>


@endsection