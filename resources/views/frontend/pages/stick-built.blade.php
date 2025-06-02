@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')
<section class="bg_banner">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            {!! $content['banner_text'] ?? '' !!}
        </div>
    </div>
</section>
<section class="patio_sec">
    <div class="contain">
        <div class="listing">
            @foreach($sticks_built as $built)
            @php
            $content = json_decode($built->content, true);
            @endphp
            <div class="flex" data-aos="fade-up"><a href="patio-details.php"></a>
                <div class="image">
                    <img src="{{ get_site_image_src('stick', $built['image1'] ?? 'default.jpg') }}" alt="">
                </div>
                <div class="inner">
                    <h3>{{$built->name}}</h3>
                    {!! $content['short_text'] ?? '' !!}
                    <div class="btn_blk">
                        <a href="patio-details.php" class="site_btn">Read More</a>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>
<section class="cta_sec bg">
    <div class="contain">
        <div class="flex">
            <div class="sec_heading" data-aos="fade-up">
                <h2>Let’s Talk About Your Outdoor Space</h2>
                <p>Whether you're starting from scratch or updating your backyard, we’re here to help you design and
                    build something extraordinary.</p>
            </div>
            <div class="btn_blk text-center" data-aos="fade-up">
                <a href="request-quote.php" class="site_btn light">Schedule a Free Consultation</a>
            </div>
        </div>
    </div>
</section>
@endsection