@extends('blades.master')
@section('content')


  <!-- Heroslider Area -->
  <div class="tm-heroslider-area bg-grey">
            <div class="tm-heroslider-slider">
@foreach($slider as $s)
                <!-- Heroslider Item -->
                <div class="tm-heroslider" data-bgimage="{{asset('/images/' .$s->image)}}">
                    <div class="container">
                        <div class="row align-items-center slick_dir">
                            <div class="col-lg-7 col-md-8 col-12">
                                <div class="tm-heroslider-contentwrapper">
                                    <div class="tm-heroslider-content">
                                        <h1>{{$s->text}}</h1>

                                        <a href="#" class="tm-button">{{trans('index.shop_now')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->

              @endforeach

            </div>
        </div>
        <!--// Heroslider Area -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- Features Area -->
            <div class="tm-section tm-feature-area bg-grey">
                <div class="container">
                    <div class="row mt-30-reverse">

                        <!-- Single Feature -->
                        <div class="col-lg-4 mt-30">
                            <div class="tm-feature">
                                <span class="tm-feature-icon">
                                    <img src="{{asset('/images/icons/icon-free-shipping.png')}}" alt="free shipping" >
                                </span>
                                <div class="tm-feature-content">
                                    <h6>{{trans('index.free_shipping')}}</h6>
                                    <p>{{trans('index.free_shipping_text')}}</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Feature -->

                        <!-- Single Feature -->
                        <div class="col-lg-4 mt-30">
                            <div class="tm-feature">
                                <span class="tm-feature-icon">
                                    <img src="{{asset('/images/icons/icon-fast-delivery.png')}}" alt="fast delivery">
                                </span>
                                <div class="tm-feature-content">
                                    <h6>{{trans('index.fast_delivery')}}</h6>
                                    <p>{{trans('index.fast_delivery_text')}}</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Feature -->

                        <!-- Single Feature -->
                        <div class="col-lg-4 mt-30">
                            <div class="tm-feature">
                                <span class="tm-feature-icon">
                                    <img src="{{asset('/images/icons/icon-247-support.png')}}" alt="24/7 Support">
                                </span>
                                <div class="tm-feature-content">
                                    <h6>{{trans('index.24_support')}}</h6>
                                    <p>{{trans('index.24_support_text')}}</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Feature -->

                    </div>
                </div>
            </div>
            <!--// Features Area -->

            <!-- Popular Products Area -->
            <div id="tm-popular-products-area" class="tm-section tm-popular-products-area tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="tm-sectiontitle text-center">
                                <h3>{{trans('index.on_sale')}}</h3>
                                <p>{{trans('index.on_sale_text')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row tm-products-slider" style="direction:ltr">
@foreach($onsaleProduct as $p)
                        <!-- Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="tm-product tm-scrollanim">
                                <div class="tm-product-topside">
                                    <div class="tm-product-images">
                                    <a href="Product-{{$p->id}}"> <img src="{{asset('images/' . $p->image)}}" style='height: 179px;'></a>
                                        <!-- <img src="assets/images/products/product-image-2.jpg" alt="product image"> -->
                                    </div>
                                    <ul class="tm-product-actions">
                                        <li><a    href="{{ route('cart.add',$p)}}"><i class="ion-android-cart"></i> {{trans('index.add_to_cart')}}</a></li>
                                        <!-- <li><button data-fancybox data-src="#tm-product-quickview{{$p->id}}"><i
                                                    class="ion-eye"></i></button></li> -->
                                        <!-- <li><a href="#"><i class="ion-heart"></i></a></li> -->
                                    </ul>
                                    <div class="tm-product-badges">
                                        <span class="tm-product-badges-new">{{trans('index.new')}}</span>

                                    </div>
                                </div>
                                <div class="tm-product-bottomside">
                                    <h6 class="tm-product-title"><a  href="Product-{{$p->id}}">{{$p->name}}</a></h6>
                                    <!--<div class="tm-ratingbox">-->
                                    <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                    <!--    <span><i class="ion-android-star-outline"></i></span>-->
                                    <!--</div>-->
                                    <span class="tm-product-price">{{$p->offer_price}} EGP</span>
                                    <div class="tm-product-content">
                                        <p>{!! $p->des !!}</p>
                                        <ul class="tm-product-actions">
                                            <li><a  href="{{ route('cart.add',$p)}}"><i class="ion-android-cart"></i> {{trans('index.add_to_cart')}}</a></li>
                                            
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Product -->


@endforeach




                    </div>
                </div>
            </div>
            <!--// Popular Products Area -->




            <div class="d-flex justify-content-center align-items-center space-around">
@foreach($Ads as $a)  
<div class="col-md-4">
                        <a href="{{$a->link}}">
                            <img class="img-fluid" src="{{asset('images/' . $a->image)}}" alt="Image Description">
                        </a>
                    </div>
@endforeach
</div>



            <!-- Popular Products Area -->
            <div id="tm-latest-products-area" class="tm-section tm-latest-products-area tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="tm-sectiontitle text-center">
                                <h3>{{trans('index.new_arrival')}}</h3>
                                <p>{{trans('index.new_arrival_text')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50-reverse">
@foreach($homepro as $p)
                        <!-- Single Product -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                            <div class="tm-product tm-scrollanim">
                                <div class="tm-product-topside">
                                    <div class="tm-product-images">
                                    <a href="Product-{{$p->id}}"> <img src="{{asset('images/' . $p->image)}}" style='height: 179px;'></a>
                                        <!-- <img src="assets/images/products/product-image-5.jpg" alt="product image"> -->
                                    </div>
                                    <ul class="tm-product-actions">
                                        <li><a   href="{{ route('cart.add',$p->id)}}"><i class="ion-android-cart"></i> {{trans('index.add_to_cart')}}</a></li>

                                        <!-- <li><a href="#"><i class="ion-heart"></i></a></li> -->
                                    </ul>
                                    <div class="tm-product-badges">
                                        <span class="tm-product-badges-new">{{trans('index.new')}}</span>
                                       @if($p->on_sale == 1)
                                        <span class="tm-product-badges-sale">Sale</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="tm-product-bottomside">
                                    <h6 class="tm-product-title"><a  href="Product-{{$p->id}}">{{$p->name}}</a></h6>
                                    <!--<div class="tm-ratingbox">-->
                                    <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                    <!--    <span class="is-active"><i class="ion-android-star-outline"></i></span>-->
                                    <!--    <span><i class="ion-android-star-outline"></i></span>-->
                                    <!--</div>-->
                                    @if($p->offer_price == Null)
                                    <span class="tm-product-price"> {{$p->price}} EGP</span>
                                    @else
                                    <span class="tm-product-price"><del>{{$p->price}} EGP</del >&nbsp; {{$p->offer_price}} EGP</span>
                                    @endif
                                    <div class="tm-product-content">
                                        <p>{!! $p->des !!}</p>
                                        <ul class="tm-product-actions">
                                            <li><a   href="{{ route('cart.add',$p->id)}}"><i class="ion-android-cart"></i> {{trans('index.add_to_cart')}}</a></li>
                                            <!-- <li><button data-fancybox data-src="#tm-product-quickview{{$p->id}}"><i
                                                        class="ion-eye"></i></button></li> -->
                                            <!-- <li><a href="#"><i class="ion-heart"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Product -->
                        @endforeach


                    </div>
                    <div class="tm-product-loadmore text-center mt-50">
                        <a href="AllProducts" class="tm-button">{{trans('index.all_products')}}</a>
                    </div>
                </div>
            </div>
            <!--// Popular Products Area -->
            @if(isset($daals[0]))
            <!-- Offer Area -->
            
            <div class="tm-section tm-offer-area tm-padding-section bg-grey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12 order-2 order-lg-1">
                            <div class="tm-offer-content">
                                <h6>{{trans('index.super_deal')}}</h6>
                                <h1>{{trans('index.deal')}} <span>EGP {{ $deals[0]->deal_price}}</span></h1>
                                <!-- <div class="tm-countdown" data-countdown="date_format({{$deals[0]->deal_date}},'Y/M/d')></div> -->
                                <a href="Product-{{$deals[0]->id}}" class="tm-button">Shop now</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 order-1 order-lg-2">
                            <div class="tm-offer-image">
                                <img class="tm-offer" style='max-hight:200px;' src="{{asset('/images/'.$deals[0]->image)}}" alt="offer image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Offer Area -->
            @endif
            <!-- Latest Blogs Area -->
            <div id="tm-news-area" class="tm-section tm-blog-area tm-padding-section bg-pattern-transparent">
                <div class="container" style="direction:ltr">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="tm-sectiontitle text-center">
                                <h3>{{trans('index.latest_blogs')}}</h3>

                            </div>
                        </div>
                    </div>
                    <div class="row tm-blog-slider">




                    @foreach($blogs as $b)

                        <!-- Blog Single Item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="tm-blog tm-scrollanim">
                                <div class="tm-blog-topside">
                                    <div class="tm-blog-thumb">
                                        <img src="{{asset('/images/'.$b->image)}}" alt="blog image" style='height: 179px;'>
                                    </div>
                                    <!-- <span class="tm-blog-metahighlight"><span>Apr</span>17</span> -->
                                </div>
                                <div class="tm-blog-content">
                                    <h6 class="tm-blog-title"><a href="Blog-{{$b->id}}">{{$b->title}}</a></h6>

                                    <p style="height: 60px;overflow: hidden;">{{$b->des}}</p>
                                    <a href="Blog-{{$b->id}}" class="tm-readmore">{{trans('index.read_more')}}</a>
                                </div>
                            </div>
                        </div>
                        <!--// Blog Single Item -->
@endforeach
                    </div>
                </div>
            </div>
            <!--// Latest Blogs Area -->



        </main>
        <!--// Page Content -->


  @push('script')
      <script >
          // slick rtl
          @if(App::getLocale() === 'ar')
          $(".tm-heroslider-slider").slick({ rtl:true,infinite:!0,autoplay:!0,pauseOnHover:!1,speed:2e3,autoplaySpeed:5e3,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:'<button class="slick-prev slick-arrow"><i class="ion-ios-arrow-back"></i></button>',nextArrow:'<button class="slick-next slick-arrow"><i class="ion-ios-arrow-forward"></i></button>',fade:!0,dots:!1})
          @else
          $(".tm-heroslider-slider").slick({infinite:!0,autoplay:!0,pauseOnHover:!1,speed:2e3,autoplaySpeed:5e3,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:'<button class="slick-prev slick-arrow"><i class="ion-ios-arrow-back"></i></button>',nextArrow:'<button class="slick-next slick-arrow"><i class="ion-ios-arrow-forward"></i></button>',fade:!0,dots:!1})
          @endif


      </script>
  @endpush
@stop


