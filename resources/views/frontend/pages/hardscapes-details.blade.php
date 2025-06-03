@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')


<section class="sm_banner" style="background:url(./assets/images/hard2.webp)">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <h1>Montreal Transformation</h1>
        </div>
    </div>
</section>
<section class="about_sec">
    <div class="contain">
        <div class="flex">
            <div class="colL" data-aos="fade-right">
                <div class="image">
                    <img src="assets/images/hard2.webp" alt="">
                </div>
            </div>
            <div class="colR" data-aos="fade-left">
                <h2>A Resort-Inspired Patio Retreat: Combining Elegance with Family Functionality </h2>
                <p>Transforming a backyard patio into a multi-functional oasis is no small task, especially when the
                    goal is to balance the needs of a young family with a space that’s perfect for entertaining. This
                    project achieved just that, blending timeless aesthetics with modern practicality to create a
                    resort-like retreat. </p>

            </div>
        </div>
    </div>
</section>
<section class="values_sec">
    <div class="contain">
        <div class="flex">
            <div class="col" data-aos="fade-up">
                <div class="inner">
                    <div class="image">
                        <img src="assets/images/infinity.png" alt="">
                    </div>
                    <h4>Timeless Design</h4>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="inner">
                    <div class="image">
                        <img src="assets/images/sunbed.png" alt="">
                    </div>
                    <h4>Resort-Like Retreat</h4>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="inner">
                    <div class="image">
                        <img src="assets/images/icon5.png" alt="">
                    </div>
                    <h4>Family-Friendly Design</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="story_behind_sec">
    <div class="contain">
        <div class="flex">
            <div class="colL" data-aos="fade-right">
                <h2>The Story Behind the Transformation </h2>
                <p>The clients, a family of five with three young children, dreamed of a backyard that could serve as
                    both a family hub and an entertainment space. They envisioned a tranquil, resort-inspired atmosphere
                    where they could relax after a busy day, enjoy meals together, and host gatherings. Durability and
                    safety were non-negotiables given the needs of their young family. </p>
            </div>
            <div class="colR" data-aos="fade-left">
                <div class="image">
                    <img src="assets/images/hardscap1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner_pool sm_banner" style="background:url(./assets/images/hardscap.webp)">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <h3>This patio was carefully designed to meet the diverse needs of the family. A large dining area under a
                sleek awning provides a shaded spot for meals and entertaining, complete with a spacious wooden table
                and woven chairs.</h3>
        </div>
    </div>
</section>
<section class="gallery_sec">
    <div class="contain">
        <div class="sec_heading" data-aos="fade-up">
            <h2>Products Used in This Space </h2>
        </div>
        <div class="grid_view" data-aos="fade-up">
            <div class="card_view">
                <img src="assets/images/hard1.webp" alt="">
            </div>
            <div class="card_view">
                <img src="assets/images/hard2.webp" alt="">
            </div>
            <div class="card_view">
                <img src="assets/images/hard3.webp" alt="">
            </div>
        </div>
    </div>
</section>
<section class="cta_sec">
    <div class="contain">
        <div class="flex">
            <div class="sec_heading" data-aos="fade-up">
                <h2>{!! $content['cta_heading'] ?? '' !!}</h2>
                <p>{!! $content['cta_text'] ?? '' !!}</p>
            </div>
            <div class="btn_blk text-center" data-aos="fade-up">
                <a href="{{ url($content['cta_btn1_link']) }}" class="site_btn light">{!!
                    $content['cta_btn1_txt'] ?? '' !!}</a>
            </div>
        </div>
    </div>
</section>





@endsection