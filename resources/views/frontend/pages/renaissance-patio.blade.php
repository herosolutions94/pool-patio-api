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
            <div class="flex" data-aos="fade-up"><a href="/patio-details"></a>
                <div class="image">
                    <img src="assets/images/p1.webp" alt="">
                </div>
                <div class="inner">
                    <h3>SunHaven Classic</h3>
                    <p>A timeless solid-roof patio cover offering full shade and weather protection—perfect for cozy
                        backyard gatherings and year-round enjoyment.</p>
                    <div class="btn_blk">
                        <a href="/patio-details" class="site_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="flex" data-aos="fade-up"><a href="patio-details.php"></a>
                <div class="image">
                    <img src="assets/images/p2.webp" alt="">
                </div>
                <div class="inner">
                    <h3>BreezeLattice Pergola</h3>
                    <p>Enjoy the perfect blend of sun and shade with this open-style lattice cover. Ideal for enhancing
                        your outdoor aesthetics while staying cool.</p>
                    <div class="btn_blk">
                        <a href="patio-details.php" class="site_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="flex" data-aos="fade-up"><a href="patio-details.php"></a>
                <div class="image">
                    <img src="assets/images/p3.webp" alt="">
                </div>
                <div class="inner">
                    <h3>ShadeCraft Elite</h3>
                    <p>A modern, aluminum-framed cover with clean lines and sleek design. Great for contemporary homes
                        seeking function and style.</p>
                    <div class="btn_blk">
                        <a href="patio-details.php" class="site_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="flex" data-aos="fade-up"><a href="patio-details.php"></a>
                <div class="image">
                    <img src="assets/images/p4.webp" alt="">
                </div>
                <div class="inner">
                    <h3>EverShade Combo</h3>
                    <p>Hybrid patio cover with both solid and lattice sections—giving you full coverage where needed and
                        open-air charm elsewhere.</p>
                    <div class="btn_blk">
                        <a href="patio-details.php" class="site_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="flex" data-aos="fade-up"><a href="patio-details.php"></a>
                <div class="image">
                    <img src="assets/images/p5.webp" alt="">
                </div>
                <div class="inner">
                    <h3>Coastal Retreat</h3>
                    <p>Inspired by beachside living, this patio cover features rustic wood beams and natural finishes
                        that bring warmth and character to any outdoor space.</p>
                    <div class="btn_blk">
                        <a href="patio-details.php" class="site_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="flex" data-aos="fade-up"><a href="patio-details.php"></a>
                <div class="image">
                    <img src="assets/images/p6.webp" alt="">
                </div>
                <div class="inner">
                    <h3>SkyView Retractable</h3>
                    <p>A smart solution for flexible comfort. This retractable cover opens up for sunlight or closes
                        down for rain—perfect for any weather.</p>
                    <div class="btn_blk">
                        <a href="patio-details.php" class="site_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="flex" data-aos="fade-up"><a href="patio-details.php"></a>
                <div class="image">
                    <img src="assets/images/p7.webp" alt="">
                </div>
                <div class="inner">
                    <h3>TerraLuxe Canopy</h3>
                    <p>A canvas-style patio cover with bold colors and elegant curves. Ideal for creating a resort-like
                        feel in your own backyard.</p>
                    <div class="btn_blk">
                        <a href="patio-details.php" class="site_btn">Read More</a>
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