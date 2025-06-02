@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')

<section class="sm_banner" style="background:url(./assets/images/banner4.jpg)">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <h1>Get In Touch With Us</h1>
            <p>We’re Here to Help and Answer Any Questions You May Have</p>
        </div>
    </div>
</section>
<section class="contact_info">
    <div class="contain">
        <div class="flex">
            <div class="colL" data-aos="fade-right">
                <h3>We’d Love to Hear From You</h3>
                <p>Whether you have questions about our services, need expert advice, or are ready to start your next
                    outdoor project, our team is here to help. Reach out today and let’s bring your vision to life.</p>
            </div>
            <div class="colR" data-aos="fade-left">
                <div class="flex_contact">
                    <div class="col">
                        <div class="inner">
                            <div class="img_icon">
                                <img src="assets/images/map.svg" alt="">
                            </div>
                            <p>Pool and Patio</br>
                                Mooresville, North Carolina, USA</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="inner">
                            <div class="img_icon">
                                <img src="assets/images/call.svg" alt="">
                            </div>
                            <a href="tel:(443) 661-4875">(443) 661-4875</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="inner">
                            <div class="img_icon">
                                <img src="assets/images/email.svg" alt="">
                            </div>
                            <a href="mailto:info@pool-patio.com">info@pool-patio.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="" data-aos="fade-up">
            <h3>Have a Quick Question?</h3>
            <div class="row form_row">
                <div class="col-md-6">
                    <input type="text" class="input" placeholder="First Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="input" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="input" placeholder="Phone Number">
                </div>
                <div class="col-md-6">
                    <input type="text" class="input" placeholder="Email Address">
                </div>
                <div class="col-md-12">
                    <textarea name="" id="" placeholder="Enter Your Message Here" class="input"></textarea>
                </div>
                <div class="col-md-12">
                    <input type="text" class="input" placeholder="How did you hear about us?">
                </div>
            </div>
            <div class="btn_blk">
                <button class="site_btn">Send Message</button>
            </div>
        </form>
    </div>
</section>






@endsection