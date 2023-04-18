@extends('layouts.frontend.app')

@section('css-frontend')
<style>
    .header .bg.saas2-bg{background-image:url("{{asset('img/saas2/slider.png')}}");}
    .saas2.feature{background-image:url("{{asset('img/saas2/background.png')}}");}
    .saas2.quick-sol{background:url("{{asset('img/saas2/background/quick-sol.png')}}");}
    .saas2.laptop-slider{background:url("{{asset('img/saas2/background/screenshot-bg.png')}}");}
    .saas2.testimonial{background:url("{{asset('img/saas2/background/bg-testimonial.png')}}");}
    footer.footer2.saas2{background:url("{{asset('img/saas2/footer.png')}}") no-repeat top;background-size:cover}
</style>
@endsection

@section('content-frontend')
<!--header css start-->
<section class="saas2 header" id="home">
  <div class="saas2-content ">
      <div class="bg saas2-bg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="center-text">
                          <div>
                              <div class="header-text">
                                  <h1>Eye DR Examination</h1>
                              </div>
                              <div class="header-sub-text">
                                  <h3 class="saas2-sub-text">Detect Your <span class="bold-text">Diabetic Retinopathy Early</span>
                                  </h3>
                              </div>
                              <div class="header-sub-text">
                                  <p class="sub-para text-white">Diabetic retinopathy eye screening involves a series of tests to evaluate your vision and check for eye disease. Ophthalmologists will likely use various instruments and <span style="font-weight:bold;">Artificial Intelligence</span> to detect diabetic retinopathy in your eyes</p>
                              </div>
                              <a class="btn btn-default primary-btn transparent">Request an Appoinment</a>
                          </div>
                      </div>
                  </div>
                  <div class="center-text set-abs">
                      <img alt="" class="img-fluid img-dextop" src="{{asset('img/saas2/E.png')}}">
                  </div>
              </div>
          </div>

          <img alt="" class="img-fluid set-abs background-animate"
               src="{{asset('img/saas1/background2.png')}}">
          <img alt="" class="img-fluid set-abs img1 move-up-down"
               src="{{asset('img/saas2/header-icon/3.png')}}">
          <img alt="" class="img-fluid set-abs img2 move-right-left"
               src="{{asset('img/saas2/header-icon/2.png')}}">
          <img alt="" class="img-fluid set-abs img3 move-up-down"
               src="{{asset('img/saas2/header-icon/4.png')}}">
          <img alt="" class="img-fluid set-abs img4 move-up-down"
               src="{{asset('img/saas2/header-icon/5.png')}}">
          <img alt="" class="img-fluid set-abs img5 move-right-left"
               src="{{asset('img/saas2/header-icon/7.png')}}">
          <img alt="" class="img-fluid set-abs img6 move-up-down"
               src="{{asset('img/saas2/header-icon/9.png')}}">
          <img alt="" class="img-fluid set-abs img7 move-up-down"
               src="{{asset('img/saas2/header-icon/6.png')}}">
          <div class="set-abs round move-right-left">
              <img alt="" class="img-fluid img8" src="{{asset('img/saas2/header-icon/10.png')}}">
              <div class="set-abs inner-circle">
                  <img alt="" class="img-fluid img9" src="{{asset('img/saas2/header-icon/8.png')}}">
              </div>
          </div>
          <div class="center-content set-abs bottom-content">
              <div class="bottom">
                  <a class="down" href="#">
                      <img alt="" class="img-fluid" src="{{asset('img/saas2/header-icon/down.png')}}">
                  </a>
                  <div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div>
  </div>
</section>
<!--header css end-->

