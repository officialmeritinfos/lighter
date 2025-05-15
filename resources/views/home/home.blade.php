@extends('home.base')
@section('content')
@push('css')
    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
@endpush

    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-1-1.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-shape-1.jpg')}});"></div>
                    <div class="main-slider__shape-2 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Navigate the Financial Markets with  <br> Confidence:</h2>
                                    <p class="main-slider__text">
                                        Unlock the Power of Forex Trading, Stocks, and More for Your Investment Success
                                    </p>
                                    <div class="main-slider__btn-video-box">
                                        <a href="{{route('register')}}" class="thm-btn main-slider__btn">Get Started</a>
                                        <div class="main-slider__video-box">
                                            <p class="main-slider__video-text">Get our recent <br>
                                                digital intro video</p>
                                            <div class="main-slider__video-link">
                                                <a href="https://www.youtube.com/watch?v=_exLZPC9qwc"
                                                   class="video-popup">
                                                    <div class="main-slider__video-icon">
                                                        <span class="icon-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-1-2.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-shape-1.jpg')}});"></div>
                    <div class="main-slider__shape-2 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Secure Your Future</h2>
                                    <p class="main-slider__text">Expert Retirement Planning, Precious Metals, and High-Return Ventures Await You on Our Investment Platform</p>
                                    <div class="main-slider__btn-video-box">
                                        <a href="{{route('register')}}" class="thm-btn main-slider__btn">Get Started</a>
                                        <div class="main-slider__video-box">
                                            <p class="main-slider__video-text">Get our recent <br>
                                                digital intro video</p>
                                            <div class="main-slider__video-link">
                                                <a href="https://www.youtube.com/watch?v=_exLZPC9qwc"
                                                   class="video-popup">
                                                    <div class="main-slider__video-icon">
                                                        <span class="icon-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-1-3.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-shape-1.jpg')}});"></div>
                    <div class="main-slider__shape-2 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Diversify and Prosper</h2>
                                    <p class="main-slider__text">Your Gateway to Wealth through Forex, Stocks, Retirement Solutions, Gold, Medical Cannabis, and Oil & Gas Investments!</p>
                                    <div class="main-slider__btn-video-box">
                                        <a href="{{route('register')}}" class="thm-btn main-slider__btn">Get Started</a>
                                        <div class="main-slider__video-box">
                                            <p class="main-slider__video-text">Get our recent <br>
                                                digital intro video</p>
                                            <div class="main-slider__video-link">
                                                <a href="https://www.youtube.com/watch?v=_exLZPC9qwc"
                                                   class="video-popup">
                                                    <div class="main-slider__video-icon">
                                                        <span class="icon-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow1"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">About Us</span>
                <h2 class="section-title__title">Bring Your financial Goal to the
                    <br> Next Level</h2>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box">
                            <div class="about-one__img">
                                <img src="{{asset('home/images/resources/about-one-img-1.jpg')}}" alt="">
                            </div>
                            <div class="about-one__img-2">
                                <img src="{{asset('home/images/resources/about-one-img-2.jpg')}}" alt="">
                                <div class="about-one__shape-4 float-bob-x"></div>
                            </div>
                            <div class="about-one__shape-1 float-bob-x"></div>
                            <div class="about-one__shape-2 float-bob-y"></div>
                            <div class="about-one__shape-3 zoominout"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <p class="about-one__text-1">Building Your Financial Growth</p>
                        <p class="about-one__text-2">
                            Welcome to {{$siteName}}, your all-in-one destination for navigating the world of investments. Specializing in Forex trading, stocks, retirement planning, gold, medical cannabis, and oil and gas, {{$siteName}} is your gateway to a diverse range of lucrative opportunities.
                        </p>
                        <p class="about-one__text-3">
                            At {{$siteName}}, we're not just an investment platform; we're your financial ally on the path to success. Our mission is to empower investors with the knowledge and tools they need to make informed decisions across various financial landscapes.
                        </p>
                        <div class="about-one__points-box">
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-heavy-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Expert Guidance</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-heavy-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Diverse Investment Options</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="about-one__points about-one__points-2 list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-heavy-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Tailored Solutions</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-heavy-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Secure and Transparent</p>
                                    </div>
                                </li>
                            </ul>
{{--                            <div class="">--}}
{{--                                <a href="{{asset('home/digitalfortunecert.pdf')}}" target="_blank" class="btn btn-primary">View our Certificate</a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="about-one__bottom">
                            <div class="about-one__happy-client">
                                <div class="about-one__happy-client-icon">
                                    <img src="{{asset('home/images/icon/about-one-icon.png')}}" alt="">
                                </div>
                                <div class="about-one__count-box count-box">
                                    <h3 class="count-text" data-stop="80" data-speed="1500">00</h3>
                                    <span>k</span>
                                </div>
                                <p class="about-one__happy-client-text-1">Happy Investors</p>
                                <p class="about-one__happy-client-text-2">Users who kept on investing</p>
                            </div>
                            <div class="about-one__standard-services">
                                <div class="about-one__standard-services-bg"
                                     style="background-image: url({{asset('home/images/backgrounds/about-one-standard-services-bg.jpg')}});">
                                </div>
                                <div class="about-one__standard-services-content">
                                    <div class="about-one__work-hour">
                                        <span>$100</span>
                                        <h5>Million</h5>
                                        <p>Paid Out</p>
                                        <div class="about-one__work-hour-icon">
                                            <span class="icon-heavy-check"></span>
                                        </div>
                                    </div>
                                    <p class="about-one__work-text">The High Standard
                                        Trusted & Professional
                                        Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->


<!--Services One Start-->
<section class="services-one">
    <div class="container">
        <div class="section-title text-center">
        </div>
        <div class="ratio ratio-16x9">
            <iframe
                src="https://www.youtube.com/embed/Yb6825iv0Vk?si=fdbcnuQdtB4WxZ_n"
                title="YouTube video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>
<!--Services One End-->

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="cta-one__shape-1">
            <img src="{{asset('home/images/shapes/cta-one-shape-1.png')}}" alt="">
        </div>
        <div class="cta-one__shape-2">
            <img src="{{asset('home/images/shapes/cta-one-shape-2.png')}}" alt="">
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <h3 class="cta-one__title">We’re for individuals ready to grow
                    <br> on change.</h3>
                <div class="cta-one__btn-box">
                    <a href="{{route('register')}}" class="thm-btn cta-one__btn">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->

    <!--Video One Start-->
    <section class="video-one">
        <div class="video-one__bg" style="background-image: url({{asset('home/images/backgrounds/video-one-bg.jpg')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="video-one__left">
                        <div class="video-one__title-box">
                            <h3 class="video-one__title">We’re for individuals
                                ready to grow
                                on change.</h3>
                            <p class="video-one__text">
                                At {{$siteName}}, we understand that growth often emerges from embracing change. Our platform is crafted for individuals who see opportunities in the evolving financial landscape, who are ready to navigate the shifts, and who believe that change is the cornerstone of progress.
                            </p>
                        </div>
                        <div class="video-one__counter">
                            <div class="video-one__counter-shape-1"></div>
                            <div class="video-one__counter-shape-2"></div>
                            <ul class="video-one__counter-list list-unstyled">
                                <li>
                                    <div class="video-one__counter-icon-and-count-box">
                                        <div class="video-one__counter-icon">
                                            <img src="{{asset('home/images/icon/video-one-counter-icon.png')}}" alt="">
                                        </div>
                                        <div class="video-one__count-box count-box">
                                            <h3 class="count-text" data-stop="100" data-speed="1500">00</h3>
                                            <span class="video-one__counter-count-letter">M</span>
                                            <span class="video-one__counter-count-plus">+</span>
                                        </div>
                                    </div>
                                    <p class="video-one__counter-text">Paid out</p>
                                </li>
                                <li>
                                    <div class="video-one__counter-icon-and-count-box">
                                        <div class="video-one__counter-icon">
                                            <img src="{{asset('home/images/icon/video-one-counter-icon.png')}}" alt="">
                                        </div>
                                        <div class="video-one__count-box count-box">
                                            <h3 class="count-text" data-stop="90" data-speed="1500">00</h3>
                                            <span class="video-one__counter-count-letter">%</span>
                                        </div>
                                    </div>
                                    <p class="video-one__counter-text">Our Satisfied clients in field</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="video-one__right">
                        <div class="video-one__img-box">
                            <div class="video-one__img">
                                <img src="{{asset('home/images/resources/video-one-img-1.jpg')}}" alt="">
                            </div>
                            <div class="video-one__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="icon-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="video-one__watch-video">
                                <h3>Watch Video</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->


    <!--Services One Start-->
    <section class="services-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our Services</span>
                <h2 class="section-title__title">What We’re Offering</h2>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__inner">
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__shape-2">
                                    <div class="services-one__shape-3">
                                        <img src="{{asset('home/images/shapes/services-one-shape-3.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="services-one__icon">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="" style="width:100px;">
                                </div>
                                <h3 class="services-one__title"><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a>
                                </h3>
                                <p class="services-one__text">
                                    {{$service->short}}
                                </p>
                                <div class="services-one__btn-box">
                                    <a href="{{route('service.details',['id'=>$service->id])}}" class="services-one__btn">Read More<i
                                            class="icon-right-arrow-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                @endforeach

            </div>
        </div>
    </section>
    <!--Services One End-->

<!--Pricing One Start-->
<section class="pricing-one pricing-page">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline section-title__tagline--two">Our Investment Plan</span>
        </div>
        <div class="row justify-content-center">
            @foreach($packages as $package)
                @inject('option','App\Defaults\Custom')
                <!--Pricing One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="pricing-one__single">
                        <div class="pricing-one__price-box">
                            <div class="pricing-one__shape-1">
                                <img src="{{asset('home/images/shapes/pricing-one-shape-1.png')}}" alt="">
                            </div>
                            <h2 class="pricing-one__price">{{$package->roi}}% <span> {{$option->getReturnType($package->returnType)}}</span></h2>
                        </div>
                        <div class="pricing-one__content">
                            <p class="pricing-one__pack-name">{{$package->name}}</p>
                            <p class="pricing-one__text">Chooses to enjoy a no annoying.</p>
                            <ul class="list-unstyled pricing-one__content-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-check-2"></i>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-check-2"></i>
                                    </div>
                                    <div class="text">
                                        <p>Total Profit return: {{$package->numberOfReturns*$package->roi}}%</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-check-2"></i>
                                    </div>
                                    <div class="text">
                                        <p>Contract Duration: {{$package->Duration}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-check-2"></i>
                                    </div>
                                    <div class="text">
                                        <p>Referral Bonus: {{$package->referral}}%</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{route('register')}}" class="thm-btn pricing-one__btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <!--Pricing One Single End-->
            @endforeach

        </div>
    </div>
</section>
<!--Pricing One End-->

    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="why-choose-one__bg"
             style="background-image: url({{asset('home/images/backgrounds/why-choose-one-bg.jpg')}});"></div>
        <div class="container">
            <div class="why-choose-one__top">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">WHY CHOOSE US</span>
                                <h2 class="section-title__title"></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="why-choose-one__right">
                            <div class="why-choose-one__experience">
                                <div class="why-choose-one__count-box count-box">
                                    <h3 class="count-text" data-stop="08" data-speed="1500">00</h3>
                                    <span class="why-choose-one__count-plus">+</span>
                                    <span class="why-choose-one__count-letter">Years</span>
                                </div>
                                <p class="why-choose-one__experience-text">Experience in Financial <br> Management
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-choose-one__bottom">
                <div class="row justify-content-center">
                    <!--Why Choose One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <img src="{{asset('home/images/icon/why-choose-one-icon-1.png')}}" alt="">
                            </div>
                            <h3 class="why-choose-one__title">Diverse Investment Opportunities</h3>
                            <p class="why-choose-one__text">
                                At MySite, we offer a comprehensive array of investment options, from traditional avenues like Forex trading and stocks to alternative markets such as gold, medical cannabis, and oil and gas. Our diverse portfolio allows you to tailor your investments to match your unique goals and risk tolerance.
                            </p>
                        </div>
                    </div>
                    <!--Why Choose One Single End-->
                    <!--Why Choose One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <img src="{{asset('home/images/icon/why-choose-one-icon-1.png')}}" alt="">
                            </div>
                            <h3 class="why-choose-one__title">Expert Guidance and Insights</h3>
                            <p class="why-choose-one__text">
                                Benefit from the wisdom of seasoned professionals in the financial industry. MySite provides expert guidance and in-depth market analysis, empowering you with the knowledge needed to make informed and strategic investment decisions.
                            </p>
                        </div>
                    </div>
                    <!--Why Choose One Single End-->
                    <!--Why Choose One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <img src="{{asset('home/images/icon/why-choose-one-icon-1.png')}}" alt="">
                            </div>
                            <h3 class="why-choose-one__title">Cutting-Edge Technology</h3>
                            <p class="why-choose-one__text">
                                Stay ahead of the curve with MySite's cutting-edge technology. Our platform is designed for seamless navigation, real-time market updates, and user-friendly interfaces, ensuring you have the tools needed to thrive in the fast-paced world of finance.
                            </p>
                        </div>
                    </div>
                    <!--Why Choose One Single End-->
                    <!--Why Choose One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <img src="{{asset('home/images/icon/why-choose-one-icon-1.png')}}" alt="">
                            </div>
                            <h3 class="why-choose-one__title">Transparent and Secure Environment</h3>
                            <p class="why-choose-one__text">
                                Trust is the foundation of our relationship with you. MySite is committed to providing a transparent and secure environment for your investments. We prioritize the safety of your assets, ensuring you can invest with confidence.
                            </p>
                        </div>
                    </div>
                    <!--Why Choose One Single End-->
                    <!--Why Choose One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <img src="{{asset('home/images/icon/why-choose-one-icon-1.png')}}" alt="">
                            </div>
                            <h3 class="why-choose-one__title">Personalized Investment Strategies</h3>
                            <p class="why-choose-one__text">
                                Your financial journey is unique, and we recognize that. MySite offers personalized investment strategies that align with your individual goals and aspirations. Whether you're a seasoned investor or just starting, our platform caters to your specific needs.
                            </p>
                        </div>
                    </div>
                    <!--Why Choose One Single End-->

                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->


    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="container">
            <div class="testimonial-one__top">
                <div class="section-title text-left">
                    <span class="section-title__tagline">INVESTORS FEEDBACKS</span>
                    <h2 class="section-title__title">Check Out Users Feedback</h2>
                </div>
            </div>
            <div class="testimonial-one__bottom">
                <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":true,
                        "dots":false,
                        "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":2
                            },
                            "992":{
                                "items": 2
                            }
                        }
                    }'>
                    <!--Testimonial One Single Start-->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__icon">
                                <span class="icon-bubble-message"></span>
                            </div>
                            <div class="testimonial-one__client-details">
                                <div class="testimonial-one__client-img">
                                    <img src="https://ui-avatars.com/?name=Silver+alex" alt="">
                                </div>
                                <div class="testimonial-one__info">
                                    <h3 class="testimonial-one__client-name">Silver Alex</h3>
                                    <div class="testimonial-one__client-sub-title"></div>
                                </div>
                            </div>
                            <p class="testimonial-one__client-text">It is very good company</p>
                            <p class="testimonial-one__client-text-2">They are amazing and keep to their words</p>
                            <div class="testimonial-one__rating-and-social">
                                <div class="testimonial-one__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <ul class="testimonial-one__social list-unstyled">
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                    <!--Testimonial One Single Start-->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__icon">
                                <span class="icon-bubble-message"></span>
                            </div>
                            <div class="testimonial-one__client-details">
                                <div class="testimonial-one__client-img">
                                    <img src="https://ui-avatars.com/?name=Maxxiko+Andrew" alt="">
                                </div>
                                <div class="testimonial-one__info">
                                    <h3 class="testimonial-one__client-name">Maxciko Andrew</h3>
                                </div>
                            </div>
                            <p class="testimonial-one__client-text">Amazing Company</p>
                            <p class="testimonial-one__client-text-2">
                                I was a begineer in investing, but they took me from zero to hero
                            </p>
                            <div class="testimonial-one__rating-and-social">
                                <div class="testimonial-one__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <ul class="testimonial-one__social list-unstyled">
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                    <!--Testimonial One Single Start-->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__icon">
                                <span class="icon-bubble-message"></span>
                            </div>
                            <div class="testimonial-one__client-details">
                                <div class="testimonial-one__client-img">
                                    <img src="https://ui-avatars.com/?name=Thompson+J" alt="">
                                </div>
                                <div class="testimonial-one__info">
                                    <h3 class="testimonial-one__client-name">Thompson J.</h3>
                                </div>
                            </div>
                            <p class="testimonial-one__client-text">Their customer care is amazing</p>
                            <p class="testimonial-one__client-text-2">
                                Their customer care agents are super super amazing and supportive
                            </p>
                            <div class="testimonial-one__rating-and-social">
                                <div class="testimonial-one__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <ul class="testimonial-one__social list-unstyled">
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->

                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->




    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">NEWS & UPDATES</span>
                <h2 class="section-title__title">Latest Blog & Articles</h2>
            </div>
            <div class="row">

                <!--Blog One Single Start-->
                <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>
                <!--Blog One Single End-->

            </div>
        </div>
    </section>
    <!--Blog One End-->

@endsection
