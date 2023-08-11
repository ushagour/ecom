<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aklim</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png')}}">
  	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-03.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css"/>
	@livewireStyles
    @stack('more_style')
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
                                    <a title="Hotline: (+212) -762 597772" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+212) -762 597772</a>
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
                         
                                <li class="menu-item"><a title="Maroc" href="#"><span class="img label-before"><img
                                    src="{{ asset('assets/images/lang-ma.png')}}"
                                    alt="lang-ar"></span>Maroc<i class="fa fa-angle-down"
                                aria-hidden="true"></i></a></li>
                                <li class="menu-item">
                                    <a title="french" href="#"><span
                                        class="img label-before"><img
                                            src="{{ asset('assets/images/lang-fra.png')}}"
                                            alt="lang-fre"></span>French</a>
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
								@if (Route::has('login'))
									@auth
										@if (Auth::user()->utype === 'ADM')
											<li class="menu-item menu-item-has-children parent" >
												<p title="My Account">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></p>
												<ul class="submenu curency" >
                                                    <li class="menu-item" >
														<a href="{{ route('admin.dashboard') }}" title="Dashboard">Dashboard</a>
													</li>
												
													<li class="menu-item">
														<a href="{{ route('admin.orders') }}" title="All Orders">All Orders</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('admin.products') }}" title="All Products">All Products</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('admin.attributes') }}" title="Attributes">Attributes</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('admin.categories') }}" title="Categories">Categories</a>
													</li>
												
													<li class="menu-item">
														<a href="{{ route('admin.home.categories') }}" title="Manage Home Categories">Manage Home Categories</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('admin.sliders') }}" title="Manage Home Slider">Manage Home Slider</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('admin.OnSale') }}" title="Sale Setting">Sale Setting</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
													</li>
													<form action="{{ route('logout') }}" method="POST" id="logout-form">
														@csrf
													</form>
												</ul>
											</li>
										@else
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">{{ Auth::user()->name }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
													</li>
													<li class="menu-item" >
														<a title="My Orders" href="{{ route('user.orders') }}">My Orders</a>
													</li>
													<li class="menu-item" >
														<a title="My Profile" href="{{ route('user.profile') }}">My Profile</a>
													</li>
													<li class="menu-item" >
														<a title="Change Password" href="{{ route('user.changepassword') }}">Change Password</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
													</li>
													<form action="{{ route('logout') }}" method="POST" id="logout-form">
														@csrf
													</form>
												</ul>
											</li>
										@endif
										@else
											<li class="menu-item"><a title="Login" href="{{ route('login') }}">Login</a></li>
											<li class="menu-item"><a title="Register" href="{{ route('register') }}">Register</a></li>
									@endauth
								@endif
							</ul>
						</div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            {{-- #Todo :change the logo  nb logo whene you resize the page    --}}
                            <a href="/" class="link-to-home" ><img height="50%" width="50%"
                                    src="{{ asset('assets/images/logo-top-1.webp')}}" alt="mercado"></a>
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
    
        {{ $slot }}
    
        
    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="wrap-function-info">
                <div class="container-fluid">
                    <center><h3><span>Nos références</span></h3></center>

                    <div class="elementor-image-gallery">
                        <div id="gallery-1" class="gallery galleryid-6 gallery-columns-10 gallery-size-sm"><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/3.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/2.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/4.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/1.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/7.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/10.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/6.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/11.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/5.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                        </div></figure><figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <img width="150" height="179" src="https://aklim.ma/wp-content/uploads/2023/05/12.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
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
                                                <p class="contact-txt">(+212) -762 597772- (+212) -762 597772</p>
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
                                            <ul> @auth
    
                                                @if(Auth::user()->utype === 'USR')
                                                <li class="menu-item"><a href="{{route('user.dashboard')}}" class="link-term">My Account</a></li>

                                                @endif
                                                @endauth
                                                <li class="menu-item"><a href="#Brands" class="link-term">Brands</a></li>
                                                <li class="menu-item"><a href="/wishlist" class="link-term">Wish list</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Infomation</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="/contact-us" class="link-term">Contact Us</a></li>
                                                <li class="menu-item"><a href="/contact-us#map" class="link-term">Site Map</a></li>
                                                @auth
    
                                                @if(Auth::user()->utype === 'USR')
                                                <li class="menu-item"><a href="{{route('user.orders')}}" class="link-term">Order History</a>
                                                @endif
                                                @endauth
                                               
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
                <br>

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
    
    

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/j1br3x3qdm2wjyhyykuzqleo1bo94ipjgb0wungiykb8g0gk/tinymce/6/tinymce.min.js"></script>

	
	
	
    <script src="{{ asset('assets/adminvendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/adminvendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{ asset('assets/adminvendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>
    <script src="{{ asset('assets/adminvendor/tables/examples.datatables.ajax.js')}}"></script>		
    <script src="{{ asset('assets/js/spinner.js')}}"></script>
    <script src="{{ asset('assets/adminvendor/form/examples.advanced.form.js')}}"></script>		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>


    @stack("more_scripts")
    @livewireScripts

    

</body>

</html>
