<!doctype html>
<html lang="tr">
<?php  $locale = \App::currentLocale(); ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#28292C">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
  <!-- font awesome css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/font-awesome.min.css') }}">
  <!-- swiper css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
  <!-- fancybox css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/fancybox.min.css') }}">
  <!-- mapbox css -->
  <link href="{{ asset('css/plugins/mapbox-style.css') }}" rel='stylesheet'>
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Alya Projeleri</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-195465088-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-195465088-1');
</script>
<script src="https://run.admost.com/adx/track.ashx" referrerpolicy="no-referrer-when-
downgrade"></script>
<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-5H2B226');</script>

<!-- End Google Tag Manager -->



@yield('tesekkur')
</head>

<body>
  <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H2B226"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

  <div class="qrt-app">
    <div class="qrt-preloader">
      <div class="qrt-preloader-content">
        <div class="qrt-logo">
          <img src="{{ asset('img/logo.svg') }}" alt="Alya Projeleri">
        </div>
        <div id="preloader" class="qrt-preloader-load"></div>
      </div>
    </div>
    <div id="cursor" class="qrt-cursor">
      <div></div>
      <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div>
    </div>
    <div class="qrt-top-bar">
    
      <a href="{{ route('home') }}" class="qrt-logo qrt-cursor-color qrt-cursor-scale qrt-anima-link">
        <img src="{{ asset('img/logo.svg') }}" alt="Alya Projeleri">
      </a>
      <div class="qrt-menu">
        <div id="qrt-dynamic-menu" class="qrt-dynamic-menu">
          <nav>
            <ul>
              <li  @if(Route::is('home')) class="current-menu-item" @endif>
                <a href="{{ route('home') }}">@lang('main.home')</a>
              </li>
             
              <li> 
                <a href="#">@lang('main.corporate')</a>
                <ul>
                   <li><a href="{{ route('about') }}">@lang('main.about')</a></li>
                   <li><a href="@if($locale == 'tr') https://boss4.com.tr/kvkk.pdf @else http://boss4.com.tr/kvkk-en.pdf @endif" target="_blank">@lang('main.kvkk')</a></li>
                   <li><a href="{{ route('aydinlatma') }}" >@lang('main.aydinlatma')</a></li>
                </ul>
              </li>
              <li> 
                <a href="#">@lang('main.projects')</a>
                <ul>
                @foreach($categories as $cat)
                        <li><a href="{{ url('projeler/'.$cat->slug) }}">{{ $cat->getTranslatedAttribute('name',$locale,'fallbackLocale') }}</a></li>
                    @endforeach
                </ul>
              </li>
              <li @if(Route::is('news')) class="current-menu-item" @endif>
                <a href="{{ route('news') }}">@lang('main.press')</a>
                
              </li>
              <li @if(Route::is('contact')) class="current-menu-item" @endif>
                <a href="{{ route('contact') }}">@lang('main.contact')</a>
               
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="qrt-buttons">
        <a href="{{ route('contact') }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-send-request qrt-anima-link qrt-mr-20"><span>@lang('main.get-info')</span></a>
        <div class="qrt-menu-btn qrt-cursor-color qrt-cursor-scale"><span></span></div>
      </div>
    
      <div class="qrt-info" id="qrt-scroll-info">
        <div class="qrt-info-frame">
          <ul class="qrt-table">
            <li>
              <h5>Country</h5><span>Canada</span>
            </li>
            <li>
              <h5>City</h5><span>Toronto</span>
            </li>
            <li>
              <h5>Street</h5><span>North Avenue 31B, </span>
            </li>
            <li>
              <h5>Email</h5><span><a class="qrt-cursor-scale qrt-cursor-color" href="mailto:quarty.inbox@mail.com" data-no-swup>quarty.inbox@mail.com</a></span>
            </li>
            <li>
              <h5>Phone</h5><span><a class="qrt-cursor-scale qrt-cursor-color" href="#." data-no-swup>+9 3(049) 482 95 23</a></span>
            </li>
          </ul>
          <div class="qrt-divider"></div>
          <div class="qrt-social-links">
            <div class="qrt-social-links">
              <h5 class="qrt-mb-40">We are social</h5>
              <ul class="qrt-social-list">
                <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-behance"></i></a></li>
                <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-dribbble"></i></a></li>
                <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
             <div class="qrt-divider"></div>

            </div>
      </div>
    </div>
    <div class="qrt-left-bar">
      <div class="qrt-current-page-title"></div>
      <div class="qrt-change-language">
        <a href="{{ url('dil/tr') }}" class="qrt-leng @if($locale == 'tr') qrt-active @else qrt-cursor-color qrt-cursor-scale @endif">tr</a>
        <a href="{{ url('dil/en') }}" class="qrt-leng @if($locale == 'en') qrt-active @else qrt-cursor-color qrt-cursor-scale @endif ">En</a>
      </div>
    </div>