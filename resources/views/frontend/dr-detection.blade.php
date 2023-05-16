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
                                  <h1>Eye DR Detection</h1>
                              </div>
                              <div class="header-sub-text">
                                  <h3 class="saas2-sub-text">Detect Your <span class="bold-text">Diabetic Retinopathy using AI</span>
                                  </h3>
                              </div>
                              <div class="header-sub-text">
                                  <p class="sub-para text-white">You have a retina image of your eye? if yes, you can detect the retina image of your eye by uploading it and AI will give the result</p>
                                  <p class="sub-para text-white" style="font-weight:bold;">Upload Your Image Here</p>
                              </div>
                              <input type="file" class="btn btn-default primary-btn transparent" id="upload-img"></input>
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

<!-- Larger-shadow section start-->
<section class="agency blog-sec blog-sidebar single_blog_item booking feature shadow-section">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="title title2 title-inner">
                  <div class="main-title">
                      <h2 class="font-primary borders text-center main-text m-b-0"><span class="text-uppercase">Detection result</span>
                      </h2>
                  </div>
              </div>
              <div class="shadow-lg p-5 shadow-showcase text-center ">
                <div class="progress mb-3">
                  <div class="progress-bar" role="progressbar" id="progress-bar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
                <img src="{{asset('img/dr/0.png')}}" alt="Detection result" class="img-fluid" width="35%" id="img-result">
                <h3 class="m-0 f-18 text-center shadow-font" id="text-title">Normal Retina</h3>
                <p class="m-0 f-14 text-center shadow-font" id="text-desc">Keep your healthy life style to prevent diabetes</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Larger-shadow section end-->

@endsection

@section('script-frontend')
<script>
  (function ($) {
    // check browser session data
    const sessionData = sessionStorage.getItem('dr-detection');
    if(sessionData) {
      const data = JSON.parse(sessionData);
      $('#img-result').attr('src', data.img);
      $('#text-title').text(data.title);
      $('#text-desc').text(data.desc);
    }

    const uploadImg = document.getElementById('upload-img');
    uploadImg.addEventListener('change', function(){
      const file = this.files[0];
      if(file){
        const reader = new FileReader();
        reader.addEventListener('load', function(){
          const img = document.getElementById('img-result');
          img.setAttribute('src', this.result);
        });
        reader.readAsDataURL(file);
        $('html, body').animate({scrollTop: $('.booking').offset().top }, 'slow');
        const formData = new FormData();
        formData.append('file', file);
        $.ajax({
          url: "{{env('APP_FLASK_URL') . '/upload'}}",
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            if(data.stage == '0' || data.stage == 0) {
              $('#text-title').text('Normal Retina');
              $('#text-desc').text('Your retina is normal, keep your healthy life style to prevent diabetes');
            } else if(data.stage == '1' || data.stage == 1) {
              $('#text-title').text('Mild Nonproliferative Retinopathy');
              $('#text-desc').text('Your retina is in mild nonproliferative retinopathy stage, keep your healthy life style to prevent diabetes and consult with your doctor');
            } else if(data.stage == '2' || data.stage == 2) {
              $('#text-title').text('Moderate Nonproliferative Retinopathy');
              $('#text-desc').text('Your retina is in moderate nonproliferative retinopathy stage, keep your healthy life style to prevent diabetes and consult with your doctor');
            } else if(data.stage == '3' || data.stage == 3) {
              $('#text-title').text('Severe Nonproliferative Retinopathy');
              $('#text-desc').text('Your retina is in severe nonproliferative retinopathy stage, keep your healthy life style to prevent diabetes and consult with your doctor');
            } else if(data.stage == '4' || data.stage == 4) {
              $('#text-title').text('Proliferative Retinopathy');
              $('#text-desc').text('Your retina is in proliferative retinopathy stage, keep your healthy life style to prevent diabetes and consult with your doctor');
            }
            
            $('#upload-img').val('');
            
            // save to browser session
            const sessionData = {
              img: "{{env('APP_FLASK_URL')}}/" + data.url_image,
              title: $('#text-title').text(),
              desc: $('#text-desc').text()
            };

            sessionStorage.setItem('dr-detection', JSON.stringify(sessionData));
          },
          xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
              if(evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                percentComplete = parseInt(percentComplete * 100);
                $('#progress-bar').width(percentComplete + '%');
                $('#progress-bar').html(percentComplete + '%');
              }
            }, false);
            return xhr;
          },
          error: function(jqXHR, textStatus, errorThrown, data) {
            console.log(textStatus, errorThrown, data);
          }
        });
      }
    });
  })(jQuery);
</script>
@endsection