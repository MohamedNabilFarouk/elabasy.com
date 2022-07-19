@extends('blades.master')
@section('content')

    <!-- Page Content -->
    <main class="page-content">

<!-- Product Details Wrapper -->
<div class="tm-product-details-area tm-section tm-padding-section bg-white">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-12">

                <!-- Product Details -->
                <div class="tm-prodetails">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10 col-12">



                        <div class="tm-prodetails-images">
                                <div class="tm-prodetails-largeimages">






                                @foreach($pro[0]->productGallery as $i)
                                    <div class="tm-prodetails-largeimage">
                                        <a data-fancybox="tm-prodetails-imagegallery"
                                            href="{{'/images/'.$i->image}}"
                                            data-caption="Product Zoom Image 6">
                                            <img src="{{asset('/images/'.$i->image)}}"
                                                alt="product image">
                                        </a>
                                    </div>
                                @endforeach
                                </div>



                                <div class="tm-prodetails-thumbnails">



                                @foreach($pro[0]->productGallery as $i)
                                    <div class="tm-prodetails-thumbnail">
                                        <img src="{{asset('/images/'.$i->image)}}"
                                            alt="product image">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="tm-prodetails-content">
                                <h4 class="tm-prodetails-title">{{$pro[0]->name}}</h4>
                                @if($pro[0]->offer_price == Null)
                                    <span class="tm-product-price"> {{$pro[0]->price}} EGP</span>
                                    @else
                                    <span class="tm-product-price"><del>{{$pro[0]->price}} EGP</del >&nbsp; {{$pro[0]->offer_price}} EGP</span>
                                    @endif
                                <!--<div class="tm-ratingbox">-->
                                <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                <!--    <span><i class="ion-android-star-outline"></i></span>-->
                                <!--</div>-->
                                <div class="tm-prodetails-infos">
                                    <!-- <div class="tm-prodetails-singleinfo">
                                        <b>Product ID : </b>010
                                    </div> -->
                                    <div class="tm-prodetails-singleinfo">
                                        <b>{{trans('index.categories')}} : </b><a href="#">{{$pro[0]->Category->name}}</a>
                                    </div>


                                    <!-- <div class="tm-prodetails-singleinfo">
>>>>>>> 4b0c0f253d8b1b6b060912cc5f448339768b596f
                                        <b>Available : </b>
                                        <span class="color-theme">In Stock</span>
                                    </div> -->
                                    <!-- <div class="tm-prodetails-singleinfo tm-prodetails-share">
                                        <b>Share : </b>
                                        <ul>
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                            </li>
                                            <li><a href="#"><i class="ion-social-skype-outline"></i></a>
                                            </li>
                                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                                <p>{{$pro[0]->des}}</p>
                                <div class="tm-prodetails-quantitycart">
                                    <!--<h6>Quantity :</h6>-->
                                    <!--<div class="tm-quantitybox">-->
                                    <!--    <input type="text" value="1">-->
                                    <!--</div>-->
                                    <a href="{{ route('cart.add',$pro[0])}}" class="tm-button tm-button-dark">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Product Details -->






                <!-- Product Details Description & Review -->

                <!--// Product Details Description & Review -->


               <!-- similar product -->

                <div class="tm-similliar-products tm-padding-section-sm-top" style="direction:ltr">
                    <h4 class="small-title">{{trans('index.SimilliarProducts')}}</h4>
                    <div class="row tm-products-slider3">
