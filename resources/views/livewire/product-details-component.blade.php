<div>


    <!-- start main -->
    <main role="main">

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
                    <div class="col-12 col-md-8 col-lg-9">

                        <!-- start product single -->
                        <div class="product-single">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="__product-img">
                                        <img width="330" src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="demo" />

                                        <span class="product-label product-label--new">New</span>
                                    </div>
                                </div>
                                @php
                                    $witem = Cart::instance('wishlist')->content()->pluck('id');
                                    $citem = Cart::instance('cart')->content()->pluck('id');
                                @endphp
                                <div class="col-12 col-lg-5">
                                    <div class="content-container">
                                        <h3 class="__name">{{ $product->name }}</h3>

                                        <div class="__categories">
                                            Category:
                                            <span>{{ $product->category->name }}</span>
                                        </div>

                                        <div class="product-price">
                                            <span class="product-price__item product-price__item--new">Ugx {{ $product->regular_price }}</span>
                                        </div>

                                        <div class="rating">
                                            <span class="rating__item rating__item--active"><i class="fa fa-star" aria-hidden="true"></i></span>
                                            <span class="rating__item rating__item--active"><i class="fa fa-star" aria-hidden="true"></i></span>
                                            <span class="rating__item rating__item--active"><i class="fa fa-star" aria-hidden="true"></i></span>
                                            <span class="rating__item rating__item--active"><i class="fa fa-star" aria-hidden="true"></i></span>
                                            <span class="rating__item"><i class="fa fa-star" aria-hidden="true"></i></span>
                                        </div>

                                        <p>
                                            {{ $product->short_description }}
                                        </p>
                                        <p>
                                            {{ $product->description }}
                                        </p>



                                        <form class="__add-to-cart" action="#">
                                            <div class="quantity-counter js-quantity-counter">
                                                <span class="__btn __btn--minus" wire:click.prevent="decreaseQuantity"></span>
                                                <input class="__q-input" type="text" data-min="1" data-max="1000" value="{{ $qty }}" />
                                                <span class="__btn __btn--plus" wire:click.prevent="increaseQuantity"></span>
                                            </div>
                                            @if ($citem->contains($product->id))
                                            <a href="#" class="custom-btn custom-btn--medium custom-btn--style-1" style="background-color: #fcdb5a !important;" wire:click.prevent="removeFromCart({{ $product->id }})"><i class="fa fa-shopping-bag"></i>Remove from cart</a>
                                            @else
                                            <a href="#" class="custom-btn custom-btn--medium custom-btn--style-1" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fa fa-shopping-bag"></i>Add to cart</a>
                                            @endif

                                            <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="spacer py-5 py-md-9"></div>

                                    <!-- start tab -->
                                    <div class="tab-container">
                                        <nav class="tab-nav">
                                            <a href="#">Reviews</a>
                                        </nav>

                                        <div class="tab-content">


                                            <div class="tab-content__item" wire:ignore>
                                                <!-- start comments list -->
                                                <ul class="comments-list">
                                                    <li class="comment">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-none d-lg-block">

                                                                        <div class="comment__author-img">
                                                                            <img class="img-fluid lazy" width="70" src="img/blank.gif" data-src="img/avatar.jpg" alt="demo" />
                                                                        </div>

                                                                    </div>
                                                                </td>

                                                                <td width="100%">
                                                                    <time class="comment__date-post">April 12, 2017</time>

                                                                    <div class="d-flex align-items-center mb-3 mb-lg-0">
                                                                        <div class="d-block d-lg-none">

                                                                            <div class="comment__author-img">
                                                                                <img class="img-fluid lazy" width="70" src="img/blank.gif" data-src="img/avatar.jpg" alt="demo" />
                                                                            </div>

                                                                        </div>

                                                                        <span class="comment__author-name">Jason Smith</span>

                                                                        <div class="rating  d-none d-sm-block">
                                                                            <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                            <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                            <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                            <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                            <span class="rating__item"><i class="fontello-star"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="rating  mb-2 d-sm-none">
                                                                        <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                        <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                        <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                        <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                        <span class="rating__item"><i class="fontello-star"></i></span>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <p>
                                                                        The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </li>

                                                    <li class="comment">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-none d-lg-block">

                                                                        <div class="comment__author-img">
                                                                            <img class="img-fluid lazy" width="70" src="img/blank.gif" data-src="img/avatar.jpg" alt="demo" />
                                                                        </div>

                                                                    </div>
                                                                </td>

                                                                <td width="100%">
                                                                    <time class="comment__date-post">April 12, 2017</time>

                                                                    <div class="d-flex align-items-center mb-3 mb-lg-0">
                                                                        <div class="d-block d-lg-none">

                                                                            <div class="comment__author-img">
                                                                                <img class="img-fluid lazy" width="70" src="img/blank.gif" data-src="img/avatar.jpg" alt="demo" />
                                                                            </div>

                                                                        </div>

                                                                        <span class="comment__author-name">Sam Peters</span>

                                                                        <div class="rating  d-none d-sm-block">
                                                                            <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                            <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                            <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                            <span class="rating__item"><i class="fontello-star"></i></span>
                                                                            <span class="rating__item"><i class="fontello-star"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="rating  mb-2 d-sm-none">
                                                                        <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                        <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                        <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                                        <span class="rating__item"><i class="fontello-star"></i></span>
                                                                        <span class="rating__item"><i class="fontello-star"></i></span>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <p>
                                                                        The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit. Molly Miller nurseryfish Rasbora, pearleye. Lefteye flounder, whale shark angler telescopefish
                                                                        remora mora pelican gulper lake whitefish whale shark
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </li>
                                                </ul>
                                                <!-- end comments list -->


                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab -->

                                    <div class="spacer py-5 py-md-9"></div>
                                </div>
                            </div>
                        </div>
                        <!-- start product single -->

                        <h2>Related <span>products</span></h2>
                        <div class="spacer py-2"></div>

                        <!-- start goods -->
                        <div class="goods goods--style-1">
                            <div class="__inner">
                                <div class="row">
                                         <!-- start item -->
                                         @foreach ($related_products as $product)
                                         @php
                                             $witem = Cart::instance('wishlist')->content()->pluck('id');
                                             $citem = Cart::instance('cart')->content()->pluck('id');
                                         @endphp
                                         <div class="col-12 col-sm-6 col-lg-4">
                                             <div class="__item">
                                                 <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                                 <figure class="__image" wire:ignore>
                                                     <img class="lazy" width="160" src="img/blank.gif" data-src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="demo" />
                                                 </figure>
                                             </a>

                                                 <div class="__content">
                                                     <h4 class="h6 __title"><a href="{{ route('product.details', ['slug' => $product->slug]) }}">{{ $product->name }}</a></h4>

                                                     <div class="__category"><a href="#">{{ $product->category->name }}</a></div>

                                                     <div class="product-price">
                                                         <span class="product-price__item product-price__item--new">UGx {{ $product->regular_price }}</span>
                                                         @if ($product->sale_price )
                                                         <span class="product-price__item product-price__item--old">UGx {{ $product->sale_price }}</span>
                                                         @endif

                                                     </div>

                                                     @if ($citem->contains($product->id))
                                             <a href="#" class="custom-btn custom-btn--medium custom-btn--style-1 " style="background-color: #fcdb5a !important;" wire:click.prevent="removeFromCart({{ $product->id }})"><i class="fa fa-shopping-bag"></i>Remove From Cart</a>
                                             @else
                                             <a href="#" class="custom-btn custom-btn--medium custom-btn--style-1" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fa fa-shopping-bag"></i>Add To Cart</a>
                                             @endif
                                                 </div>
                                                 @if ($product->stock_status == "instock")
                                                 <span class="product-label product-label--new">In-stock</span>
                                                 @else
                                                 <span class="product-label product-label--hot">Out-of-stock</span>
                                                 @endif

                                             </div>
                                         </div>
                                         @endforeach

                                         <!-- end item -->


                                </div>
                            </div>
                        </div>
                        <!-- end goods -->

                    </div>

                    <div class="col-12 my-6 d-md-none"></div>

                    <div class="col-12 col-md-4 col-lg-3">
                        <aside class="sidebar">


                            <!-- start widget -->
                            <div class="widget widget--categories">
                                <h4 class="h6 widget-title">Categories</h4>

                                <ul class="list">
                                    @foreach ($categories as $category )
                                        <li class="list__item">
                                            <a class="list__item__link" href="{{ route('product.category', ['category_slug' => $category->slug]) }}">{{ $category->name }}</a>
                                            <span>({{ $category->products->count() }})</span>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <!-- end widget -->


                            <!-- start widget -->
                            <div class="widget widget--products" wire:ignore>
                                <h4 class="h6 widget-title">Latest products</h4>

                                <ul>
                                    @foreach ($popular_products as $lproduct)

                                    <li>
                                        <div class="row no-gutters">
                                            <div class="col-auto __image-wrap">
                                                <figure class="__image">
                                                    <a href="{{ route('product.details', ['slug' => $lproduct->slug]) }}">
                                                            <img class="lazy" src="{{ asset('assets/img/blank.gif') }}" data-src="{{ asset('assets/img/products') }}/{{ $lproduct->image }}" alt="demo" />
                                                        </a>
                                                </figure>
                                            </div>

                                            <div class="col">
                                                <h4 class="h6 __title"><a href="{{ route('product.details', ['slug' => $lproduct->slug]) }}">{{ $lproduct->name }}</a></h4>

                                                <div class="rating">
                                                    <span class="rating__item rating__item--active"><i class="fa fa-star" aria-hidden="true"></i></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fa fa-star" aria-hidden="true"></i></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fa fa-star" aria-hidden="true"></i></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fa fa-star" aria-hidden="true"></i></i></span>
                                                    <span class="rating__item"><i class="fa fa-star" aria-hidden="true"></i></i></span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">Ugx {{ $lproduct->regular_price }}</span>
                                                    @if ($lproduct->sale_price)
                                                    <span class="product-price__item product-price__item--old">Ugx {{ $lproduct->sale_price }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- end widget -->
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


    </main>
</div>
