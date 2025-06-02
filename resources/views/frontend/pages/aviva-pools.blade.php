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
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m1.webp" alt="" class="show_second">
                        <img src="assets/images/aviva1.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE COSMOPOLITAN</h4>
                        <h5>Available in 23′</h5>
                        <p>Crafted from a seamless union of water, earth, and nature, The Cosmopolitan epitomizes an
                            extraordinary design.</p>
                        <div class="btn_blk">
                            <a href="/pool-details" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m2.webp" alt="" class="show_second">
                        <img src="assets/images/aviva2.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE ARIA</h4>
                        <h5>Available in 40′, 35′ and 30′</h5>
                        <p>The Aria Collection boasts a thoughtful design that offers a diverse range of seating options
                            and convenient entry/exit points. Freeform, sloped design with multiple gathering zones,
                            welcoming bench, tanning ledge, and deep-end bench and seat/step.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m3.jpg" alt="" class="show_second">
                        <img src="assets/images/aviva3.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE VOGUE</h4>
                        <h5>Available in 40′, 35′ and 30′</h5>
                        <p>The Vogue Collection is a dashing rectangular pool offering a dramatic splash pad that is
                            over 10 feet wide. Dramatic splash stage. Tri-sided step series. End to end swimming
                            channel. Deep end step out with bench seat.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m4.webp" alt="" class="show_second">
                        <img src="assets/images/aviva4.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE CHIC</h4>
                        <h5>Available in 21′</h5>
                        <p>The Chic Collection offers a classic rectangular design within a more compact package for the
                            perfect plunge. Flat bottom pool. Generous series of entry steps. End to end swimming
                            channel.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m5.jpg" alt="" class="show_second">
                        <img src="assets/images/aviva5.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE LUXE</h4>
                        <h5>Available in 40′, 35′ and 30′</h5>
                        <p>The Luxe Collection pushes the boundaries of design by laying a beautiful built-in spa on top
                            of a 10-foot splash pad. Built-in spa. Dramatic splash stage. Tri-sided step series. End to
                            end swimming channel and seats.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m6.webp" alt="" class="show_second">
                        <img src="assets/images/aviva6.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE SERENE</h4>
                        <h5>Available in 37′, 32′ and 27′</h5>
                        <p>The Serene Collection is a graceful freeform pool with a built-in spa that compliments an
                            inviting splash pad. Built-in spa. Elegant splash pad. Welcoming swim area. Deep end swim
                            out step and bench seat.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m7.webp" alt="" class="show_second">
                        <img src="assets/images/aviva7.jpg" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE DYNASTY</h4>
                        <h5>Available in 35′, 30′ and 26′</h5>
                        <p>The Dynasty Collection was designed for the bold with a side entry splash pad that is six
                            feet wide and over 12 feet long. Bold splash pad and stage. Shallow end step down. Deep end
                            extended bench. Full swim channel.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m8.webp" alt="" class="show_second">
                        <img src="assets/images/aviva8.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE EDEN</h4>
                        <h5>Available in 37′, 32′ and 27′</h5>
                        <p>The Eden Collection is the definition of elegance with flowing curves and a gentle, welcoming
                            splash pad. Freeform sanctuary. Elegant splash pad. Welcome swim area. Swim out steps and
                            bench seating.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m9.jpg" alt="" class="show_second">
                        <img src="assets/images/aviva9.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE APEX</h4>
                        <h5>Available in 40′, 35′ and 30′</h5>
                        <p>The Apex Collection provides the luxury of a spacious resort lounge area while also offering
                            additional comfort across the full length of your pool. Full-width splash pad. Full-length
                            bench/ entry steps. Three lengths offered for spacious enjoyment.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m10.webp" alt="" class="show_second">
                        <img src="assets/images/aviva10.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE OVATION</h4>
                        <h5>Available in 30′, 26′ and 23′</h5>
                        <p>The Ovation Collection takes a bow to the splendor of the full-width splash pad and the
                            full-width bench with a more reserved approach. Full-width splash pad. Full-length bench/
                            entry steps. Provided in more compact sizes.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m11.webp" alt="" class="show_second">
                        <img src="assets/images/aviva11.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE INTRIGUE</h4>
                        <h5>Available in 40′, 35′ and 30′</h5>
                        <p>The Intrigue Collection applies all the advantages of today’s modern design and packages it
                            for a complete outdoor living experience. Pool. Splash Pad. Built-in spa. Full length bench.
                            Three lengths offered for maximum thrills.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="assets/images/m12.webp" alt="" class="show_second">
                        <img src="assets/images/aviva12.webp" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>THE TRIUMPH</h4>
                        <h5>Available in 30′ and 26′</h5>
                        <p>The Triumph Collection is a showcase of ultimate luxury, combining swim area, built-in spa
                            and splash pad for the complete experience. Everything in one compact package. Pool. Splash
                            Pad. Built-in spa. In two compact sizes.</p>
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta_sec">
    <div class="contain">
        <div class="flex">
            <div class="sec_heading" data-aos="fade-up">
                <h2>{!! $cta_section['cta_heading'] ?? '' !!}</h2>
                <p>{!! $cta_section['cta_text'] ?? '' !!}</p>
            </div>
            <div class="btn_blk text-center" data-aos="fade-up">
                <a href="{{ url($cta_section['cta_btn1_link']) }}" class="site_btn light">{!!
                    $cta_section['cta_btn1_txt'] ?? '' !!}</a>
            </div>
        </div>
    </div>
</section>
@endsection