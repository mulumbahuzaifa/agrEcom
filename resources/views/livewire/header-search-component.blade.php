<div class="widget widget--search">
    <form class="form--horizontal" action="{{ route('product.search') }}" >
        <div class="input-wrp">
            <input class="textfield" name="search" value="{{ $search }}" type="text" placeholder="Search" />
        </div>

        <button class="custom-btn custom-btn--tiny custom-btn--style-1" type="submit" role="button">Find</button>
    </form>
</div>
