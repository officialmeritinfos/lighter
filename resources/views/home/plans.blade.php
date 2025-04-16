@extends('home.base')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('home/images/backgrounds/main-slider-2-1.jpg')}})">
        </div>
        <div class="page-header-bg-2" style="background-image: url({{asset('home/images/backgrounds/main-slider-2-1.jpg')}})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{$pageName}}</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">{{$pageName}}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->


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


@endsection
