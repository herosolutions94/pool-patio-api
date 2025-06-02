@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')


<section class="detail_banner">
    <div class="contain">
        <div class="flex">
            <div class="colL" data-aos="fade-right">
                <div class="slider_outer">
                    <div class="slider-for">
                        <div><img src="assets/images/patio1.webp" /></div>
                        <div><img src="assets/images/patio2.webp" /></div>
                        <div><img src="assets/images/patio3.webp" /></div>
                        <div><img src="assets/images/patio4.webp" /></div>
                        <div><img src="assets/images/patio5.webp" /></div>
                        <div><img src="assets/images/patio6.webp" /></div>
                    </div>
                    <div class="slider-nav">
                        <div><img src="assets/images/patio1.webp" /></div>
                        <div><img src="assets/images/patio2.webp" /></div>
                        <div><img src="assets/images/patio3.webp" /></div>
                        <div><img src="assets/images/patio4.webp" /></div>
                        <div><img src="assets/images/patio5.webp" /></div>
                        <div><img src="assets/images/patio6.webp" /></div>
                    </div>

                </div>
            </div>
            <div class="colR" data-aos="fade-left">
                <div class="inner">
                    <h1>SunHaven Classic</h1>
                    <h4>Bring Timeless Elegance to Your Outdoor Space</h4>
                    <p>The SunHaven Classic is the ultimate solution for homeowners seeking full-shade comfort without
                        sacrificing style. With its solid roof design, this patio cover protects you from sun, rain, and
                        the elements—allowing you to enjoy your outdoor space all year long. Whether you're entertaining
                        guests or sipping coffee on a quiet morning, the SunHaven Classic creates a cozy, covered
                        environment tailored to your home’s look and your lifestyle.</p>
                    <div class="btn_blk">
                        <a href="request-quote.php" class="site_btn light">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature_sec">
    <div class="contain">
        <div class="sec_heading" data-aos="fade-up">
            <h2>Key Features of the SunHaven Classic</h2>
        </div>
        <div class="flex" data-aos="fade-up">
            <div class="col">
                <div class="inner">
                    <h4>Solid Roof Construction</h4>
                    <p>Complete protection from rain, wind, and harsh sun.</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <h4>Custom-Built for Your Space</h4>
                    <p>Tailored sizing and color options to match your home’s architecture.</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <h4>Premium Materials</h4>
                    <p>Available in high-quality aluminum or stick-built wood frame for long-term durability.</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <h4>Low Maintenance</h4>
                    <p>Designed for beauty and function with minimal upkeep.</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <h4>Add-ons Available</h4>
                    <p>Ceiling fans, lights, privacy walls, and more.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery_sec">
    <div class="contain">
        <div class="sec_heading" data-aos="fade-up">
            <h2>SunHaven in Action</h2>
            <p>See how the SunHaven Classic transforms outdoor spaces across a variety of homes.</p>
        </div>
        <div class="grid_view" data-aos="fade-up">
            <div class="card_view">
                <img src="assets/images/pw1.webp" alt="">
                <h4>Elegant Backyard Retreat</h4>
            </div>
            <div class="card_view">
                <img src="assets/images/pw2.webp" alt="">
                <h4>Poolside Serenity</h4>
            </div>
            <div class="card_view">
                <img src="assets/images/pw3.webp" alt="">
                <h4>Seamless Home Integration</h4>
            </div>
        </div>
        <div class="flex" data-aos="fade-up">
            <div class="colL">
                <h3>Perfect For:</h3>
            </div>
            <div class="colR">
                <ul>
                    <li>Backyard patios & decks</li>
                    <li>Outdoor dining areas</li>
                    <li>Entryway or front porch coverings</li>
                    <li>Garden sitting areas</li>
                    <li>Poolside lounging</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="opt_choose_sec">
    <div class="contain">
        <div class="sec_heading" data-aos="fade-up">
            <h2>Choose the Look That Matches Your Home</h2>
            <p>The SunHaven Classic comes in a range of finish colors and materials, including powder-coated aluminum or
                pressure-treated lumber. You can also customize trim profiles, column styles, and roof pitch to get the
                exact look you want.</p>
        </div>
        <div class="faqLst" data-aos="fade-up">
            <div class="faqBlk">
                <h5>Is it waterproof?</h5>
                <div class="txt" style="display: none;">
                    <p>Yes. The solid roof provides full protection from rain and moisture.</p>
                </div>
            </div>
            <div class="faqBlk">
                <h5>Can it handle snow or strong winds?</h5>
                <div class="txt">
                    <p>Absolutely. Our builds are engineered to meet local building codes for wind and snow loads.</p>
                </div>
            </div>
            <div class="faqBlk">
                <h5>Can lights or fans be added?</h5>
                <div class="txt">
                    <p>Yes, we can wire and install lighting, fans, or even heaters as add-ons.</p>
                </div>
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