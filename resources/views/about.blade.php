<x-app-layout>
    <x-breadcrumb title="About Us" :links="[['text' => 'Home', 'url' => url('/')], ['text' => 'About Us']]" />

    <!-- about section  start -->
    <div class="tp-about__section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="tp-about__img-wrapper d-md-flex p-relative">
                        <div class="tp-about__img-large w-img mb-30">
                            <img src="{{ asset('assets/img/about/about-1.jpg') }}" alt="">
                        </div>
                        <div class="tp-about__img-sm w-img mb-30">
                            <img src="{{ asset('assets/img/about/about-2.jpg') }}" alt="">
                        </div>

                        <div class="tp-about-shapes">
                            <div class="tp-about__shapes-1">
                                <img src="{{ asset('assets/img/icons/about-shapes.png') }}" alt="">
                                <div class="tp-about__shapes-2 ">
                                    <img src="{{ asset('assets/img/icons/ring-shape.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="tp-section__title-wrapper">
                        <h3 class="tp-section__title mb-15">
                            Benefit From Our <br>
                            Online Learning Experties Earn professional.
                        </h3>
                        <p class="mb-40">Warsiya Education Hub is a hub of the Education which provides the education nusery class to class 12</p>

                        <div class="tp-about__feature-list mb-40">
                            <ul>
                                <li><span><i class="icon_check"></i></span>Upskill your organization.</li>
                                <li><span><i class="icon_check"></i></span>Access more then 100K online courses</li>
                                <li><span><i class="icon_check"></i></span>Access more then 1M online Video</li>
                            </ul>
                        </div>
                        <div class="tp-hero__btn-wrappper">
                            <a href="{{ route('about') }}" class="tp-border-btn br-0">
                                <span>Get Started</span>
                                <div class="transition"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end  -->

    <div class="tp-about__section py-5" style="background: #f0f0f0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="https://picsum.photos/400/500" alt="image" class="rounded w-100">
                </div>
                <div class="col-md-8">
                    <p class="lead">
                        Warsiya Education Hub is a hub of the Education which provides the education nusery class to class 12. It provides quality important questions for board exam and study materials for the students preparing for BSEB/CBSE or any other board. It also provies the books pdf for class 1 to class 12. We can get the NCERT/ Other books solution in this side. NCERT Books based test and study materials are according to the student’s needs. We also provide previous year papers of all major boards. Director of Warsiya Education Hub Saddam Waris and Shamshad Waris.
                    </p>
                    <blockquote class="shadow-sm border-start border-success border-4 px-4 py-3 mb-2">
                        <b>Saddam Waris:</b> I completed B. Tech (Mechanical Engineering) From UPTU in 2013. My hobby is teaching Maths. I started to teach Math from 2017. My teaching way is batter to understand the students in easy way.
                    </blockquote>
                    <blockquote class="shadow-sm border-start border-success border-4 px-4 py-3 mb-0">
                        <b>Shamshad Waris:</b> I completed B. Tech (Computer Science) From Silicon Institute of Technology in 2017. My hobby is teaching Maths. I started to teach Math from 2017. My teaching way is batter to understand the students in easy way.
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <!-- counter start  -->
    <div class="tp-counter__section pt-80 pb-60" data-background="{{ asset('assets/img/bg/counter-bg-1.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tp-section__title-wrapper mb-70 text-center">
                                <h3 class="tp-section__title text-white">Our Many years of <br>
                                    Experience in Numbers</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="tp-counter__item mb-30 has-border">
                                <span><b class="counter">13286</b>Success Stories</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="tp-counter__item has-border mb-30">
                                <span><b class="counter">620</b>Success Stories</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="tp-counter__item  has-border mb-30">
                                <span><b class="counter">530</b>Success Stories</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="tp-counter__item mb-30">
                                <span><b class="counter">2000</b>Success Stories</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end  -->

    <!-- testimonial start  -->
    <div class="tp-testimonial-2__section py-5">
        <div class="container">
            <div class="row">
                <div class="tp-testimonial-2__wrapper p-relative">
                    <div class="tp-testimonial-2__slider">
                        <div class="tp-testimonial-2__box white-bg">
                            <div class="tp-testimonial-2__avata">
                                <img src="{{ asset('assets/img/testimonial/tp-testi-2.1.jpg') }}" alt="">
                                <span class="tp-testimonial-2__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                            </div>
                            <div class="tp-testimonial-2__review">
                                <p>Simply the best. Better than all the rest. I’d recommend this product to morish
                                    beginners
                                    andviverra maecenas accumsan lacus.Risus commodo viverra maecenas.</p>
                                <h3>Maria Zokatti</h3>
                                <span>CEO, Psdboss</span>
                            </div>
                        </div>
                        <div class="tp-testimonial-2__box white-bg">
                            <div class="tp-testimonial-2__avata">
                                <img src="{{ asset('assets/img/testimonial/tp-testi-2.2.jpg') }}" alt="">
                                <span class="tp-testimonial-2__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                            </div>
                            <div class="tp-testimonial-2__review">
                                <p>Simply the best. Better than all the rest. I’d recommend this product to morish
                                    beginners
                                    andviverra maecenas accumsan lacus.Risus commodo viverra maecenas.</p>
                                <h3>Judy N</h3>
                                <span>CEO, Psdboss</span>
                            </div>
                        </div>
                        <div class="tp-testimonial-2__box white-bg">
                            <div class="tp-testimonial-2__avata">
                                <img src="{{ asset('assets/img/testimonial/tp-testi-2.3.jpg') }}" alt="">
                                <span class="tp-testimonial-2__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                            </div>
                            <div class="tp-testimonial-2__review">
                                <p>Simply the best. Better than all the rest. I’d recommend this product to morish
                                    beginners
                                    andviverra maecenas accumsan lacus.Risus commodo viverra maecenas.</p>
                                <h3>Olive Yew.</h3>
                                <span>CEO, Psdboss</span>
                            </div>
                        </div>
                        <div class="tp-testimonial-2__box white-bg">
                            <div class="tp-testimonial-2__avata">
                                <img src="{{ asset('assets/img/testimonial/tp-testi-2.1.jpg') }}" alt="">
                                <span class="tp-testimonial-2__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                            </div>
                            <div class="tp-testimonial-2__review">
                                <p>Simply the best. Better than all the rest. I’d recommend this product to morish
                                    beginners
                                    andviverra maecenas accumsan lacus.Risus commodo viverra maecenas.</p>
                                <h3>Teri Dactyl.</h3>
                                <span>CEO, Psdboss</span>
                            </div>
                        </div>
                        <div class="tp-testimonial-2__box white-bg">
                            <div class="tp-testimonial-2__avata">
                                <img src="{{ asset('assets/img/testimonial/tp-testi-2.3.jpg') }}" alt="">
                                <span class="tp-testimonial-2__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                            </div>
                            <div class="tp-testimonial-2__review">
                                <p>Simply the best. Better than all the rest. I’d recommend this product to morish
                                    beginners
                                    andviverra maecenas accumsan lacus.Risus commodo viverra maecenas.</p>
                                <h3>Peg Legge.</h3>
                                <span>CEO, Psdboss</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tp-testimonial-2__dots"></div>
            </div>
        </div>
    </div>
    <!-- testimoial end  -->


    <!-- cta start-->
    {{-- <div class="tp-cta-2__section p-relative pt-50 pb-20 p-relative"
        data-background="assets/img/bg/cta-shape-2.jpg') }}">
        <div class="tp-cta-2__shape">
            <img src="{{ asset('assets/img/icons/ring-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="tp-cta__info mb-30">
                        <h3 class="tp-section__title mb-25">Quickly get updates about <br>
                            class event and news!</h3>
                        <div class="tp-cta-2__form p-relative">
                            <form>
                                <div class="tp-cta-2__field">
                                    <input type="text" placeholder="Enter Your Email">
                                </div>
                                <button class="tp-cta-2__btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-cta-2__img text-lg-end mb-30">
                        <img src="{{ asset('assets/img/icons/cta-img-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- newsletter end -->
</x-app-layout>
