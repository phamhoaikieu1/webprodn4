@extends('front.layout.master')

@section('title', 'Home')

@section('body')
    <!-- Hero Section begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Back Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos blanditiis ipsum laboriosam perspiciatis laborum labore officiis doloremque alias dolorum, molestiae expedita itaque voluptatum! A distinctio temporibus, nesciunt minima tempore eveniet?</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                        <div class="off-card">
                            <h2>Sale <span>50%</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Back Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos blanditiis ipsum laboriosam perspiciatis laborum labore officiis doloremque alias dolorum, molestiae expedita itaque voluptatum! A distinctio temporibus, nesciunt minima tempore eveniet?</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                        <div class="off-card">
                            <h2>Sale <span>50%</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Back Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos blanditiis ipsum laboriosam perspiciatis laborum labore officiis doloremque alias dolorum, molestiae expedita itaque voluptatum! A distinctio temporibus, nesciunt minima tempore eveniet?</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                        <div class="off-card">
                            <h2>Sale <span>50%</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- Banner Section begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section end -->

    <!-- Women Banner Section begin -->
    <div class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a href="#">Discover more</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="women">All</li>
                            <li class="item" data-tag=".Clothing" data-category="women">Clothing</li>
                            <li class="item" data-tag=".Handbag" data-category="women">Handbag</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Shoes</li>
                            <li class="item" data-tag=".Accessories" data-category="women">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach($featuredProducts['women'] as $product)
                            @include('front.components.product-item')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Women Banner Section end -->

    <!-- Deal of the Week Section begin -->
    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea iste blanditiis aperiam rerum officiis dolorum quaerat mollitia sapiente soluta ut possimus, enim doloremque, aut non fuga molestiae hic. Illum, consequatur?</p>
                    <div class="product-price">
                        $987.65
                        <span>/ Handbag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hours</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mininutes</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Seconds</p>
                    </div>
                </div>
                <a class="primary-btn" href="">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal of the Week Section begin -->

    <!-- Men Banner Section begin -->
    <div class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="men">All</li>
                            <li class="item" data-tag=".Clothing" data-category="men">Clothing</li>
                            <li class="item" data-tag=".Handbag" data-category="men">Handbag</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Shoes</li>
                            <li class="item" data-tag=".Accessories" data-category="men">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach($featuredProducts['men'] as $product)
                            @include('front.components.product-item')
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                        <h2>Men's</h2>
                        <a href="#">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Men Banner Section end -->

    <!-- Instagram Section begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">N4_Collection 1</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">N4_Collection 2</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">N4_Collection 3</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">N4_Collection 4</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">N4_Collection 5</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">N4_Collection 6</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section end -->

    <!-- Latest Blog Section begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <img src="front/img/blog/{{$blog->image}}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        {{date('d-m-Y', strtotime($blog->created_at))}}
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-comment-o"></i>
                                        {{count($blog->blogComments)}}
                                    </div>
                                </div>
                                <a href=""><h4>{{$blog->title}}</h4></a>
                                <p>{{$blog->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>FREE SHIPPING</h6>
                                <p>For orders over $99.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>DELIVERY ON TIME</h6>
                                <p>Even on Weekends</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>FLEXIBLE PAYMENT</h6>
                                <p>We accept COD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section end -->
    @if(session('loggedInNotification'))
        <script>
            alert('{{ session('loggedInNotification') }}');
        </script>
    @endif
@endsection
