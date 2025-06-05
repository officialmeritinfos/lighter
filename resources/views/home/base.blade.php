
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>

    <link rel="shortcut icon" href="{{asset('home/images/'.$web->logo)}}" >
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="{{asset('home/bootstrap-icons-1.10.4/font/bootstrap-icons.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <!-- Video Modal CSS -->
    <link rel="stylesheet" href="{{asset('home/css/jquery.yu2fvl.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <!-- Responsive Style CSS -->
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    @stack('css')
    <style>
        a {
            color: #f36233;
            transition: all 0.3s ease 0s;
            text-decoration: none !important;
            outline: none !important;
        }
        a:active,
        a:hover {
            text-decoration: none;
            outline: 0 none;
            color: #242526;
        }
        ul {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }
        ::-moz-selection {
            background: #f36233;
            text-shadow: none;
            color: #ffffff;
        }
        ::selection {
            background: #f36233;
            text-shadow: none;
            color: #ffffff;
        }


        .pt-90 {
            padding-top: 90px !important;
        }

        /* ------------------------------------
        02. Global CSS
        ---------------------------------------*/
        .readon {
            position: relative;
            display: inline-block !important;
            background: #f36233;
            padding: 14px 30px;
            line-height: normal;
            color: #ffffff !important;
            transition: all 0.3s ease 0s;
            border-radius: 30px;
            text-transform: capitalize !important;
            cursor: pointer;
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
        }
        .readon:hover,
        .readon:focus {
            background: #242526;
        }

        .inner{
            width:100%;
            float:left;
            position:relative;
        }



        .pricingTable .holder{
            background: #fff;
            box-shadow: 1px 20px 12px -15px rgba(0,0,0,0.2);
            padding: 40px 15px;
            text-align: center;
            border: 1px solid rgba(0,0,0,0.05);
            transition:0.5s ease;
        }

        .pricingTable .holder:hover{
            transform:translateY(-5px);

        }



        .pricingTable .holder .hdng p{
            font-size:28px;
            font-weight:bold;
            color:#242526;
        }

        .pricingTable .holder .img img{
            width:70%;
        }

        .pricingTable .holder .price p{
            color:#f36233;
            margin-bottom:25px;
        }

        .pricingTable .holder .price p b{
            font-size:40px;
            font-weight:bold;
        }

        .pricingTable .holder .price p span{
            font-size:18px;
        }

        .pricingTable .holder .info p{
            margin-bottom:15px;
            color:#242526;
            font-weight:14px;
        }

        .pricingTable .holder.active{
            background:#f36233;
        }

        .pricingTable .holder.active .hdng p,
        .pricingTable .holder.active .price p,
        .pricingTable .holder.active .info p{
            color:#fff;
        }

        .pricingTable .holder.active .readon{
            background:#fff;
            color:#f36233!important;
        }

        .pricingTable .holder.active .readon:hover{
            background:#242526;
            color:#fff!important;
        }

        .pricingTable .tabsBtnHolder ul{
            float:left;
            display:block;
            width:100%;
            max-width:326px;
            border-radius:1.6666666667rem;
            margin:0px auto;
            margin-bottom:40px;
            background:#f36233;
            text-align:center;
            position:relative;
        }

        .pricingTable .tabsBtnHolder ul li{
            float:left;
            width:calc(100% / 2);
            display:inline-block;
            transition:0.4s ease;
        }

        .pricingTable .tabsBtnHolder ul li p{
            color:#fff;
            padding:10px 15px;
            z-index:10;
            position:relative;
            cursor:pointer;
        }

        .pricingTable .tabsBtnHolder ul li p.active{
            color:#f36233;
        }

        .pricingTable .tabsBtnHolder ul li.indicator{
            position: absolute;
            top: 50%;
            left: 2px; /*163px*/
            background: #fff;
            height: calc(100% - 4px);
            transform: translateY(-50%);
            border-radius: 1.5333333333rem;
            width: 161px;
            z-index:9
        }
    </style>
</head>
<body>
@inject('injected','App\Defaults\Custom')
<!-- ================
    Loading Window
================= -->
<div class="nexigen-loading">
    <div class="lds-ripple"><div></div><div></div></div>
</div>


<!-- =====================
    Nexigen Header Top
====================== -->
<section class="header-top">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="header-top-left">
                    <h4><span><img src="{{asset('home/images/icon-svg/location.svg')}}" alt="location"></span> {!! $web->address !!}</h4>
                    <h4><span><img src="{{asset('home/images/icon-svg/clock.svg')}}" alt="time"></span> Mon- Fri : 24/7</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header-top-right">
                    <a href="mailto:{{$web->email}}"><span><img src="{{asset('home/images/icon-svg/envelop.svg')}}" alt="mail"></span>
                        {{$web->email}}</a>
                    <ul>
                        <li><a href="#"><img src="{{asset('home/images/icon-svg/facebook.svg')}}" alt="facebook"></a></li>
                        <li><a href="#"><img src="{{asset('home/images/icon-svg/twitter.svg')}}" alt="twitter"></a></li>
                        <li><a href="#"><img src="{{asset('home/images/icon-svg/linkedin.svg')}}" alt="linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =====================
    Nexigen Header Menu
