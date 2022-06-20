<div>
    <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{ asset('assets/img/intro_img/12.jpg') }});color: #333; margin-top: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="__title"><span>Agro Shop</span> Catalog</h1>

                    <p>
                        The point of using is that it has a more-or-less normal distribution of letters, as opposed to using Content here content here making it look
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- start main -->
    <main role="main">

        <!-- start section -->
        <section class="section">
            <div class="decor-el decor-el--1" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="286" height="280" src="img/blank.gif" data-src="{{ asset('assets/img/decor-el_1.jpg') }}" alt="demo" />
            </div>

            <div class="decor-el decor-el--2" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="99" height="88" src="img/blank.gif" data-src="{{ asset('assets/img/decor-el_2.jpg') }}" alt="demo" />
            </div>

            <div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="115" height="117" src="img/blank.gif" data-src="{{ asset('assets/img/decor-el_3.jpg') }}" alt="demo" />
            </div>

            <div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="84" height="76" src="img/blank.gif" data-src="{{ asset('assets/img/decor-el_4.jpg') }}" alt="demo" />
            </div>

            <div class="decor-el decor-el--5" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="248" height="309" src="img/blank.gif" data-src="{{ asset('assets/img/decor-el_5.jpg') }}" alt="demo" />
            </div>

            <div class="container">

                <!-- start goods catalog -->
                <div class="goods-catalog">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <aside class="sidebar goods-filter">
                                <span class="goods-filter-btn-close js-toggle-filter"><i class="fontello-cancel"></i></span>

                                <div class="goods-filter__inner">
                                    <!-- start widget -->
                                    @livewire('header-search-component')
                                    <!-- end widget -->

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
                                    <div class="widget widget--price " wire:ignore>
                                        {{-- <h4 class="h6 widget-title">Price</h4> --}}


                                        <div class="price-filter">
                                            <div class="price-filter-inner">

                                                <div id="slider-range" class="price-filter-range" name="rangeInput"></div>

                                                <div class="price_slider_amount">
                                                    <div class="label-input">
                                                        <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <input type="text" class="js-range-slider" name="my_range" value="" data-type="double" data-min="{{ $min_price }}" data-max="{{ $max_price }}" data-from="{{ $min_price }}" data-to="{{ $max_price }}" data-grid="false" data-skin="round" data-prefix="$" data-hide-from-to="true" data-hide-min-max="true" />

                                            <div class="row">
                                                <div class="col-6">
                                                    <input class="range-slider-min-value" type="text" value="{{ $min_price }}" name="min-value" readonly="readonly">
                                                </div>

                                                <div class="col-6">
                                                    <input class="range-slider-max-value" type="text" value="{{ $max_price }}" name="max-value" readonly="readonly">
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- end widget -->



                                    <!-- start widget -->
                                    <div class="widget widget--products" wire:ignore>
                                        <h4 class="h6 widget-title">Latest products</h4>

                                        <ul>
                                            @foreach ($lproducts as $lproduct)

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

                                    <!-- start widget -->
                                    <div class="widget widget--banner">
                                        <a href="#"><img class="img-fluid  lazy" src="{{ asset('assets/img/blank.gif') }}" data-src="{{ asset('assets/img/widget_banner_2.jpg') }}" alt="demo" /></a>
                                    </div>
                                    <!-- end widget -->
                                </div>
                            </aside>
                        </div>

                        <div class="col-12 col-md-8 col-lg-9">
                            <div class="spacer py-6 d-md-none"></div>

                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <span class="goods-filter-btn-open js-toggle-filter"><i class="fontello-filter"></i>Filter</span>
                                </div>

                                <div class="col-auto">
                                    <!-- start ordering -->
                                    <form class="ordering" action="#">
                                        <div class="input-wrp orderby" wire:ignore>
                                            <select class="textfield wide js-select" name="orderby" id="orderby" wire:model="sorting">
                                                    <option value="default">Default Sorting</option>
                                                    <option value="price">Price. low to high</option>
                                                    <option value="price_desc">Price. high to low</option>
                                                    <option value="date">Sort by latest</option>
                                                </select>
                                        </div>
                                    </form>
                                    <!-- end ordering -->
                                </div>
                            </div>

                            <div class="spacer py-3"></div>

                            <!-- start goods -->
                            <div class="goods goods--style-1">
                                <div class="__inner">
                                    <div class="row">

                                        <!-- start item -->
                                        @foreach ($products as $product)
                                        @php
                                            $witem = Cart::instance('wishlist')->content()->pluck('id');
                                            $citem = Cart::instance('cart')->content()->pluck('id');
                                        @endphp
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                                <figure class="__image" wire:ignore>
                                                    <img class="lazy" width="220" height="380" src="img/blank.gif" data-src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="demo" />
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

                            <div class="spacer py-5"></div>

                            <!-- start pagination -->
                            <nav aria-label="Page navigation example">
                                {{-- <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fontello-angle-right"></i></a></li>
                                </ul> --}}
                                {{ $products->links('pagination::bootstrap-4') }}
                            </nav>
                            <!-- end pagination -->
                        </div>
                    </div>
                </div>
                <!-- end goods catalog -->

            </div>
        </section>
        <!-- end section -->


    </main>
</div>
@push('scripts')
<script>
       /*=======================
		  Slider Range JS
		=========================*/
        var min_price = {!! json_encode($min_price) !!};
        var max_price = {!! json_encode($max_price) !!};
        $(document).ready(function(){

            var input = document.getElementById("post-per-page");
            var orderby = document.getElementById("orderby");
            $(input).on('change', function() {
                @this.set('pagesize',this.value )
        //   alert( type);
        });
            $(orderby).on('change', function() {
                @this.set('sorting',this.value )
        //   alert( type);
        });

	$('#price-range-submit').hide();

	$("#min_price,#max_price").on('change', function () {

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());

	  if (min_price_range > max_price_range) {
		$('#max_price').val(min_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$("#min_price,#max_price").on("paste keyup", function () {

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());

	  if(min_price_range == max_price_range){

			max_price_range = min_price_range + 100;

			$("#min_price").val(min_price_range);
			$("#max_price").val(max_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$(function () {
	  $("#slider-range").slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 1000000,
		values: [1, 1000000],
		step: 100,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }


		  $("#min_price").val(ui.values[0]);
		  $("#max_price").val(ui.values[1]);
          $("#amount").val(
            "UGx" + ui.values[0] + " - UGx" + ui.values[1]
        );
        @this.set('min_price', ui.values[0]);
        @this.set('max_price', ui.values[1]);
		}
	  });

	  $("#min_price").val($("#slider-range").slider("values", 0));
	  $("#max_price").val($("#slider-range").slider("values", 1));
      $("#amount").val(
                "UGx" +
                    $("#slider-range").slider("values", 0) +
                    " - UGx" +
                    $("#slider-range").slider("values", 1)
            );

	});

	$("#slider-range,#price-range-submit").click(function () {

	  var min_price = $('#min_price').val();
	  var max_price = $('#max_price').val();

	  $("#searchResults").text("Here List of products will be shown which are cost between " + min_price  +" "+ "and" + " "+ max_price + ".");
	});

});

</script>

@endpush
