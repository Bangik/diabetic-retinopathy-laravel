<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="DR - Severity Detection" name="Diabetic Retinopathy Severity Level Detection">
    <meta content="DR - Severity Detection" name="diabetic retinopathy">
    <meta content="DR - Severity Detection" name="bangik">
    <title>DR - Severity Detection</title>

    <!-- Fav icon -->
    <link href="{{asset('img/favicon.svg')}}" rel="shortcut icon">
    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--bootstrap css-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <!-- color css -->
    <link href="{{asset('css/color-9.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/keyframes.css')}}" rel="stylesheet" type="text/css">
    <!--owl carousel css-->
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/themify.css')}}" rel="stylesheet" type="text/css">

    <!-- flat Icons -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet" type="text/css">
    <!--magnific popup css-->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <!--custom css-->
    <style>
        .header .bg.saas2-bg{background-image:url("{{asset('img/saas2/slider.png')}}");}
        .saas2.fixed{background-image: linear-gradient(#9647DB, #5E57EA);}
        .saas2.feature{background-image:url("{{asset('img/saas2/background.png')}}");}
        .saas2.quick-sol{background:url("{{asset('img/saas2/background/quick-sol.png')}}");}
        .saas2.laptop-slider{background:url("{{asset('img/saas2/background/screenshot-bg.png')}}");}
        .saas2.testimonial{background:url("{{asset('img/saas2/background/bg-testimonial.png')}}");}
        footer.footer2.saas2{background:url("{{asset('img/saas2/footer.png')}}") no-repeat top;background-size:cover}
        .pricing.yoga .price-container .service-feature .image-top,.pricing.saas2 .price-container .service-feature .image-top{margin-left:auto}
        .pricing.saas2 .price-container .price-feature-container{margin-top:15px}
    </style>
    @yield('css-frontend')
</head>
<body data-offset="80" data-spy="scroll" data-target=".navbar" class="">
<!--loader start-->
<div class="loader-wrapper">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--loader end-->

<!--Nav start-->
<header class="saas2 loding-header nav-abs custom-scroll">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav>
                    <a class="d-inline-block m-r-auto" href="sass_layout.html">
                        <img alt="" class="img-fluid" src="{{asset('img/1.png')}}">
                    </a>
                    <div class="responsive-btn">
                        <a class="toggle-nav" href="JavaScript:void(0);">
                            <i aria-hidden="true" class="fa fa-bars text-white"></i>
                        </a>
                    </div>
                    <div class="navbar m-l-auto" id="togglebtn">
                        <div class="responsive-btn">
                            <a class="btn-back" href="#"><h5 class="text-dark">back</h5></a>
                        </div>
                        <ul class="main-menu">
                            <li><a href="{{route('index')}}">home</a></li>
                            <li><a href="{{route('dr-information')}}">DR information</a></li>
                            <li><a href="#">DR detection</a></li>
                            <li><a href="#">login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--Nav end-->

@yield('content-frontend')

<!--footer start-->
<footer class="saas2 footer2" id="contact">
    <div class="container footer-padding">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="logo-sec">
                    <div class="footer-title mobile-title p-t-0">
                        <h3 class="text-white">About Us</h3>
                    </div>
                    <div class="footer-contant">
                        <img alt="" class="img-fluid footer-logo" src="{{asset('img/1.png')}}">
                        <div class="footer-para">
                            <h6 class="text-white para-address">DR - Severity Detection</h6>
                            <h6 class="text-white para-address">DETECT YOUR DIABETIC RETINOPATHY EARLY</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-title mobile-title">
                    <h3 class="text-white">Product</h3>
                </div>
                <div class="footer-contant">
                    <h5 class="footer-headings">Product</h5>
                    <div>
                        <ul class="footer-lists">
                            <li>
                                <a href="{{route('dr-information')}}">DR Information</a>
                            </li>
                            <li>
                                <a href="#">Diabetic Retinopathy Detection</a>
                            </li>
                            <li>
                                <a href="#">Request an Appoinment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="footer-title mobile-title">
                    <h3 class="text-white">About Us</h3>
                </div>
                <div class="footer-contant">
                    <h5 class="footer-headings">About Us</h5>
                    <div>
                        <ul class="footer-lists">
                            <li>
                                <a href="#">User guide</a>
                            </li>
                            <li>
                                <a href="#">Terms of srvices</a>
                            </li>
                            <li>
                                <a href="#">Privact policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-title mobile-title">
                    <h3 class="text-white">Diabetic Retinopathy</h3>
                </div>
                <div class="footer-contant">
                    <h5 class="footer-headings">DR - Severity Detection</h5>
                    <div>
                        <h4 class="text-white Unice-text">DR - Severity Detection</h4>
                        <h6 class="text-white Unice-copyright-text">© 2023</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!-- Tap on Top-->
<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- Tap on Ends-->

<!-- latest jquery-->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<!-- popper js-->
<script src="{{asset('js/popper.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!--  costamizer option -->
<script src="{{asset('js/custamizer-option.js')}}"></script>

<!--tilt js-->
<script src="{{asset('js/vanilla-tilt.min.js')}}"></script>

<!--AOS js-->
<script src="{{asset('js/aos.js')}}"></script>

<!--owl js-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

<!-- script js-->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/script9.js')}}"></script>
<script src="{{asset('js/layout-fix.js')}}"></script>
@yield('script-frontend')
</body>
</html>
