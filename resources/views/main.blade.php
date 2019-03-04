@extends('layouts.app')

@section('content')
    <div id="welcome" class="welcome-message" data-aos="zoom-out-down" data-aos-duration="1600" data-aos-easing="ease-out-sine" data-aos-anchor-placement="top-bottom">
        <h1>Hello,</h1>
        <br>
        <blockquote id="welcome-message">
        </blockquote>
        <a href="#projects" aria-label="project-index">
            <div class="scroll-down" aria-label="scroll">
                <div></div>
            </div>
        </a>
    </div>
    <div id="projects" class="project-block">
        <h2 class="id-projects-title">Industrial Design</h2>
        <div class="project-grid">
            <a href="/projects/holdie" id="holdie-project" class="project-item project-item1"  data-aos="fade-up-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                <div class="text-block">
                    <h2>Holdie</h2>
                    <hr>
                    <p>Responsive Pencil Holder</p>
                </div>
            </a>
            <a href="/projects/helios" id="helios-project" class="project-item project-item2" data-aos="fade-down" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                <div class="text-block">
                    <h2>Helios</h2>
                    <hr>
                    <p>Interactive Lighting Control</p>
                </div>
            </a>
            <a href="/projects/mugen" id="mugen-project" class="project-item project-item3" data-aos="fade-down-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                <div class="text-block">
                    <h2>Mugen</h2>
                    <hr>
                    <p>Haptic Speakers</p>
                </div>
            </a>       
            <a href="/projects/olio" id="olio-project" class="project-item project-item4" data-aos="fade-up" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                <div class="text-block">
                    <h2>Olio</h2>
                    <hr>
                    <p>Nudging Research</p>
                </div>
            </a>
            <a href="/projects/bfs" id="test1-project" class="project-item project-item5" data-aos="fade-down-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                <div class="text-block">
                    <h2>Formgiving</h2>
                    <hr>
                    <p>Fundamental Form Study</p>
                </div>
            </a>              
            <a href="/projects/escaperoom" id="escaperoom-project" class="project-item project-item6" data-aos="fade-up-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                <div class="text-block">
                    <h2>Escape Room</h2>
                    <hr>
                    <p>Escape the Evil Cyborgs</p>
                </div>
            </a>  
        </div>
    </div>

        
    <div class="web-development">
        <h2 class="web-projects-title">Web Development</h2>
        <div class="web-clickb4it">
            <a href="/clickb4it" aria-label="clickbaitwarez webshop">
                <div class="wireframe-container" data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                    <img src="/storage/laptop.png" alt="" class="lazy test-image device-image img1">
                    <img src="/storage/clickb4it_fs.jpg" alt="" class="lazy test-image img2">
                </div>
                <div class="wireframe-container2" data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                    <img src="/storage/phone.png" alt="" class="lazy test-image device-image img3">
                    <img src="/storage/clickb4it_mobile.jpg" alt="" class="lazy test-image img4">
                </div>
            </a>
        </div>
        <div class="web-tomstech">
            <a href="/tomstech" aria-label="TomsTech blog">
                <div class="wireframe-container" data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                    <img src="/storage/laptop.png" alt="" class="lazy test-image device-image img1">
                    <img src="/storage/TomsTech_fs.jpg" alt="" class="lazy test-image img2">
                </div>
                <div class="wireframe-container2" data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                    <img src="/storage/phone.png" alt="" class="lazy test-image device-image img3">
                    <img src="/storage/TomsTech_mobile.png" alt="" class="lazy test-image img4">
                </div>
            </a>
        </div>
    </div>


    <style scoped>
        .wireframe-container, .wireframe-container2 {
            position: relative;
            display: inline-block;
            width: 510px;
            height: 500px;
        }
        .wireframe-container {
            right: 25%;
        }
        .test-image {
            max-width: 100%%;
            width: 100%%;
            margin: auto;
            position: absolute;
            top: 0;
        }
        .img1 {
            height: 400px;
            width: 770px;
        }
        .img2 {
            height: 330px;
            top: 24px;
            padding-left: 92px;
            width: 677px;
        }
        .img3 {
            height: 400px;
            width: 205px;
        }
        .img4 {
            height: 281px;
            top: 61px;
            width: 189px;
            padding-left: 19px;
        }
        @media (max-width: 1200px) {
            .wireframe-container, .wireframe-container2 {
                width: 50%;
            }
            .wireframe-container {
                right: 48%;
            }
            .wireframe-container2 {
                right: -15%;
            }
        }
        @media (max-width: 620px) {
            .wireframe-container2 {
                right: 35%;
            }
        }
    </style>    

@endsection
