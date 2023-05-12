<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="{{asset('img/favicon.svg')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An Artificial Intelligence for detect Diabetic Retinopathy stage">
  <meta name="author" content="Bangik">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="{{asset('css/light.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body[data-theme=colored] .sidebar{background:linear-gradient(#9647DB, #5E57EA)}
    body[data-theme=colored] .sidebar-content{background:linear-gradient(#9647DB, #5E57EA)}
    .h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{color:#844adb;font-weight:400;line-height:1.2;margin-bottom:.5rem;margin-top:0}
    .btn-primary {
        --bs-btn-color: #fff;
        --bs-btn-bg: #5E57EA;
        --bs-btn-border-color: transparent;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #5049c5;
        --bs-btn-hover-border-color: #2f64b1;
        --bs-btn-focus-shadow-rgb: 88,145,226;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #2f64b1;
        --bs-btn-active-border-color: #2c5ea6;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0,0,0,.125);
        --bs-btn-disabled-color: #fff;
        --bs-btn-disabled-bg: #5E57EA;
        --bs-btn-disabled-border-color: #5E57EA
    }
  </style>
  <title>Diabetic Retinopathy</title>
  @yield('style')
</head>
<body data-theme="colored" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default" cz-shortcut-listen="true">
  <div class="wrapper">
    @include('layouts.admin.sidebar')
    <div class="main">
      @include('layouts.admin.navbar')
      <main class="content">
        <div class="container-fluid p-0">
          @yield('content')
        </div>
      </main>
      @include('layouts.admin.footer')
    </div>
  </div>
  <script src="{{asset('js/app.js')}}"></script>
  @yield('script')
</body>
</html>