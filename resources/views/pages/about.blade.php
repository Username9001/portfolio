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
                I'm a user experience designer from Eindhoven currently doing my bachelor Industrial Design at the Technical University of Eindhoven. Specializing in web development.
            </p>      
            <p>
                In design I focus on physical prototyping and programming. I have a self-directed and flexible mindset thanks to having worked in different multidisciplinary teams over the years at university.
            </p>
        </div>
        <div class="block-4" data-aos="fade-up-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <p class="right" style="padding-top:35px;">
                    Applying this to web development, I have made websites to track my study progress, using simple html pages. Last year I took this a step further and started teaching myself to work with php and mysql. I have developed a webshop for a fashion designer and a blog for a technology journalist.
            </p>
            <blockquote class="right shift-quote">
                "Why won't it respond, and why is the server kicking us out over and over again?"
                <hr>
                <span class="bc-span">Me, While Overloading The Servers In Dublin</span>
            </blockquote>  
        </div>
        <div class="block-2" data-aos="fade-down-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <img src="/storage/profiel4.jpg" class="profile" alt="">
        </div>
        <div class="block-3" data-aos="fade-up-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <img src="/storage/profiel-extra.jpg" class="profile2 lazy" alt="">
        </div>
    </div>
    <div class="contact-info">

        {{-- <ul class="web-dev-list" style="padding-top:30px;">
            <li><img class="web-dev-icon" src="/storage/icons/css3-brands.svg"></li>
            <li><img class="web-dev-icon" src="/storage/icons/sass-brands.svg"></li>
            <li><img class="web-dev-icon" src="/storage/icons/html5-brands.svg"></li>
            <li><img class="web-dev-icon" src="/storage/icons/js-square-brands.svg"></li>
            <li><img class="web-dev-icon" src="/storage/icons/vuejs-brands.svg"></li>
            <li><img class="web-dev-icon" src="/storage/icons/php-brands.svg"></li>
            <li><img class="web-dev-icon" src="/storage/icons/wordpress-brands.svg"></li>
            <li><img class="web-dev-icon" src="/storage/icons/magento-brands.svg"></li>
            <li><img class="web-dev-icon" src="/storage/icons/laravel-brands.svg"></li>
        </ul> --}}
        
        <h3>Feel free to contact me</h3>
        <ul class="links-out">
            <li>
                <a href="https://www.linkedin.com">
                    <img class="social-icon" src="/storage/icons/linkedin-brands.svg" alt="github link" style="max-width:90px;">&nbsp;
                </a>
            </li>
            <li>
                <a href="https://github.com/Username9001">
                    <img class="social-icon" src="/storage/icons/github-brands.svg" alt="github link" style="max-width:90px;">&nbsp;&nbsp;
                </a>
            </li>
        </ul>
        <ul class="contact-details">
            <li><a href = "mailto: erik.wubbels@gmail.com">erik.wubbels@gmail.com</a></li>
        </ul>
    </div>

</div>

<style scoped>
    .description-text {
        display: grid;
        grid-template-columns: 2fr 2fr 3fr;
    }
    .block-1 {
        grid-column: 1 / span 2;
        grid-row: 1;
    }
    .block-2 {
        grid-column: 3;
        grid-row: 1;
    }
    .block-3 {
        grid-column: 1;
        grid-row: 2;
    }
    .block-4 {
        grid-column: 2 / span 2;
        grid-row: 2;
    }
    blockquote {
        margin-right: -30%;
        font-size: 2rem;
        width: 130%;
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
        .left-quote {
            margin-left: -14%;
        }
        .shift-quote {
            margin-left: -20%;
            width: 100%;
            float: none;
        }
    }

    .footer {
        position: absolute;
    }
</style>

@endsection