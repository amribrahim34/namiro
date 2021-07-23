{{-- {{dd($product->stocks)}} --}}
@extends('layouts.app')

@section('content')

<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-img-content">
                    <div class="product-details-tab mr-70">
                        <div class="product-details-large tab-content">
                            <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/img/product-details/blno-image-available-grid.png">
                                        <img src="{{asset('assets/namiro/img/product-details/lno-image-available-grid.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/img/product-details/bl2.jpg">
                                        <img src="{{asset('assets/namiro/img/product-details/l2.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/img/product-details/bl3.jpg">
                                        <img src="{{asset('assets/namiro/img/product-details/l3.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/img/product-details/bl4.jpg">
                                        <img src="{{asset('assets/namiro/img/product-details/l4.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details-small nav mt-12" role=tablist>
                            <a class="active mr-12" href="#pro-details1" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{asset('assets/namiro/img/product-details/sno-image-available-grid.png')}}" alt="">
                            </a>
                            <a class="mr-12" href="#pro-details2" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{asset('assets/namiro/img/product-details/s2.jpg')}}" alt="">
                            </a>
                            <a class="mr-12" href="#pro-details3" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{asset('assets/namiro/img/product-details/s3.jpg')}}" alt="">
                            </a>
                            <a class="mr-12" href="#pro-details4" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{asset('assets/namiro/img/product-details/s4.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                    <h3 class="text-right">{{$product->name}}</h3>
                    <div class="rating-number">
                        <div class="quick-view-rating">
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                        </div>
                        <div class="quick-view-number">
                            <span>2 Ratting (S)</span>
                        </div>
                    </div>
                    <div class="details-price text-right">
                        <span>${{$product->price}}</span>
                    </div>
                    <p class="text-right">
                        {{$product->discription}}
                    </p>
                    <form action="{{route('processes.carts.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <div class="quick-view-select">
                        @if ($product->stocks->count() > 0)
                        <div class="select-option-part text-right">
                            <label>الحجم*</label>
                            <select class="select">
                                <option value="">- اختر الحجم -</option>
                                    @foreach ($product->stocks as $stock)
                                        <option value="{{$stock->size->id}}">{{$stock->size->title}}({{$stock->amount}})</option>
                                    @endforeach
                            </select>
                        </div>
                        @endif
                        @if ($product->stocks->count() > 0)
                        <div class="select-option-part text-right">
                            <label>اللون*</label>
                            <select class="select">
                                <option value="">- اختر اللون -</option>
                                    @foreach ($product->stocks as $stock)
                                        <option value="{{$stock->color->id}}">{{$stock->color->title}}({{$stock->amount}})</option>
                                    @endforeach
                            </select>
                        </div>
                        @endif
                    </div>
                    <div class="quickview-plus-minus">
                        <div class="quickview-btn-wishlist">
                            <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="quickview-btn-cart">
                            <button class=" btn btn-success" >اضافة الي السلة </button>
                        </div>
                        <div class="cart-plus-minus">
                            <input type="text" value="1" name="quantity" class="cart-plus-minus-box">
                        </div>
                    </div>
                    </form>
                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li class="categories-title">Categories :</li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">electronics</a></li>
                            <li><a href="#">toys</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">jewellery</a></li>
                        </ul>
                    </div>
                    <div class="product-details-cati-tag mtb-10">
                        <ul>
                            <li class="categories-title">Tags :</li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">electronics</a></li>
                            <li><a href="#">toys</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">jewellery</a></li>
                        </ul>
                    </div>
                    <div class="product-share">
                        <ul>
                            <li class="categories-title">Share :</li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-flikr"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review text-center">
            <div class="description-review-title nav" role=tablist>
                <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                    Description
                </a>
                <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                    Reviews (0)
                </a>
            </div>
            <div class="description-review-text tab-content">
                <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                </div>
                <div class="tab-pane fade" id="pro-review" role="tabpanel">
                    <a href="#">Be the first to write your review!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area start -->
<div class="product-area pb-95">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="product-style">
            <div class="related-product-active owl-carousel">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('assets/namiro/img/product/fashion-colorful/no-image-available-grid.png')}}" alt="">
                        </a>
                        <span>hot</span>
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
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('assets/namiro/img/product/fashion-colorful/2.jpg')}}" alt="">
                        </a>
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
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('assets/namiro/img/product/fashion-colorful/3.jpg')}}" alt="">
                        </a>
                        <span>hot</span>
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
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('assets/namiro/img/product/fashion-colorful/4.jpg')}}" alt="">
                        </a>
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
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('assets/namiro/img/product/fashion-colorful/5.jpg')}}" alt="">
                        </a>
                        <span>hot</span>
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
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('assets/namiro/img/product/fashion-colorful/no-image-available-grid.png')}}" alt="">
                        </a>
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
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('assets/namiro/img/product/fashion-colorful/2.jpg')}}" alt="">
                        </a>
                        <span>hot</span>
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
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area end -->

@endsection
