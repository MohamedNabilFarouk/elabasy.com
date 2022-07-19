<!DOCTYPE html>
<html
    @if(App::getLocale() === 'ar')
    lang="ar" dir="rtl"
    @else
    lang="en"
    @endif
    >



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> عنوان </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{asset('assets/images/log.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/log.png')}}">

    <!-- CSS FILES HERE -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("/css/vendors/plugins.min.css")}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @if (App::getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('/css/style_rtl.css')}}">
    @endif
    <!-- endinject -->
  
</head>

<body>

 <?php
           // echo App::getLocale();
            if(App::getLocale() === 'ar'){
               
                $ph=$phone[0]->ar;
                $add=$address[0]->ar;
                $e=$email[0]->ar;
                $abd=$aboutdes[0]->ar;
                 $abt=$abuttitle[0]->ar;
               // echo $ph;
            }else{
                $ph=$phone[0]->value;
                $add=$address[0]->value;
                $e=$email[0]->value;
                 $abd=$aboutdes[0]->value;
                  $abt=$abuttitle[0]->value;
            }
            
            ?>

<div class="my_loader  justify-content-center align-content-center position-fixed">
    <img src="{{asset('/images/loading.gif')}}">
</div>


    <!-- Preloader -->
    {{-- <div class="tm-preloader">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="tm-preloader-logo">
                        <img src="{{asset('/images/logo.png')}}" alt="logo">
                    </div>
                    <span class="tm-preloader-progress"></span>
                </div>
            </div>
        </div>
        <button class="tm-button tm-button-small">{{trans('index.cancel_preloader')}}</button>
    </div> --}}
    <!--// Preloader -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <div class="tm-header tm-header-sticky">

            <!-- Header Top Area -->
            <div class="tm-header-toparea bg-black">
                <div class="container">
                    <div class="row align-items-center nav_header">
                        <div class="col-lg-8 col-12">
                            <ul class="tm-header-info">
                                <li><a href="tel:{{$ph}}"><i class="ion-ios-telephone"></i>{{$ph}}</a></li>
                                <li><a href="{{$e}}"><i
                                            class="ion-android-mail"></i>{{$e}}</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="tm-header-options">
                                <div class="tm-dropdown tm-header-links">
                                @guest
                                <button>{{trans('index.my_account')}}</button>
                                <ul>

                                    
                                        <li><a href="{{route('login')}}">{{trans('index.login_register')}}</a></li>
                                        <li><a href="{{route('cart')}}">{{trans('index.shopping_cart')}}</a></li>
                                </ul>
                                @endguest

                                     @auth
                                     <button> Welcome  {{Auth::user()->name}} </button>
                                        <ul>

                                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                                                <li><a href="{{trans('index.shopping_cart')}}">Shopping Cart</a></li>
                                        </ul>
                                     @endauth


                                    </ul>
                                </div>
                                <!-- <div class="tm-dropdown tm-header-currency">
                                    <button>USD</button>
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">JPY</a></li>
                                        <li><a href="#">GBP</a></li>
                                    </ul>
                                </div> -->
                                <div class="tm-dropdown tm-header-language">
                                    <button><img src="{{asset('images/flag-english.png')}}" alt="language">{{\App::getLocale()}}</button>
                                    <ul>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Header Top Area -->

            <!-- Header Middle Area -->
            <div class="tm-header-middlearea bg-white">
                <div class="container">
                    <div class="tm-mobilenav"></div>
                    <div class="row align-items-center ">
                        <div class="col-lg-3 col-6 order-1 order-lg-1">
                            <!--<a href="index.html" class="tm-header-logo">-->
                            <a href="{{url('/')}} class="">
                               <img src="http://www.elabasy.com/images/log.png" alt="The Golden Crown Logo" style="width: 226px;">
                            </a>
                        </div>
                        <div class="col-lg-6 col-12 order-3 order-lg-2">
                            <form class="tm-header-search" method="get" action = {{route('all.products')}}>
                                <input type="text" name="name" placeholder="{{trans('index.search_product')}}">
                                <button type="submit"><i class="ion-android-search"></i></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-6 order-2 order-lg-3">
                            <ul class="tm-header-icons">
                                <!-- <li><a href="wishlist.html"><i
                                            class="ion-android-favorite-outline"></i><span>0</span></a></li> -->
                                <li><a href="{{route('cart')}}"><i class="ion-bag"></i><span id="my_cart">{{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Header Middle Area -->

            <!-- Header Bottom Area -->
            {{-- <div class="tm-header-bottomarea bg-white">
                <div class="container">
                    <nav class="tm-header-nav">
                        <ul>
                            <li><a href="/">{{trans('index.home')}}</a></li>
                            <li class="tm-header-nav-dropdown"><a href="{{route('all.products')}}">{{trans('index.shop')}}</a>
                                <ul>
                                @foreach($allcat as $c)
                               
                                <li><a  href="{{ route('cat.product',$c->id)}}">{{$c->name}}</a></li>
                                
                                   @endforeach
                                </ul>
                            </li>

                            <li><a href="Aboutus">{{trans('index.about_us')}}</a></li>

                            <!-- <li class="tm-header-nav-megamenu"><a href="index.html">Pages</a>

                                <ul>
                                    <li><a href="shop.html">Common Pages</a>
                                        <ul>
                                            <li><a href="index.html">Homepage</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="portfolios.html">Portfolios</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Pages</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop Pages</a>
                                        <ul>
                                            <li><a href="products.html">Products</a></li>
                                            <li><a href="products-leftsidebar.html">Products Left Sidebar</a></li>
                                            <li><a href="products-nosidebar.html">Products Without Sidebar</a></li>
                                            <li><a href="products-4-column.html">Products 4 Column</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="product-details-leftsidebar.html">Product Details Left
                                                    Sidebar</a></li>
                                            <li><a href="product-details-nosidebar.html">Product Details Without
                                                    Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop Related Pages</a>
                                        <ul>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">Login / Register</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li class="tm-header-nav-dropdown"><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a></li>
                                </ul>
                            </li> -->
                            <li><a href="Contactus">{{trans('index.contact')}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div> --}}
            <!--// Header Bottom Area -->


            {{-- menue --}}

            <div class="tm-header-bottomarea bg-white">
                <div class="container">
                    <nav class="tm-header-nav">
                        <ul>
                            <li><a href="/">{{trans('index.home')}}</a></li>
                            @foreach($allcat as $c)
                            <li class="tm-header-nav-dropdown"><a href="{{ route('cat.product',$c->id)}}">{{$c->name ?? $c->name_ar}}</a>
                                <ul>
                                @foreach($c->brand as $b)
                               
                                <li><a  href="{{ route('brand.product',$b->id)}}">{{$b->name ?? $b->name_ar}}</a></li>
                                
                                   @endforeach
                                </ul>
                            </li>
                            @endforeach
                            <li><a href="{{route('Aboutus')}}">{{trans('index.about_us')}}</a></li>

                            <!-- <li class="tm-header-nav-megamenu"><a href="index.html">Pages</a>

                                <ul>
                                    <li><a href="shop.html">Common Pages</a>
                                        <ul>
                                            <li><a href="index.html">Homepage</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="portfolios.html">Portfolios</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Pages</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop Pages</a>
                                        <ul>
                                            <li><a href="products.html">Products</a></li>
                                            <li><a href="products-leftsidebar.html">Products Left Sidebar</a></li>
                                            <li><a href="products-nosidebar.html">Products Without Sidebar</a></li>
                                            <li><a href="products-4-column.html">Products 4 Column</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="product-details-leftsidebar.html">Product Details Left
                                                    Sidebar</a></li>
                                            <li><a href="product-details-nosidebar.html">Product Details Without
                                                    Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop Related Pages</a>
                                        <ul>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">Login / Register</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li class="tm-header-nav-dropdown"><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a></li>
                                </ul>
                            </li> -->
                            <li><a href="{{route('Contactus')}}">{{trans('index.contact')}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            {{-- end menue --}}
        </div>
        <!--// Header -->

        @yield('content')

          <!-- Footer -->
          <div class="tm-footer">

<!-- Instagram Photos -->
<!--<ul id="instafeed" class="tm-instaphotos"></ul>-->
<!--// Instagram Photos -->


<!-- Footer Top Area -->
<div class="tm-footer-toparea tm-padding-section">
    <div class="container">
        <div class="widgets widgets-footer row">

            <!-- Single Widget -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-widget widget-info">

                    <p style="height: 110px; overflow: hidden;">{{$abd}}</p>
                   
                </div>
            </div>
            <!--// Single Widget -->

            <!-- Single Widget -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-widget widget-quicklinks">
                    <h6 class="widget-title">{{trans('index.usefullink')}}</h6>
                    <ul>

                    <li><a href="/">{{trans('index.home')}}</a></li>
                    <li><a href="Aboutus">{{trans('index.about_us')}}</a></li>
                        <li><a href="Contactus">{{trans('index.contact')}}</a></li>
                    </ul>
                </div>
            </div>
            <!--// Single Widget -->

            <!-- Single Widget -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-widget widget-quicklinks">
                    <h6 class="widget-title">{{trans('index.shop')}}</h6>
                    <ul>
                        @foreach($allcat as $c)
                       <li><a  href="{{ route('cat.product',$c->id)}}">{{$c->name}}</a></li>
                                   @endforeach
                                </ul>
                      
                    </ul>
                </div>
            </div>
            <!--// Single Widget -->

 <!-- Single Widget -->
 <div class="col-lg-3 col-md-6 col-12">
                <div class="single-widget widget-info row">
                   <!-- <ul>
           
                    <h6 class="widget-title">{{trans('index.contact')}}</h6>
                        
                        <li ><b>{{trans('index.address')}} :</b>{{$add}}</li>
                        <li ><b>{{trans('index.phone')}} :</b><a href="tel:+{{$ph}}">{{$ph}}</a></li>
                        <li ><b>{{trans('index.email')}} :</b><a href="mailto:{{$e}}">{{$e}}</a></li>
                    </ul> -->
                    

                        <div class="col-12"> 

                        <h6 class="widget-title">{{trans('index.contact')}}</h6>

                        </div>

                        <div class="col-4"> <b style="font-size: 12px;">{{trans('index.address')}} :</b> </div>
                        <div class="col-7"> {{$add}} </div>

                        <div class="col-4"> <b style="font-size: 12px;">{{trans('index.phone')}} :</b> </div>
                        <div class="col-7"> <a href="tel:+{{$ph}}">{{$ph}}</a> </div>

                        <div class="col-4"> <b style="font-size: 10px;">{{trans('index.email')}} :</b> </div>
                        <div class="col-7"> </b><a href="mailto:{{$e}}">{{$e}}</a> </div>
                       
                
                </div>
            </div>
            <!--// Single Widget -->

        </div>
    </div>
    <div class="col-12" style="

margin: 30px;
display: block;
text-align: center;">
                                            <a href="{{$fb[0]->value}}" target="_blank"><i class="ion-social-facebook" style="font-size: 30px; margin:10px;"></i></a>
                                            <a href="{{$ins[0]->value}}" target="_blank"><i class="ion-social-instagram-outline" style="font-size: 30px; margin:10px;"></i></a>
                                            
                         </div>
</div>

{{--<!--// Footer Bottom Area -->--}}

{{--</div>--}}
<!--// Footer -->
@foreach($allproducts as $pro)
<!-- Product Quickview -->
<div class="tm-product-quickview" id="tm-product-quickview{{$pro->id}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-10 col-12">
            <div class="tm-product-quickview-inner">

                <!-- Product Details -->
                <div class="tm-prodetails">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10 col-12">
                            <div class="tm-prodetails-images">
                                <div class="tm-prodetails-largeimages">
                                @foreach($pro->productGallery as $i)
                                <div class="tm-prodetails-largeimage">
                                        <img src="{{asset('images/' . $i->image)}}"
                                            alt="product image">
                                    </div>
                                    @endforeach

                                </div>
                                <div class="tm-prodetails-thumbnails">
                                @foreach($pro->productGallery as $i)
                                <div class="tm-prodetails-thumbnail">
                                    <img src="{{asset('images/' . $i->image)}}"
                                            alt="product image">
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="tm-prodetails-content">
                                <h4 class="tm-prodetails-title">{{$pro->name}}</h4>
                                @if($pro->offer_price == Null)
                                <span class="tm-product-price"> {{$pro->price}} $</span>
                                @else
                                <span class="tm-prodetails-price"><del>{{$pro->price}}</del> {{$pro->offer_price}}</span>
                                @endif
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <div class="tm-prodetails-infos">
                                    <div class="tm-prodetails-singleinfo">
                                        <b>Product ID : </b>010
                                    </div>
                                    <div class="tm-prodetails-singleinfo">
                                        <b>Category : </b><a href="#"></a>
                                    </div>
                                    <!-- <div class="tm-prodetails-singleinfo tm-prodetails-tags">
                                        <b>Tags : </b>
                                        <ul>
                                            <li><a href="#">bracelets</a></li>
                                            <li><a href="#">diamond</a></li>
                                            <li><a href="#">ring</a></li>
                                            <li><a href="#">necklaces</a></li>
                                        </ul>
                                    </div> -->
                                    <div class="tm-prodetails-singleinfo">
                                        <b>Available : </b>
                                        <span class="color-theme">In Stock</span>
                                    </div>
                                    <div class="tm-prodetails-singleinfo tm-prodetails-share">
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
                                    </div>
                                </div>
                                <p>{{$pro->des}}</p>
                                <div class="tm-prodetails-quantitycart">
                                    <h6>Quantity :</h6>
                                    <div class="tm-quantitybox">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="tm-button tm-button-dark">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Product Details -->

            </div>
        </div>
    </div>
</div>
</div>
<!--// Product Quickview -->
@endforeach

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=201212635631&text=اقدر اساعدك ازاي؟." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>


{{-- <button id="back-top-top"><i class="ion-arrow-up-c"></i></button> --}}

</div>
<!--// Wrapper -->

<!-- JS FILES HERE -->
<!-- inject:js -->
<script src="{{asset('js/vendors/plugins.min.js')}}"></script>
<script src="{{asset("js/main.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
<script src="{{asset('js/index.js')}}"></script>

@stack('script')
{{-- <script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?91736';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Al-Abbas",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
      "welcomeText":"اقدر اساعدك ازاي ؟",
      
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"201011941903"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script> --}}

<!-- endinject -->
</body>



</html>
