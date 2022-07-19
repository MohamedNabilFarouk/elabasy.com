< <li class="nav-item {{ Request::is('brands*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('brands.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Brands</span>
    </a>
</li> 
<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>

<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Products</span>
    </a>
</li>
<li class="nav-item {{ Request::is('ads*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('ads.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Ads</span>
    </a>
</li>
<!-- <li class="nav-item {{ Request::is('footerAds*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('footerAds.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Footer Ads</span>
    </a>
</li> -->
<li class="nav-item {{ Request::is('sliders*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('sliders.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sliders</span>
    </a>
</li>
<li class="nav-item {{ Request::is('productGalleries*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productGalleries.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Product Galleries</span>
    </a>
</li>
<!-- <li class="nav-item {{ Request::is('sizes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('sizes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sizes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('colors*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('colors.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Colors</span>
    </a>
</li> -->
<!-- <li class="nav-item {{ Request::is('stocks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('stocks.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Stocks</span>
    </a>
</li> -->
<!-- <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Roles</span>
    </a>
</li> -->
<li class="nav-item {{ Request::is('accounts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('accounts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Orders Details</span>
    </a>
</li>
<li class="nav-item {{ Request::is('orders*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('orders.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Orders</span>
    </a>
</li>
<li class="nav-item {{ Request::is('statics*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('statics.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Statics</span>
    </a>
</li>
<!-- <li class="nav-item {{ Request::is('galleries*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('galleries.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Galleries</span>
    </a>
</li> -->
<li class="nav-item {{ Request::is('blogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Blogs</span>
    </a>
</li>
<li class="nav-item {{ Request::is('contactuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contactuses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contactus</span>
    </a>
</li>
