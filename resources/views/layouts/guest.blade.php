<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aklim</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-03.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/catalog.css')}}">
  
</head>


<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+212) -762 597772" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+212) -762 597772</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>

                                <li class="menu-item lang-menu menu-item-has-children parent">
                                

                                            <a title="french" href="#"><span
                                                class="img label-before"><img
                                                    src="{{ asset('assets/images/lang-fra.png')}}"
                                                    alt="lang-fre"></span>French</a>
                                    <ul class="submenu lang">
                                 
                                        <li class="menu-item"><a title="Maroc" href="#"><span class="img label-before"><img
                                            src="{{ asset('assets/images/lang-ma.png')}}"
                                            alt="lang-en"></span>Maroc<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a></li>
                                        <li class="menu-item">
                                            <a title="English" href="#"><span class="img label-before"><img
                                                src="{{ asset('assets/images/lang-en.png')}}"
                                                alt="lang-en"></span>English<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                           </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                        </li>
                                    </ul>
                                </li>

                                @if(Route::has('login'))
                                @auth
                                @if(Auth::user()->utype =='ADM')
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="Myaccount" href="#">My Account {{Auth::user()->name}} <i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
                                        </li>


                                        <li class="menu-item">

                                            <a title="logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                            <!-- <a  href="{{route('logout')}}">logout</a> -->
                                        </li>

                                    </ul>
                                </li>
                                @else
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="Myaccount" href="#">My Account {{Auth::user()->name}} <i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
                                        </li>

                                        <li class="menu-item">

                                            <a title="logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                            <!-- <a  href="{{route('logout')}}">logout</a> -->
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                <!--end test if admin or user-->

                                @else
                                <li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Login</a>
                                </li>
                                <li class="menu-item"><a title="Register or Login"
                                        href="{{route('register')}}">Register</a></li>
                                @endauth
                                <!--end test auth-->
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="/" class="link-to-home"><img
                                    src="{{ asset('assets/images/logo-top-1.webp')}}" alt="mercado"></a>
                        </div>

                        <div class="wrap-search center-section">
                            <div class="wrap-search-form">
                                <form action="#" id="form-search-top" name="form-search-top">
                                    <input type="text" name="search" value="" placeholder="Search here...">
                                    <button form="form-search-top" type="button"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                    <div class="wrap-list-cate">
                                        <input type="hidden" name="product-cate" value="0" id="product-cate">
                                        <a href="#" class="link-control">All Category</a>
                                        <ul class="list-cate">
                                            <li class="level-0">All Category</li>
                                            <li class="level-1">-Electronics</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Headphone & Headsets</li>
                                            <li class="level-2">Mp3 Player & Acessories</li>
                                            <li class="level-1">-Smartphone & Table</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Mp3 Player & Headphones</li>
                                            <li class="level-2">Table & Accessories</li>
                                            <li class="level-1">-Electronics</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Headphone & Headsets</li>
                                            <li class="level-2">Mp3 Player & Acessories</li>
                                            <li class="level-1">-Smartphone & Table</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Mp3 Player & Headphones</li>
                                            <li class="level-2">Table & Accessories</li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="wrap-icon right-section">
                            <div class="wrap-icon-section wishlist">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">0 item</span>
                                        <span class="title">Wishlist</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section minicart">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">4 items</span>
                                        <span class="title">CART</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="header-nav-section">
                        <div class="container">
                            <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
                                <li class="menu-item"><a href="#" class="link-term">Conformité</a><span
                                        class="nav-label hot-label"><i class="fa fa-solid fa-check"></i></span></li>
                                <li class="menu-item"><a href="#" class="link-term">Qualité</a><span
                                        class="nav-label hot-label"><i class="fa fa-solid fa-check"></i></span></li>
                                <li class="menu-item"><a href="#" class="link-term">Service apre vente </a><span
                                        class="nav-label hot-label"><i class="fa fa-solid fa-check"></i></span></li>
                                <li class="menu-item"><a href="#" class="link-term">Un project ? Contacte nous !</a><span
                                        class="nav-label hot-label"><i class="fa fa-solid fa-check"></i></span></li>
                              
                            </ul>
                        </div>
                    </div>

                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="/about" class="link-term mercado-item-title">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/shop" class="link-term mercado-item-title">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/contact-us" class="link-term mercado-item-title">Contact</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cataloge" class="link-term mercado-item-title">Our catalogs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{$slot}}
    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="wrap-function-info">
                <div class="container">
                    <ul>
                        <li class="fc-info-item">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name"> Transport </h4>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Guarantee</h4>
                            </div>

                        </li>
                   
                        <li class="fc-info-item">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Online Suport</h4>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!--End function info-->

            <div class="main-footer-content">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Contact Details</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">N° 13 cité Riad Al Andalous Imm 102 GH4 Prestigia Hay Riad Rabat</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">(+212) -762 597772 - (+212) -762 597772</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">E-contact@Aklim.m</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                            <div class="wrap-footer-item">
                                <h3 class="item-header">Hot Line</h3>
                                <div class="item-content">
                                    <div class="wrap-hotline-footer">
                                        <span class="desc">Call Us toll Free</span>
                                        <b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-footer-item footer-item-second">
                                <h3 class="item-header">Sign up for newsletter</h3>
                                <div class="item-content">
                                    <div class="wrap-newletter-footer">
                                        <form action="#" class="frm-newletter" id="frm-newletter">
                                            <input type="email" class="input-email" name="email" value=""
                                                placeholder="Enter your email address">
                                            <button class="btn-submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                            <div class="row">
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">My Account</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">My Account</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Brands</a></li>
                                                <li class="menu-item"><a href="{{route("wishlist")}}" class="link-term">Wish list</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Infomation</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="{{route("contact.us")}}" class="link-term">Contact Us</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Order History</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                  
                        <div class="col-lg-6 col-sm-4 col-md-6 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Social network</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item social-network">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="whatsapp"><i
                                                        class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="facebook"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="pinterest"><i
                                                        class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="instagram"><i
                                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Dowload App</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item apps-list">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="our application on apple store">
                                                    <figure><img
                                                            src="{{ asset('assets/images/brands/apple-store.png')}}"
                                                            alt="apple store" width="128" height="36"></figure>
                                                </a></li>
                                            <li><a href="#" class="link-to-item"
                                                    title="our application on google play store">
                                                    <figure><img
                                                            src="{{ asset('assets/images/brands/google-play-store.png')}}"
                                                            alt="google play store" width="128" height="36"></figure>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

           

            </div>

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <a id="topcontrol"></a>

                            <ul>
                                <li class="menu-item"><a href="/about-us" class="link-term">About us</a></li>
                                <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a>
                                </li>
                                <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms &
                                        Conditions</a></li>
                                <li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('assets/js/functions.js')}}"></script>
    <script>
        // Get the button
        var btn = $('#topcontrol');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
    </script>
</body>

</html>
