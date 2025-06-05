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

@endsection
