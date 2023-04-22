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
                      <p class="sub-title-para">Our eye exam incorporate cutting-edge Artificial Intelligence technology, ensuring a fast and accurate assessment of your diabetic retinopathy level. Our professional support team is available to assist you throughout the entire process. Once the exam is complete, you will receive a comprehensive report with detailed suggestions to optimize your visual health.</p>
                  </div>
              </div>
          </div>
          <div class="col-xl-8 col-md-7">
              <div class="center-text justify-content-center">
                  <div class="image-container">
                      <img alt="" class="img-fluid advance-feature-img"
                           src="{{asset('img/saas2/advance-feature/01.png')}}">
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-md-5">
              <div>
                  <div class="center-content justify-content-start">
                      <img alt="" class="img-fluid" src="{{asset('img/saas2/advance-feature/1.png')}}">
                      <div class="feature-content">
                          <h5 class="feature-head">Using Artificial Intelligence</h5>
                          <p class="feature-para">The AI algorithm is trained to detect diabetic retinopathy in the eye images. The algorithm is trained on a large dataset of eye images.</p>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="center-content justify-content-start">
                      <img alt="" class="img-fluid" src="{{asset('img/saas2/advance-feature/2.png')}}">
                      <div class="feature-content">
                          <h5 class="feature-head">Fast and Accurate</h5>
                          <p class="feature-para">The Accuracy of the algorithm is >90% and the time taken to detect diabetic retinopathy is 2 seconds.</p>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="center-content justify-content-start">
                      <img alt="" class="img-fluid" src="{{asset('img/saas2/advance-feature/3.png')}}">
                      <div class="feature-content">
                          <h5 class="feature-head">Professional Support</h5>
                          <p class="feature-para">Support is provided by the team of doctors and engineers.</p>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="center-content justify-content-start">
                      <img alt="" class="img-fluid" src="{{asset('img/saas2/advance-feature/4.png')}}">
                      <div class="feature-content">
                          <h5 class="feature-head">Report with Suggestions</h5>
                          <p class="feature-para">The report is generated with suggestions for the patient.</p>
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
                  <h3 class="text-white offer-heading-text">What you can expect</h3>
                  <div class="bottom-border">
                  </div>
                  <div class="offers-content">
                      <div class="d-flex">
                          <i aria-hidden="true" class="fa fa-check-circle"></i>
                          <div>
                              <h4 class="offer-main-text text-white">Before the exam</h4>
                              <p class="offer-sub-text text-white">If you're seeing a new eye doctor or if you're having your first eye exam, expect questions about your vision and general health history. Your answers help your eye doctor understand your risk of eye disease and vision problems.</p>
                          </div>
                      </div>
                  </div>
                  <div class="offers-content">
                      <div class="d-flex">
                          <i aria-hidden="true" class="fa fa-check-circle"></i>
                          <div>
                              <h4 class="offer-main-text text-white">During the exam</h4>
                              <p class="offer-sub-text text-white">A clinical assistant or technician might do part of the examination, such as taking your medical history and giving the initial eye test.</p>
                          </div>
                      </div>
                  </div>
                  <div class="offers-content">
                      <div class="d-flex">
                          <i aria-hidden="true" class="fa fa-check-circle"></i>
                          <div>
                              <h4 class="offer-main-text text-white">After the exam</h4>
                              <p class="offer-sub-text text-white">At the end of your eye exam, you and your doctor will discuss the results of all testing, including an assessment of your vision, your risk of eye disease and preventive measures you can take to protect your eyesight.</p>
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

<!--pricing css start-->
<section class="saas2 pricing m-0" id="plan">
  <div class="col-md-10 offset-md-1 col-12">
      <div class="container saas2-services">
          <div class="row">
              <div class="col-md-10 offset-md-1">
                  <div class="title">
                      <div class="main-title">
                          <h2>Diabetic Retinopathy Severity Level</h2>
                      </div>
                      <div class="sub-title">
                          <p class="sub-title-para">The severity of diabetic retinopathy is classified into 5 levels. The severity level is determined by the presence of retinal hemorrhages, exudates, and cotton wool spots.</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12 col-md-8 offset-md-2 offset-lg-0">
                  <div class="owl-carousel owl-theme pricing-slider price-margin">
                      <div class="item">
                          <div class="price-container shadows text-center">
                              <div class="service-feature ">
                                  <div class="feature-text">
                                      <img alt="" class="image-top" src="{{asset('img/dr/0.png')}}">
                                  </div>
                              </div>
                              <div>
                                  <div class="price-feature-container ">
                                      <div class="price-features">
                                          <h6 class="price text-center-feature">No disease visible</h6>
                                      </div>
                                      <div class="price-value">
                                          <h6 class="price text-center">Normal / No DR</h6>
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
                                      <img alt="" class="image-top" src="{{asset('img/dr/1.png')}}">
                                  </div>
                              </div>
                              <div>
                                  <div class="price-feature-container ">
                                      <div class="price-features">
                                          <h6 class="price text-center-feature">Non Poliferative DR</h6>
                                          <h6 class="price text-center-feature">localized microaneurysms</h6>
                                      </div>
                                      <div class="price-value">
                                          <h6 class="price text-center">Mild NPDR</h6>
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
                                      <img alt="" class="image-top" src="{{asset('img/dr/2.png')}}">
                                  </div>
                              </div>
                              <div>
                                  <div class="price-feature-container">
                                      <div class="price-features">
                                          <h6 class="price text-center-feature">Non Poliferative DR</h6>
                                          <h6 class="price text-center-feature">localized microaneurysms</h6>
                                          <h6 class="price text-center-feature">dot and blot hemorrhages</h6>
                                          <h6 class="price text-center-feature">Leaks (hard exudates) or closure (cotton wool sposts)</h6>
                                      </div>
                                      <div class="price-value">
                                          <h6 class="price text-center">Moderate NPDR</h6>
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
                                      <img alt="" class="image-top" src="{{asset('img/dr/3.png')}}">
                                  </div>
                              </div>
                              <div>
                                  <div class="price-feature-container">
                                      <div class="price-features">
                                          <h6 class="price text-center-feature">Non Poliferative DR</h6>
                                          <h6 class="price text-center-feature">Moderate NPDR plus</h6>
                                          <h6 class="price text-center-feature">Intraretinal hemorrhages venous beading</h6>
                                          <h6 class="price text-center-feature">Intermediate microvascular abnormalities</h6>
                                      </div>
                                      <div class="price-value">
                                          <h6 class="price text-center">Severe NPDR</h6>
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
                                    <img alt="" class="image-top" src="{{asset('img/dr/4.png')}}">
                                </div>
                            </div>
                            <div>
                                <div class="price-feature-container">
                                    <div class="price-features">
                                        <h6 class="price text-center-feature">Proliferative DR</h6>
                                        <h6 class="price text-center-feature">New vessels formation</h6>
                                        <h6 class="price text-center-feature">Vitreous/preretinal hemorrhages</h6>
                                        <h6 class="price text-center-feature">Tractional retinal detachment</h6>
                                    </div>
                                    <div class="price-value">
                                        <h6 class="price text-center">PDR</h6>
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
@endsection