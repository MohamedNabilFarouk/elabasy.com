@extends('blades.master')
@section('content')


  <!-- Page Content -->
  <main class="page-content">

<!-- Products Wrapper -->
<div class="tm-products-area tm-section tm-padding-section bg-white">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-12">
                <form action="#" class="tm-shop-header">
{{--                    <div class="tm-shop-productview">--}}
{{--                        <span>View:</span>--}}
{{--                        <button data-view="grid" class="active"><i class="ion-android-apps"></i></button>--}}
{{--                        <button data-view="list"><i class="ion-android-menu"></i></button>--}}
{{--                    </div>--}}
{{--                    <p class="tm-shop-countview">Showing 1 to 9 of 16 </p>--}}
{{--                    <select>--}}
{{--                        <option value="value">Default Sorting</option>--}}
{{--                        <option value="value">Name A-Z</option>--}}
{{--                        <option value="value">Date</option>--}}
{{--                        <option value="value">Best Sellers</option>--}}
{{--                        <option value="value">Trending</option>--}}
{{--                    </select>--}}
                </form>

                <div class="tm-shop-products">
                    <div class="row mt-30-reverse">

                   @foreach($product as $p)

                        <!-- Single Product -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mt-50">
                            <div class="tm-product tm-scrollanim">
                                <div class="tm-product-topside">
                                    <div class="tm-product-images">
                                    <a href="{{route('product.single' , $p->id)}}">  <img src="{{asset('/images/'.$p->image)}}"
                                            alt="product image"></a>

                                    </div>
                                    <ul class="tm-product-actions">
                                        <li><a   href="{{ route('cart.add',$p)}}"><i class="ion-android-cart"></i> {{trans('index.add_to_cart')}}</a>
                                        </li>

                                        <!-- <li><a href="#"><i class="ion-heart"></i></a></li> -->
                                    </ul>
                                    <!-- <div class="tm-product-badges">
                                        <span class="tm-product-badges-new">New</span>
                                        <span class="tm-product-badges-soldout">Sold out</span>
                                    </div> -->
                                </div>
                                <div class="tm-product-bottomside">
                                    <h6 class="tm-product-title"><a href="{{route('product.single' , $p->id)}}">{{$p->name}}</a></h6>
                                    <!--<div class="tm-ratingbox">-->
                                    <!--    <span class="is-active"><i-->
                                    <!--            class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i-->
                                    <!--            class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i-->
                                    <!--            class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i-->
                                    <!--            class="ion-android-star-outline"></i></span>-->
                                    <!--    <span><i class="ion-android-star-outline"></i></span>-->
                                    <!--</div>-->
                                    @if($p->offer_price == Null)
                                    <span class="tm-product-price"> {{$p->price}} $</span>
                                    @else
                                    <span class="tm-product-price"><del>{{$p->price}} $</del >&nbsp; {{$p->offer_price}} $</span>
                                    @endif
                                    <!-- <div class="tm-product-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the
                                            when an unknown printer took a galley of type and scrambled it
                                            to make a
                                            type specimen book. It has survived not only five centuries, but
                                            also the
                                            leap into electronic typesetting.</p>
                                        <ul class="tm-product-actions">
                                            <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                            </li>
                                            <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                        class="ion-eye"></i></button></li>
                                            <li><a href="#"><i class="ion-heart"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!--// Single Product -->
@endforeach
                    </div>
                </div>

{{--                <div class="tm-pagination mt-50">--}}
{{--                    <ul>--}}
{{--                        <li class="is-active"><a href="products.html">1</a></li>--}}
{{--                        <li><a href="products.html">2</a></li>--}}
{{--                        <li><a href="products.html">3</a></li>--}}
{{--                        <li><a href="products.html">4</a></li>--}}
{{--                        <li><a href="products.html"><i class="ion-chevron-right"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>

            <!-- Widgets -->
            <div class="col-lg-3 col-12">
                <div class="widgets">

                    <!-- Single Widget -->
                    <div class="single-widget widget-categories">
                        <h6 class="widget-title">{{trans('index.categories')}}</h6>
                        <ul>
                        @foreach($allcat as $c)
                        <li><a href="{{ route('cat.product',$c->id)}}">{{$c->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <!--<div class="single-widget widget-pricefilter">-->
                    <!--    <h6 class="widget-title">{{trans('index.filter_by_price')}}</h6>-->
                    <!--    <div class="widget-pricefilter-inner">-->
                    <!--        <div class="tm-rangeslider" data-range_min="0" data-range_max="800"-->
                    <!--            data-cur_min="200" data-cur_max="550">-->
                    <!--            <div class="tm-rangeslider-bar nst-animating"></div>-->
                    <!--            <span class="tm-rangeslider-leftgrip nst-animating" tabindex="0"></span>-->
                    <!--            <span class="tm-rangeslider-rightgrip nst-animating" tabindex="0"></span>-->
                    <!--        </div>-->
                    <!--        <div class="widget-pricefilter-actions">-->
                    <!--            <p class="widget-pricefilter-price">Price: $<span-->
                    <!--                    class="tm-rangeslider-leftlabel">308</span>-->
                    <!--                - $<span class="tm-rangeslider-rightlabel">798</span></p>-->
                    <!--            <button class="widget-pricefilter-button">{{trans('index.filter')}}</button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <!--<div class="single-widget widget-popularproduct">-->
                    <!--    <h6 class="widget-title">{{trans('index.popular_product')}}</h6>-->
                    <!--    <ul>-->
                    <!--        <li>-->
                    <!--            <a href="product-details.html" class="widget-popularproduct-image">-->
                    <!--                <img src="{{asset('images/products/product-image-1-thumb.jpg')}}"-->
                    <!--                     alt="product thumbnail">-->
                    <!--            </a>-->
                    <!--            <div class="widget-popularproduct-content">-->
                    <!--                <h6><a href="product-details.html">Brown liquid inside</a></h6>-->
                    <!--                <span>$20.00</span>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <a href="product-details.html" class="widget-popularproduct-image">-->
                    <!--                <img src="{{asset('/images/products/product-image-2-thumb.jpg')}}"-->
                    <!--                     alt="product thumbnail">-->
                    <!--            </a>-->
                    <!--            <div class="widget-popularproduct-content">-->
                    <!--                <h6><a href="product-details.html">Top of amber bottle</a></h6>-->
                    <!--                <span>$35.99</span>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <a href="product-details.html" class="widget-popularproduct-image">-->
                    <!--                <img src="{{asset('/images/products/product-image-3-thumb.jpg')}}"-->
                    <!--                     alt="product thumbnail">-->
                    <!--            </a>-->
                    <!--            <div class="widget-popularproduct-content">-->
                    <!--                <h6><a href="product-details.html">Mario badescu bottle</a></h6>-->
                    <!--                <span>$99.99</span>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    <!--// Single Widget -->

                    <!-- Single Widget -->
{{--                    <div class="single-widget widget-sizes">--}}
{{--                        <h6 class="widget-title">Sizes</h6>--}}
{{--                        <ul>--}}
{{--                            <li><a href="products.html">Small Size</a></li>--}}
{{--                            <li><a href="products.html">Medium Size</a></li>--}}
{{--                            <li><a href="products.html">Large Size</a></li>--}}
{{--                            <li><a href="products.html">Extra Large Size</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <!--// Single Widget -->

                </div>
            </div>
            <!--// Widgets -->

        </div>
    </div>
</div>
<!--// Products Wrapper -->

</main>
<!--// Page Content -->

@stop
