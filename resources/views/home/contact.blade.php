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

    <!-- Business One -->
    <div class="contact__three pb-0 section-padding">
        <div class="container">
            <div class="row justify-content-center">



                @if(!empty($web->phone))
                    <div class="col-xl-4 col-md-6 lg-mb-30">
                        <div class="contact__three-info">
                            <div class="contact__three-info-icon">
                                <img src="{{asset('home//img/icon/call.png')}}" alt="">
                            </div>
                            <div class="contact__three-info-content">
                                <h4>Talk to US</h4>
                                <p><a href="{{$web->phone}}">{{$web->phone}}</a></p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-xl-4 col-md-6 md-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="{{asset('home//img/icon/email.png')}}" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Quick Email</h4>
                            <p><a href="mailto:{{$web->email}}">{{$web->email}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="{{asset('home//img/icon/locations.png')}}" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Office Location</h4>
                            <p>{!! $web->address !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