<!--feature css start-->
<section class="saas2 feature booking" id="feaure">
  <div class="container">
      <div class="row">
          <div class="col-md-10 offset-md-1">
              <div class="title">
                  <div class="main-title">
                      <h2>Advance Features</h2>
                  </div>
                  <div class="sub-title">
                      <p class="sub-title-para">We believe we have created the most efficient SaaS landing page for
                          your users.
                          Landing page with features that will convince you to use it for your SaaS business.</p>
                  </div>
              </div>
          </div>
          <div class="col-xl-8 col-md-7">
              <div class="center-text justify-content-center">
                  <div class="image-container">
                      <img alt="" class="img-fluid advance-feature-img"
                           src="/saas2/advance-feature/01.png">
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-md-5">
              <div>
                  <div class="center-content justify-content-start">
                      <img alt="" class="img-fluid" src="/saas2/advance-feature/1.png">
                      <div class="feature-content">
                          <h5 class="feature-head">Clean Design</h5>
                          <p class="feature-para">Lorem Ipsum is simply dummy text
                              of the printing and industry.</p>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="center-content justify-content-start">
                      <img alt="" class="img-fluid" src="/saas2/advance-feature/2.png">
                      <div class="feature-content">
                          <h5 class="feature-head">Dedicated Support</h5>
                          <p class="feature-para">Lorem Ipsum is simply dummy text
                              of the printing and industry.</p>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="center-content justify-content-start">
                      <img alt="" class="img-fluid" src="/saas2/advance-feature/3.png">
                      <div class="feature-content">
                          <h5 class="feature-head">Easy Customiable</h5>
                          <p class="feature-para">Lorem Ipsum is simply dummy text
                              of the printing and industry.</p>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="center-content justify-content-start">
                      <img alt="" class="img-fluid" src="/saas2/advance-feature/4.png">
                      <div class="feature-content">
                          <h5 class="feature-head">Multiple Demo</h5>
                          <p class="feature-para">Lorem Ipsum is simply dummy text
                              of the printing and industry.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--feature css end-->

<!--business css start-->
<section class="saas2 bg-gradient quick-sol">
  <div class="container set-center-div">
      <div class="row">
          <div class="col-lg-6">
              <div class="offers-container">
                  <h3 class="text-white offer-heading-text">We Offer Quick & Powerful
                      Business Solution</h3>
                  <div class="bottom-border">
                  </div>
                  <div class="offers-content">
                      <div class="d-flex">
                          <i aria-hidden="true" class="fa fa-check-circle"></i>
                          <div>
                              <h4 class="offer-main-text text-white">Beautiful Interface Layout</h4>
                              <p class="offer-sub-text text-white">Lorem Ipsum is simply dummy text of the print- ing
                                  and typesetting
                                  industry.</p>
                          </div>
                      </div>
                  </div>
                  <div class="offers-content">
                      <div class="d-flex">
                          <i aria-hidden="true" class="fa fa-check-circle"></i>
                          <div>
                              <h4 class="offer-main-text text-white">Beautiful Interface Layout</h4>
                              <p class="offer-sub-text text-white">Lorem Ipsum is simply dummy text of the print- ing
                                  and typesetting
                                  industry.</p>
                          </div>
                      </div>
                  </div>
                  <div class="offers-content">
                      <div class="d-flex">
                          <i aria-hidden="true" class="fa fa-check-circle"></i>
                          <div>
                              <h4 class="offer-main-text text-white">Beautiful Interface Layout</h4>
                              <p class="offer-sub-text text-white">Lorem Ipsum is simply dummy text of the print- ing
                                  and typesetting
                                  industry.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="center-text side-img">
              <img alt="" class="img-fluid" data-tilt data-tilt-max="3" data-tilt-perspective="500"
                   data-tilt-speed="400" src="/saas2/we-offer/img.png">
          </div>
      </div>
  </div>
</section>
<!--business css end-->

