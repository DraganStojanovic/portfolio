@extends('frontend.main_master')
@section('main')
    <!-- banner-area -->
    @include('frontend.home_all.home_slide')

    <!-- about-area -->
    @include('frontend.home_all.home_about');
    <!-- about-area-end -->

    <!-- services-area -->

    <!-- work-process-area -->
    <section class="work__process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center">
                        <span class="sub-title">Working Process</span>
                        <h2 class="title">A clear product design process is the basis of success</h2>
                    </div>
                </div>
            </div>
            <div class="row work__process__wrap">
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">First of all</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon01.png') }}"
                                 alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon01.png') }}" alt="">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Discover</h4>
                            <p>Initial ideas or inspiration & Establishment of user needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Second</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon02.png') }}"
                                 alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon02.png') }}" alt="">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Define</h4>
                            <p>Interpretation & Alignment of findings to project objectives.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Third</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon03.png') }}"
                                 alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon03.png') }}" alt="">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Develop</h4>
                            <p>Design-Led concept and Proposals hearted & assessed</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Fourth</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon04.png') }}"
                                 alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon04.png') }}" alt="">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Deliver</h4>
                            <p>Process outcomes finalised & Implemented</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-process-area-end -->

    <!-- portfolio-area -->
    @include('frontend.home_all.portfolio')
    <!-- portfolio-area-end -->

    <!-- partner-area -->

    <!-- testimonial-area -->
    <section class="testimonial">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-0 order-lg-2">
                    <ul class="testimonial__avatar__img">
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img01.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img02.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img03.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img04.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img05.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img06.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img07.png') }}" alt=""></li>
                    </ul>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial__wrap">
                        <div class="section__title">
                            <span class="sub-title">Client Feedback</span>
                            <h2 class="title">Happy clients feedback</h2>
                        </div>
                        <div class="testimonial__active">
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share
                                        in our H.Spond Asset Management is made up of a team of expert, committed and
                                        experienced people with a passion for financial markets. Our goal is to achieve
                                        continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Dragan Stojanović</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share
                                        in our H.Spond Asset Management is made up of a team of expert, committed and
                                        experienced people with a passion for financial markets. Our goal is to achieve
                                        continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Dragan Stojanović</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    @include ('frontend.home_all.home_blog')
    <!-- blog-area-end -->

    <!-- contact-area -->
    <section class="homeContact">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">Hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter mail*">
                                <input type="number" placeholder="Enter number*">
                                <textarea name="message" placeholder="Enter Massage*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

@endsection
