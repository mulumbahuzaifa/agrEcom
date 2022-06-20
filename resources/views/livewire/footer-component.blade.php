<footer id="footer" class="footer--style-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-auto">
                <div class="footer__item">
                    <a class="site-logo" href="index.html">
                            <img class="img-fluid  lazy" src="{{ asset('assets/img/blank.gif') }}" data-src="{{ asset('assets/img/site_logo.png') }}" alt="demo" />
                        </a>
                </div>
            </div>

            <div class="col-12 col-sm">
                <div class="row align-items-md-center no-gutters">
                    <div class="col-12 col-md">
                        <div class="footer__item">
                            <address>
                                @if ($setting->address)
                                    <p>
                                        {{ $setting->address }}
                                    </p>
                                @endif


                                    <p>
                                        @if ($setting->phone)
                                        {{ $setting->phone }}
                                        @endif
                                        , @if ($setting->phone2)
                                        {{ $setting->phone2 }}
                                        @endif <br>
                                        @if ($setting->email )
                                            <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                        @endif

                                    </p>
                                </address>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto">
                        <div class="footer__item">
                            <div class="social-btns">
                                <a  href="{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a  href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a  href="{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a  href="{{ $setting->linkedIn }}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a  href="{{ $setting->youtube }}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 col-xl-4 offset-xl-1">
                <div class="footer__item">
                    <h5 class="h6">Get a newslatter</h5>

                    <form class="form--horizontal" action="#">
                        <div class="input-wrp">
                            <input class="textfield" name="s" type="text" placeholder="Your E-mail" />
                        </div>

                        <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button">subscribe</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row flex-lg-row-reverse">
            <div class="col-12 col-lg-6">
                <div class="footer__item">
                    <nav id="footer__navigation" class="navigation  text-lg-right">
                        @php
                        $navlinks = array ( 'products' => 'Products', 'agri-inputs' => 'Agri-Inputs', 'blogs' => 'Blogs', 'contact-us' => 'Contact Us');
                        $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
                        $current_page = str_replace('.php', '', $current_page);  // trim off the extension
                    @endphp
                        <ul>
                            <li class="{{ $current_page == '' ? 'active': '' }}"><a href="/">Home</a></li>
                            <li class="{{ $current_page == 'about-us' ? 'active': '' }}"><a href="{{ route('about') }}">About</a></li>
                            <li class="{{ $current_page == '' ? 'products': '' }}"><a href="{{ route('products') }}">Products</a></li>
                            <li class="{{ $current_page == '' ? 'services': '' }}"><a href="{{ route('services') }}">Services</a></li>
                            <li class="{{ $current_page == '' ? 'blogs': '' }}"><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li class="{{ $current_page == '' ? 'contact-us': '' }}"><a href="{{ route('contact') }}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            {{-- <div class="col-12 col-lg-6">
                <div class="footer__item">
                    <span class="__copy">© 2019 Agro. All rights reserved. Created by <a class="__dev" href="https://themeforest.net/user/artureanec" target="_blank">Artureanec</a></span>
                </div>
            </div> --}}
        </div>
    </div>
</footer>
