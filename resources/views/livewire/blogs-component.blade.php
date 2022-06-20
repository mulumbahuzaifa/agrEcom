<div>
    <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{ asset('assets/img/intro_img/4.jpg') }}); margin-top: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="__title"><span>Our</span> Blogs</h1>

                    <p>
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
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
            <div class="container">
                <!-- start posts -->
                <div class="posts posts--style-1">
                    <div class="__inner">
                        <div class="row">
                            @foreach ($blogs as $blog)
                                  <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="__item __item--preview">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('assets/img/blank.gif') }}" data-src="{{ asset('assets/img/blogs') }}/{{ $blog->image }}" alt="demo" />
                                    </figure>
                                </a>
                                    <div class="__content">
                                        {{-- <p class="__category"><a href="#">ORGANIC FOOD/TIPS & GUIDES</a></p> --}}

                                        <h3 class="__title h5"><a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->name }}</a></h3>

                                        <p>
                                            {!! str_limit(strip_tags($blog->description),50,'...')  !!}
                                        </p>
                                    </div>

                                    <span class="__date-post">
                                        {{date('d F, Y', strtotime(   $blog->created_at )) }}
                                    </span>
                                </div>
                            </div>
                            <!-- end item -->
                            @endforeach



                        </div>
                    </div>
                    {{ $blogs->links('pagination::bootstrap-4')  }}
                </div>
                <!-- end posts -->
            </div>
        </section>
        <!-- end section -->



        <!-- start section -->
        <section class="section section--dark-bg">
            <div class="container">
                <div class="section-heading section-heading--center section-heading--white" data-aos="fade">
                    <h2 class="__title">Get <span>in touch</span></h2>
                </div>

                <form class="contact-form js-contact-form" action="#" data-aos="fade">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="input-wrp">
                                <input class="textfield" name="name" type="text" placeholder="Name" />
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="input-wrp">
                                <input class="textfield" name="email" type="text" placeholder="E-mail" />
                            </div>
                        </div>
                    </div>

                    <div class="input-wrp">
                        <textarea class="textfield" name="message" placeholder="Comments"></textarea>
                    </div>

                    <button class="custom-btn custom-btn--medium custom-btn--style-3 wide" type="submit" role="button">Send</button>

                    <div class="form__note"></div>
                </form>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt section--no-pb">
            <!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
            <div class="g_map" data-api-key="AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" data-longitude="44.958309" data-latitude="34.109925" data-marker="img/marker.png" style="min-height: 255px"></div>
        </section>
        <!-- end section -->
    </main>
</div>
