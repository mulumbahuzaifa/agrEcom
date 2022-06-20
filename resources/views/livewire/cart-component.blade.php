<div>
    {<main role="main">


        <!-- start section -->
        <section class="section">
            <div class="decor-el decor-el--1" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="286" height="280" src="img/blank.gif" data-src="img/decor-el_1.jpg" alt="demo" />
            </div>

            <div class="decor-el decor-el--2" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="99" height="88" src="img/blank.gif" data-src="img/decor-el_2.jpg" alt="demo" />
            </div>

            <div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="115" height="117" src="img/blank.gif" data-src="img/decor-el_3.jpg" alt="demo" />
            </div>

            <div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="84" height="76" src="img/blank.gif" data-src="img/decor-el_4.jpg" alt="demo" />
            </div>

            <div class="decor-el decor-el--5" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="248" height="309" src="img/blank.gif" data-src="img/decor-el_5.jpg" alt="demo" />
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        @if (Cart::instance('cart')->count() > 0)
                        <!-- start cart -->
                        <div class="cart">

                                <div class="cart__table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td width="10%">&nbsp;</td>
                                                <td width="35%">added products</td>
                                                <td width="15%">Price</td>
                                                <td width="20%">Quantity</td>
                                                <td width="15%">Total</td>
                                                <td width="5%">&nbsp;</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ( Cart::instance('cart')->content() as $item )

                                            <tr>
                                                <td>
                                                    <figure class="__image">
                                                        <a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">
                                                                <img class="lazy" src="img/blank.gif" data-src="{{ asset('assets/img/products') }}/{{ $item->model->image  }}" alt="{{ $item->model->name  }}" />
                                                            </a>
                                                    </figure>
                                                </td>

                                                <td>
                                                    <a href="{{ route('product.details', ['slug' => $item->model->slug]) }}" class="__name">{{ $item->model->name  }}</a>
                                                </td>

                                                <td>
                                                    <span class="__price">UGx {{ $item->model->regular_price }}</span>
                                                </td>

                                                <td>
                                                    <div class="quantity-counter js-quantity-counter">
                                                        <span class="__btn __btn--minus"  data-field="quant[1]" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"></span>
                                                        <input class="__q-input" type="text" name="quant[1]" data-min="1" data-max="100" value="{{ $item->qty }}" />
                                                        <span class="__btn __btn--plus" data-field="quant[1]"  wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"></span>
                                                    </div>
                                                </td>

                                                <td>
                                                    <span class="__total">UGx {{ $item->subtotal }}</span>
                                                </td>

                                                <td>
                                                    <a class="__remove" href="#" aria-label="Remove this item" wire:click.prevent="destroy('{{ $item->rowId }}')">
                                                            <i class="ti-trash remove-icon"></i>
                                                        </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="py-5"></div>

                                <form class="cart__form" wire:submit.prevent="applyCouponCode">
                                <div class="row justify-content-md-between">
                                    @if (!Session::has('coupon'))
                                        <div class="col-12 col-md-6">
                                            <div class="cart__coupon form--horizontal">
                                                @if (Session::has('coupon_message'))
                                                <div class="alert alert-danger">
                                                    <div class="alert alert-danger" role="dander">
                                                        <strong>Success : </strong>{{ Session::get('coupon_message') }}
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="input-wrp">
                                                    <input class="textfield" type="text" placeholder="Coupon code" wire:model="couponCode" />
                                                </div>

                                                <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button">Apply Coupon</button>
                                            </div>

                                        </div>

                                    @endif

                                    <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                                        <div class="spacer py-5 d-md-none"></div>

                                        <div class="cart__total">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h3>CART <span>TOTALS</span></h3>
                                                        </td>
                                                    </tr>
                                                </thead>

                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2">
                                                            <a class="custom-btn custom-btn--medium custom-btn--style-1"  wire:click.prevent="checkout" href="#">Proceed to checkout</a>
                                                        </td>
                                                    </tr>
                                                </tfoot>

                                                <tbody>
                                                    <tr>
                                                        <td>Subtotal:</td>
                                                        <td>UGx {{ Cart::instance('cart')->subtotal() }}</td>
                                                    </tr>
                                                    @if (Session::has('coupon'))
                                                    <tr>
                                                        <td>DIscount</td>
                                                        <td>({{ Session::get('coupon')['code'] }})<span><a href="#" wire:click.prevent="removeCoupon"><i class="fa fa-times text-danger"></i></a></span><b class="index">- UGx{{ number_format($discount,2) }}</b></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subtotal With Discount</td>
                                                        <td>UGx{{ number_format($subtotalAfterDiscount,2) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping</td>
                                                        <td>Free</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax</td>
                                                        <td>({{ config('cart.tax') }}%)<span><b class="index">UGx{{ number_format($taxAfterDiscount,2) }}</b></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>UGx{{  number_format($totalAfterDiscount,2) }}</td>
                                                    </tr>
                                                @else

                                                    <tr>
                                                        <td>Shipping</td>
                                                        <td>Free</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax</td>
                                                        <td>Ugx{{ Cart::instance('cart')->tax() }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Total</td>
                                                        <td>UGx{{ Cart::instance('cart')->total() }}</td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- start cart -->
                        @else
                            <h3 class="box-title">No items in Cart</h3>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt section--no-pb section--gutter">
            <div class="container-fluid px-md-0">
                <!-- start banner simple -->
                <div class="simple-banner simple-banner--style-2" data-aos="fade" data-aos-offset="50">
                    <div class="d-none d-lg-block">
                        <img class="img-logo img-fluid  lazy" src="img/blank.gif" data-src="img/site_logo.png" alt="demo" />
                    </div>

                    <div class="row no-gutters">
                        <div class="col-12 col-lg-6">
                            <a href="#"><img class="img-fluid w-100  lazy" src="img/blank.gif" data-src="img/banner_bg_3.jpg" alt="demo" /></a>
                        </div>

                        <div class="col-12 col-lg-6">
                            <a href="#"><img class="img-fluid w-100  lazy" src="img/blank.gif" data-src="img/banner_bg_4.jpg" alt="demo" /></a>
                        </div>
                    </div>
                </div>
                <!-- end banner simple -->
            </div>
        </section>
        <!-- end section -->
    </main>
</div>
