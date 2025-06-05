@extends('home.base')
@section('content')

    <!-- ================
        Breadcrumb Common
    ===================== -->
    <section class="breadcrubm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrubm-wrapper">
                        <img class="anim-services-01" src="{{asset('home/images/home/doddles02.png')}}" alt="">
                        <img class="anim-services-02" src="{{asset('home/images/home/hero-v3-04.png')}}" alt="">
                        <h5>{{$pageName}}</h5>
                        <h3>We are the market <br> leader</h3>
                        <h1 class="breadcrubm-big">{{$pageName}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================
        Nexigen About US
    ======================== -->
    <section class="about-us-v2 about-us-v4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-v2-left">
                        <div class="about-img-v2">
                            <img src="{{asset('home/images/home/about-us-v2.png')}}" alt="">
                            <img class="rounde-bubble" src="{{asset('home/images/home/round-bubble.png')}}" alt="">
                        </div>
                        <div class="years-exp years-exp-v2">
                            <h2><span class="counter">10</span> <sup>+</sup></h2>
                            <p>Years of Experience <br></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-right">
                        <h2>Our skilled team <br class="d-lg-block d-md-none">
                            grow your finance</h2>
                        <p>
                            {{$siteName}} stands as one of the largest and most seasoned international private equity firms.
                            Our accomplished team of investment professionals is primarily dedicated to strategic investments
                        </p>
                        <p class="about-one__text-2">
                            {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                        </p>
                        <p class="about-one__text-2">
                            The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                        </p>
                        <p class="about-one__text-2">
                            Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                        </p>
                        <ul>
                            <li><span><img src="{{asset('home/images/icon-svg/sign-circle.svg')}}" alt=""></span> Performing market research</li>
                            <li><span><img src="{{asset('home/images/icon-svg/sign-circle.svg')}}" alt=""></span> Providing information to clients</li>
                            <li><span><img src="{{asset('home/images/icon-svg/sign-circle.svg')}}" alt=""></span> Strategic planning</li>
                        </ul>
                        <div class="about-expert">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-5">
                                    <div class="about-expert-anim">
                                        <img src="{{asset('home/images/home/expertsm01.png')}}" alt="">
                                        <img src="{{asset('home/images/home/expertsm02.png')}}" alt="">
                                        <img src="{{asset('home/images/home/expertsm03.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-7">
                                    <div class="about-expert-counts">
                                        <h3><span class="counter">103</span></h3>
                                        <p> Expert Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="about-img-v2">
                            <img src="{{asset('home/images/')}}" alt="">
                            <img class="rounde-bubble" src="{{asset('home/images/home/round-bubble.png')}}" alt="">
                        </div>
                </div>
            </div>
        </div>
    </section>



@endsection
