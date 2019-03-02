@extends('layouts.app')

@section('content')

<div id="clickb4it-description" class="project-single">
    <div class="project-text" id="clickb4it-text">
        <div class="project-description">
            <div class="project-header">
                <h1>clickbaitwarez</h1>
            </div>
            <div class="slideshow-container">
                <div class="slides car-fade">
                    <img src="/storage/clickb4it_fs.jpg" alt="" class="detail-image">
                    <span class="right">main page</span>
                </div>
                <div class="slides car-fade">
                    <img src="/storage/screenshots/CB_product.png" alt="" class='detail-image'>
                    <span class="right">product page</span>
                </div>
                <div class="slides car-fade">
                    <img src="/storage/screenshots/CB_cart.png" alt="" class='detail-image'>
                    <span class="right">shopping cart page</span>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
        </div>
    </div>
</div>
<style>
    .project-header h1 {
        font-size: 3.6rem;
        padding: 0;
        text-align: left;
    }
    .project-description span {
        margin-bottom: 40px;
    }

    @media (max-width: 780px) {
        .project-header h1 {
            font-size: 2.2rem;
            margin: 0 0 0 -20px!important;
            padding: 25% 0 5% 0!important;
        }
    }

    </style>

@endsection