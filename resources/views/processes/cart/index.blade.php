@extends('layouts.app')
@section('content')
<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">السلة </h1>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ازالة</th>
                                    <th>صور</th>
                                    <th>المنتج</th>
                                    <th>السعر</th>
                                    <th>الكمية</th>
                                    <th>المجموع</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (Auth::user()->carts)
                                    @foreach (Auth::user()->carts as $cart)
                                        <tr id="cart{{$cart->id}}">
                                            <td class="">
                                                <button data-cart_id="{{$cart->id}}" type="button" class="deleteButton btn btn-light">
                                                    <i class="pe-7s-close h2 "></i>
                                                </button>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/no-image-available-grid.png" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{$cart->stock->product->name}} </a>
                                            </td>
                                            <td class="product-price-cart"><span class="amount">${{$cart->stock->product->price}}</span></td>
                                            <td class="product-quantity">
                                                <input class="quantity" data-cart_id = "{{$cart->id}}" data-price="{{$cart->stock->product->price}}" value="{{$cart->quantity}}" type="number">
                                            </td>
                                            <td class="product-subtotal">
                                                <span id="total{{$cart->id}}">
                                                    {{$cart->quantity * $cart->stock->product->price}}
                                                </span>
                                                <span>
                                                    ج.م
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon-all">
                                {{-- <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div> --}}
                                <div class="coupon2">
                                    <input class="button" id="update_cart" name="update_cart" value="تحديث السلة " type="button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2> مجموع السلة  </h2>
                                <ul>
                                    <li> <span id='subtotal_span' >100.00</span>السعر </li>
                                    <li> السعر الكلي 
                                        <span id='total_span'>100.00</span> 
                                    </li>
                                </ul>
                                <a href="{{route('processes.orders.index')}}"> الدفع </a>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- shopping-cart-area end -->
<!-- modal -->
<div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-compare-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#">
                    <div class="table-content compare-style table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <a  href="#">Remove <span>x</span></a>
                                        <img src="assets/img/cart/4.jpg" alt="">
                                        <p>Blush Sequin Top </p>
                                        <span>$75.99</span>
                                        <a class="compare-btn" href="#">Add to cart</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="compare-title"><h4>Description </h4></td>
                                    <td class="compare-dec compare-common">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Sku </h4></td>
                                    <td class="product-none compare-common">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Availability  </h4></td>
                                    <td class="compare-stock compare-common">
                                        <p>In stock</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Weight   </h4></td>
                                    <td class="compare-none compare-common">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Dimensions   </h4></td>
                                    <td class="compare-stock compare-common">
                                        <p>N/A</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>brand   </h4></td>
                                    <td class="compare-brand compare-common">
                                        <p>HasTech</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>color   </h4></td>
                                    <td class="compare-color compare-common">
                                        <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>size    </h4></td>
                                    <td class="compare-size compare-common">
                                        <p>XS, S, M, L, XL, XXL </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"></td>
                                    <td class="compare-price compare-common">
                                        <p>$75.99 </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
<script>
    // $('form').preventDefault();
    $('.deleteButton').on('click',function () {
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
                    $('#cart'+cartId).remove()
                });
            } 
        });
    });
    $('.quantity').change(function(){
        var span_id = '#total'+$(this).data('cart_id');
        var price = $(this).data('price');
        var value = $(this).val();
        $(span_id).html(price * value);
    });
    $('#update_cart').click(function(){
        var jsonData = [];
        $('.quantity').each(function(){
            var item = {};
            item ["id"] = $(this).data('cart_id');
            item ["quantity"] = $(this).val();
            jsonData.push(item);
        });
        var RequestUrl = '{{route("processes.carts.update")}}'
        $.ajax({
                url: RequestUrl,
                type:'post',
                data: {data:jsonData},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                context: document.body
        }).done(function(total) {
            var obj = jQuery.parseJSON(total);
            $('#subtotal_span').html(obj.total);
            $('#total_span').html(obj.total);
        });
    });
</script>
@endsection
