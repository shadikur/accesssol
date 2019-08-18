<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<!-- Mirrored from www.enar.ideal-theme.com/html5/index.html , Sun, 11 Nov 2018 17:47:49 GMT -->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
    <title>AccessSol</title>
    <meta name="author" content="" />
    <meta name="description" content="" />

    <!-- Don't forget to set your site up: http://google.com/webmasters -->
    <meta name="google-site-verification" content="" />
    <meta name="Copyright" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />

    <!-- concatenate and minify for production -->
    <link rel="stylesheet" href="{{ asset('enra/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('enra/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('enra/css/bootstrap.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('enra/css/animate.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('enra/css/custom.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('enra/css/magnific-popup.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('enra/css/icon-fonts.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body class="preloader3 dark_sup_menu light_header">
<div id="preloader">
    <div class="spinner">
        <div class="sk-dot1"></div><div class="sk-dot2"></div>
        <div class="rect3"></div><div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

<div id="main_wrapper">
    <header id="site_header">
        <div class="topbar"><!-- class ( topbar_colored  ) -->
            <span class="top_expande not_expanded">
				<i class="no_exp ico-angle-double-down"></i>
				<i class="exp ico-angle-double-up"></i>
			</span>
        </div>
        <!-- End topbar -->

        <div id="navigation_bar" >
            <div class="content">
                <div id="logo" style="margin-top:-22px; height:95px;">
                    <a href="{{ route('index')  }}" style="height:100%">
                        <!--<img class="logo_dark" src="images/logo_light.png" alt="Enar Logo">-->
                        <img class="logo_light img-responsive " src="{{ asset('enra/images/logo_light.png') }}" alt="Enar Logo" style="height:92px; opacity:1;">
                    </a>
                </div>

                <nav id="main_nav">
                    <div id="nav_menu">
						<span class="mobile_menu_trigger">
						    <a href="#" class="nav_trigger"><span></span></a>
						</span>
                        <ul id="navy" class="clearfix">
                            <li class="normal_menu mobile_menu_toggle  current_page_item">
                                <a href="{{route('index')}}"><span>Home</span></a>
                            </li>
                            <li class="narmal_menu mobile_menu_toggle">
                                <a><span>Our Services</span></a>
                                <ul>
                                    <li class="normal_menu"><a href="{{route('it.services')}}">Managed IT Services</a></li>
                                    <li class="normal_menu"><a href="{{route('it.consulting')}}">Stretegic IT Consulting</a></li>
                                    <li class="normal_menu"><a href="{{route('cloud.computing')}}">Cloud Computing</a></li>
                                    <li class="normal_menu"><a href="{{route('network.security')}}">Network & Security</a></li>
                                    <li class="normal_menu"><a href="{{ route('support.specialist') }}">Support & Management</a></li>
                                    <li class="normal_menu"><a href="{{route('backup.recovery')}}">Data Backup & Disaster Recovery </a></li>
                                </ul>
                            </li>
                            <li class="narmal_menu mobile_menu_toggle">
                                <a><span>About Us</span></a>
                                <ul>
                                    <li class="normal_menu"><a href="{{route('our.purpose')}}">Our Purpose</a></li>
                                    <li class="normal_menu"><a href="{{route('why.we.serve')}}">Why We Serve</a></li>
                                    <li class="normal_menu"><a href="{{route('why.us')}}">Why Us</a></li>
                                    <li class="normal_menu"><a href="{{route('ref.program')}}">Referral Program</a></li>

                                </ul>
                            </li>
                            <li class="narmal_menu mobile_menu_toggle">
                                <a><span>Contact Us</span></a>
                                <ul>
                                    <li class="normal_menu"><a href="{{route('support.specialist')}}">Get Support</a></li>
                                    <li class="normal_menu"><a href="{{route('careers.page')}}">Careers</a></li>

                                </ul>
                            </li>
                            <li class="narmal_menu mobile_menu_toggle">
                                <a href="{{ route('support.specialist') }}">
                                    <img class="img-responsive" src="{{ asset('img/support.png') }}" style="height:70px">
                                </a>
                            </li>
                            <li class="narmal_menu mobile_menu_toggle">
                                <a href="https://accesssol.screenconnect.com/">
                                    <img class="img-responsive" src="{{ asset('img/remote.png') }}" style="height:70px">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Nav -->

                <div class="clear"></div>
            </div>
        </div>
    </header>
    <!-- End Main Header -->
@yield('content')

    <!-- footer -->
    <footer id="footer">
        <div class="footer_copyright">
            <div class="container clearfix">
                <div class="col-md-6">
                    <span class="footer_copy_text">Copyright &copy; 2015 Powered By <a href="#">AccessSol</a>  - All Rights Reserved</span>
                </div>
                <div class="col-md-6 clearfix">
                    <ul class="footer_menu clearfix">
                        <li><a href="#"><span>Home</span></a></li>
                        <li>/</li>
                        <li><a href="#"><span>About Us</span></a></li>
                        <li>/</li>
                        <li><a href="#"><span>Help Center</span></a></li>
                        <li>/</li>
                        <li><a href="#"><span>Contact Us</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->
    <a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
<script src="{{asset('enra/js/plugins.js')}}"></script>
<script src="{{asset('enra/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
<script src="{{asset('enra/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
<script src="{{asset('enra/js/isotope.pkgd.min.js')}}"></script>

<!-- this is where we put our custom functions -->
<script type="text/javascript" src="{{asset('enra/js/functions.js')}}"></script>
<script>
    function initMap() {
// The location of Uluru
        var uluru = new google.maps.LatLng(39.305, -76.617);
// The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 12, center: uluru});
// The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6GhjR-WmiKCgr71McBioeymDd6_Ti_0s&callback=initMap">
</script>
@yield('scripts')
</body>

<!-- Mirrored from www.enar.ideal-theme.com/html5/index.html , Sun, 11 Nov 2018 17:51:38 GMT -->
</html>