@foreach($categorypro[0]->product as $p)
                        <!-- Single Product -->
                        <div class="col-12">
                            <div class="tm-product tm-scrollanim">
                                <div class="tm-product-topside">
                                    <div class="tm-product-images">
                                    <a href="Product-{{$p->id}}"> <img src="{{asset('/images/'.$p->image)}}"
                                            alt="product image"></a>
                                    </div>
                                    <ul class="tm-product-actions">
                                        <li><a class="e-product" data-id="{{$p->id}}" href="{{ route('cart.add',$p)}}"><i class="ion-android-cart"></i> {{trans('index.add_to_cart')}}</a></li>
                                       
                                       
                                    </ul>
                                    <div class="tm-product-badges">
                                        <span class="tm-product-badges-new">New</span>
                                        <span class="tm-product-badges-sale">Sale</span>
                                    </div>
                                </div>
                                <div class="tm-product-bottomside">
                                    <h6 class="tm-product-title"><a href="Product-{{$p->id}}">{{$p->name}}</a></h6>
                                   
                                    @if($p->offer_price == Null)
                                    <span class="tm-product-price"> {{$p->price}} EGP</span>
                                    @else
                                    <span class="tm-product-price"><del>{{$p->price}}EGP</del >&nbsp; {{$p->offer_price}} EGP</span>
                                    @endif
                                    <div class="tm-product-content">
                                        <p>{{$p->des}}</p>
                                        <ul class="tm-product-actions">
                                            <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Product -->
                @endforeach

                    </div>
                </div>
<!--end similar  product -->
            </div>

            <!-- Widgets -->
            <div class="col-lg-3 col-12">
                <div class="widgets">

                    <!-- Single Widget -->
                    <div class="single-widget widget-categories">
                        <h6 class="widget-title">{{trans('index.categories')}}</h6>
                        <ul>
                        @foreach($cat as $c)
                        <li><a href="{{ route('cat.product',$c->id)}}">{{$c->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <!-- <div class="single-widget widget-pricefilter">
                        <h6 class="widget-title">Filter by Price</h6>
                        <div class="widget-pricefilter-inner">
                            <div class="tm-rangeslider" data-range_min="0" data-range_max="800"
                                data-cur_min="200" data-cur_max="550">
                                <div class="tm-rangeslider-bar nst-animating"></div>
                                <span class="tm-rangeslider-leftgrip nst-animating" tabindex="0"></span>
                                <span class="tm-rangeslider-rightgrip nst-animating" tabindex="0"></span>
                            </div>
                            <div class="widget-pricefilter-actions">
                                <p class="widget-pricefilter-price">Price: $<span
                                        class="tm-rangeslider-leftlabel">308</span>
                                    - $<span class="tm-rangeslider-rightlabel">798</span></p>
                                <button class="widget-pricefilter-button">Filter</button>
                            </div>
                        </div>
                    </div> -->
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <!-- <div class="single-widget widget-popularproduct">
                        <h6 class="widget-title">Popular Product</h6>
                        <ul>
                            <li>
                                <a href="product-details.html" class="widget-popularproduct-image">
                                    <img src="assets/images/products/product-image-1-thumb.jpg"
                                        alt="product thumbnail">
                                </a>
                                <div class="widget-popularproduct-content">
                                    <h6><a href="product-details.html">Brown liquid inside</a></h6>
                                    <span>$20.00</span>
                                </div>
                            </li>
                            <li>
                                <a href="product-details.html" class="widget-popularproduct-image">
                                    <img src="assets/images/products/product-image-2-thumb.jpg"
                                        alt="product thumbnail">
                                </a>
                                <div class="widget-popularproduct-content">
                                    <h6><a href="product-details.html">Top of amber bottle</a></h6>
                                    <span>$35.99</span>
                                </div>
                            </li>
                            <li>
                                <a href="product-details.html" class="widget-popularproduct-image">
                                    <img src="assets/images/products/product-image-3-thumb.jpg"
                                        alt="product thumbnail">
                                </a>
                                <div class="widget-popularproduct-content">
                                    <h6><a href="product-details.html">Mario badescu bottle</a></h6>
                                    <span>$99.99</span>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <!-- <div class="single-widget widget-sizes">
                        <h6 class="widget-title">Sizes</h6>
                        <ul>
                            <li><a href="products.html">Small Size</a></li>
                            <li><a href="products.html">Medium Size</a></li>
                            <li><a href="products.html">Large Size</a></li>
                            <li><a href="products.html">Extra Large Size</a></li>
                        </ul>
                    </div> -->
                    <!--// Single Widget -->

                </div>
            </div>
            <!--// Widgets -->

        </div>
    </div>
</div>
<!--// Product Details Wrapper -->

</main>
<!--// Page Content -->
        @stop
