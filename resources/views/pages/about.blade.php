@extends('layouts.app')

@section('content')
<div id="about" class="about-section">
    <h2>About me</h2>

    <div class="description-text">
        <div class="block-1" data-aos="fade-down-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <blockquote class="left-quote">
                "Work hard, play hard."
                <hr>
                <span class="bc-span">W. Khalifa</span>
            </blockquote>
            <p>
                I'm a user experience designer from Eindhoven currently doing my bachelor Industrial Design at the Technical University of Eindhoven. Specialized in web development. In my spare time I am a photographer and a bit of a guitarist.
            </p>      
            <p>
                In design I focus mainly on physical prototyping and programming. I have a self-directed and flexible mindset thanks to having worked in different multidisciplinary teams over the years at university.
            </p>
        </div>
        <div class="block-4" data-aos="fade-up-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <p class="right" style="padding-top:35px;">
                This is also what initially peaked my interest in web development, making websites to track my study progress and creating simple html pages for this. Last year I took this a step further and started teaching myself to work with php and mysql. This has enabled me to make websites that not only look nice but are functional too. Using this newfound skill I have made a webshop for a fashion designer and a blog for a technology journalist.  And now a portfolio for my own work as well.
            </p>
            <blockquote class="right">
                "Why won't it respond, and why is the server kicking us out over and over again?"
                <hr>
                <span class="bc-span">Me, While Overloading The Servers In Dublin</span>
            </blockquote>  
        </div>
        <div class="block-2" data-aos="fade-down-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <img src="/storage/profiel4.jpg" class="profile" alt="">
        </div>
        <div class="block-3" data-aos="fade-up-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <img src="/storage/profiel-extra.jpg" class="profile2" alt="">
        </div>
    </div>
    <ul class="links-out">

        <li>
            <a href="https://www.linkedin.com">
                <img class="social-icon" src="/storage/linkedin-brands.svg" alt="github link" style="max-width:90px;">&nbsp;
            </a>
        </li>
    {{-- <a href="https://500px.com/erikurkurkle">
        <li>
            <i class="fab fa-500px"></i>&nbsp;
        </li>
    </a> --}}
    
        <li>
            <a href="https://github.com/Username9001">
                <img class="social-icon" src="/storage/github-brands.svg" alt="github link" style="max-width:90px;">&nbsp;&nbsp;
            </a>
        </li>

        {{-- <li>
            <a href="http://188.166.86.75">
                <img src="/storage/TT_logo_grey.png" alt="" class="TT-logo">
            </a>
        </li>
        <li>
            <a href="http://clickbaitwarez.com/list">
                <img src="/storage/clickb4it.png" alt="" class="clickb4it-logo">
            </a>
        </li> --}}
    </ul>
</div>

<style scoped>
    .description-text {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .block-1 {
        grid-column: 1;
        grid-row: 1;
    }
    .block-2 {
        grid-column: 2;
        grid-row: 1;
    }
    .block-3 {
        grid-column: 1;
        grid-row: 2;
    }
    .block-4 {
        grid-column: 2;
        grid-row: 2;
    }
    blockquote {
        margin-right: -30%;
        font-style: italic;
        font-size: 2rem;
        width: 130%;
        line-height: 2.8rem;
        margin-top: 22px;
    }
    .left-quote {
        margin-right: 0;
        margin-left: -30%;
    }
    hr {
        margin: 0;
    }
    .bc-span {
        font-style: italic;
        width: 65%;
        margin-left: 5%;
        text-transform: capitalize;
        font-size: 1rem;
        font-weight: 300;
    }
    @media (max-width: 780px) {
        #about {
            max-width: 80%;
            width: 80%;
        }
        .description-text {
            grid-template-columns: 1fr;
            grid-gap: 10px;
        }
        .block-1, .block-2, .block-3, .block-4 {
            grid-column: 1;
        }
        .block-1 {
            grid-row: 1;
        }
        .block-2 {
            grid-row: 2;
        }
        .block-3 {
            grid-row: 3;
        }
        .block-4 {
            grid-row: 4;
        }
    }
    @media (max-width: 580px) {
        #about {
            max-width: 100%;
            width: 100%;
        }
        blockquote {
            margin-right: -20%;
        }
        .left-quote {
            margin-left: -14%;
        }
    }

    .footer {
        position: absolute;
    }
</style>

@endsection