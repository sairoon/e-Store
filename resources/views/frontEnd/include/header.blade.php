<header class="header header-intro-clearance header-4">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Hotline: +0123 456 789</a>
            </div><!-- End .header-left -->
            <div class="header-right">
                {{--@if(Session::get('customer_id'))
                    <div class="header-dropdown">
                    <a href="#">{{Session::get('customer_name')}}</a>
                    <div class="header-menu">
                        <ul>
--}}{{--                            <li><a href="{{route('customer.dashboard')}}">My Profile</a></li>--}}{{--
                            <li><a href="#">French</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropdown -->
                    @else--}}
                <a href="#signin-modal" data-toggle="modal"><i class="icon-user"> </i>Login || Register</a>
{{--                @endif--}}
                <!-- End .top-menu -->
            </div><!-- End .header-right -->

        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('frontendAsset') }}/assets/images/demos/demo-4/logo2.png" alt="Molla Logo" width="105" height="25">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">
                <div class="wishlist">
                    <a href="{{ route('wishlist') }}" title="Wishlist">
                        <div class="icon">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count badge">3</span>
                        </div>
                        <p>Wishlist</p>
                    </a>
                </div> <!-- End Wishlist -->

                <div class="dropdown cart-dropdown">
                    <a href="" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <div class="icon">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">{{count(Cart::getContent())}}</span>
                        </div>
                        <p>Cart</p>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">

                            {{--@foreach($cart_products as $cart_product)
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">{{$cart_product->name}}</a>
                                    </h4>

                                    <span class="cart-product-info">
                                                <span class="cart-product-qty">{{$cart_product->quantity}}</span>
                                                x ${{$cart_product->price}}
                                            </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{ asset($cart_product->attributes->image) }}" alt="product" style="width: 60px; height: 60px">
                                    </a>
                                </figure>
                                <a href="{{route('cart-remove', ['id' => $cart_product->id])}}" class="btn-remove" title="Remove Product"><i class="icon-close"  onclick="return confirm('Are you sure to delete this..')"></i></a>
                            </div><!-- End .product -->
                            @endforeach--}}

                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Total</span>
                            {{Session::get('sum')}}
                            <span class="cart-total-price">{{count(Cart::getContent())}}</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="{{route('cart-show')}}" class="btn btn-primary">Cart</a>
                            <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->

            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-left">
                <div class="dropdown category-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="All Categories">
                        Categories <i class="icon-angle-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <nav class="side-nav">
                            <ul class="menu-vertical sf-arrows">
                                @foreach($categories as $category)
                                    <li class="item-lead"><a href="{{ route('store', ['id' => $category->id]) }}">{{$category->category_name}}</a></li>
                                @endforeach
                            </ul><!-- End .menu-vertical -->
                        </nav><!-- End .side-nav -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .category-dropdown -->
            </div><!-- End .header-left -->

            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container @yield('home')">
                            <a href="{{ route('home') }}" class="">Home</a>
                        </li>
                        <li class="@yield('cart-show')">
                            <a href="{{ route('cart-show') }}" class="">Cart</a>
                        </li>
                        <li class="@yield('checkout')">
                            <a href="{{ route('checkout') }}" class="" >Checkout</a>
                        </li>
                        <li class="@yield('about')">
                            <a href="{{ route('about') }}" class="" >About</a>
                        </li>
                        <li class="@yield('contact')">
                            <a href="{{ route('contact') }}" class="" >Contact Us</a>
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-center -->
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header>
