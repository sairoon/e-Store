@extends('frontEnd.master')
@section('checkout')
    active
@endsection
@section('title')
    Checkout
@endsection
@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{ asset('frontendAsset') }}/assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Checkout<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                <div class="container">
{{--                    <form action="#">--}}
                        <div class="row">
                            <div class="col-lg-7">
                                <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <form action="{{route('order-new')}}" method="post">
                                    @csrf
                                    <div>
                                        <label>Full Name *</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div>
                                        <label>Email address *</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div>
                                        <label>Phone *</label>
                                        <input type="tel" class="form-control" name="mobile" required>
                                    </div>
                                    <div>
                                        <label>Delivery Address *</label>
                                        <textarea cols="30" name="delivery_address" class="form-control" placeholder="House no, Street no, Village, P.O, District." required></textarea>
                                    </div>
                                    <div>
                                        <h2 class="checkout-title">Payment Methods</h2>
                                            <div>
                                                <label><input type="radio" name="payment_method" value="1" checked/> Cash On Delivery</label>
                                            </div>
                                        <div>
                                            <label><input type="radio" name="payment_method" value="2"/> Online </label>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                            <span class="btn-text">Place Order</span>
                                            <span class="btn-hover-text">Proceed to Checkout</span>
                                        </button>
                                        <hr>
                                        {{--<div class="accordion-summary" id="accordion-payment">
                                            <div class="card">
                                                <div class="card-header" id="heading-1">
                                                    <h2 class="card-title">
                                                        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                            Direct bank transfer
                                                        </a>
                                                    </h2>
                                                </div><!-- End .card-header -->
                                                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                                    </div><!-- End .card-body -->
                                                </div><!-- End .collapse -->
                                            </div><!-- End .card -->

                                            <div class="card">
                                                <div class="card-header" id="heading-3">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                            Cash on delivery
                                                        </a>
                                                    </h2>
                                                </div><!-- End .card-header -->
                                                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                                    <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                                    </div><!-- End .card-body -->
                                                </div><!-- End .collapse -->
                                            </div><!-- End .card -->

                                            <div class="card">
                                                <div class="card-header" id="heading-4">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                            Mobile Banking --}}{{--<small class="float-right paypal-link">What is PayPal?</small>--}}{{--
                                                        </a>
                                                    </h2>
                                                </div><!-- End .card-header -->
                                                <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                                    </div><!-- End .card-body -->
                                                </div><!-- End .collapse -->
                                            </div><!-- End .card -->
                                        </div>--}}<!-- End .accordion -->
                                    </div>
                                </form>
                            </div><!-- End .col-lg-9 -->

                            <aside class="col-lg-5">
                                <div class="summary">
                                    <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <thead>
                                        <tr>
                                            <th>Product name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @php($sum=0)
                                        @foreach($cart_products as $cart_product)
                                        <tr>
                                            <td><a href="#">{{$cart_product->name}}</a></td>
                                            <td class="text-center">{{$cart_product->quantity}}ㅤx</td>
                                            <td>৳{{$cart_product->price*$cart_product->quantity}}</td>
                                        </tr>
                                        @php($sum = $sum + ($cart_product->price*$cart_product->quantity))
                                        @endforeach

                                        </tbody>
                                    </table><!-- End .table table-summary -->
                                </div><!-- End .summary -->
                                <div class="summary">
                                    <table class="table table-summary">
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>৳{{$sum}}</td>
                                        </tr><!-- End .summary-subtotal -->
                                        <tr title="12% V&T included">
                                            <td>Vat & Tax:</td>
                                            <td>৳{{$tax = ($sum * 12)/100}}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>৳{{$shippingCost = 10}}</td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>৳{{$orderTotal = $sum + $tax + $shippingCost}}</td>
                                        </tr><!-- End .summary-total -->
                                    </table>
                                    <?php
                                    Session::put('order_total', $orderTotal);
                                    Session::put('tax_total', $tax);
                                    Session::put('shipping_total', $shippingCost);
                                    ?>
                                </div>
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
{{--                    </form>--}}
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
