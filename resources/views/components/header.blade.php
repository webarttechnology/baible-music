<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Template">
      <meta name="keywords" content=" unica, creative, html">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Scripture</title>
      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
      <!-- Css Styles -->
      <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/barfiller.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/nowfont.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/rockville.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
      <!--------Stellarnav CSS----------->
      <link rel="stylesheet" href="{{ asset('frontend/css/stellarnav.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/stellarnav.min.css') }}" type="text/css">
   </head>
   <body>
      <!-- Page Preloder -->
      <!-- <div id="preloder">
         <div class="loader"></div>
         </div> -->
      <!-- Header Section Begin -->
      <header class="header {{ $page != 'home'?'header--normal':' ' }}">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-3 col-7">
                  <div class="header__logo">
                     <h2>
                         <a href="{{ url('/') }}">Bible Music</a>
                         <!--<a class="tagline" href="{{ url('/') }}">Full Albums</a>-->
                     </h2>
                  </div>
               </div>
               <div class="col-lg-9 col-md-9 col-5 text-right">
                  <div class="header__menu">
                     <div id="main-nav" class="stellarnav order-2 order-md-1">
                         <ul>
                           <li class="{{ $active == 'home'?'active':'' }}"><a href="{{ url('/') }}">HOME</a></li>
                           <li class="{{ $active == 'christian'?'active':'' }}"><a href="{{ route('christian.music.free') }}">BIBLE MUSIC</a></li>
                           <li class="{{ $active == 'benefits'?'active':'' }}"><a href="{{ url('benefits') }}">BENEFITS</a></li>
                           <li class="{{ $active == 'testimonial'?'active':'' }}"><a href="{{url('testimonial') }}">TESTIMONIAL</a></li>
                           <li class="{{ $active == 'contact'?'active':'' }}"><a href="{{ url('contact-us') }}">CONTACT</a></li>
                        </ul>
                     </div>
                     <div class="cartprt order-1 order-md-2">
                         <ul>
                             <li class="{{ $active == 'cart'?'active':'' }}"><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i><span id="courtcount">{{ count($cartcount) }}</span></a></li>
                        </ul>     
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Section End -->