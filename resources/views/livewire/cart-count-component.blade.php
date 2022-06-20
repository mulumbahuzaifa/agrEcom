<li class="li-cart ">
    <a href="{{ route('product.cart') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="total">{{ Cart::instance('cart')->count() }}</span></a>
</li>
