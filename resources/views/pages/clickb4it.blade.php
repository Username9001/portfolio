@extends('layouts.app')

@section('content')

<div id="clickb4it-description" class="project-single">
        <div class="project-hero-image">
            <div class="project-header">
                <h1>clickbaitwarez</h1>
            </div>
            
            {{-- <a href="#clickb4it-text" class="scroll-down"></a> --}}
        </div>
        <div class="project-text" id="clickb4it-text">
            <div class="project-description">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quae eaque eligendi vitae quis? Quasi sed optio totam aliquid quisquam molestiae, officiis, ab ipsam suscipit dignissimos repudiandae illo incidunt deleniti!</p>
                <img src="/storage/clickb4it_fs.jpg" alt="" class='detail-image'>
                <span>clickbaitwarez.com webshop</span>
                <img src="/storage/screenshots/CB_product.png" alt="" class='detail-image'>
                <span>clickbaitwarez.com individual product page</span>
                <img src="/storage/screenshots/CB_cart.png" alt="" class='detail-image'>
                <span>clickbaitwarez.com shopping cart page</span>
                <p>
                    clickbaitwarez.com is a lightweight webshop
                </p>

                <p>
                    
                </p>
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
                font-size: 2.2rem;
            }
        }
    </style>

@endsection