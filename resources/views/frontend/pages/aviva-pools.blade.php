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
             @foreach($avivas as $aviva)
          
             <div class="col">
                <div class="inner">
                    <a href="pool-details.php" class="image">
                        <img src="{{ get_site_image_src('aviva', $aviva['image2'] ?? 'default.jpg') }}" alt="" class="show_second">
                        <img src="{{ get_site_image_src('aviva', $aviva['image1'] ?? 'default.jpg') }}" alt="" class="show_main">
                    </a>
                    <div class="txt">
                        <h4>{{$aviva->name}}</h4>
                        <h5>{{$aviva->title}}</h5>
                        {!! $aviva->description ?? '' !!}
                        <div class="btn_blk">
                            <a href="pool-details.php" class="site_btn block">Explore The Limitless™</a>
                        </div>
                    </div>
                </div>
            </div>
            

            @endforeach

           
         
        </div>
    </div>
</section>
<section class="cta_sec">
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