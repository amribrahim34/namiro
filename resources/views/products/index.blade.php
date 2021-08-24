@extends('layouts.app')

@section('content')
  <div class="shop-page-wrapper shop-page-padding ptb-100">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-3">
                  <div class="shop-sidebar mr-50">
                      <div class="sidebar-widget mb-50">
                          <h3 class="sidebar-title text-right">بحث </h3>
                          <div class="sidebar-search">
                              <form action="{{route('products.product.search')}}" method="post">
                                    @CSRF
                                    <input placeholder="ابحث هنا.." type="text" name="search_term">
                                    <button><i class="ti-search"></i></button>
                              </form>
                          </div>
                      </div>
                      <div class="sidebar-widget mb-40 text-right">
                          <h3 class="sidebar-title">السعر</h3>
                          <div class="price_filter">
                              <div id="slider-range"></div>
                              <div class="price_slider_amoun text-right">
                                  <div class="label-input d-flex row-reverse ">
                                      <label class="">السعر : </label>
                                      <input type="range" multiple  data-drag-middle  value="10,80" />
                                  </div>
                                  {{-- <button type="button">Filter</button>  --}}
                              </div>
                          </div>
                      </div>
                      <div class="sidebar-widget mb-45 text-right">
                          <h3 class="sidebar-title text-right"> القسم </h3>
                          <div class="sidebar-categories">
                              <ul>
                                @if ($categories)
                                  @foreach ($categories as $category)
                                    <li>
                                      <a href="{{route('products.filter.category',$category->id)}}">{{$category->title}} <span>{{$category->products->count()}}</span></a>
                                    </li>
                                  @endforeach
                                @endif
                                  {{-- <li><a href="#">Book <span>9</span></a></li>
                                  <li><a href="#">Clothing <span>5</span> </a></li>
                                  <li><a href="#">Homelife <span>3</span></a></li>
                                  <li><a href="#">Kids & Baby <span>4</span></a></li> --}}
                              </ul>
                          </div>
                      </div>
                      <div class="sidebar-widget sidebar-overflow mb-45">
                          <h3 class="sidebar-title text-right"> اللون</h3>
                          <div class="product-color">
                              <ul>
                                @if ($colors)
                                  @foreach ($colors as $color)
                                  <a href="{{route('products.filter.color',$color->id)}}">
                                    <li class="{{$color->title}}"></li>
                                  </a>
                                  @endforeach
                                @endif
                              </ul>
                          </div>
                      </div>
                      <div class="sidebar-widget mb-40">
                          <h3 class="sidebar-title text-right"> الحجم </h3>
                          <div class="product-size">
                              <ul>
                                @if ($sizes)
                                  @foreach ($sizes as $size)
                                    <li><a href="{{route('products.filter.size',$size->id)}}">{{$size->title}}</a></li>
                                  @endforeach
                                @endif
                              </ul>
                          </div>
                      </div>
                      <div class="sidebar-widget mb-50">
                          <h3 class="sidebar-title">Top rated products</h3>
                          <div class="sidebar-top-rated-all">
                            @if ($related_products)
                              @foreach ($related_products as $product)
                                <div class="sidebar-top-rated mb-30">
                                  <div class="single-top-rated">
                                      <div class="top-rated-img">
                                          <a href="{{route('products.product.show',$product->id)}}"><img src="{{asset('assets/namiro/img/product/sidebar-product/4.jpg')}}" alt=""></a>
                                      </div>
                                      <div class="top-rated-text">
                                          <h4><a href="#">{{$product->name}}</a></h4>
                                          <div class="top-rated-rating">
                                              <ul>
                                                  <li><i class="pe-7s-star"></i></li>
                                                  <li><i class="pe-7s-star"></i></li>
                                                  <li><i class="pe-7s-star"></i></li>
                                                  <li><i class="pe-7s-star"></i></li>
                                                  <li><i class="pe-7s-star"></i></li>
                                              </ul>
                                          </div>
                                          <span>${{$product->price}}</span>
                                      </div>
                                  </div>
                                </div>
                              @endforeach
                            @endif
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-9">
                  <div class="shop-product-wrapper res-xl">
                      <div class="shop-bar-area">
                          <div class="shop-bar pb-60">
                              <div class="shop-found-selector">
                                  <div class="shop-found">
                                      <p><span>23</span> Product Found of <span>50</span></p>
                                  </div>
                                  <div class="shop-selector">
                                      <label>Sort By : </label>
                                      <select name="select">
                                          <option value="">Default</option>
                                          <option value="">A to Z</option>
                                          <option value=""> Z to A</option>
                                          <option value="">In stock</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="shop-filter-tab">
                                  <div class="shop-tab nav" role=tablist>
                                      <a class="active" href="#grid-sidebar3" data-toggle="tab" role="tab" aria-selected="false">
                                          <i class="ti-layout-grid4-alt"></i>
                                      </a>
                                      <a href="#grid-sidebar4" data-toggle="tab" role="tab" aria-selected="true">
                                          <i class="ti-menu"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="shop-product-content tab-content">
                              <div id="grid-sidebar3" class="tab-pane fade active show">
                                  <div class="row">
                                    @if ($products)
                                      @foreach ($products as $product)
                                        <div class="col-md-6 col-xl-4">
                                          <div class="product-wrapper mb-30">
                                              <div class="product-img">
                                                  <a href="{{route('products.product.show',$product->id)}}">
                                                  @if ($product->getFirstMedia('cover'))
                                                        {{$product->getFirstMedia('cover')}}                         
                                                  @else
                                                      <img src="{{asset('assets/namiro/img/product/fashion-colorful/no-image-available-grid.png')}}" alt="">
                                                  @endif
                                                  </a>
                                                  <span>hot</span>
                                                  <div class="product-action">
                                                      <a class="animate-left" title="Wishlist" href="#">
                                                          <i class="pe-7s-like"></i>
                                                      </a>
                                                        <form class="d-inline p-0" action="{{route('processes.carts.store')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                                            <button type="submit" class="animate-top btn " title="اضافة الي السلة ">
                                                                <i class="pe-7s-cart"></i>
                                                            </button>
                                                        </form>
                                                      {{-- <a class="animate-top" title="Add To Cart" href="#">
                                                          <i class="pe-7s-cart"></i>
                                                      </a> --}}
                                                      <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#product{{$product->id}}" href="#">
                                                          <i class="pe-7s-look"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="product-content text-right">
                                                  <h4><a href="{{route('products.product.show',$product->id)}}"> {{$product->name}} </a></h4>
                                                  <span>${{$product->price}} </span>
                                              </div>
                                          </div>
                                        </div>
                                      @endforeach
                                    @endif
                                  </div>
                              </div>
                              <div id="grid-sidebar4" class="tab-pane fade">
                                  <div class="row">
                                      @if ($products)
                                        @foreach ($products as $product)
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="{{route('products.product.show',$product->id)}}">
                                                            <img src="{{asset('assets/namiro/img/product/fashion-colorful/no-image-available-grid.png')}}" alt="">
                                                        </a>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="{{route('products.product.show',$product->id)}}">{{$product->name}} </a></h4>
                                                            <span>${{$product->price}}</span>
                                                            <p>{{ \Illuminate\Support\Str::limit($product->discription, 100 , $end='...') }}</p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                      @endif
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="pagination-style mt-50 text-center d-flex justify-content-center">
                      {{-- <ul> --}}
                          {{-- <li><a href="#"><i class="ti-angle-right"></i></a></li> --}}
                            @if ($products->links())
                                {{$products->links()}}
                            @endif
                          {{-- <li class="active"><a href="#"><i class="ti-angle-left"></i></a></li> --}}
                      {{-- </ul> --}}
                  </div>
              </div>
          </div>
      </div>
  </div>
  @if ($products)
      @foreach ($products as $product)
        <!-- modal -->
        <div class="modal fade " id="product{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-quickview-width " role="document">
                <div class="modal-content ">
                    <div class="modal-body">
                        <div class="qwick-view-left text-right">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="{{asset('assets/namiro/img/quick-view/lno-image-available-grid.png')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="{{asset('assets/namiro/img/quick-view/l2.jpg')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="{{asset('assets/namiro/img/quick-view/l3.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="{{asset('assets/namiro/img/quick-view/sno-image-available-grid.png')}}" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="{{asset('assets/namiro/img/quick-view/s2.jpg')}}" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="{{asset('assets/namiro/img/quick-view/s3.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content text-right">
                                <h3 class="text-right">{{$product->name}}</h3>
                                <div class="price">
                                    <span class="new">${{$product->price}}</span>
                                    {{-- <span class="old">$120.00  </span> --}}
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
                                <p class="text-right">{{$product->discription}}</p>
                                <form action="{{route('processes.carts.store')}}" method="post">
                                    @csrf
                                <div class="quick-view-select">
                                    @if ($sizes)
                                    <div class="select-option-part">
                                        <label>الحجم*</label>
                                        <select class="select" name="size_id" required>
                                            <option value="">- اختر الحجم-</option>
                                                @foreach ($sizes as $size)
                                                    <option value="{{$size->id}}">{{$size->title}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    @endif
                                    @if ($colors)
                                    <div class="select-option-part">
                                        <label>اللون*</label>
                                        <select class="select" required>
                                            <option value="">- اختر اللون-</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{$color->id}}">{{$color->title}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    @endif
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box" required>
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- modal -->
      @endforeach
  @endif
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('assets/namiro/js/multirange/multirange.css')}}">
@endsection
@section('js')
        <script src="{{asset('assets/namiro/js/multirange/multirange.js')}}"></script>
        <script>

        </script>
@endsection
