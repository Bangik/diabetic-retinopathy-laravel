@extends('layouts.frontend.app')

@section('css-frontend')
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
               src="{{asset('img/saas2/background2.png')}}">
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
<!-- section start -->
<section class="agency blog-sec blog-sidebar single_blog_item booking feature">
  <div class="container">
      <div class="row">
          <div class="col-lg-9 portfolio-section port-col zoom-gallery detail-page fullwidth-portfolio">
              <div class="owl-carousel owl-theme blog-detail-slider">
                @for ($i = 0; $i <= 4; $i++)
                  <div class="item">
                      <div class="border-portfolio">
                          <a class="zoom_gallery" data-source="{{asset('img/dr/'.$i.'.png')}}"
                             href="{{asset('img/dr/'.$i.'.png')}}" title="DR {{$i}}">
                              <img alt="" class="img-fluid blur-up lazyload "
                                   src="{{asset('img/dr/'.$i.'.png')}}">
                          </a>
                      </div>
                  </div>
                  
                @endfor
              </div>
              <div class="blog-text m-t-20">
                  <h3 class="blog-head">Diabetic Retinopathy Severity Level</h3>
                  <div class="blog-divider"></div>
                  <div class="blog-description">
                      <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been
                          the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley
                          of type and scrambled it to make a type specimen book. It has survived not only five
                          centuries,
                          but also the leap into electronic typesetting, remaining essentially unchanged. It was
                          popularised
                          in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                          recently
                          with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                      </p>
                      <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the
                          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                          of type
                          and scrambled it to make a type specimen book. It has survived not only five centuries, but
                          also the
                          leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                          1960s with the
                          release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                          publishing software
                          like Aldus PageMaker including versions of Lorem Ipsum.
                      </p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="blog-side">
                  <div>
                      <h5 class="blog-title">categories</h5>
                      <div class="sidebar-container borders">
                          <ul class="sidebar-list">
                              <li class="d-flex">
                                  <a href="#">
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>Lorem Ipsum Is Simple
                                  </a>
                              </li>
                              <li class="d-flex">
                                  <a href="#">
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>Many Variations
                                  </a>
                              </li>
                              <li class="d-flex">
                                  <a href="#">
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>random text
                                  </a>
                              </li>
                              <li class="d-flex">
                                  <a href="#">
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>lorem ipsum.
                                  </a>
                              </li>
                              <li class="d-flex">
                                  <a href="#">
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>it's Random.
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- section end -->
@endsection

@section('script-frontend')
<script>
  (function($) {
      "use strict";
      $('.blog-detail-slider').owlCarousel({
          items: 1,
          nav: true,
          dots: false,
          navText: [`<img src="{{asset('img/left.png')}}">`, `<img src="{{asset('img/right.png')}}">`],
          autoplay: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          loop: true,
      });
  })(jQuery);
</script>
@endsection