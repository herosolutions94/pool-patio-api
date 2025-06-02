@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')


<section class="sm_banner"
    style="background-image: url('{{ get_site_image_src('images', !empty($content['image1']) ? $content['image1'] : 'default.jpg') }}');">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            {!! $content['banner_text'] ?? '' !!}
        </div>
    </div>
</section>
<section class="model_sec">
    <div class="contain">
        <div class="flex" data-aos="fade-up">
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard1.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>Finishes That blend With Nature</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard2.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>New Colonial</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard3.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>Nighttime Entertainment</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard4.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>Palm Beach Glamour</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard5.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>Outdoor Wellness</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard6.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>Split Level Design</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard7.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>Warm Neutrals</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard8.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>Stone-Crafted Surfaces</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="hardscapes-details.php" class="image">
                        <img src="assets/images/hard1.webp" alt="">
                    </a>
                    <div class="txt">
                        <h4>Finishes That blend With Nature</h4>
                        <div class="btn_blk">
                            <a href="hardscapes-details.php" class="site_btn block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="detail_pool_sec">
    <div class="contain">
        <div class="flex">
            <div class="colL" data-aos="fade-right">
                <div class="image">
                    <img src="{{ get_site_image_src('images', $content['image2'] ?? 'default.jpg') }}" alt="">
                </div>
            </div>
            <div class="colR" data-aos="fade-left">
                <div class="inner">
                    {!! $content['section1_text'] ?? '' !!}
                    <div class="btn_blk">
                        <a href="{{ url($content['section1_btn_link']) }}"
                            class="site_btn">{{ $content['section1_btn_txt'] }}</a>
                    </div>
                </div>
            </div>
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