====================== -->
<header id="sticky-header">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-2">
                <div class="mobile-flex">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt="{{$siteName}}">
                        </a>
                    </div>
                    <!-- Mobile Hamburger Menu -->
                    <div class="hamburger-menu">
                        <i class="bi bi-list"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="header-menu">
                    <!-- Mobile Menu Close Button -->
                    <div class="close-btn">
                        <i class="bi bi-x"></i>
                    </div>
                    <!-- Only Show On Mobile Devices -->
                    <div class="appointment-mobile">
                        <a href="{{url('/')}}" class="btn-primary">Get Started</a>
                    </div>
                    <!-- Menu -->
                    <ul>
                        <li class="active"><a class="sub-btn" href="{{url('/')}}">Home</a></li>
                        <li><a class="sub-btn" href="#">Company</a>
                            <ul class="submenu">
                                <li><a href="{{url('about')}}">About Us</a></li>
                                <li><a href="{{url('plans')}}">Investment Plans</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </li>
                        <li><a class="sub-btn" href="#">Services</a>
                            <ul class="submenu">
                                @foreach($injected->getSectors() as $sector)
                                    <li><a href="{{route('service.details',['id'=>$sector->id])}}" >{{$sector->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a class="sub-btn" href="#">Sectors</a>
                            <ul class="submenu">
                                @foreach($injected->getServices() as $service)
                                    <li><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a class="sub-btn" href="#">Help</a>
                            <ul class="submenu">
                                <li ><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                <li ><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                <li ><a href="{{url('privacy')}}" >Privacy policy</a></li>
                            </ul>
                        </li>
                        <li><a class="sub-btn" href="#">Investor Space</a>
                            <ul class="submenu">
                                <li><a href="{{route('login')}}" >Login</a></li>

                                <li><a href="{{route('register')}}" >Register</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Info Business Only Show On Mobile Devices -->
                    <div class="header-top header-top-on-menu">
                        <div class="header-top-left">
                            <h4><span><img src="{{asset('home/images/icon-svg/location.svg')}}" alt="location"></span>
                                {!! $web->address !!}</h4>
                            <h4><span><img src="{{asset('home/images/icon-svg/clock.svg')}}" alt="time"></span> Mon- Fri : 24/7</h4>
                        </div>
                        <div class="header-top-right">
                            <a href="mailto:{{$web->email}}"><span><img src="{{asset('home/images/icon-svg/envelop.svg')}}" alt="mail"></span>
                                {{$web->email}}</a>
                            <ul>
                                <li><a href="#"><img src="{{asset('home/images/icon-svg/facebook.svg')}}" alt="facebook"></a></li>
                                <li><a href="#"><img src="{{asset('home/images/icon-svg/twitter.svg')}}" alt="twitter"></a></li>
                                <li><a href="#"><img src="{{asset('home/images/icon-svg/linkedin.svg')}}" alt="linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header-right">
                    <a href="{{route('register')}}" class="btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('content')

<!-- =====================
    Footer
====================== -->
<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="footer-left">
                                <div class="footer-logo">
                                    <img src="{{asset('home/images/'.$web->logo)}}" alt="">
                                </div>
                                <p>
                                    {{$siteName}} is a leading investment management organization that is dedicated to meeting
                                    each client’s unique needs through a wide range of investment strategies. Our team of investment
                                    experts is committed to increasing our clients’ returns on investment and fostering long-lasting
                                    partnerships based on trust and open communication.
                                </p>
                                <div class="footer-contact">
                                    <ul>
                                        @if(!empty($web->phone))
                                            <li><a href="tel:{{$web->phone}}"><span><img src="{{asset('home/images/icon-svg/phone.svg')}}"
                                                                                      alt=""></span> {{$web->phone}}</a></li>
                                        @endif
                                        <li><a href="mailto:{{$web->email}}"><span><img src="{{asset('home/images/icon-svg/envlope.svg')}}" alt=""></span>
                                            {{$web->email}}</a></li>
                                        <li><a href="https://www.google.com/maps" target="_blank"><span><img src="{{asset('home/images/icon-svg/location-yellow.svg')}}" alt=""></span>
                                                {!! $web->address !!}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1 col-md-4 col-6">
                            <div class="footer-page-link">
                                <h3>Explore</h3>
                                <ul>
                                    <li><a href="{{url('faqs')}}"><i class="far fa-chevron-double-right"></i>Help Center</a></li>
                                    <li><a href="{{url('terms')}}"><i class="far fa-chevron-double-right"></i>terms & conditions</a></li>
                                    <li><a href="{{url('privacy')}}"><i class="far fa-chevron-double-right"></i>privacy policy</a></li>
                                    <li><a href="{{route('register')}}"><i class="far fa-chevron-double-right"></i>Create Account</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="footer-page-link">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('plans')}}">Investment Plans</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copyright">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-6 order-md-0 order-1">
                            <div class="copyright-left">
                                <p>&copy; Copyright {{date('Y')}} by {{$siteName}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 order-md-1 order-0">
                            <div class="copyright-right">
                                <ul>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('plans')}}">Investment Plans</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{asset('home/js/jquery-3.6.2.min.js')}}"></script>
<!-- Bootstrap Popper JS -->
<script src="{{asset('home/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<!-- Video Modal JS -->
<script src="{{asset('home/js/jquery.yu2fvl.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('home/js/wow.js')}}"></script>
<!-- Counter JS -->
<script src="{{asset('home/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('home/js/waypoints.2.0.3.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('home/js/main.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '393f389781149d7dc80785f6180c059e119eef6f';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>
