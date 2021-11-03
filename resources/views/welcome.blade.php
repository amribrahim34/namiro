<!doctype html>
<html class="no-js" lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{env('APP_NAME', 'namiro')}}</title>
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
        <link rel="stylesheet" href="{{asset('assets/namiro/css/slinky.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/namiro/css/responsive.css')}}">
        <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <header class="header-area wrapper-padding-2 fashion-2-header">
            <div id="main-menu" class="header-sticky-2">
                <div class="container-fluid">
                    <div class="logo-menu-wrapper">
                        <div class="logo-watch navbar-header">
                            <a class="navbar-brand" href="index.html"><img src="{{asset('assets/namiro/img/logo/logo-9.png')}}" alt=""></a>
                        </div>
                        <div class="header-search-cart-login">
                            @if (!Auth::check())
                                <div class="header-login">
                                    <ul>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Reg</a></li>
                                    </ul>
                                </div>
                            @endif
                            @if (Auth::check())
                                <div class="header-cart">
                                    <a class="icon-cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                        <span class="shop-count pink">{{ Auth::user()->carts != null ? Auth::user()->carts->count() : 0}}</span>
                                    </a>
                                    <ul class="cart-dropdown text-right">
                                        @if (Auth::user()->carts != null)
                                            @php $total = 0 @endphp
                                            @foreach (Auth::user()->carts as $cart) 
                                            @php $total += $cart->stock->product->price * $cart->quantity @endphp                       
                                                <li class="single-product-cart" id="dropdowncart{{$cart->id}}">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="{{asset('assets/namiro/img/cart/3.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <h5><a href="#">{{$cart->stock->product->name}}</a></h5>
                                                        <h6><a href="#">{{$cart->stock->color->title}}</a></h6>
                                                        <span>{{$cart->stock->product->price}} * {{$cart->quantity}}</span>
                                                    </div>
                                                    <div class="cart-delete">
                                                        <a href="#" data-cart_id="{{$cart->id}}">
                                                            <i class="ti-trash"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                        <li class="cart-space">
                                            <div class="cart-sub">
                                                <h4>المجموع</h4>
                                            </div>
                                            <div class="cart-price" id="menue-cart-price">
                                                <h4>{{$total}}</h4>
                                            </div>
                                        </li>
                                        <li class="cart-btn-wrapper">
                                            <a class="cart-btn btn-hover" href="{{route('processes.carts.index')}}">السلة </a>
                                            <a class="cart-btn btn-hover" href="{{route('processes.orders.index')}}">الدفع</a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- slider start -->
        <div class="slider-area">
            <div class="slider-active owl-carousel">
                <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url({{asset('assets/namiro/img/slider/13.jpg')}})">
                    <div class="container">
                        <div class="slider-content slider-animation slider-content-style-fashion slider-animated-1">
                            <div class="text-bg animated">
                                <img class="tilter-2 animated" src="{{asset('assets/namiro/img/icon-img/45.png')}}" alt="">
                            </div>
                            <p class="animated">Create you own style for better looks. </p>
                        </div>
                    </div>
                </div>
                <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url({{asset('assets/img/slider/1')}}4.jpg)">
                    <div class="container">
                        <div class="slider-content slider-animation slider-content-style-fashion slider-animated-1">
                            <div class="text-bg animated">
                                <img class="tilter-2 animated" src="{{asset('assets/namiro/img/icon-img/45.png')}}" alt="">
                            </div>
                            <p class="animated">Create you own style for better looks. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clickable-mainmenu-btn">
                <a class="clickable-mainmenu-active" href="#"><img src="{{asset('assets/namiro/img/icon-img/43.png')}}" alt=""></a>
            </div>
        </div>
        <!-- all products area start -->
        <div class="all-products-area pb-70">
            <div class="pl-100 pr-100">
                <div class="container-fluid">
                    <div class="row">
                        @if ($products != null)
                            @foreach ($products as $product)                                
                                <div class="col-lg-3 col-xl-3 col-md-6">
                                    <div class="product-wrapper mb-45">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('assets/namiro/img/product/fashion-2/8.jpg')}}" alt="">
                                            </a>
                                            <span>new</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                            <span>{{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- all products area end -->
        <!-- fashion banner area start -->
        <div class="fashion-banner-area pb-120">
            <div class="container">
                <div class="fashion-banner-wrapper">
                    <img src="{{asset('assets/namiro/img/banner/35.jpg')}}" alt="">
                    <div class="fashion-banner-content">
                        <h2>20% off For <br>Women <br>Collection</h2>
                        <a class="btn-hover fashion-2-btn" href="product-details.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand logo area start -->
        <div class="brand-logo-area pl-100 pr-100 gray-bg">
            <div class="ptb-135">
                <div class="brand-logo-active owl-carousel">
                    <div class="single-brand">
                        <img src="{{asset('assets/namiro/img/brand-logo/1.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/namiro/img/brand-logo/2.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/namiro/img/brand-logo/1.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/namiro/img/brand-logo/3.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/namiro/img/brand-logo/4.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/namiro/img/brand-logo/5.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/namiro/img/brand-logo/6.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- brand logo area end -->
        <!-- testimonials area start -->
        <div class="testimonials-area pt-105 pb-105">
            <div class="container">
                <div class="section-title-2 text-center mb-35">
                    <h2>Testimonial</h2>
                </div>
                <div class="testimonials-active owl-carousel">
                    <div class="single-testimonial-4 text-center">
                        <img src="{{asset('assets/namiro/img/icon-img/42.png')}}" alt="">
                        <p>This product is best product i ever get. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna.</p>
                        <h4>Newaz Sharif  /  UI Ux Designer</h4>
                    </div>
                    <div class="single-testimonial-4 text-center">
                        <img src="{{asset('assets/namiro/img/icon-img/42.png')}}" alt="">
                        <p>This product is best product i ever get. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna.</p>
                        <h4>Newaz Sharif  /  UI Ux Designer</h4>
                    </div>
                    <div class="single-testimonial-4 text-center">
                        <img src="{{asset('assets/namiro/img/icon-img/42.png')}}" alt="">
                        <p>This product is best product i ever get. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna.</p>
                        <h4>Newaz Sharif  /  UI Ux Designer</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials area end -->
        <!-- insta feed start -->
        <div class="insta-feed ptb-120  gray-bg">
            <div class="pl-185 pr-185">
                <div class="section-title-2 text-center mb-50">
                    <h2>Insta Feed</h2>
                    <h4>Follow us on intagram. <span>@Ezonepro</span></h4>
                </div>
                <div class="instafeed-wrapper">
                    <div class="instafeed-active owl-carousel">
                        <div class="instafeed-img">
                            <img src="{{asset('assets/namiro/img/instra/no-image-available-grid.png')}}" alt="">
                        </div>
                        <div class="instafeed-img">
                            <img src="{{asset('assets/namiro/img/instra/2.jpg')}}" alt="">
                        </div>
                        <div class="instafeed-img">
                            <img src="{{asset('assets/namiro/img/instra/3.jpg')}}" alt="">
                        </div>
                        <div class="instafeed-img">
                            <img src="{{asset('assets/namiro/img/instra/4.jpg')}}" alt="">
                        </div>
                        <div class="instafeed-img">
                            <img src="{{asset('assets/namiro/img/instra/5.jpg')}}" alt="">
                        </div>
                        <div class="instafeed-img">
                            <img src="{{asset('assets/namiro/img/instra/2.jpg')}}" alt="">
                        </div>`
                    </div>
                </div>
            </div>
        </div>
        <!-- insta feed end -->

        <footer class="footer-area">
            <div class="footer-top-area bg-img pt-105 pb-65" style="background-image: url({{asset('assets/namiro/img/bg/no-image-available-grid.png')}})" data-overlay="9">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Custom Service</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Track</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Categories</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="shop.html">Dress</a></li>
                                        <li><a href="shop.html">Shoes</a></li>
                                        <li><a href="shop.html">Shirt</a></li>
                                        <li><a href="shop.html">Baby Product</a></li>
                                        <li><a href="shop.html">Mans Product</a></li>
                                        <li><a href="shop.html">Leather</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Contact</h3>
                                <div class="footer-newsletter">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is dummy.</p>
                                    <div id="mc_embed_signup" class="subscribe-form pr-40">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="footer-contact">
                                        <p><span><i class="ti-location-pin"></i></span> 77 Seventh avenue USA 12555. </p>
                                        <p><span><i class=" ti-headphone-alt "></i></span> +88 (015)  609735 or  +88 (012) 112266</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright">
                                <p>
                                    Copyright ©
                                    <a href="https://hastech.company/">HasTech</a>
                                    2018 . All Right Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-quickview-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="assets/img/quick-view/lno-image-available-grid.png" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="assets/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="assets/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/sno-image-available-grid.png" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Handcrafted Supper Mug</h3>
                                <div class="price">
                                    <span class="new">$90.00</span>
                                    <span class="old">$120.00  </span>
                                </div>
                                <div class="rating-number">
                                    <div class="quick-view-rating">
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">900</option>
                                            <option value="">700</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clickable-mainmenu text-center">
            <div class="clickable-mainmenu-icon">
                <button class="clickable-mainmenu-close">
                    <span class="pe-7s-close"></span>
                </button>
            </div>
            <div id="menu" class="text-left">
                <ul>
                    <li>
                        <a href="#">home</a>
                        <ul>
                            <li><a href="index.html">Fashion</a></li>
                            <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                            <li><a href="index-fruits.html">fruits</a></li>
                            <li><a href="index-book.html">book</a></li>
                            <li><a href="index-electronics.html">electronics</a></li>
                            <li><a href="index-electronics-2.html">electronics style 2</a></li>
                            <li><a href="index-food.html">food & drink</a></li>
                            <li><a href="index-furniture.html">furniture</a></li>
                            <li><a href="index-handicraft.html">handicraft</a></li>
                            <li><a href="index-smart-watch.html">smart watch</a></li>
                            <li><a href="index-sports.html">sports</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about-us.html">about us</a>
                    </li>
                    <li>
                        <a href="#">shop</a>
                        <ul>
                            <li>
                                <a href="#">shop grid</a>
                                <ul>
                                    <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                    <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                    <li><a href="shop.html">grid 4 column</a></li>
                                    <li><a href="shop-grid-box.html">grid box style</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">shop list</a>
                                <ul>
                                    <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                    <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                    <li><a href="shop-list-box.html">list box style</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">product details</a>
                        <ul>
                            <li><a href="product-details.html">tab style 1</a></li>
                            <li><a href="product-details-2.html">tab style 2</a></li>
                            <li><a href="product-details-3.html"> tab style 3</a></li>
                            <li><a href="product-details-4.html">sticky style</a></li>
                            <li><a href="product-details-5.html">sticky style 2</a></li>
                            <li><a href="product-details-6.html">gallery style</a></li>
                            <li><a href="product-details-7.html">gallery style 2</a></li>
                            <li><a href="product-details-8.html">fixed image style</a></li>
                            <li><a href="product-details-9.html">fixed image style 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">pages</a>
                        <ul>
                            <li><a href="about-us.html">about us</a></li>
                            <li><a href="menu-list.html">menu list</a></li>
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li><a href="cart.html">cart page</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">blog</a>
                        <ul>
                            <li><a href="blog.html">blog 3 colunm</a></li>
                            <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                            <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('.cart-delete-button').on('click',function () {
                Swal.fire({
                    title: 'هل انت متأكد من انك تريد الحذف ؟ ',
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        var cartId = $(this).data('cart_id');
                        var RequestUrl = '{{route("processes.carts.destroy",'cartId')}}'
                        $.ajax({
                            url: RequestUrl.replace("cartId",cartId),
                            type:'delete',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            context: document.body
                        }).done(function() {
                            $('#dropdowncart'+cartId).remove()
                        });
                    } 
                });
            });
        </script>
    </body>
</html>
