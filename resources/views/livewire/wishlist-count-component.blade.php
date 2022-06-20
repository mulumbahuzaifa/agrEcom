<li class="li-cart ">
    <a href="{{ route('product.wishlist') }}"><i class="fa fa-heart" aria-hidden="true"></i><span class="total">{{ Cart::instance('wishlist')->count() }}</span></a>
</li>