<!--service css start-->
<section class="saas2 services">
  <div class="container saas2-services">
      <div class="row">
          <div class="col-md-10 offset-md-1">
              <div class="title">
                  <div class="main-title">
                      <h2>our Features</h2>
                  </div>
                  <div class="sub-title">
                      <p class="sub-title-para">We believe we have created the most efficient SaaS landing page for
                          your users.
                          Landing page with features that will convince you to use it for your SaaS business.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 service-container">
              <div class="service text-center">
                  <div class="img-block">
                      <img alt="" class="service-img img-fluid" src="/saas2/our-feature/1.png">
                  </div>
                  <div class="service-feature">
                      <h4 class="feature-text text-center">Content Management</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the ma- jority have
                          suffered.</p>

                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 service-container">
              <div class="service text-center">
                  <div class="img-block">
                      <img alt="" class="service-img img-fluid" src="/saas2/our-feature/2.png">
                  </div>
                  <div class="service-feature">
                      <h4 class="feature-text text-center">Project Analysis</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the ma- jority have
                          suffered.</p>

                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 service-container">
              <div class="service text-center">
                  <div class="img-block">
                      <img alt="" class="service-img img-fluid" src="/saas2/our-feature/3.png">
                  </div>
                  <div class="service-feature">
                      <h4 class="feature-text text-center">Support & Service</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the ma- jority have
                          suffered.</p>

                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 service-container">
              <div class="service text-center">
                  <div class="img-block">
                      <img alt="" class="service-img img-fluid" src="/saas2/our-feature/4.png">
                  </div>
                  <div class="service-feature">
                      <h4 class="feature-text text-center">Project Management</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the ma- jority have
                          suffered.</p>

                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 service-container">
              <div class="service text-center">
                  <div class="img-block">
                      <img alt="" class="service-img img-fluid" src="/saas2/our-feature/5.png">
                  </div>
                  <div class="service-feature">
                      <h4 class="feature-text text-center">Get Free Update</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the ma- jority have
                          suffered.</p>

                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 service-container">
              <div class="service text-center">
                  <div class="img-block">
                      <img alt="" class="service-img img-fluid" src="/saas2/our-feature/6.png">
                  </div>
                  <div class="service-feature">
                      <h4 class="feature-text text-center">Smart Performance</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the ma- jority have
                          suffered.</p>

                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--service css end-->

<!--slider css start-->
<section class="saas2 laptop-slider bg-gradient" id="screenshot">
  <div class="container">
      <div class="row">
          <div class="col-md-10 offset-md-1">
              <div class="title">
                  <div class="main-title">
                      <h2 class="text-white">screen shot</h2>
                  </div>
                  <div class="sub-title">
                      <p class="sub-title-para text-white">We believe we have created the most efficient SaaS landing
                          page for
                          your users.
                          Landing page with features that will convince you to use it for your SaaS business.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="slider-container">
          <div class="owl-carousel owl-theme trainers-slider" id="trainers-slider">
              <div class="item">
                  <img alt="" class="img-fluid" src="/saas2/screen-shot/screen.png">
              </div>
              <div class="item">
                  <img alt="" class="img-fluid" src="/saas2/screen-shot/screen.png">
              </div>
              <div class="item">
                  <img alt="" class="img-fluid" src="/saas2/screen-shot/screen.png">
              </div>
              <div class="item">
                  <img alt="" class="img-fluid" src="/saas2/screen-shot/screen.png">
              </div>
              <div class="item">
                  <img alt="" class="img-fluid" src="/saas2/screen-shot/screen.png">
              </div>
              <div class="item">
                  <img alt="" class="img-fluid" src="/saas2/screen-shot/screen.png">
              </div>
          </div>
      </div>
  </div>
</section>
<!--slider css start-->

