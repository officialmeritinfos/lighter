@extends('home.base')
@section('content')

    @inject('injected','App\Defaults\Custom')
    <!-- =====================
    Nexigen Hero
====================== -->
    <section class="hero">
        <div class="hero-animation">
            <img class="anim-hero-01" src="{{asset('home/images/home/doddles01.png')}}" alt="">
            <img class="anim-hero-02" src="{{asset('home/images/home/doddles02.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="hero-left">
                        <h4>Welcome to {{$siteName}}</h4>
                        <h1>Financial Solution for <br class="d-lg-block d-none"> everyone</h1>
                        <p>Our investment strategy is based on a lot of study and analysis, and it consistently earns our clients
                            good returns. We take a long-term, diversified, and risk-management-focused strategy.</p>
                        <div class="btns-hero">
                            <a href="{{route('register')}}" class="btn-secondary">Get Started</a>
                            <a href="{{route('login')}}" class="btn-secondary">
                                <span><i class="bi bi-play-fill"></i></span> Login
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="hero-right">
                        <img src="{{asset('home/images/32825.jpg')}}" alt="solutions">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================
        Nexigen Company
    ====================== -->
    <div class="company">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="company-prev">
                        <img src="{{asset('home/images/home/copmany01.png')}}" alt="">
                        <img src="{{asset('home/images/home/copmany02.png')}}" alt="">
                        <img src="{{asset('home/images/home/copmany03.png')}}" alt="">
                        <img src="{{asset('home/images/home/copmany04.png')}}" alt="">
                        <img src="{{asset('home/images/home/copmany05.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================
        About Market
    ====================== -->
    <section class="about-market">
        <div class="container">
            <div class="row">
                @foreach($injected->getSectors() as $sector)
                    <div class="col-lg-4">
                        <div class="single-market-desc">
                            <span><img src="{{asset('home/serv/'.$sector->photo)}}" alt="wealth"></span>
                            <h4>{{$sector->title}}</h4>
                            <p>{{\Illuminate\Support\Str::words($sector->short,20)}}</p>
                            <a href="{{route('service.details',['id'=>$sector->id])}}">Read More</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- =====================
        About US
    ====================== -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-left">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-7">
                                <div class="about-img-left">
                                    <img src="{{asset('home/images/home/corporate01.png')}}" alt="corporate">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-5">
                                <div class="about-img-right">
                                    <img src="{{asset('home/images/home/corporate02.png')}}" alt="corporate">
                                </div>
                            </div>
                        </div>
                        <div class="years-exp">
                            <h2><span class="counter">10</span> <sup>+</sup></h2>
                            <p>Years of Experience <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-right">
                        <h4>about us</h4>
                        <h2>Our skilled team <br class="d-lg-block d-md-none">
                            grow your finance</h2>
                        <p>
                            {$siteName}} stands as one of the largest and most seasoned international private equity firms.
                            Our accomplished team of investment professionals is primarily dedicated to strategic investments.
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
                                        <img class="fadeInLeft wow" data-wow-duration="2s" data-wow-delay="2s" src="{{asset('home/images/home/expertsm01.png')}}" alt="">
                                        <img class="fadeInLeft wow" data-wow-duration="2s" data-wow-delay="2.5s" src="{{asset('home/images/home/expertsm02.png')}}" alt="">
                                        <img class="fadeInLeft wow" data-wow-duration="3s" data-wow-delay="3s" src="{{asset('home/images/home/expertsm03.png')}}" alt="">
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
                        <a class="btn-secondary" href="{{url('about')}}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================
        Latest Project
    ====================== -->
    <!--<section class="latest-project">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="heading-common">-->
    <!--                    <h4>Our Industry</h4>-->
    <!--                    <h2>We have earned a reputation <br class="d-lg-block d-none"> as the market leader</h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            @foreach($services as $service)-->
    <!--                <div class="col-lg-4 col-md-12 mt-2">-->
    <!--                    <div class="single-project">-->
    <!--                        <img src="{{asset('home/serv/'.$service->photo)}}" alt="">-->
    <!--                        <div class="project-title">-->
    <!--                            <a href="{{route('service.details',['id'=>$service->id])}}"><i class="bi bi-box-arrow-up-right"></i></a>-->
    <!--                            <h3>{{$service->title}}</h3>-->
    <!--                            <p class="text-white">{{\Illuminate\Support\Str::words($service->short,15)}}</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- =====================
        How We Works
    ====================== -->
    <section class="how-we-work">
        <div class="how-its-work-anim">
            <img class="anim-work-01" src="{{asset('home/images/home/doddles03.png')}}" alt="">
            <img class="anim-work-02" src="{{asset('home/images/home/doddles04.png')}}" alt="">
            <img class="anim-work-03" src="{{asset('home/images/home/arrow-indicate.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-common">
                        <h4>how you earn</h4>
                        <h2>Steps you need to take to <br class="d-lg-block d-none"> start earning</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-we-work-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="gater-info-wrap">
                            <div class="row">
                                <div class="col-lg-12 offset-lg-0 col-md-6 offset-md-3">
                                    <div class="gater-info-bx gater-info-bx-top">
                                        <div class="gater-info-left">
                                            <h3>01</h3>
                                        </div>
                                        <div class="gater-info-right">
                                            <h3>Create Account</h3>
                                            <p>Create a secured account by clicking the Get Started button. Then login and verify your account</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="gater-info-bx gater-info-bx-left">
                                        <div class="gater-info-left">
                                            <h3>02</h3>
                                        </div>
                                        <div class="gater-info-right">
                                            <h3>Deposit and Invest</h3>
                                            <p>Make a deposit into your account and then select a package, and invest from your balance</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="gater-info-bx gater-info-bx-right">
                                        <div class="gater-info-left">
                                            <h3>03</h3>
                                        </div>
                                        <div class="gater-info-right">
                                            <h3>Earn</h3>
                                            <p>
                                                We take care of the processes involved in earning from your selected package.
                                                Withdraw when your cycle has completed.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================
       Our Services
    ====================== -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-common heading-common-left">
                        <h4>Our Services</h4>
                        <h2>Our unique<br class="d-lg-block d-none"> services</h2>
                    </div>
                </div>
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-12">
                        <div class="single-service-box">
                            <div class="single-service-top">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                            </div>
                            <div class="single-service-desc">
                                <h3>{{$service->title}}</h3>
                                <p>{{\Illuminate\Support\Str::words($service->short,15)}}</p>
                                <a href="{{route('service.details',['id'=>$service->id])}}">Know More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    
    
    <section class="container-fluid pricingTable pt-90">
        <div class="container">
            <div class="row justify-content-center monthlyPriceList animated">
                <div class="col-lg-12">
                    <div class="customer-heading">
                        <h2>Investment Plans</h2>
                    </div>
                </div>
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 mt-3">
                        <div class="inner holder">
                            <div class="hdng">
                                <p>{{$package->name}}</p>
                            </div>
                            <div class="price mt-5">
                                <p><b>{{$package->roi}}%</b><span> / {{$option->getReturnType($package->returnType)}}</span></p>
                            </div>
                            <div class="info">
                                <p>
                                    Min. Deposit: ${{number_format($package->minAmount,2)}}
                                </p>
                                <p>
                                    Max. Deposit: @if($package->isUnlimited !=1)
                                        ${{number_format($package->maxAmount,2)}}
                                    @else
                                        Unlimited
                                    @endif
                                </p>
                                <p>
                                    {{$option->getReturnType($package->returnType)}} Profit: {{$package->roi}}%
                                </p>
                                <p>
                                    Duration: {{$package->Duration}}
                                </p>
                                <p>
                                    Referral Bonus: {{$package->referral}}%
                                </p>
                            </div>
                            <div class="btn">
                                <a href="{{route('register')}}" class="readon">Get Started</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <!-- =====================
        Our FAQ
    ====================== -->
    <section class="our-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 order-lg-0 order-md-1 order-1">
                    <div class="heading-common heading-common-left">
                        <h4>OUR FaqS</h4>
                        <h2>What are they Asked?</h2>
                    </div>
                    <div class="faq-left">
                        <div class="accordion" id="accordionNexigen">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How do I create my account?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionNexigen">
                                    <div class="accordion-body">
                                        <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I make a deposit?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionNexigen">
                                    <div class="accordion-body">
                                        <p>
                                            To deposit funds in your trading account is quick and simple. For your
                                            convenience you may choose one of the several available deposit methods.
                                            To make a successful deposit please follow the steps below:<br>
                                        <ul>
                                            <li>Login to your account Click on the New Investment button in the
                                                DASHBOARD section.<br>
                                            </li>

                                            <li>Choose the deposit option And fill the form including the amount and
                                                the package.
                                            </li>
                                            <li>
                                                You will receive the wallet address to make payment to on the next page.
                                                After payment, contact support.
                                            </li>
                                            <li>
                                                Once your deposit has been confirmed, the status of the investment will change
                                                to <span class="text-primary">Ongoing</span> which means that it has been confirmed
                                                and your investment started.
                                            </li>
                                        </ul>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How long does my deposit take before it can reflect on my {{$siteName}} account dashboard?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionNexigen">
                                    <div class="accordion-body">
                                        <p>
                                            Your deposit will be reflected immediately once it is confirmed on the blockchain network
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-lg-1 order-md-0 order-0">
                    <div class="faq-right faq-page-right">
                        <img class="faq-analytics bounce-animate" src="{{asset('home/images/home/analytics.png')}}" alt="">
                        <img class="faq-outflow bounce-animate" src="{{asset('home/images/home/outflow.png')}}" alt="">
                        <img src="{{asset('home/images/business-research.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================
        Customer Feedback
    ====================== -->
    <section class="customer-feedback">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="customer-heading">
                        <h2>Customer Feedback</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                    <div class="customer-slider owl-carousel">
                        <!-- Single Customer Slide -->
                        <div class="single-custome-slide">
                            <p>
                                "Investing with {{$siteName}} has been a game-changer for me. Their expertise in various sectors helped me diversify my portfolio effectively."
                            </p>
                            <div class="info-customer">
                                <div class="info-customer-img">
                                    <img src="https://ui-avatars.com/api/?name=Jason+L" alt="">
                                </div>
                                <div class="info-custom-des">
                                    <h3>Jason L</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Single Customer Slide -->
                        <div class="single-custome-slide">
                            <p>
                                "I've been impressed by the level of transparency and professionalism at {{$siteName}}. They truly prioritize their clients' interests."
                            </p>
                            <div class="info-customer">
                                <div class="info-customer-img">
                                    <img src="https://ui-avatars.com/api/?name=Emma+Smith" alt="">
                                </div>
                                <div class="info-custom-des">
                                    <h3>Emma Smith</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Single Customer Slide -->
                        <div class="single-custome-slide">
                            <p>
                                "Thanks to {{$siteName}}, I've been able to navigate the complexities of cryptocurrency investing with confidence. Their team is top-notch!"
                            </p>
                            <div class="info-customer">
                                <div class="info-customer-img">
                                    <img src="https://ui-avatars.com/api/?name=Michael+G" alt="">
                                </div>
                                <div class="info-custom-des">
                                    <h3>Michael Guidry</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Single Customer Slide -->
                        <div class="single-custome-slide">
                            <p>
                                "Retirement planning used to overwhelm me, but {{$siteName}} made the process simple and effective. I feel secure about my future."
                            </p>
                            <div class="info-customer">
                                <div class="info-customer-img">
                                    <img src="https://ui-avatars.com/api/?name=Alice+W" alt="">
                                </div>
                                <div class="info-custom-des">
                                    <h3>Alice W.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    


    <!-- =====================
        From The Blog
    ====================== -->
    <section class="blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-common heading-common-left">
                        <h4>FROM THE BLOG</h4>
                        <h2>What’s Happening</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="blog-bottom-slide owl-carousel">
                        <div class="single-blog-info">
                            <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
