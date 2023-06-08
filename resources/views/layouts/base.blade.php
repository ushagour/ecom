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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css')}}">

    <!-- admin dashboard cdns   -->
    <script src="{{ asset('assets/adminvendor/jquery/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('assets/adminvendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />


    @stack('more_style')
    @livewireStyles
    <style>
        .elementor-image-gallery .gallery-item {
            display: inline-block;
            text-align: center;
            vertical-align: top;
            width: 100%;
            max-width: 100%;
            /* margin: 0 auto */
            padding-bottom: 2%;
        }

        .elementor-image-gallery .gallery-item img {
            margin: 0 auto
        }

        .elementor-image-gallery .gallery-item .gallery-caption {
            margin: 0
        }

        .elementor-image-gallery figure img {
            display: block
        }

        .elementor-image-gallery figure figcaption {
            width: 100%
        }

        .gallery-spacing-custom .elementor-image-gallery .gallery-icon {
            padding: 0
        }

        @media (min-width:768px) {
            .elementor-image-gallery .gallery-columns-2 .gallery-item {
                max-width: 50%
            }

            .elementor-image-gallery .gallery-columns-3 .gallery-item {
                max-width: 33.33%
            }

            .elementor-image-gallery .gallery-columns-4 .gallery-item {
                max-width: 25%
            }

            .elementor-image-gallery .gallery-columns-5 .gallery-item {
                max-width: 20%
            }

            .elementor-image-gallery .gallery-columns-6 .gallery-item {
                max-width: 16.666%
            }

            .elementor-image-gallery .gallery-columns-7 .gallery-item {
                max-width: 14.28%
            }

            .elementor-image-gallery .gallery-columns-8 .gallery-item {
                max-width: 12.5%
            }

            .elementor-image-gallery .gallery-columns-9 .gallery-item {
                max-width: 11.11%
            }

            .elementor-image-gallery .gallery-columns-10 .gallery-item {
                max-width: 10%
            }
        }

        @media (min-width:480px) and (max-width:767px) {

            .elementor-image-gallery .gallery.gallery-columns-2 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-3 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-4 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-5 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-6 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-7 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-8 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-9 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-10 .gallery-item {
                max-width: 50%
            }
        }

        @media (max-width:479px) {

            .elementor-image-gallery .gallery.gallery-columns-2 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-3 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-4 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-5 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-6 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-7 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-8 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-9 .gallery-item,
            .elementor-image-gallery .gallery.gallery-columns-10 .gallery-item {
                max-width: 100%
            }
        }
        </style>


</head>

