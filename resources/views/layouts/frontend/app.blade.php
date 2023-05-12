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
<header class="saas2 loding-header nav-abs custom-scroll" id="dark-custom">
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
                            <li><a href="{{route('dr-detection')}}">DR detection</a></li>
                            @if (Auth::check())
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                            @else
                            <li><a href="#" data-target="#login-modal" data-toggle="modal">login</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--Nav end-->

@yield('content-frontend')

<!-- Login-modal section start -->
<div class="login-modal">
    <div aria-hidden="true" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button" style="right:16px">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-pills mb-5" id="pills-tab-login" role="tablist">
                        <li class="nav-item">
                            <a aria-controls="pills-home" aria-selected="true" class="nav-link active" data-toggle="pill"
                               href="#pills-home" id="pills-home-tab" role="tab">Login</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tab-Content">
                        <div aria-labelledby="pills-home-tab" class="tab-pane fade show active" id="pills-home"
                             role="tabpanel">
                            <!-- login-form -->
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="Email" type="email" name="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword05">Password</label>
                                        <input class="form-control" id="inputPassword05" placeholder="Password" type="password" name="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn primary-btn btn-default text-uppercase">Log in</button>
                            </form>
                            <!-- end login form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login-modal section end -->

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
                            {{-- <li>
                                <a href="#">Request an Appoinment</a>
                            </li> --}}
                            <li>
                                <a href="{{route('dr-information')}}">Diabetic Retinopathy Information</a>
                            </li>
                            <li>
                                <a href="{{route('dr-detection')}}">Diabetic Retinopathy Detection</a>
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
                                <a href="{{route('terms-and-conditions')}}">Terms of srvices</a>
                            </li>
                            <li>
                                <a href="{{route('privacy-policy')}}">Privact policy</a>
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
