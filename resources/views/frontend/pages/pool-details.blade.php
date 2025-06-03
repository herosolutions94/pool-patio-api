@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')


<section class="banner_pool sm_banner" style="background:url(./assets/images/aviva1.webp)"></section>
<section class="detail_pool_sec">
    <div class="contain">
        <div class="cntnt text-center" data-aos="fade-up">
            <h1>The Cosmopolitan Collection</h1>
        </div>
        <div class="flex">
            <div class="colL" data-aos="fade-right">
                <div class="image">
                    <img src="assets/images/aviva1_1.webp" alt="">
                </div>
            </div>
            <div class="colR" data-aos="fade-left">
                <div class="inner">
                    <p>As the latest jewel in the Aviva Pools collection, The COSMOPOLITAN was designed to celebrate
                        life with family and friends.</p>
                    <p>Embracing the celestial allure of a half-moon and the ethereal essence of an invisible edge, The
                        Cosmopolitan embodies a harmonious fusion of water, earth, and nature. This unparalleled design
                        stands as a testament to innovation, setting itself apart as a singular creation in the realm of
                        composite pools worldwide.</p>
                    <p>The flat bottom of The Cosmopolitan is perfect for both tranquil dips and lively gatherings with
                        friends and family. Its adaptable design seamlessly integrates into challenging landscapes or
                        deck spaces, where a pool was considered impossible.</p>
                    <h4>All Inclusive Features</h4>
                    <ul>
                        <li>Infinity Edge Design</li>
                        <li>Flat Bottom Pool</li>
                        <li>Built-In Catch Basin</li>
                        <li>Internal & External Steps</li>
                        <li>Submerged Bench Seating</li>
                    </ul>
                    <div class="btn_blk">
                        <a href="" class="site_btn">Find a Dealer</a>
                        <a href="" class="site_btn color">Get Brochure</a>
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