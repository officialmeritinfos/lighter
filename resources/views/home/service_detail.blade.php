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

    <!--section-->
    <section class="prt-row service-details clearfix">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <!-- prt_single_image-wrapper -->
                        <div class="pr-25 res-1199-pr-0">
                            <img width="613" height="558" class="img-fluid border-rad_50" src="{{asset('home/serv/'.$service->photo)}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="res-991-mt-30">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-heade">
                                <h2 class="title fs-32">{{$service->title}}</h2>
                            </div>
                            <div class="title-desc">
                                <div>
                                    {!! str_replace('MYSITE',$siteName,$service->content) !!}
                                </div>
                             </div>
                        </div><!-- section title end -->

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
