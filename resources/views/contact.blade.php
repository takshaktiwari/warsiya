<x-app-layout>
    <x-breadcrumb title="Contact Us" :links="[
        ['text' => 'Home', 'url' => url('/')],
        ['text' => 'Contact Us']
    ]" />

    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-6">
                    <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                            <h2 class="section__title">
                                Get in<span class="yellow-bg yellow-bg-big"
                                    >touch</span>
                            </h2>
                            <p>
                                Have a question or just want to say hi? We'd love to hear
                                from you.
                            </p>
                        </div>
                        <div class="contact__form mb-30">
                            <form method="POST" action="{{ route('query_store') }}" >
                            @csrf    
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="contact__form-input">
                                            <input
                                                type="text"
                                                placeholder="Your Name"
                                                name="name"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="contact__form-input">
                                            <input
                                                type="email"
                                                placeholder="Your Email"
                                                name="email"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__form-input">
                                            <input
                                                type="text"
                                                placeholder="Subject"
                                                name="subject"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__form-input">
                                            <textarea
                                                placeholder="Enter Your Message"
                                                name="message"
                                            ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__btn">
                                            <button type="submit" class="tp-btn">
                                                <span>Send your message</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="contact-response">
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1"
                >
                    <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__info-inner white-bg">
                            <ul>
                                <li>
                                    <div
                                        class="contact__info-item d-flex align-items-start mb-35"
                                    >
                                        <div class="contact__info-icon mr-15">
                                            <svg class="map" viewBox="0 0 24 24">
                                                <path
                                                    class="st0"
                                                    d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"
                                                />
                                                <circle class="st0" cx="12" cy="10" r="3" />
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>New York Office</h4>
                                            <p>
                                                <a
                                                    target="_blank"
                                                    href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873"
                                                    >Maypole Crescent 70-80 Upper St Norwich NR2
                                                    1LT</a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="contact__info-item d-flex align-items-start mb-35"
                                    >
                                        <div class="contact__info-icon mr-15">
                                            <svg class="mail" viewBox="0 0 24 24">
                                                <path
                                                    class="st0"
                                                    d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z"
                                                />
                                                <polyline class="st0" points="22,6 12,13 2,6 " />
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>Email us directly</h4>
                                            <p>
                                                <a
                                                    href="https://data.themeim.com/cdn-cgi/l/email-protection#364543464659444276624342594451591855595b"
                                                    ><span
                                                        class="__cf_email__"
                                                        data-cfemail="91e2e4e1e1fee3e5d1c5e4e5fee3f6febff2fefc"
                                                        >[email&#160;protected]</span
                                                    ></a
                                                >
                                            </p>
                                            <p>
                                                <a
                                                    href="https://data.themeim.com/cdn-cgi/l/email-protection#177e79717857436263786570783974787a"
                                                >
                                                    <span
                                                        class="__cf_email__"
                                                        data-cfemail="f39a9d959cb3a786879c81949cdd909c9e"
                                                        >[email&#160;protected]</span
                                                    ></a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="contact__info-item d-flex align-items-start mb-35"
                                    >
                                        <div class="contact__info-icon mr-15">
                                            <svg class="call" viewBox="0 0 24 24">
                                                <path
                                                    class="st0"
                                                    d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z"
                                                />
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>Phone</h4>
                                            <p>
                                                <a href="tel:+(426)-742-26-44">+(426) 742 26 44</a>
                                            </p>
                                            <p>
                                                <a href="tel:+(224)-762-442-32"
                                                    >+(224) 762 442 32</a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="contact__social pl-30">
                                <h4>Follow Us</h4>
                                <ul>
                                    <li>
                                        <a href="#" class="fb"
                                            ><i class="social_facebook"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#" class="tw"
                                            ><i class="social_twitter"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#" class="pin"
                                            ><i class="social_pinterest"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->

    <div class="tp-contact-map">
        <div class="container-fluid p-0">
            <div class="tp-map-height">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d8189.17205082922!2d90.42451837459143!3d23.89452795954588!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1665830360467!5m2!1sen!2sbd"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
    </div>
</x-app-layout>
