@extends('layouts.app')

@section('content')

    <!-- Hero Slider -->
    <section class="hero">
      <div id="owl-hero" class="owl-carousel owl-theme owl-carousel--dots-inside">        

        <div class="hero__slide" style="background-image: url({{asset('assets/namiro/img/hero/1.jpg')}})">
          <div class="container text-center">
            <h1 class="hero__title">Got the style? Show us</h1>
            <a href="single-product.html" class="hero__link">Shop Now</a>
          </div>          
        </div>

        <div class="hero__slide" style="background-image: url({{asset('assets/namiro/img/hero/2.jpg')}})">
          <div class="container relative">
            <div class="hero__holder">
              <h1 class="hero__title-1">dope<br>street<br>wear</h1>
              <a href="single-product.html" class="hero__link-1 btn btn-lg btn-dark"><span>New Arrivals</span></a>
            </div>
          </div>
        </div>

        <div class="hero__slide" style="background-image: url({{asset('assets/namiro/img/hero/3.jpg')}})">
          <div class="container text-center">
            <div class="hero__holder-1">
              <h1 class="hero__title-2">new lookbook</h1>
              <h3 class="hero__subtitle">Sale 50% off. Get only trendy items</h3>
              <a href="single-product.html" class="hero__link-1 btn btn-lg btn-color"><span>Shop the trend</span></a>
            </div>
          </div>
        </div>

      </div> <!-- end owl -->
    </section> <!-- end hero slider -->

    <!-- Feature -->
    <section class="section-wrap pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-3 feature">
            <i class="ui-cube feature__icon"></i>
            <div class="feature__holder">
              <h6 class="feature__title">Free Shipping</h6>
              <span class="feature__text">On orders over $100</span>
            </div>            
          </div>
          <div class="col-md-3 feature">
            <i class="ui-plane feature__icon"></i>
            <div class="feature__holder">
              <h6 class="feature__title">Fast Delivery</h6>
              <span class="feature__text">Get your item within 1 week</span>
            </div>
          </div>
          <div class="col-md-3 feature">
            <i class="ui-pricetag feature__icon"></i>
            <div class="feature__holder">
              <h6 class="feature__title"><span class="feature__promo">50% Off</span> winter sale</h6>
              <span class="feature__text">Use code namiro50</span>
            </div>
          </div>
        </div>
      </div>
    </section>    

    <!-- Best Seller -->
    <section class="section-wrap pb-30">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line">
              الأكثر مبيعا 
            </h2>
          </div>
        </div>

        <div class="row row-8">
          @if ($best_seller)
              @foreach ($best_seller as $product)
                <div class="col-lg-2 col-sm-4 product">
                  <div class="product__img-holder">
                    <a href="{{route('products.product.show',$product->id)}}" class="product__link" aria-label="Product">
                      <img src="{{asset('assets/namiro/img/shop/product_1.jpg')}}" alt="" class="product__img">
                      <img src="{{asset('assets/namiro/img/shop/product_back_1.jpg')}}" alt="" class="product__img-back">
                    </a>
                    <div class="product__actions">
                      <a href="quickview.html" class="product__quickview">
                        <i class="ui-eye"></i>
                        <span>Quick View</span>
                      </a>
                      <a href="#" class="product__add-to-wishlist">
                        <i class="ui-heart"></i>
                        <span>Wishlist</span>
                      </a>
                    </div>
                  </div>

                  <div class="product__details">
                    <h3 class="product__title">
                      <a href="{{route('products.product.show',$product->id)}}">{{$product->name}}</a>
                    </h3>
                  </div>

                  <span class="product__price">
                    <ins>
                      <span class="amount">{{$product->price}}</span>
                    </ins>
                  </span>
                </div> <!-- end product -->
            @endforeach
          @endif
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end best seller -->

    <!-- New Arrivals -->
    <section class="section-wrap no-padding">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line">
              وصل حديثا 
            </h2>
          </div>
        </div>

        <div class="row row-8">
          @if ($new_arrivals)
              @foreach ($new_arrivals as $product)
                <div class="col-lg-2 col-sm-4 product">
                  <div class="product__img-holder">
                    <a href="{{route('products.product.show',$product->id)}}" class="product__link" aria-label="Product">
                      <img src="{{asset('assets/namiro/img/shop/product_1.jpg')}}" alt="" class="product__img">
                      <img src="{{asset('assets/namiro/img/shop/product_back_1.jpg')}}" alt="" class="product__img-back">
                    </a>
                    <div class="product__actions">
                      <a href="quickview.html" class="product__quickview">
                        <i class="ui-eye"></i>
                        <span>Quick View</span>
                      </a>
                      <a href="#" class="product__add-to-wishlist">
                        <i class="ui-heart"></i>
                        <span>Wishlist</span>
                      </a>
                    </div>
                  </div>

                  <div class="product__details">
                    <h3 class="product__title">
                      <a href="{{route('products.product.show',$product->id)}}">{{$product->name}}</a>
                    </h3>
                  </div>

                  <span class="product__price">
                    <ins>
                      <span class="amount">{{$product->price}}</span>
                    </ins>
                  </span>
                </div> <!-- end product -->
            @endforeach
          @endif
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end new arrivals -->

    {{-- <!-- Testimonials -->
    <section class="section-wrap">
      <div class="container">

        <div class="heading-row mb-0">
          <div class="text-center">
            <h2 class="heading">
              What the customers say?
            </h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-8">

            <div id="owl-testimonials" class="owl-carousel owl-theme owl-carousel--dark-arrows owl-carousel--visible-arrows">

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 days ago</span>
                </div>
                <p class="testimonial__text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented!</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 days ago</span>
                </div>
                <p class="testimonial__text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented!</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 days ago</span>
                </div>
                <p class="testimonial__text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented!</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

            </div> <!-- end carousel -->
          </div>
        </div> <!-- end carousel row -->

      </div>
    </section> <!-- end testimonials --> --}}

@endsection
