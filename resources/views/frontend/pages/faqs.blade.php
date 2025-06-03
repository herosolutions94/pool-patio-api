@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')

<section class="sm_banner" style="background:url(./assets/images/banner2.jpg)">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <h1>Frequently Asked Questions</h1>
            <p>Whether you're curious about our services, project timelines, or product options, this section covers the
                most common questions to help you get started with confidence.</p>
        </div>
    </div>
</section>
<section class="opt_choose_sec top_p">
    <div class="contain">
        <div class="faqLst" data-aos="fade-up">
            <div class="faqBlk">
                <h5>What are the benefits of choosing a fiberglass pool?</h5>
                <div class="txt" style="display: none;">
                    <p>Fiberglass pools are durable, low-maintenance, and quick to install. They’re also resistant to
                        algae and have a smooth, non-abrasive surface.</p>
                </div>
            </div>
            <div class="faqBlk">
                <h5>How long does it take to install a fiberglass pool?</h5>
                <div class="txt">
                    <p>Most fiberglass pools can be installed in 2–4 weeks, depending on site conditions and weather.
                    </p>
                </div>
            </div>
            <div class="faqBlk">
                <h5>Can I customize the shape and size of my pool?</h5>
                <div class="txt">
                    <p>Absolutely. We offer a wide range of models from Aviva Pools with varying shapes, sizes, and
                        built-in features like tanning ledges and benches.</p>
                </div>
            </div>
            <div class="faqBlk">
                <h5>What’s the difference between aluminum and stick-built patio covers?</h5>
                <div class="txt">
                    <p>Aluminum covers are low-maintenance, weather-resistant, and come in modern styles. Stick-built
                        covers are custom-built with wood framing, offering a traditional look and more design
                        flexibility.</p>
                </div>
            </div>
            <div class="faqBlk">
                <h5>Do patio covers provide UV protection?</h5>
                <div class="txt">
                    <p>Yes, both Renaissance aluminum patio covers and custom-built options are designed to block
                        harmful UV rays and reduce sun exposure.</p>
                </div>
            </div>
            <div class="faqBlk">
                <h5>Can I add lighting or fans to my patio cover?</h5>
                <div class="txt">
                    <p>Yes, many of our covers support integrated lighting, ceiling fans, and other upgrades to enhance
                        comfort.</p>
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