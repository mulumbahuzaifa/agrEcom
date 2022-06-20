<header id="top-bar" class="top-bar top-bar--style-2">
    <div class="top-bar__bg" style="background-color: #FFF;background-image: url({{ asset('assets/img/top_bar_bg-2.png') }});background-repeat: no-repeat;background-position: center bottom;"></div>

    <div class="container position-relative">
        <div class="row justify-content-between no-gutters">

            <a class="top-bar__logo site-logo" href="index_4.html">
                    <img class="img-fluid" src="{{ asset('assets/img/site_logo.png') }}" alt="demo" />
                </a>

            <a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler top-bar__navigation-toggler--dark" href="javascript:void(0);"><span></span></a>

            <div id="top-bar__inner" class="top-bar__inner  text-lg-right">
                <div>
                    <div class="d-lg-flex flex-lg-column-reverse align-items-lg-end">
                        <nav id="top-bar__navigation" class="top-bar__navigation navigation" role="navigation">
                            @php
                                $navlinks = array ( 'products' => 'Products', 'agri-inputs' => 'Agri-Inputs', 'blogs' => 'Blogs', 'contact-us' => 'Contact Us');
                                $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
                                $current_page = str_replace('.php', '', $current_page);  // trim off the extension
                            @endphp
                            <ul>
                                <li class="{{ $current_page == '' ? 'active': '' }}">
                                    <a href="/">Home</a>
                                </li>

                                <li class="{{ $current_page == 'about-us' ? 'active': '' }}">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="{{ $current_page == 'products' ? 'active': '' }}">
                                    <a href="{{ route('products') }}">Products</a>
                                </li>
                                <li class="{{ $current_page == 'services' ? 'active': '' }}">
                                    <a href="{{ route('services') }}">Services</a>
                                </li>

                                <li class="{{ $current_page == 'blogs' ? 'active': '' }}">
                                    <a href="{{ route('blogs') }}">Blogs</a>
                                </li>

                                <li class="{{ $current_page == 'contact-us' ? 'active': '' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>

                                <li class="li-profile has-submenu">
                                    <a href="javascript:void(0);"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                                    @if (Route::has('login'))
                                        @auth
                                            @if (Auth::user()->utype === 'ADM')
                                            <ul class="submenu">
                                                <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                <li><a href="{{ route('admin.blogs') }}">Blogs</a></li>
                                                {{-- <li><a href="{{ route('admin.homeslider') }}">Slider</a></li> --}}
                                                <li><a href="{{ route('admin.contact') }}">Contacts</a></li>
                                                <li><a href="{{ route('admin.coupons') }}">Coupons</a></li>
                                                <li><a href="{{ route('admin.orders') }}">Orders</a></li>
                                                <li><a href="{{ route('admin.settings') }}">Settings</a></li>
                                                 <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </ul>
                                             @else
                                               <ul class="submenu">
                                                <li><a href="{{ route('user.orders') }}">Orders</a></li>
                                                 <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </ul>
                                                 @endif

                                            @else
                                         <ul class="submenu">
                                                <li><a href="{{ route('login') }}">LOGIN</a></li>
                                                <li><a href="{{ route('register') }}">REGISTER</a></li>
                                        </ul>
                                        @endauth

                                        @endif
                                </li>
                                @livewire('cart-count-component')

                                @livewire('wishlist-count-component')

                                <li class="li-btn">
                                    <a class="custom-btn custom-btn--small custom-btn--style-2" href="{{ route('contact') }}">Get in Touch</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="top-bar__contacts">
                            @if ($setting->address)
                                <span>{{ $setting->address }}</span>
                            @endif

                            <span>
                                @if ($setting->phone)
                                    <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                @endif
                                @if ( $setting->phone2)
                                    <a href="tel:{{ $setting->phone2 }}">,&nbsp;&nbsp;{{ $setting->phone2 }}</a></span>
                                @endif
                            @if ($setting->email)
                            <span><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></span>
                            @endif
                            <div class="social-btns">
                                <a  href="{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a  href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a  href="{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a  href="{{ $setting->linkedIn }}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a  href="{{ $setting->youtube }}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>


                </span>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
