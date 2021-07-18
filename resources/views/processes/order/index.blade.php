@extends('layouts.app')
@section('content')
  <!-- checkout-area start -->
  <div class="checkout-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form action="{{route('processes.orders.store')}}" id="adddressform" method="POST">
                    @csrf
                    <div class="checkbox-form">						
                        <h3 class="text-right"> تفاصيل الدفع </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkout-form-list text-right">
                                    <label> الاسم الأول  <span class="required">*</span></label>
                                    <input type="text" placeholder="" name="firstname"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list text-right">
                                    <label>الاسم الأخير <span class="required">*</span></label>	
                                    <input type="text" placeholder=""  name="lastname"/>
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="checkout-form-list text-right">
                                    <label>المحافظة / المدينة <span class="required">*</span></label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <div class="checkout-form-list">
                                    <label>العنوان  <span class="required">*</span></label>
                                    <input type="text" name="address"/>
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="checkout-form-list">									
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                </div>
                            </div> --}}
                            
                            {{-- <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>										
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>										
                                    <input type="text" />
                                </div>
                            </div> --}}
                            <div class="col-md-6 text-right">
                                <div class="checkout-form-list">
                                    <label>البريد الالكتروني<span class="required">*</span></label>										
                                    <input type="email" name="email" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list text-right">
                                    <label> الهاتف   <span class="required">*</span></label>
                                    <input type="text" name="mobile" />
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="checkout-form-list create-acc">	
                                    <input id="cbox" type="checkbox" />
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox_info" class="checkout-form-list create-account">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label>Account password  <span class="required">*</span></label>
                                    <input type="password" placeholder="password" />	
                                </div>
                            </div>								 --}}
                        </div>
                        <div class="different-address">
                            {{-- <div class="ship-different-title">
                                <h3>
                                    <label>Ship to a different address?</label>
                                    <input id="ship-box" type="checkbox" />
                                </h3>
                            </div>
                            <div id="ship-box-info" class="row">
                                <div class="col-md-12">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select>
                                          <option value="volvo">bangladesh</option>
                                          <option value="saab">Algeria</option>
                                          <option value="mercedes">Afghanistan</option>
                                          <option value="audi">Ghana</option>
                                          <option value="audi2">Albania</option>
                                          <option value="audi3">Bahrain</option>
                                          <option value="audi4">Colombia</option>
                                          <option value="audi5">Dominican Republic</option>
                                        </select> 										
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>										
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>										
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">									
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" placeholder="Town / City" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>										
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>										
                                        <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>										
                                        <input type="email" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Phone  <span class="required">*</span></label>										
                                        <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                </div>								
                            </div> --}}
                            {{-- <div class="order-notes">
                                <div class="checkout-form-list mrg-nn">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                </div>									
                            </div> --}}
                        </div>													
                    </div>
                </form>
            </div>	
            <div class="col-lg-6 col-md-12 col-12">
                <div class="your-order text-right">
                    <h3>  طلبك </h3>
                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">المنتج </th>
                                    <th class="product-total">الاجمالي </th>
                                </tr>							
                            </thead>
                            <tbody>
                                @php $cart_total = 0 @endphp
                                @if (Auth::user()->carts)
                                    @foreach (Auth::user()->carts as $cart)   
                                    @php
                                        $cart_total += $cart->stock->product->price * $cart->quantity
                                    @endphp                                 
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{$cart->stock->product->name}}<strong class="product-quantity"> × {{$cart->quantity}}</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount"> {{$cart->stock->product->price * $cart->quantity}} ج.م</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>اجمالي السلة </th>
                                    <td><span class="amount">{{$cart_total}} ج.م</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">{{$cart_total}} ج.م</span></strong>
                                    </td>
                                </tr>								
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            {{-- <div class="panel-group" id="faq">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                    </div>
                                    <div id="payment-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                    </div>
                                    <div id="payment-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                    </div>
                                    <div id="payment-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="order-button-payment">
                                <button type="button" class="confirm-button" id="confirm-button"> تأكيد الطلب </button>
                            </div>								
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout-area end -->
@endsection
@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
<script>
   $('#confirm-button').on('click',function(){
       $('#adddressform').submit();
   });
</script>
@endsection
