<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Blog - @yield('title')</title>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
   @yield('css')
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
  <div class="navbar-header">
   <div class="collapse navbar-collapse" id="app-navbar-collapse">
       <ul class="nav navbar-nav navbar-right">
           <li><a href="{{ url('about') }}">درباره ما</a></li>
           <li><a href="{{ url('contact') }}">تماس با ما</a></li>
           <li><a href="{{ url('/') }}">صفحه اصلی</a></li>
       </ul>
   </div>
 </div>
 </div>
</nav>
 <div class="container">
   <div id="content">
       @yield('content')
   </div>
 </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
@yield('js')
</body>
</html>
