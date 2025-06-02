@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')


<section class="banner_pool sm_banner" style="background: url('{{ get_site_image_src('aviva', $aviva['image1'] ?? 'default.jpg') }}'); background-size: cover; background-position: center;"></section>
<section class="detail_pool_sec">
    <div class="contain">
        <div class="cntnt text-center" data-aos="fade-up">
            <h1>{{ $content['section1_heading']}}</h1>
        </div>
        <div class="flex">
            <div class="colL" data-aos="fade-right">
                <div class="image">
                    <img src="{{ get_site_image_src('aviva', $content_data['image3'] ?? 'default.jpg') }}" alt="">
                </div>
            </div>
            <div class="colR" data-aos="fade-left">
                <div class="inner">
                   {!! $content_data['section1_text'] ?? '' !!}
                    <div class="btn_blk">
                        <a href="{{ $content_data['section1_btn_link']}}" class="site_btn">{{ $content_data['section1_btn_txt']}}</a>
                        <a href="{{ $content_data['section2_btn_link']}}" class="site_btn color">{{ $content_data['section2_btn_txt']}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="size_sec">
    <div class="contain">
        <div class="sec_heading" data-aos="fade-up">
            <h2>{!! $content['banner_heading'] ?? '' !!}</h2>
            <h4>The Cosmopolitan Collection</h4>
        </div>
        <div class="flex">
            <div class="col" data-aos="fade-up">
                <div class="image">
                    <img src="assets/images/detail1.jpg" alt="">
                </div>
                <div class="txt">
                    <h3>Ultimate™ 30</h3>
                    <p>30′ 0″ Long by 15′ 6″ Wide</p>
                    <p>4′ 3″ Shallow end depth</p>
                    <p>6′ 0″ Deep end depth</p>
                    <p>6′ 5″ x 8′ 0″ x 1′ 8″ Splash deck</p>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="image">
                    <img src="assets/images/detail2.jpg" alt="">
                </div>
                <div class="txt">
                    <h3>Ultimate™ 35</h3>
                    <p>35′ 0″ Long by 15′ 5″ Wide</p>
                    <p>4′ 3″ Shallow end depth</p>
                    <p>6′ 6″ Deep end depth</p>
                    <p>6′ 5″ x 8′ 0″ x 1′ 8″ Splash deck</p>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="image">
                    <img src="assets/images/detail3.jpg" alt="">
                </div>
                <div class="txt">
                    <h3>Ultimate™ 40</h3>
                    <p>40′ 0″ Long by 15′ 5″ Wide</p>
                    <p>4′ 3″ Shallow end depth</p>
                    <p>7′ 0″ Deep end depth</p>
                    <p>6′ 5″ x 8′ 0″ x 1′ 8″ Splash deck</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner_pool sm_banner" style="background:url(./assets/images/aviva2.webp)">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <h3>This meticulously crafted swimming pool features cutting-edge design and innovative technologies,
                seamlessly blending the transition from ground level to an elevated perspective.</h3>
        </div>
    </div>
</section>
<section class="colors_collection_sec">
    <div class="contain">
        <div class="sec_heading text-center" data-aos="fade-up">
            <h2>{!! $content['section1_heading'] ?? '' !!}</h2>
            <p>Adorned with a breathtaking wraparound infinity edge, you’re invited to witness the water surface
                disappear into the picturesque span of your backyard.</p>
        </div>
        <div class="slider-container" data-aos="fade-up">
            <div class="color-slider">
                <div>
                    <img src="assets/images/color1.jpg" alt="Crystal Blue" />
                    <p>Crystal Blue</p>
                </div>
                <div>
                    <img src="assets/images/color2.jpg" alt="Crystal Blue" />
                    <p>Crystal Blue</p>
                </div>
                <div>
                    <img src="assets/images/color3.jpg" alt="Crystal Blue" />
                    <p>Crystal Blue</p>
                </div>
                <div>
                    <img src="assets/images/color4.jpg" alt="Crystal Blue" />
                    <p>Crystal Blue</p>
                </div>
                <div>
                    <img src="assets/images/color5.jpg" alt="Crystal Blue" />
                    <p>Crystal Blue</p>
                </div>
                <div>
                    <img src="assets/images/color6.jpg" alt="Crystal Blue" />
                    <p>Crystal Blue</p>
                </div>
                <div>
                    <img src="assets/images/color7.jpg" alt="Crystal Blue" />
                    <p>Crystal Blue</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner_pool sm_banner" style="background:url(./assets/images/aviva3.webp)">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <h1>Accessorise. Stylize. Bedazzle.</h1>
        </div>
    </div>
</section>
<section class="gallery_sec">
    <div class="contain">
        <div class="sec_heading" data-aos="fade-up">
            <h2>{!! $content['section2_heading'] ?? '' !!}</h2>
        </div>
        <div class="grid_view" data-aos="fade-up">
            <div class="card_view">
                <img src="assets/images/luxe.webp" alt="">
                <h4>The Luxe</h4>
            </div>
            <div class="card_view">
                <img src="assets/images/serene.webp" alt="">
                <h4>The Serene</h4>
            </div>
            <div class="card_view">
                <img src="assets/images/chic.webp" alt="">
                <h4>The Chic</h4>
            </div>
        </div>
    </div>
</section>
<section class="cta_sec bg">
    <div class="contain">
        <div class="flex">
            <div class="sec_heading" data-aos="fade-up">
                <h2>Ready to Elevate Your Backyard?</h2>
                <p>Let us help you build a patio cover that brings style, comfort, and value to your home. Our team will
                    guide you through every step—from design to final installation.</p>
            </div>
            <div class="btn_blk text-center" data-aos="fade-up">
                <a href="request-quote.php" class="site_btn light">Schedule a Free Consultation</a>
            </div>
        </div>
    </div>
</section>


@endsection