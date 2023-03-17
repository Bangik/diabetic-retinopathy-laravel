<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An Artificial Intelligence for detect Diabetic Retinopathy stage">
  <meta name="author" content="Bangik">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="{{asset('css/dark.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <title>Diabetic Retinopathy</title>
</head>
<body data-theme="dark">
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
</body>
</html>