<!--pricing css start-->
<section class="saas2 pricing m-0" id="plan">
  <div class="col-md-10 offset-md-1 col-12">
      <div class="container saas2-services">
          <div class="row">
              <div class="col-md-10 offset-md-1">
                  <div class="title">
                      <div class="main-title">
                          <h2>pricing plan</h2>
                      </div>
                      <div class="sub-title">
                          <p class="sub-title-para">We believe we have created the most efficient SaaS landing page
                              for
                              your users.
                              Landing page with features that will convince you to use it for your SaaS business.</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12 col-md-8 offset-md-2 offset-lg-0">
                  <div class="owl-carousel owl-theme pricing-slider price-margin">
                      <div class="item">
                          <div class="price-container shadows text-center">
                              <div class="service-feature ">
                                  <div class="feature-text">
                                      <img alt="" class="image-top" src="/yoga-img/abs-yoga.png">
                                      <h3 class="text-white feature-text-heading text-center">free</h3>
                                  </div>
                              </div>
                              <div>
                                  <div class="price-feature-container ">
                                      <div class="price-features">
                                          <h6 class="price text-center-feature">100 MB Disk Space</h6>
                                          <h6 class="price text-center-feature">2 Subdomains</h6>
                                          <h6 class="price text-center-feature">5 Email Accounts</h6>
                                          <h6 class="price text-center-feature">Webmail Support</h6>
                                      </div>
                                      <div class="price-value">
                                          <h6 class="price text-center">$<span class="large">0</span>/month</h6>
                                      </div>
                                      <a class="btn btn-default btn-gradient" href="#">more</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="price-container shadows text-center">
                              <div class="service-feature ">
                                  <div class="feature-text">
                                      <img alt="" class="image-top" src="/yoga-img/abs-yoga.png">
                                      <h3 class="text-white feature-text-heading text-center">medium</h3>
                                  </div>
                              </div>
                              <div>
                                  <div class="price-feature-container ">
                                      <div class="price-features">
                                          <h6 class="price text-center-feature">100 MB Disk Space</h6>
                                          <h6 class="price text-center-feature">2 Subdomains</h6>
                                          <h6 class="price text-center-feature">5 Email Accounts</h6>
                                          <h6 class="price text-center-feature">Webmail Support</h6>
                                      </div>
                                      <div class="price-value">
                                          <h6 class="price text-center">$<span class="large">49</span>/month</h6>
                                      </div>
                                      <a class="btn btn-default btn-gradient" href="#">more</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="price-container shadows text-center">
                              <div class="service-feature ">
                                  <div class="feature-text">
                                      <img alt="" class="image-top" src="/yoga-img/abs-yoga.png">
                                      <h3 class="text-white feature-text-heading text-center">business</h3>
                                  </div>
                              </div>
                              <div>
                                  <div class="price-feature-container">
                                      <div class="price-features">
                                          <h6 class="price text-center-feature">100 MB Disk Space</h6>
                                          <h6 class="price text-center-feature">2 Subdomains</h6>
                                          <h6 class="price text-center-feature">5 Email Accounts</h6>
                                          <h6 class="price text-center-feature">Webmail Support</h6>
                                      </div>
                                      <div class="price-value">
                                          <h6 class="price text-center">$<span class="large">99</span>/month</h6>
                                      </div>
                                      <a class="btn btn-default btn-gradient" href="#">more</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="price-container shadows text-center">
                              <div class="service-feature ">
                                  <div class="feature-text">
                                      <img alt="" class="image-top" src="/yoga-img/abs-yoga.png">
                                      <h3 class="text-white feature-text-heading text-center">business</h3>
                                  </div>
                              </div>
                              <div>
                                  <div class="price-feature-container">
                                      <div class="price-features">
                                          <h6 class="price text-center-feature">100 MB Disk Space</h6>
                                          <h6 class="price text-center-feature">2 Subdomains</h6>
                                          <h6 class="price text-center-feature">5 Email Accounts</h6>
                                          <h6 class="price text-center-feature">Webmail Support</h6>
                                      </div>
                                      <div class="price-value">
                                          <h6 class="price text-center">$<span class="large">99</span>/month</h6>
                                      </div>
                                      <a class="btn btn-default btn-gradient" href="#">more</a>
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
<!--pricing css end-->

