<!doctype html>
<html class="no-js" dir="rtl" lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ezone - eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/namiro/img/favicon.png')}}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('assets/namiro/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/responsive.css')}}">
        <script src="{{asset('assets/namiro/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        @include('partials.header')
        <!-- header end -->
        
        <!-- register-area start -->
        @yield('content')
        <!-- register-area end -->
		@include('partials.footer')
		
		<!-- all js here -->
        <script src="{{asset('assets/namiro/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('assets/namiro/js/popper.js')}}"></script>
        <script src="{{asset('assets/namiro/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/namiro/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/namiro/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/namiro/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/namiro/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/namiro/js/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/namiro/js/ajax-mail.js')}}"></script>
        <script src="{{asset('assets/namiro/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/namiro/js/plugins.js')}}"></script>
        <script src="{{asset('assets/namiro/js/main.js')}}"></script>
    </body>
</html>
