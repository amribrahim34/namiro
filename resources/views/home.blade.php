@extends('layouts.app')

@section('content')

    <!-- Hero Slider -->
    <section class="hero">
      <div id="owl-hero" class="owl-carousel owl-theme owl-carousel--dots-inside">        

        <div class="hero__slide" style="background-image: url({{asset('assets/namira/img/hero/1.jpg')}})">
          <div class="container text-center">
            <h1 class="hero__title">Got the style? Show us</h1>
            <a href="single-product.html" class="hero__link">Shop Now</a>
          </div>          
        </div>

        <div class="hero__slide" style="background-image: url({{asset('assets/namira/img/hero/2.jpg')}})">
          <div class="container relative">
            <div class="hero__holder">
              <h1 class="hero__title-1">dope<br>street<br>wear</h1>
              <a href="single-product.html" class="hero__link-1 btn btn-lg btn-dark"><span>New Arrivals</span></a>
            </div>
          </div>
        </div>

        <div class="hero__slide" style="background-image: url({{asset('assets/namira/img/hero/3.jpg')}})">
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
              <span class="feature__text">Use code Namira50</span>
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
              best seller
            </h2>
          </div>
        </div>

        <div class="row row-8">

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_11.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_11.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Floral Mini Strappy</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$15.99</span>
              </ins>
              <del>
                <span>$27.00</span>
              </del>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_12.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_12.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Hooded Jacket</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$34.00</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_5.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_5.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Maxi dress</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$19.00</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_6.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_6.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Casual Jacket</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$17.99</span>
              </ins>
              <del>
                <span>$30.00</span>
              </del>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_7.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_7.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Bounce Elegant Dress</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$15.99</span>
              </ins>
              <del>
                <span>$27.00</span>
              </del>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_8.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_8.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Classic White Tailored Shirt</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$19.99</span>
              </ins>
              <del>
                <span>$32.00</span>
              </del>
            </span>
          </div> <!-- end product -->
  
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end best seller -->

    <!-- New Arrivals -->
    <section class="section-wrap no-padding">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line">
              New arrivals
            </h2>
          </div>
        </div>

        <div class="row row-8">

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_1.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_1.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Joeby Tailored Trouser</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$17.99</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_9.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_9.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Men’s Belt</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$9.90</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_10.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_10.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Sport Hi Adidas</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$29.00</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_2.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_2.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Denim Hooded</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$30.00</span>
              </ins>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_3.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_3.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">Mint Maxi Dress</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$17.99</span>
              </ins>
              <del>
                <span>$30.00</span>
              </del>
            </span>
          </div> <!-- end product -->

          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="single-product.html" class="product__link" aria-label="Product">
                <img src="{{asset('assets/namira/img/shop/product_4.jpg')}}" alt="" class="product__img">
                <img src="{{asset('assets/namira/img/shop/product_back_4.jpg')}}" alt="" class="product__img-back">
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
                <a href="single-product.html">White Flounce Dress</a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">$15.99</span>
              </ins>
              <del>
                <span>$27.00</span>
              </del>
            </span>
          </div> <!-- end product -->
    
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end new arrivals -->

    <!-- Testimonials -->
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
    </section> <!-- end testimonials -->

@endsection
