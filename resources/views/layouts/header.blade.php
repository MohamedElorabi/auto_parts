<!DOCTYPE html>

<html>

<head>
    <title>  قطع غيار  </title>
    <meta charset="utf-8">
    <meta name="description" content="welcoma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- *******************************
    **********************
    ***************
    -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{asset('front/images/logo fff.png')}}" />

    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/ar.css')}}">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#F36649">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#F36649">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#F36649">
    <meta name="apple-mobile-web-app-capable" content="yes">

    @livewireStyles
</head>
<body>


<!-- start header ===============
===========================
================ -->


<!-- start loading ===
========
===-->
{{-- <div class="loading">
    <div class="over_lay">
    </div>

    <div class="loader1">
        <div class="container loader">

            <span>.</span>
            <span>.</span>
            <span>.</span>
        </div>
    </div>
</div> --}}


<!-- end loading ===
========
===-->


<header>
    <div class="header">
        <div class="container">
            <div class="top_par">
                <div class="row align-items-center ">
                    <!-- start logo -->
                    <div class="col-lg-3 col-md-2">
                        <div class="logo">
                            <a href="index.html">
                                <object data="{{asset('front/svg/logo.svg')}}">
                                    <img src="{{asset('front/svg/logo.svg')}}" alt="">
                                </object>
                            </a>
                        </div>
                    </div>
                    <!-- end logo -->

                    <!-- start element  -->
                    <div class="col-lg-6  col-md-6">
                        <div class="element"  id="menu-div">
                            <div class="logo-mune">
                                <object data="{{asset('front/svg/logo.svg')}}">
                                    <img src="{{asset('front/svg/logo.svg')}}" alt="">
                                </object>


                            </div>
                            <ul>

                                <li><a href="{{url('/')}}"> الرئيسية</a></li>
                                <li><a href="{{url('about')}}">  من نحن</a></li>
                                <li><a href="{{url('services')}}">خدماتنا</a></li>
                                <li><a href="{{url('contact-us')}}"> تواصل معنا </a></li>

                            </ul>
                            <div class="user-header-mune">
                                <a href="{{url('register_client')}}">
                                    <i class="fas fa-user"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- end element  -->


                    <!-- start language -->
                    <div class="col-lg-3  col-md-4">

                        <div class="user-header">
                            <a href="{{url('register_client')}}">
                                <i class="fas fa-user"></i>
                            </a>
                        </div>

                        <div class="language">
                            <a href="">   <i class="bi bi-globe"></i> English  </a>
                        </div>
                    </div>
                    <!-- start language -->


                </div>
            </div>

