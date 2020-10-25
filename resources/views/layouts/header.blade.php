<!doctype html>
<html lang="en">

<head>
  <title>{{$title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/brand/style.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
  <div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar light site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-3">
            <div class="site-logo">
            <a href="{{url('/')}}"><strong>TemanBelajar</strong></a>
            </div>
          </div>
          <div class="col-9  text-right">
            <span class="d-inline-block d-lg-none">
              <a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span>
                </a>
            </span>
            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
              <li><a href="{{url('/')}}" class="nav-link">Beranda</a></li>
              <li><a href="{{url('/kelas')}}" class="nav-link">Kelas</a></li>
              <li><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
              @if(auth()->user())
              <li><a href="{{url('/site/profil')}}" class="nav-link">Akun Saya</a></li>
              @endif
              @guest
              <li><a href="{{url('/login')}}" class="nav-link">Login</a></li>
              @endguest
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="site-section-cover overlay" style="background-color: #0f0e20;">