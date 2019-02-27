@extends('layouts.app')

@section('content')
<div id="about" class="about-section" data-aos="fade-down" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
    <h2>About me</h2>
    <img src="/storage/profiel3.jpg" class="profile" alt="">
    <p>
        I'm a designer from Eindhoven currently doing my bachelor Industrial Design at the Technical University of Eindhoven. Specialized in web development. In my spare time I am a photographer and a bit of a guitarist.
    </p>
    <p>
        In design I focus mainly on physical prototyping and programming. I have a self-directed and flexible mindset thanks to having worked in different multidisciplinary teams over the years at university.
    </p>
    <p>
        This is also what initially peaked my interest in web development, making websites to track my study progress and creating simple html pages for this. Last year I took this a step further and started teaching myself to work with php and mysql. This has enabled me to make websites that not only look nice but are functional too. Using this newfound skill I have made a webshop for a fashion designer and a blog for a technology journalist.  And now a portfolio for my own work as well.
    </p>
    <ul class="links-out">
        <a href="https://www.linkedin.com">
            <li>
                <i class="fab fa-linkedin"></i>&nbsp;
            </li>
        </a>
        {{-- <a href="https://500px.com/erikurkurkle">
            <li>
                <i class="fab fa-500px"></i>&nbsp;
            </li>
        </a> --}}
        <a href="https://github.com/Username9001">
            <li>
                <i class="fab fa-github"></i>&nbsp;
            </li>
        </a>
        <a href="http://188.166.86.75">
            <li>
                <img src="/storage/TT_logo_grey.png" alt="" class="TT-logo">
            </li>
        </a>
        <a href="http://clickbaitwarez.com/list">
            <li>
                <img src="/storage/clickb4it.png" alt="" class="clickb4it-logo">
            </li>
        </a>
    </ul>
</div>
@endsection