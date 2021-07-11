<header>
    <div class="header-top-furniture wrapper-padding-2 res-header-sm">
        <div class="container-fluid">
            <div class="header-bottom-wrapper">
                <div class="logo-2 furniture-logo ptb-30">
                    <a href="index.html">
                        <img src="{{asset('assets/namiro/img/logo/2.png')}}" alt="">
                    </a>
                </div>
                <div class="menu-style-2 furniture-menu menu-hover">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الرئيسية </a>
                                {{-- <ul class="single-dropdown">
                                    <li><a href="index.html">Fashion</a></li>
                                    <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                </ul> --}}
                            </li>
                        </ul>
                    </nav>
                </div>
                @if (Auth::check())
                <div class="header-cart">
                    <a class="icon-cart-furniture" href="#">
                        <i class="ti-shopping-cart"></i>
                        @if (Auth::user()->carts->count() > 0)
                            <span class="shop-count-furniture green">{{ Auth::user()->carts->count()}}</span>
                        @endif
                    </a>
                    <ul class="cart-dropdown text-right ">
                        @if (Auth::user()->carts->count() >0 )
                            @foreach (Auth::user()->carts as $cart)                        
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="{{route('products.product.show',$cart->stock->product_id)}}">
                                            <img src="{{asset('assets/namiro/img/cart/1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-title">
                                        <h5><a href="#"> {{$cart->stock->product->name}}</a></h5>
                                        <h6><a href="#">{{$cart->stock->color ? $cart->stock->color->title : ''}}</a></h6>
                                        <span>${{$cart->stock->product->price}} x {{$cart->stock->amount}}</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                        <li class="cart-space">
                            <div class="cart-sub">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="cart-price">
                                <h4>$240.00</h4>
                            </div>
                        </li>
                        <li class="cart-btn-wrapper">
                            <a class="cart-btn btn-hover" href="{{route('processes.carts.index')}}">view cart</a>
                            <a class="cart-btn btn-hover" href="#">checkout</a>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
            <div class="row">
                <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{route('home')}}">الرئيسية</a>
                                    <ul>
                                        {{-- <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li> --}}
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>							
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
        <div class="container-fluid">
            <div class="furniture-bottom-wrapper">
                <div class="furniture-login">
                    <ul>
                        <li> <a href="{{route('login')}}"> تسجيل الدخول</a></li>
                        <li><a href="{{route('register')}}">تسجيل </a></li>
                    </ul>
                </div>
                <div class="furniture-search">
                    <form action="#">
                        <input placeholder="I am Searching for . . ." type="text">
                        <button>
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
                <div class="furniture-wishlist">
                    <ul>
                        {{-- <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i> Compare</a></li> --}}
                        <li><a href="#"><i class="ti-heart"></i> Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('assets/namiro/img/bg/breadcrumb.jpg')}})">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>@yield('page-name')</h2>
            <ul>
                <li> @yield('page-name') </li>
                <li><a href="{{route('home')}}">الرئيسية </a></li>
            </ul>
        </div>
    </div>
</div>