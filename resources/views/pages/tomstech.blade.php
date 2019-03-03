@extends('layouts.app')

@section('content')

<div id="tomstech-description" class="project-single">
    <div class="project-text" id="tomstech-text">
        <div class="project-description">
            <div class="project-header">
                <h1>tomstech</h1>
            </div>
            <div class="slideshow-container">
                <div class="slides car-fade">
                    <img src="/storage/TomsTech_fs.jpg" alt="" class="detail-image">
                    <span class="right">tomstech.nl technology blog main page</span>
                </div>
                <div class="slides car-fade">
                    <img src="/storage/screenshots/TT_article.png" alt="" class='detail-image'>
                    <span class="right">tomstech.nl technology blog individual article page</span>
                </div>
                <div class="slides car-fade">
                    <img src="/storage/screenshots/TT_category.png" alt="" class='detail-image'>
                    <span class="right">tomstech.nl technology blog category page</span>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
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
            font-size: 2.6rem;
            margin: 0 0 0 -20px!important;
            padding: 25% 0 5% 0!important;
        }
    }
</style>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
    
        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }
    
        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }
    
        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1} 
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; 
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block"; 
        }  
    </script>
@endsection