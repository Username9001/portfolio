@extends('layouts.app')

@section('content')
    <div id="welcome" class="welcome-message" data-aos="zoom-out-down" data-aos-duration="1600" data-aos-easing="ease-out-sine" data-aos-anchor-placement="top-bottom">
        <h1>Hello,</h1>
        <br>
        <blockquote id="welcome-message">
        </blockquote>
        <a href="#projects">
            <div class="scroll-down">
                <div></div>
            </div>
        </a>
    </div>
    <div id="projects" class="project-block">
        <h2 class="id-projects-title">Industrial Design</h2>
        <div class="project-grid">
            <a href="/holdie" id="holdie-project" class="project-item project-item1"  data-aos="fade-up-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
                <div class="text-block">
                    <h2>Holdie</h2>
                    <hr>
                    <p>Responsive Pencil Holder</p>
                </div>
            </a>
            <a href="/helios" id="helios-project" class="project-item project-item2" data-aos="fade-down" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
                <div class="text-block">
                    <h2>Helios</h2>
                    <hr>
                    <p>Interactive Lighting Control</p>
                </div>
            </a>
            <a href="/mugen" id="mugen-project" class="project-item project-item3" data-aos="fade-down-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
                <div class="text-block">
                    <h2>Mugen</h2>
                    <hr>
                    <p>Haptic Speakers</p>
                </div>
            </a>       
            <a href="/olio" id="olio-project" class="project-item project-item4" data-aos="fade-up" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
                <div class="text-block">
                    <h2>Olio</h2>
                    <hr>
                    <p>Nudging Research</p>
                </div>
            </a>
            <a href="/bfs" id="test1-project" class="project-item project-item5" data-aos="fade-down-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
                <div class="text-block">
                    <h2>Formgiving</h2>
                    <hr>
                    <p>Fundamental Form Study</p>
                </div>
            </a>              
            <a href="/escaperoom" id="escaperoom-project" class="project-item project-item6" data-aos="fade-up-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
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
            <a href="/clickb4it">
            <img src="/storage/clickb4it_fs.jpg" alt="" class="web-image" data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <img src="/storage/clickb4it_mobile.jpg" alt="" class="web-image-mobile" data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            </a>
        </div>
        <div class="web-tomstech">
            <a href="/tomstech">
            <img src="/storage/TomsTech_fs.jpg" alt="" class="web-image" data-aos="fade-right" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <img src="/storage/TomsTech_mobile.png" alt="" class="web-image-mobile" data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            </a>
        </div>
    </div>

@endsection
