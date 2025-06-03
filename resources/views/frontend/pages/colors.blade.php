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
<section class="color_color_sec">
    <div class="outer_main_color">
        <div class="inner_main_color" data-aos="fade-up">
            <div class="image">
                <img src="assets/images/c1_main.webp" alt="">
            </div>
            <div class="contain">
                <div class="flex main_flex">
                    <div class="col">
                        <div class="flex">
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c1.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c2.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c3.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c4.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h3>AQUAGUARD®X Color</h3>
                            <h2>Shimmer Sky</h2>
                            <p>With our special edition, make a lasting impression on your backyard with Shimmer Sky.
                                Its inherent shine and sparkle set the tone for an unforgettable day at the pool.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="inner_main_color" data-aos="fade-up">
            <div class="image">
                <img src="assets/images/c2_main.webp" alt="">
            </div>
            <div class="contain">
                <div class="flex main_flex">
                    <div class="col">
                        <div class="flex">
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c5.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c6.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c7.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c8.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h3>AQUAGUARD®X Color</h3>
                            <h2>Sapphire Blue</h2>
                            <p>Our most popular color selection due to its cool, refreshing appearance. A bold, vibrant
                                color that invites you into its crisp waters.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="inner_main_color" data-aos="fade-up">
            <div class="image">
                <img src="assets/images/c3_main.webp" alt="">
            </div>
            <div class="contain">
                <div class="flex main_flex">
                    <div class="col">
                        <div class="flex">
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c9.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c10.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c11.webp" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="image">
                                    <img src="assets/images/c12.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h3>AQUAGUARD®X Color</h3>
                            <h2>Crystal Blue</h2>
                            <p>This pool color inspires the bliss of a calming paradise getaway. For many, this presents
                                purity, serenity and a more relaxed approach to life by the water.</p>
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