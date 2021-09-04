
<!DOCTYPE html>
<html lang="en" @if (Session('lang') == 'ar') dir="rtl" @endif>

<!-- Mirrored from themegeniuslab.com/html/proffer-v2-cp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Aug 2021 11:39:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> @yield('title') </title>

    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/css/give.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .dir_ar {
        text-align: right;
    }
    </style>

</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header id="header" class="site-header header-style-3">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-3 col-md-offset-2">
                        <div class="social text-right">
                            <span>Follow us: </span>
                            <ul>
                                <li><a href="{{ Session()->get('facebook') }}"><i class="ti-facebook"></i></a></li>
                                <li><a href="{{ Session()->get('twitter') }}"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="{{ Session()->get('pinterest') }}"><i class="ti-pinterest"></i></a></li>
                                <li><a href="{{ route('lang' , 'en') }}"> EN </a></li>
                                <li><a href="{{ route('lang' , 'ar') }}"> AR </a></li>
                             </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end topbar -->

        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    @yield('logo')
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-left navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li ><a href="{{ route('index') }}">  {{ Session()->get('home') }} </a></li>
                        <li><a href="{{ route('about') }}"> {{ Session()->get('about') }} </a></li>
                        <li><a href="{{ route('causes.index') }}"> {{ Session()->get('Causes') }} </a></li>
                        <li><a href="{{ route('event.index') }}"> {{ Session()->get('Event') }} </a></li>
                        <li><a href="{{ route('blog.index') }}">{{ Session()->get('blog') }} </a></li>
                        <li><a href="{{ route('contact') }}">{{ Session()->get('contact') }}</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->

                <div class="cart-search-contact">
                    <div class="header-search-form-wrapper">
                        <button class="search-toggle-btn"><i class="fi flaticon-search"></i></button>
                        <div class="header-search-form">
                            <form method="post" action="{{ route('search') }}">
                                @csrf
                                <div>
                                    <input type="text" name="searchBlog" class="form-control" placeholder="Search here...">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mini-cart">
                        <button class="cart-toggle-btn"> <i class="fi flaticon-shopping-basket"></i> <span class="cart-count">02</span></button>
                        <div class="mini-cart-content">
                            <div class="mini-cart-items">
                                <div class="mini-cart-item clearfix">
                                    <div class="mini-cart-item-image">
                                        <a href="#"><img src="assets/images/shop/mini-cart/img-1.jpg" alt></a>
                                    </div>
                                    <div class="mini-cart-item-des">
                                        <a href="#">Hoodi with zipper</a>
                                        <span class="mini-cart-item-price">$20.15</span>
                                        <span class="mini-cart-item-quantity">x 1</span>
                                    </div>
                                </div>
                                <div class="mini-cart-item clearfix">
                                    <div class="mini-cart-item-image">
                                        <a href="#"><img src="assets/images/shop/mini-cart/img-2.jpg" alt></a>
                                    </div>
                                    <div class="mini-cart-item-des">
                                        <a href="#">Ninja T-shirt</a>
                                        <span class="mini-cart-item-price">$13.25</span>
                                        <span class="mini-cart-item-quantity">x 2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mini-cart-action clearfix">
                                <span class="mini-checkout-price">$215.14</span>
                                <a href="#" class="view-cart-btn">View Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->




    @yield('content')



    <!-- start site-footer -->
    <footer @if(Session('lang') == 'ar') dir="rtl" @endif class="site-footer">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="widget about-widget">
                            <div class="widget-title">
                                <h3>
                                    <span class="hidden">About us</span>
                                    <img src="{{ asset('assets/images/footer-logo.png') }}" alt>
                                </h3>
                            </div>
                            <p>  {{ Session()->get('about_footer') }}  </p>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="{{ Session()->get('facebook') }}"><i class="ti-facebook"></i></a></li>
                                    <li><a href="{{ Session()->get('twitter') }}"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="{{ Session()->get('pinterest') }}"><i class="ti-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="widget contact-widget service-link-widget">
                            <div class="widget-title">
                                <h3> {{ Session()->get('title_address') }} </h3>
                            </div>
                            <ul>
                                <li>{{ Session()->get('address') }}</li>
                                <li><span>{{ Session()->get('phone') }}  :</span> {{ Session()->get('phone_num') }} </li>
                                <li><span>{{ Session()->get('email') }} :</span> {{ Session()->get('email_acc') }} </li>
                                <li><span>{{ Session()->get('office_time') }}</span> {{ Session()->get('time') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                <h3>{{ Session()->get('title_links') }}</h3>
                            </div>
                            <ul>
                                <li><a href="{{ route('index') }}">{{ Session()->get('home') }}</a></li>
                                <li><a href="{{ route('about') }}">{{ Session()->get('about') }}</a></li>
                                <li><a href="{{ route('causes.index') }}">{{ Session()->get('causes') }}</a></li>
                                <li><a href="{{ route('event.index') }}">{{ Session()->get('event') }}</a></li>
                            </ul>
                            <ul style="margin: 15px 0px 0px;">
                                <li><a href="{{ route('blog.index') }}">{{ Session()->get('blog') }}</a></li>
                                <li><a href="{{ route('contact') }}">{{ Session()->get('contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="lower-footer">
            <div class="container">
                <div class="row">
                    <div class="separator"></div>
                    <div class="col col-xs-12">
                        <p class="copyright">Copyright &copy; 2020 Proffer. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end site-footer -->
</div>

    <!-- All JavaScript files
================================================== -->
<script src="{{ asset ('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins for this template -->
<script src="{{ asset ('assets/js/jquery-plugin-collection.js') }}"></script>

<!-- Custom script for this template -->
<script src="{{ asset ('assets/js/script.js') }}"></script>
</body>

<!-- Mirrored from themegeniuslab.com/html/proffer-v2-cp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Aug 2021 11:40:06 GMT -->
</html>

