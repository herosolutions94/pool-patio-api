@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')

<section class="sm_banner" style="background:url(./assets/images/banner4.jpg)">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <h1>Request a Free Quote</h1>
            <p>Let’s bring your outdoor vision to life. Fill out the form below and a member of our team will reach out
                to schedule a consultation.</p>
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
            <p><small>*We respect your privacy. Your information will only be used to respond to your inquiry and will
                    not be shared.</small></p>
        </div>
    </div>
</section>

@endsection