<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>ibaraholka</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--===============================================================================================done-->
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify/themify-icons.css') }}">
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/elegant-font/html-css/style.css') }}">
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('animate/animate.css') }}">
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('animsition/css/animsition.min.css') }}">
<!--===============================================================================================done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('select2/select2.min.css') }}">
<!--=============================================================================================== done -->
    <link rel="stylesheet" type="text/css" href="{{ asset('daterangepicker/daterangepicker.css') }}">
<!--=============================================================================================== done -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
<!--=============================================================================================== done -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lightbox2/css/lightbox.min.css') }}">
<!--=============================================================================================== done-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
   
<!--===============================================================================================-->
    <style>
        .square_img{
            height: 270px;
            width: 270px;
        }
        .square {
            height: 0;
            padding-bottom: 100%;
            width: 100%;
        }
        .rectangle{
            height: 0;
            padding-bottom: 120%;
            width: 100%;   
        }

        .green {
            background-color: #80c950;
        }

        .mylabel{
            background-color: #e65540;
            z-index: 100;
            font-family: Montserrat-Regular;
            font-size: 14px;
            color: white;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 22px;
            border-radius: 11px;
            position: absolute;
            top: 12px;
            left: 12px;
        }
    </style>
 @yield('head')

</head>
<body class="animsition">
        <!-- header fixed -->
    <div class="wrap_header fixed-header2 trans-0-4">
        <!-- Logo -->
        <a href="index.html" class="logo">
            <img src="{{asset('images/logo/logo.png')}}" alt="IMG-LOGO">
        </a>

        <!-- Menu -->
        <div class="wrap_menu">
            <nav class="menu">
                <ul class="main_menu">
                   
                   @yield('nav')

                </ul>
            </nav>
        </div>

        <!-- Header Icon -->
        <div class="header-icons">
            @if (Auth::guest())
                <a class="header-wrapicon1 dis-block m-l-30" href="{{ route('login') }}"><span class="muted">Войти</span></a>
                <a class="header-wrapicon1 dis-block m-l-30" href="{{ route('register') }}"><span class="muted">Регистрация</span></a>                 
            @else
                <a href="{{ route('office') }}" class="header-wrapicon1 dis-block m-l-30" title="Личный Кабинет">
                    <!-- <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON"> -->
                    <span class="muted">Личный кабинет</span>
                </a>
                <a  class="header-wrapicon1 dis-block m-l-30" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <span class="muted">Выйти</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
           <!--  <a href="#" class="header-wrapicon1 dis-block">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>
             -->
            <span class="linedivide1"></span>

            <div class="header-wrapicon2">
                <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                <span class="header-icons-noti">0</span>

                <!-- Header cart noti -->
                <div class="header-cart header-dropdown">
                    <ul class="header-cart-wrapitem">
                        <li class="header-cart-item">
                            <div class="header-cart-item-img">
                                <img src="{{asset('images/item-cart-01.jpg')}}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt">
                                <a href="#" class="header-cart-item-name">
                                    White Shirt With Pleat Detail Back
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $19.00
                                </span>
                            </div>
                        </li>

                        <li class="header-cart-item">
                            <div class="header-cart-item-img">
                                <img src="{{asset('images/item-cart-02.jpg')}}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt">
                                <a href="#" class="header-cart-item-name">
                                    Converse All Star Hi Black Canvas
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $39.00
                                </span>
                            </div>
                        </li>

                        <li class="header-cart-item">
                            <div class="header-cart-item-img">
                                <img src="{{asset('images/item-cart-03.jpg')}}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt">
                                <a href="#" class="header-cart-item-name">
                                    Nixon Porter Leather Watch In Tan
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $17.00
                                </span>
                            </div>
                        </li>
                    </ul>

                    <div class="header-cart-total">
                        Total: $75.00
                    </div>

                    <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn">
                            <!-- Button -->
                            <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                View Cart
                            </a>
                        </div>

                        <div class="header-cart-wrapbtn">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                Check Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header class="header2">
        <!-- Header desktop -->
        <div class="container-menu-header-v2 p-t-26">
            <div class="topbar2">
                <div class="topbar-social">
                    <p class="muted">Региструйтес с помощью</p>
                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                    <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                </div>

                <!-- Logo2 -->
                <a href="{{route('home')}}" class="logo2">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="IMG-LOGO">
                </a>

                <div class="topbar-child2">
                    

                   <!--  <div class="topbar-language rs1-select2">
                        <select class="selection-1" name="time">
                            <option>USD</option>
                            <option>EUR</option>
                        </select>
                    </div> -->

                    <!--  -->
                    @if (Auth::guest())
                        <a class="header-wrapicon1 dis-block m-l-30" href="{{ route('login') }}"><span class="muted">Войти</span></a>
                        <a class="header-wrapicon1 dis-block m-l-30" href="{{ route('register') }}"><span class="muted">Регистрация</span></a>                 
                    @else
                        <a href="{{ route('office') }}" class="header-wrapicon1 dis-block m-l-30" title="Личный Кабинет">
                            <!-- <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON"> -->
                            <span class="muted">Личный кабинет</span>
                        </a>
                        <a  class="header-wrapicon1 dis-block m-l-30" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <span class="muted">Выйти</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                    <span class="linedivide1"></span>

                    <div class="header-wrapicon2 m-r-13">
                        <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset('images/item-cart-01.jpg')}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            White Shirt With Pleat Detail Back
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $19.00
                                        </span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset('images/item-cart-02.jpg')}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Converse All Star Hi Black Canvas
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $39.00
                                        </span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset('images/item-cart-03.jpg')}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nixon Porter Leather Watch In Tan
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $17.00
                                        </span>
                                    </div>
                                </li>
                            </ul>

                            <div class="header-cart-total">
                                Total: $75.00
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="wrap_header">
            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        @yield('nav2')
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">

            </div>
        </div>

        </div>

                <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="{{route('home')}}" class="logo-mobile">
                <img src="{{ asset('images/logo/logo.png') }}" alt="IMG-LOGO">
            </a>
            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <div class="header-icons-mobile">
                    <!-- 
                    <a href="#" class="header-wrapicon1 dis-block">
                        <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a> -->

                    <span class="linedivide2"></span>

                    <div class="header-wrapicon2">
                        <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset('images/item-cart-01.jpg')}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            White Shirt With Pleat Detail Back
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $19.00
                                        </span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset('images/item-cart-02.jpg')}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Converse All Star Hi Black Canvas
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $39.00
                                        </span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset('images/item-cart-03.jpg')}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nixon Porter Leather Watch In Tan
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $17.00
                                        </span>
                                    </div>
                                </li>
                            </ul>

                            <div class="header-cart-total">
                                Total: $75.00
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>
            <!-- Menu Mobile -->
                <div class="wrap-side-menu" >
                    <nav class="side-menu">
                        <ul class="main-menu">
                            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                                <span class="topbar-child1">
                                    @if (Auth::guest())
                                        <a class="header-wrapicon1 dis-block" href="{{ route('login') }}"><span class="muted">Войти</span></a>
                                        <a class="header-wrapicon1 dis-block" href="{{ route('register') }}"><span class="muted">Регистрация</span></a><li class="item-topbar-mobile p-l-10">
                                        <div class="topbar-social-mobile">
                                            <a href="#" class="topbar-social-item fa fa-facebook"></a>
                                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                                            <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                                            <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                                        </div>
                                    </li>
                                    @else
                                    <a href="{{ route('office') }}" class="header-wrapicon1 dis-block" title="Личный Кабинет">
                                        <!-- <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON"> -->
                                        <span class="muted">Личный кабинет</span>
                                    </a>
                                    <a  class="header-wrapicon1 dis-block" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <span class="muted">Выйти</span>
                                    </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    @endif
                                </span>
                            </li>
        <!-- 
                            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                                <div class="topbar-child2-mobile">
                                    <span class="topbar-email">
                                        fashe@example.com
                                    </span>

                                    <div class="topbar-language rs1-select2">
                                        <select class="selection-1" name="time">
                                            <option>USD</option>
                                            <option>EUR</option>
                                        </select>
                                    </div>
                                </div>
                            </li> -->
                            @yield('mobileNav')
                        </ul>
                    </nav>
                </div>

    </header>
        
    @yield('content')

    <!-- Footer -->
    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    GET IN TOUCH
                </h4>

                <div>
                    <p class="s-text7 w-size27">
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    </div>
                </div>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Категории
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Мужское
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Женское
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Dresses
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Sunglasses
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Links
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Поиск
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            О нас
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Контакты
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Returns
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Returns
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Shipping
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="effect1 w-size9">
                        <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                        <span class="effect1-line"></span>
                    </div>

                    <div class="w-size2 p-t-20">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                            Subscribe
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <div class="t-center p-l-15 p-r-15">
            <a href="#">
                <img class="h-size2" src="{{asset('images/icons/paypal.png')}}" alt="IMG-PAYPAL">
            </a>

            <a href="#">
                <img class="h-size2" src="{{asset('images/icons/visa.png')}}" alt="IMG-VISA">
            </a>

            <a href="#">
                <img class="h-size2" src="{{asset('images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">
            </a>

            <a href="#">
                <img class="h-size2" src="{{asset('images/icons/express.png')}}" alt="IMG-EXPRESS">
            </a>

            <a href="#">
                <img class="h-size2" src="{{asset('images/icons/discover.png')}}" alt="IMG-DISCOVER">
            </a>

            <div class="t-center s-text8 p-t-20">
                Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </div>
        </div>
    </footer>



    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>

    <!-- Modal Video 01-->
<!--     <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="w-full wrap-pic-w op-0-0"><img src="{{asset('images/icons/video-16-9.jpg')}}" alt="IMG"></div>
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/Nt8ZrWY2Cmk?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div> -->
    <!--===============================================================================================-->
    <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('select2/select2.min.js') }}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>
    
    <script>
        $('.block2-btn-addcart').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>
 
<!--===============================================================================================-->
    <script src="{{ asset('parallax100/parallax100.js') }}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>


    @yield('script')
</body>
</html>