<body class="home-page home-01">

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
                                    <a title="Hotline: (+212) -661 1002 72" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+212) -661 1002 72</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>

                                <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="#"><span class="img label-before"><img
                                                src="{{ asset('assets/images/lang-en.png')}}"
                                                alt="lang-en"></span>English<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu lang">
                                        <li class="menu-item"><a title="hungary" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-hun.png')}}"
                                                        alt="lang-hun"></span>Hungary</a></li>
                                        <li class="menu-item"><a title="german" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-ger.png')}}"
                                                        alt="lang-ger"></span>German</a></li>
                                        <li class="menu-item"><a title="french" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-fra.png')}}"
                                                        alt="lang-fre"></span>French</a></li>
                                        <li class="menu-item"><a title="canada" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-can.png')}}"
                                                        alt="lang-can"></span>Canada</a></li>
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
                                            <a title="products" href="{{route('admin.products')}}">Products</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Categories" href="{{route('admin.categories')}}">Categories</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="subCategories" href="{{route('admin.subCategories')}}">Sub Categories</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="sliders" href="{{route('admin.sliders')}}">Manage Sliders</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="sliders" href="{{route('admin.OnSale')}}">Manage onSale Timer </a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="sliders" href="{{route('admin.home.categories')}}">Manage home categories</a>
                                        </li>


                                        <li class="menu-item">

                                            <a title="logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
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
                            {{-- #Todo :change the logo  nb logo whene you resize the page    --}}
                            <a href="index.html" class="link-to-home" ><img height="50%" width="50%"
                                    src="{{ asset('assets/images/logo-top-1.png')}}" alt="mercado"></a>
                        </div>

                     @livewire('header-component')

                        <div class="wrap-icon right-section">
                    
                    @livewire("wishlist-count-component")
                    @livewire("cart-count-component")



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
                                    <a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
        {{ $slot }}
    
        
    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="wrap-function-info">
                <div class="container-fluid">
                    <center><h3><span>Nos références</span></h3></center>

                    <div class="elementor-image-gallery">
                        <div id="gallery-1" class="gallery galleryid-6 gallery-columns-10 gallery-size-full"><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/3.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/2.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/4.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/1.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/7.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/10.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/6.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/11.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/5.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="202" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/12.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure>
                    </div>
                    </div>
                 
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
                                                <p class="contact-txt">(+212) -661 1002 72 - (+212) -661 1979 97</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">contact@aklim.ma</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                        

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
                                                <li class="menu-item"><a href="#" class="link-term">Gift
                                                        Certificates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Infomation</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Returns</a></li>
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

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">We Using Safe Payments:</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item wrap-gallery">
                                        <img src="{{ asset('assets/images/payment.png')}}" style="max-width: 260px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Social network</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item social-network">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="twitter"><i
                                                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="facebook"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="pinterest"><i
                                                        class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="instagram"><i
                                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
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

                <div class="wrap-back-link">
                    <div class="container">
                        <div class="back-link-box">
                            <h3 class="backlink-title">Quick Links</h3>
                            <div class="back-link-row">
                                <ul class="list-back-link">
                                    <li><span class="row-title">Mobiles:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
                                    <li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles
                                            GL</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles
                                            Karbonn</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles
                                            Micrumex</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles
                                            Samsyng</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a>
                                    </li>
                                </ul>

                                <ul class="list-back-link">
                                    <li><span class="row-title">Tablets:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Samsyng Tablets">Samsyng
                                            Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Qindows Tablets">Qindows
                                            Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Calling Tablets">Calling
                                            Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Micrumex Tablets">Micrumex
                                            Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus">Lenova
                                            Tablets Bsus</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets iBall">Tablets iBall</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets Swipe">Tablets Swipe</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio">Tablets TVs,
                                            Audio</a></li>
                                </ul>

                                <ul class="list-back-link">
                                    <li><span class="row-title">Fashion:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="Sarees Silk">Sarees Silk</a></li>
                                    <li><a href="#" class="redirect-back-link" title="sarees Salwar">sarees Salwar</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Suits Lehengas">Suits Lehengas</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Biba Jewellery">Biba Jewellery</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Rings Earrings">Rings Earrings</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Diamond Rings">Diamond Rings</a>
                                    </li>
                                    <li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes">Loose Diamond
                                            Shoes</a></li>
                                    <li><a href="#" class="redirect-back-link" title="BootsMen Watches">BootsMen
                                            Watches</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Women Watches">Women Watches</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2023 Aklim. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="/about" class="link-term">About us</a></li>
                                {{-- <li class="menu-item"><a href="/privacy-policy" class="link-term">Privacy Policy</a>
                                </li>
                                <li class="menu-item"><a href="/terms-conditions" class="link-term">Terms &
                                        Conditions</a></li>
                                <li class="menu-item"><a href="/return-policy" class="link-term">Return Policy</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>
    
    
    {{-- <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script> --}}
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    {{-- <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
    {{-- <script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script> --}}
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('assets/js/functions.js')}}"></script>
    <!-- admin dashboard cdns   -->
    <script src="{{ asset('assets/adminvendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/adminvendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{ asset('assets/adminvendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>
    <script src="{{ asset('assets/adminvendor/tables/examples.datatables.ajax.js')}}"></script>		
    <script src="{{ asset('assets/js/spinner.js')}}"></script>
    <script src="{{ asset('assets/adminvendor/form/examples.advanced.form.js')}}"></script>		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
    <script src="{{ asset('assets/adminvendor/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>


    @stack("more_scripts")
    @livewireScripts

    

</body>

</html>
