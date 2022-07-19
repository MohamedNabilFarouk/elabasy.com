@extends('blades.master')
@section('content')


   <!-- Page Content -->
   <main class="page-content">

<!-- Shopping Cart Area -->
<div class="tm-section shopping-cart-area bg-white tm-padding-section">
    <div class="container">
@if($cart)
        <!-- Shopping Cart Table -->
        <div class="tm-cart-table table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th class="tm-cart-col-image" scope="col">{{trans('index.Image')}}</th>
                        <th class="tm-cart-col-productname" scope="col">{{trans('index.Product')}}</th>
                        <th class="tm-cart-col-price" scope="col">{{trans('index.Price')}}</th>
                        <th class="tm-cart-col-quantity" scope="col">{{trans('index.Quantity')}}</th>
                        <th class="tm-cart-col-total" scope="col">{{trans('index.Total')}}</th>

                        <th class="tm-cart-col-remove" scope="col">{{trans('index.Remove')}}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $cart->items as $product)
                 @php
                        $product_details= App\Models\Product::find($product['id']);
                       
                        @endphp
                <tr>
                    <td>
                            <a href="product-details.html" class="tm-cart-productimage">
                                <img src="{{asset('/images/'.$product['image'])}}"
                                    alt="product image">
                            </a>
                        </td>
                        <td>
                            <a href="product-details.html" class="tm-cart-productname">{{ $product['title'] }}</a>
                        </td>
                        <td class="tm-cart-price">{{ $product['price'] }}</td>


                        <td>

                        <form action="{{ route('product.update',$product['id'])}}" method="post">
                            @csrf
                            @method('put')
                            <input type="number" name="qty" id="qty" value="{{ $product['qty']}}" max='{{$product_details['quantity']}}' min='1'>
                            <button type="submit" class="btn btn-secondary btn-sm">{{trans('index.Change')}}</button>
                            <!-- <input type="submit" class="btn btn-secondary btn-sm" value="change"> -->

                        </form>

                        </td>

                        <td>
                            <span class="tm-cart-totalprice">{{$product['price']*$product['qty']}}</span>
                        </td>

                        <td>
                        <form action="{{route('cart.delete',$product['id'])}}" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" name="submit" class="tm-cart-removeproduct"><i class="ion-close"></i></button>
                        </form>
                    </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!--// Shopping Cart Table -->

        <!-- Shopping Cart Content -->
        <div class="tm-cart-bottomarea">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="tm-buttongroup">
                        <a href="/" class="tm-button">Continue Shopping</a>
                        <!-- <a href="#" class="tm-button">Update Cart</a> -->
                    </div>
                    <!-- <form action="#" class="tm-cart-coupon">
                        <label for="coupon-field">Have a coupon code?</label>
                        <input type="text" id="coupon-field" placeholder="Enter coupon code"
                            required="required">
                        <button type="submit" class="tm-button">Submit</button>
                    </form> -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tm-cart-pricebox">
                        <h2>Cart Totals</h2>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr class="tm-cart-pricebox-subtotal">
                                        <td>Total Quantity</td>
                                        <td>{{ $cart->totalQty}}</td>
                                    </tr>
                                    <!-- <tr class="tm-cart-pricebox-shipping">
                                        <td>(+) Shipping Charge</td>
                                        <td>$15.00</td>
                                    </tr> -->
                                    <tr class="tm-cart-pricebox-total">
                                        <td>Total</td>
                                        <td>{{$cart->totalPrice}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#" class="tm-button" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!--// Shopping Cart Content -->

    </div>
</div>
<!--// Shopping Cart Area -->


       <!-- modal for checkout -->
       <div class="modal fade" style="direction: rtl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">{{trans('index.check_out')}}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <form id="checkout_form" action="{{route('checkout')}}" method="post">
                           @csrf
                           <div class="form-group">
                               <label for="recipient-name" class="col-form-label">{{trans('index.name')}} :</label>
                               <input type="text" class="form-control" name="name" required>
                           </div>

                           <div class="form-group">
                               <label for="recipient-name" class="col-form-label">{{trans('index.phone')}}:</label>
                               <input type="text" class="form-control" name="phone" required>
                           </div>

                           <div class="form-group">
                               <label for="recipient-name" class="col-form-label">{{trans('index.address')}}:</label>
                               <input type="text" class="form-control" name="address" required>
                           </div>

                           <div class="form-group">
                               <label for="recipient-name" class="col-form-label">{{trans('index.email')}}:</label>
                               <input type="email" class="form-control" name="email" required>
                           </div>

                           <div class="form-group">
                               <label for="recipient-name" class="col-form-label">{{trans('index.note')}}:</label>
                               <textarea  class="form-control" name="note">
                               </textarea>
                           </div>

                       </form>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('index.close')}}</button>
                       <button type="submit" form="checkout_form" class="btn btn-primary">{{trans('index.check_out')}}</button>
                   </div>
               </div>
           </div>
       </div>

       <!-- end modal -->
@else
            <p>There are no items in the cart</p>

            @endif
</main>
<!--// Page Content -->
@stop
