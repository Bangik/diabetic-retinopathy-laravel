@extends('layouts.frontend.app')

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
                                  <h1>Eye DR Information</h1>
                              </div>
                              <div class="header-sub-text">
                                  <h3 class="saas2-sub-text">Find out information about <span class="bold-text">Diabetic Retinopathy</span>
                                  </h3>
                              </div>
                              <div class="header-sub-text">
                                  <p class="sub-para text-white">Diabetic retinopathy eye screening involves a series of tests to evaluate your vision and check for eye disease. Ophthalmologists will likely use various instruments and <span style="font-weight:bold;">Artificial Intelligence</span> to detect diabetic retinopathy in your eyes</p>
                              </div>
                              {{-- <a class="btn btn-default primary-btn transparent">Request an Appoinment</a> --}}
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
                            Diabetic retinopathy is a compilation of diabetes mellitus characterized by damage and blockage of the retinal blood vessels. Early symptoms of diabetic retinopathy are the formation of microaneurysms and leaks in blood vessels, venous abnormalities, retina swelling, abnormal growth of new blood vessels, and damage to nerve tissue (Abdullah et al., 2022). Diabetic retinopathy at all stages can cause decreased vision within six months, accompanied by the appearance of black shadows in the vision. It can even cause blindness if not treated quickly (Yusran, 2017).
                        </p>
                        <p>
                            Medical examination of patients with Diabetic Retinopathy is carried out in one way: direct observation by a doctor on the patient's retinal image taken using a fundus camera. A doctor will analyze the results of the retinal image; this examination usually requires high concentration in analyzing the image. In this study, the object area used is Hemorrhages which are damaged due to Diabetic Retinopathy in the form of bleeding that occurs in blood vessels marked by red blood spots due to the rupture of Microaneurysms.
                        </p>
                        <p>
                            Abnormalities in the retina of the eye caused by Diabetic Retinopathy are abnormalities in the blood vessels of the eye's retina. One example of Diabetic Retinopathy symptoms that can be seen from the blood vessels includes the appearance of a Microaneurysm, Hemorrhages, and Exudates, which are caused by a bulge in the blood vessels of the retina of the eye.
                        </p>
                        <p id="dr-0">
                            Diabetic retinopathy is divided into two types worldwide, non-proliferative diabetic retinopathy (NPDR) and proliferative diabetic retinopathy (PDR). In this study, the two types of diabetic retinopathy were divided into five grades, including normal, mild non-proliferative diabetic retinopathy (mild-NPDR), moderate non-proliferative diabetic retinopathy (moderate-NPDR), and severe non-proliferative diabetic retinopathy (NPDR). Proliferative diabetic retinopathy (severe - NPDR) and proliferative diabetic retinopathy (PDR). The five stages of diabetic retinopathy are described as follows:
                        </p>
                        <p id="dr-2">
                            <b>Normal</b> - The retina is normal, no abnormalities are found.
                        </p>
                        <p>
                            <b>Mild NPDR</b> - Microaneurysms are found in the retina, which is a small bulge in the blood vessels of the retina.
                        </p>
                        <p id="dr-3">
                            <b>Moderate NPDR</b> - Microaneurysms and Hemorrhages are found in the retina, which is a small bulge in the blood vessels of the retina and bleeding in the blood vessels of the retina.
                        </p>
                        <p id="dr-4">
                            <b>Severe NPDR</b> - Microaneurysms, Hemorrhages, and Venous beading are found in the retina, which is a small bulge in the blood vessels of the retina, bleeding in the blood vessels of the retina, and the appearance of a curved blood vessel.
                        </p>
                        <p>
                            <b>PDR</b> - Microaneurysms, Hemorrhages, Venous beading, and Neovascularization are found in the retina, which is a small bulge in the blood vessels of the retina, bleeding in the blood vessels of the retina, the appearance of a curved blood vessel, and the appearance of new blood vessels.
                        </p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="blog-side">
                  <div>
                      <h5 class="blog-title">Retinopathy Level</h5>
                      <div class="sidebar-container borders">
                          <ul class="sidebar-list">
                              <li class="d-flex">
                                  <p>
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>Normal
                                  </p>
                              </li>
                              <li class="d-flex">
                                  <p>
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>Mild NPDR
                                  </p>
                              </li>
                              <li class="d-flex">
                                  <p>
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>Moderate NPDR
                                  </p>
                              </li>
                              <li class="d-flex">
                                  <p>
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>Severe NPDR
                                  </p>
                              </li>
                              <li class="d-flex">
                                  <p>
                                      <i aria-hidden="true" class="fa fa-angle-right m-r-15"></i>PDR
                                  </p>
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