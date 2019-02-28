@extends('layouts.app')

@section('content')

<div id="tomstech-description" class="project-single">
        <div class="project-hero-image">
            <div class="project-header">
                <h1>tomstech</h1>
            </div>
            
            {{-- <a href="#tomstech-text" class="scroll-down"></a> --}}
        </div>
        <div class="project-text" id="tomstech-text">
            <div class="project-description">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quae eaque eligendi vitae quis? Quasi sed optio totam aliquid quisquam molestiae, officiis, ab ipsam suscipit dignissimos repudiandae illo incidunt deleniti!</p>
                <img src="/storage/TomsTech_fs.jpg" alt="" class='detail-image'>
                <span>tomstech.nl technology blog</span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quae eaque eligendi vitae quis? Quasi sed optio totam aliquid quisquam molestiae, officiis, ab ipsam suscipit dignissimos repudiandae illo incidunt deleniti!</p>
                <img src="/storage/screenshots/TT_article.png" alt="" class='detail-image'>
                <span>tomstech.nl individual article page</span>
                <img src="/storage/screenshots/TT_category.png" alt="" class='detail-image'>
                <span>tomstech.nl category index page</span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quae eaque eligendi vitae quis? Quasi sed optio totam aliquid quisquam molestiae, officiis, ab ipsam suscipit dignissimos repudiandae illo incidunt deleniti!</p>
            </div>
        </div>
    </div>

    <style>
        .project-header h1 {
            font-size: 4.6rem;
            padding: 0;
        }
        .project-description span {
            margin-bottom: 40px;
        }
        @media (max-width: 780px) {
            .project-header h1 {
                font-size: 2.6rem;
            }
        }
    </style>
    
@endsection