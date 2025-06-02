@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')

<section class="all_sub">
    <div class="contain">
        <div class="cntnt" data-aos="fade-up">
            <h1>Insights & Inspiration for Your Outdoor Living</h1>
            <p>Explore expert tips, design ideas, and industry insights to help you plan the perfect backyard escape.
                From choosing the right pool model to understanding patio materials, our blog is your go-to guide for
                high-end outdoor living.</p>
        </div>
    </div>
</section>
<section class="blog_blog_pg">
    <div class="contain">
        <div class="featured_blog">
            <div class="flex" data-aos="fade-up">
                <div class="_col">
                    <div class="inner"><a href="blog-detail.php"></a>
                        <div class="image">
                            <img src="assets/images/aviva2.webp" alt="" />
                        </div>
                        <div class="cntnt">
                            <div class="category">Fiberglass Pool</div>
                            <h4>Top 5 Benefits of Installing a Fiberglass Pool</h4>
                            <div class="date">2 March, 2024</div>
                        </div>
                    </div>
                </div>

                <div class="_col">
                    <div class="inner"><a href="blog-detail.php"></a>
                        <div class="image">
                            <img src="assets/images/aviva3.webp" alt="" />
                        </div>
                        <div class="cntnt">
                            <div class="category">Outdoor Living & Design</div>
                            <h4>How to Choose the Perfect Patio Cover for Your Space</h4>
                            <div class="date">2 March, 2024</div>
                        </div>
                    </div>
                </div>

                <div class="_col">
                    <div class="inner"><a href="blog-detail.php"></a>
                        <div class="image">
                            <img src="assets/images/aviva4.webp" alt="" />
                        </div>
                        <div class="cntnt">
                            <div class="category">Hardscaping & Landscaping</div>
                            <h4>Hardscape Trends: What's Hot in 2025</h4>
                            <div class="date">2 March, 2024</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_blog" data-aos="fade-up">
            <div class="tabs_account">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab1">Pools & Water Features</a></li>
                    <li><a data-toggle="tab" href="#tab2">Patio Covers & Shade Solutions</a></li>
                    <li><a data-toggle="tab" href="#tab3">Outdoor Living & Design</a></li>
                    <li><a data-toggle="tab" href="#tab4">Hardscaping & Landscaping</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                    <div class="flex_all_blog">
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva5.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva6.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva7.jpg" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Do Patio Covers Add Value to Your Home?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva3.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva2.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva1.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Do Patio Covers Add Value to Your Home?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva5.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva6.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center pagination_custom">
                        <ul class="pagination">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
                <div id="tab2" class="tab-pane fade">
                    <div class="flex_all_blog">
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva5.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva6.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva7.jpg" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Do Patio Covers Add Value to Your Home?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva3.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva2.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva1.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Do Patio Covers Add Value to Your Home?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva5.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva6.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center pagination_custom">
                        <ul class="pagination">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
                <div id="tab3" class="tab-pane fade">
                    <div class="flex_all_blog">
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva5.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva6.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva7.jpg" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Do Patio Covers Add Value to Your Home?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva3.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva2.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva1.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Do Patio Covers Add Value to Your Home?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva5.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva6.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center pagination_custom">
                        <ul class="pagination">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
                <div id="tab4" class="tab-pane fade">
                    <div class="flex_all_blog">
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva5.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva6.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva7.jpg" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Do Patio Covers Add Value to Your Home?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva3.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva2.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva1.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Do Patio Covers Add Value to Your Home?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva5.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Planning Your Outdoor Living Space: A Step-by-Step Guide</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="blog-detail.php">
                                <div class="image">
                                    <img src="assets/images/aviva6.webp" alt="" />
                                </div>
                                <h5>
                                    <Link href="">Aviva Pools vs Traditional Pools: What’s the Difference?</Link>
                                </h5>
                                <div class="date">2 March, 2024</div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center pagination_custom">
                        <ul class="pagination">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="cta_sec bg">
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