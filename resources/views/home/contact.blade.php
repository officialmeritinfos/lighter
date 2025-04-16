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

    <!-- Business One -->
    <section class="business-one style-five" style="background-image:url(home/images/background/pattern-39.png)">
        <div class="auto-container">
            <!-- Business One Lower Section -->
            <div class="business-one_lower-section text-center" style="margin-top: 10rem;">
                <h6>Main Details:</h6>
                <div class="row clearfix">
                    <!-- Branch Column -->
                    <div class="branch-column col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="branch-column_inner">
                            <div class="branch-name"> (Head Office)</div>
                            <ul class="branch-info_list">
                                <li>{!! $web->address !!}
                                </li>
                                <li><a href="tel:"></a> </li>
                                <li><a href="mailto:{{$web->email}}">{{$web->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Business One -->

    <!-- Map One -->
    <section class="map-one">
        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- End Map One -->


@endsection
