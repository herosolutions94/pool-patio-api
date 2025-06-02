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
<section class="quote_sec">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <form action="">
                <div class="row form_row">
                    <div class="col-md-6">
                        <label for="">First Name</label>
                        <input type="text" class="input" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Last Name</label>
                        <input type="text" class="input" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Phone Number</label>
                        <input type="text" class="input" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email Address</label>
                        <input type="text" class="input" placeholder="Email Address">
                    </div>
                    <div class="col-md-12">
                        <label for="">Address</label>
                        <input type="text" class="input" placeholder="Address">
                    </div>
                    <div class="col-md-12">
                        <label for="">What type of pool are you interested in?</label>
                        <select name="" id="" class="input">
                            <option value="">Plunge Pool</option>
                            <option value="">Liner Pool</option>
                            <option value="">Not Sure Yet</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="">What stage are you at in the process?</label>
                        <select name="" id="" class="input">
                            <option value="">Just Exploring Options</option>
                            <option value="">Ready to Start</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="">Project Timeline</label>
                        <select name="" id="" class="input">
                            <option value="">ASAP</option>
                            <option value="">3-6 Months</option>
                            <option value="">Next Year</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="">What is your estimated budget for this project?</label>
                        <select name="" id="" class="input">
                            <option value="">$30,000 - $50,000</option>
                            <option value="">$50,000 - $75,000</option>
                            <option value="">$75,000 - $100,000</option>
                            <option value="">I'm not sure yet</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="">Anything else we should know?</label>
                        <textarea name="" id="" placeholder="Type here.." class="input"></textarea>
                    </div>
                </div>
                <div class="btn_blk">
                    <button class="site_btn">Submit</button>
                </div>
            </form>
            <p><small>{!! $content['section1_text'] ?? '' !!}</small></p>
        </div>
    </div>
</section>

@endsection