<!--testimonial css start-->
<section class="saas2 testimonial bg-gradient">
  <div class="container">
      <div class="row">
          <div class="col-md-10 offset-md-1">
              <div class="title">
                  <div class="main-title">
                      <h2 class="text-white">Testimonial</h2>
                  </div>
                  <div class="sub-title">
                      <p class="sub-title-para text-white">We believe we have created the most efficient SaaS landing
                          page for your users. Landing page with features that will convince you to use it for your
                          SaaS business.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-10 offset-md-1">
              <div class="owl-carousel owl-theme testimonial" id="testimonial">
                  <div class="item p-t-30">
                      <div class="col-lg-10 offset-lg-1 col-12">
                          <div class="row">
                              <div class="col-sm-3">
                                  <div class="testimonial-msg set-relative">
                                      <img alt="" class="img-fluid" src="/event/testimonial/L3-1.png">
                                      <div class="msg-box">
                                          <div class="center-content">
                                              <img alt=""
                                                   class="img-fluid set-abs"
                                                   src="/event/testimonial/message.png">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-9">
                                  <div class="quote-margin">
                                      <div class="quotes set-relative m-b-30">
                                          <img alt="" class="img-fluid set-abs left-quote"
                                               src="/event/testimonial/i1.png">
                                          <div class="quote-text">
                                              <h6 class="text-white">When you innovate, you make mistakes.It is best
                                                  to admit them quickly, & get on with improving your other
                                                  innovations.</h6>
                                          </div>
                                          <img alt="" class="img-fluid set-abs right-quote"
                                               src="/event/testimonial/i2.png">
                                      </div>
                                      <div class="rating align-items-center">
                                          <div class="stars">
                                              <ul>
                                                  <li>
                                                      <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                      <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                      <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                      <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                      <i aria-hidden="true" class="fa fa-star"></i>
                                                  </li>
                                              </ul>
                                          </div>
                                          <h5 class="name">Jhon Denal - <span> UI Designer</span></h5>
                                      </div>
                                  </div>
                              </div>
                              <div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item p-t-30">
                      <div class="col-lg-10 offset-lg-1 col-12">
                          <div class="row">
                              <div class="col-sm-3">
                                  <div class=" testimonial-msg set-relative">
                                      <img alt="" class="img-fluid" src="/event/testimonial/L3-1.png">
                                      <div class="msg-box">
                                          <div class="center-content">
                                              <img alt=""
                                                   class="img-fluid set-abs"
                                                   src="/event/testimonial/message.png">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-9">
                                  <div class="quote-margin">
                                      <div class="quotes set-relative m-b-20">
                                          <img alt="" class="img-fluid set-abs left-quote"
                                               src="/event/testimonial/i1.png">
                                          <div class="quote-text">
                                              <h6 class="text-white">When you innovate, you make mistakes.It is best
                                                  to admit them quickly, & get on with improving your other
                                                  innovations.</h6>
                                          </div>
                                          <img alt="" class="img-fluid set-abs right-quote"
                                               src="/event/testimonial/i2.png">
                                      </div>
                                      <div class="rating align-items-center">
                                          <div class="stars">
                                              <ul>
                                                  <li>
                                                      <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                      <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                      <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                      <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                      <i aria-hidden="true" class="fa fa-star"></i>
                                                  </li>
                                              </ul>
                                          </div>
                                          <h5 class="name">Jhon Denal - <span> UI Designer</span></h5>
                                      </div>
                                  </div>
                              </div>
                              <div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--testimonial css end-->

<!--brand css start-->
<section class="saas2 brand">
  <div class="col-md-10 offset-md-1 col-12">
      <div class="container saas2-services">
          <div class="row">
              <div class="col-md-10 offset-md-1">
                  <div class="title">
                      <div class="main-title">
                          <h2>trusted us</h2>
                      </div>
                      <div class="sub-title">
                          <p class="sub-title-para">We believe we have created the most efficient SaaS landing page
                              for
                              your users.
                              Landing page with features that will convince you to use it for your SaaS business.</p>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="owl-carousel owl-theme brand-slider" id="brand-slider">
                      <div class="item">
                          <a href="#">
                              <img alt="" class="img-fluid" src="/saas2/brand/1.png">
                          </a>
                      </div>
                      <div class="item">
                          <a href="#">
                              <img alt="" class="img-fluid" src="/saas2/brand/2.png">
                          </a>
                      </div>
                      <div class="item">
                          <a href="#">
                              <img alt="" class="img-fluid" src="/saas2/brand/3.png">
                          </a>
                      </div>
                      <div class="item">
                          <a href="#">
                              <img alt="" class="img-fluid" src="/saas2/brand/1.png">
                          </a>
                      </div>
                      <div class="item">
                          <a href="#">
                              <img alt="" class="img-fluid" src="/saas2/brand/5.png">
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--brand css end-->
@endsection