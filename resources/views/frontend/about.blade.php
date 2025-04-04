@extends('layouts.frontend.app')
@section('content')
<div class="stricky-header stricky-header--style1 stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}});">
    </div>
    <div class="page-header__pattern"><img src="{{asset('assets/images/pattern/page-header-pattern.png')}}" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>About us</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><span class="icon-right-arrow21"></span></li>
                <li>About us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start About One-->
<section class="about-one">
    <div class="container">
        <div class="row">
            <!--Start About One Content-->
            <div class="col-xl-7">
                <div class="about-one__content">
                    <div class="sec-title tg-heading-subheading animation-style2">
                        <div class="sec-title__tagline">
                            <div class="line"></div>
                            <div class="text tg-element-title">
                                <h4>Our Company</h4>
                            </div>
                            <div class="icon">
                                <span class="icon-plane2 float-bob-x3"></span>
                            </div>
                        </div>
                        <h2 class="sec-title__title tg-element-title">Our Expertise Stands in <br>
                            <span>Logistics
                                Solutions</span>
                        </h2>
                    </div>

                    <div class="about-one__content-text1">
                        <p>Logistic service provider company plays a pivotal role in the global supply
                            chain ecosystem by efficiently managing the movement of goods from origin to final
                            destination. These companies offer a diverse.</p>
                    </div>

                    <div class="about-one__content-text2">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-one__content-text2-single">
                                    <div class="about-one__content-text2-single-top">
                                        <div class="icon">
                                            <span class="icon-worldwide-shipping-1"></span>
                                        </div>

                                        <div class="title-box">
                                            <h3>Worldwide Service</h3>
                                        </div>
                                    </div>

                                    <p>Worldwide service offers global reach and connectivity for customers.</p>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-one__content-text2-single">
                                    <div class="about-one__content-text2-single-top">
                                        <div class="icon">
                                            <span class="icon-24-hours-service"></span>
                                        </div>

                                        <div class="title-box">
                                            <h3>24/7 Online Support</h3>
                                        </div>
                                    </div>

                                    <p>Provide continuous online support for customers, any time, day or night</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-one__content-bottom">
                        {{-- <div class="btn-box">
                            <a class="thm-btn" href="about.html">More About Us
                                <i class="icon-right-arrow21"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div> --}}

                        <div class="contact-box">
                            <div class="icon">
                                <span class="icon-phone2"></span>
                            </div>

                            <div class="text-box">
                                <p>Make A Phone Call</p>
                                <h4><a href="tel:+971 56565 6539">+971 56565 6539 </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End About One Content-->

            <!--Start About One Img-->
            <div class="col-xl-5">
                <div class="about-one__img">
                    <div class="shape1 float-bob-y"><img src="{{asset('assets/images/shapes/about-v1-shape1.png')}}" alt="">
                    </div>
                    <div class="shape2 float-bob-y"><img src="{{asset('assets/images/shapes/about-v1-shape2.png')}}" alt="">
                    </div>
                    <div class="about-one__img1 reveal">
                        <img src="{{asset('assets/images/about/about-v1-img1.jpg')}}" alt="">
                    </div>

                    <div class="about-one__img2">
                        <div class="about-one__img2-inner reveal">
                            <img src="{{asset('assets/images/about/about-v1-img2.jpg')}}" alt="">
                        </div>

                        <div class="about-one__circle-text">
                            <div class="about-one__round-text-box">
                                <div class="inner">
                                    <div class="about-one__curved-circle rotate-me">
                                        WELCOME TO OUR COMPANY SINCE 2002
                                    </div>
                                </div>
                                <div class="overlay-icon-box">
                                    <a href="#"><i class="icon-location1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="shape3 float-bob-y">
                            <img src="{{asset('assets/images/shapes/about-v1-shape3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--End About One Img-->
        </div>
    </div>
</section>
<!--End About One-->

<!--Start Service One-->
{{-- <section class="service-one">
    <div class="service-one__pattern"
        style="background-image: url(assets/images/pattern/service-v1-pattern.jpg);"></div>
    <div class="container">
        <div class="sec-title center text-center tg-heading-subheading animation-style2">
            <div class="sec-title__tagline">
                <div class="line"></div>
                <div class="text tg-element-title">
                    <h4>Our Service</h4>
                </div>
                <div class="icon">
                    <span class="icon-plane2 float-bob-x3"></span>
                </div>
            </div>
            <h2 class="sec-title__title tg-element-title">Provide Efficient Logistics
                <br> Solutions <span>Business</span></h2>
        </div>

        <div class="row">
            <div class="service-one__carousel owl-carousel owl-theme owl-dot-style1">
                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img1.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Fast Personal Delivery </a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-delivery-man"></span>
                    </div>
                </div>
                <!--End Service One Single-->

                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img2.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Local Truck Transport</a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-shipment"></span>
                    </div>
                </div>
                <!--End Service One Single-->

                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img3.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">International Transport</a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-international-shipping"></span>
                    </div>
                </div>
                <!--End Service One Single-->

                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img1.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Fast Personal Delivery </a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-delivery-man"></span>
                    </div>
                </div>
                <!--End Service One Single-->

                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img2.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Local Truck Transport</a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-shipment"></span>
                    </div>
                </div>
                <!--End Service One Single-->

                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img3.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">International Transport</a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-international-shipping"></span>
                    </div>
                </div>
                <!--End Service One Single-->

                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img1.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Fast Personal Delivery </a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-delivery-man"></span>
                    </div>
                </div>
                <!--End Service One Single-->

                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img2.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Local Truck Transport</a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-shipment"></span>
                    </div>
                </div>
                <!--End Service One Single-->

                <!--Start Service One Single-->
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="assets/images/services/services-v1-img3.jpg" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">International Transport</a></h2>
                            <p>A logistic service provider company plays
                                a pivotal role in the global supply chain logistic service.</p>
                            <div class="btn-box">
                                <a href="international-transport.html">Read More <span
                                        class="icon-right-arrow21"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-international-shipping"></span>
                    </div>
                </div>
                <!--End Service One Single-->
            </div>
        </div>
    </div>
</section> --}}
<!--End Service One-->

<!--Start Project One-->
{{-- <section class="project-one">
    <div class="container">
        <div class="row">
            <!--Start Project One Single-->
            <div class="col-xl-5 col-lg-5 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="project-one__title">
                    <div class="sec-title tg-heading-subheading animation-style2">
                        <div class="sec-title__tagline">
                            <div class="line"></div>
                            <div class="text tg-element-title">
                                <h4>Latest Project</h4>
                            </div>
                            <div class="icon">
                                <span class="icon-plane2 float-bob-x3"></span>
                            </div>
                        </div>
                        <h2 class="sec-title__title tg-element-title">The Achievement <br>
                            of Our <span>Project</span></h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="project.html">See All Project
                            <i class="icon-right-arrow21"></i>
                            <span class="hover-btn hover-bx"></span>
                            <span class="hover-btn hover-bx2"></span>
                            <span class="hover-btn hover-bx3"></span>
                            <span class="hover-btn hover-bx4"></span>
                        </a>
                    </div>

                </div>
            </div>
            <!--End Project One Single-->

            <!--Start Project One Single-->
            <div class="col-xl-7 col-lg-7 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="project-one__single">
                    <div class="project-one__single-img">
                        <div class="inner">
                            <img src="assets/images/project/project-v1-img1.jpg" alt="#">
                            <div class="project-one__overlay-content">
                                <div class="text-box">
                                    <p>Logistic</p>
                                    <h2><a href="project-details.html">Warehouse Inventory </a></h2>
                                </div>

                                <div class="icon">
                                    <a href="project-details.html"><span class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Project One Single-->

            <!--Start Project One Single-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="project-one__single">
                    <div class="project-one__single-img">
                        <div class="inner">
                            <img src="assets/images/project/project-v1-img2.jpg" alt="#">
                            <div class="project-one__overlay-content">
                                <div class="text-box">
                                    <p>Logistic</p>
                                    <h2><a href="project-details.html">Warehouse Inventory </a></h2>
                                </div>

                                <div class="icon">
                                    <a href="project-details.html"><span class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Project One Single-->

            <!--Start Project One Single-->
            <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="project-one__single">
                    <div class="project-one__single-img">
                        <div class="inner">
                            <img src="assets/images/project/project-v1-img3.jpg" alt="#">
                            <div class="project-one__overlay-content">
                                <div class="text-box">
                                    <p>Logistic</p>
                                    <h2><a href="project-details.html">Warehouse Inventory </a></h2>
                                </div>

                                <div class="icon">
                                    <a href="project-details.html"><span class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Project One Single-->

            <!--Start Project One Single-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="project-one__single">
                    <div class="project-one__single-img">
                        <div class="inner">
                            <img src="assets/images/project/project-v1-img4.jpg" alt="#">
                            <div class="project-one__overlay-content">
                                <div class="text-box">
                                    <p>Logistic</p>
                                    <h2><a href="project-details.html">Warehouse Inventory </a></h2>
                                </div>

                                <div class="icon">
                                    <a href="project-details.html"><span class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Project One Single-->
        </div>
    </div>
</section> --}}
<!--End Project One-->

<!--Start Why Choose One-->
<section class="why-choose-one">
    <div class="why-choose-one__pattern">
        <img src="{{asset('assets/images/pattern/why-choose-v1-pattern.png')}}" alt="">
    </div>
    <div class="shape1 float-bob-y"><img src="{{asset('assets/images/shapes/why-choose-v1-shape1.png')}}" alt=""></div>
    <div class="container">
        <div class="row">
            <!--Start Why Choose One Content-->
            <div class="col-xl-6">
                <div class="why-choose-one__content">
                    <div class="sec-title tg-heading-subheading animation-style2">
                        <div class="sec-title__tagline">
                            <div class="line"></div>
                            <div class="text tg-element-title">
                                <h4>Why Choose us</h4>
                            </div>
                            <div class="icon">
                                <span class="icon-plane2 float-bob-x3"></span>
                            </div>
                        </div>
                        <h2 class="sec-title__title tg-element-title">Efficient, Safe, & Swift <br> Logistics
                            <span>Solution!</span></h2>
                    </div>

                    <div class="why-choose-one__content-list">
                        <ul>
                            <li>
                                <p><span class="icon-plane2"></span> Make long term business decisions</p>
                            </li>
                            <li>
                                <p><span class="icon-plane2"></span> Transparent career journey and support.</p>
                            </li>
                            <li>
                                <p><span class="icon-plane2"></span> Be a responsible member of the community
                                </p>
                            </li>
                            <li>
                                <p><span class="icon-plane2"></span> Provide a service we are proud of</p>
                            </li>
                        </ul>
                    </div>

                    {{-- <div class="btn-box">
                        <a class="thm-btn" href="contact.html">Contact Us
                            <i class="icon-right-arrow21"></i>
                            <span class="hover-btn hover-bx"></span>
                            <span class="hover-btn hover-bx2"></span>
                            <span class="hover-btn hover-bx3"></span>
                            <span class="hover-btn hover-bx4"></span>
                        </a>
                    </div> --}}
                </div>
            </div>
            <!--End Why Choose One Content-->

            <!--Start Why Choose One Form-->
            <div class="col-xl-6">
                <div class="why-choose-one__form-box wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="title-box">
                        <h2>Request a Quote</h2>
                    </div>

                    <form class="contact-form-validated why-choose-one__form" action="https://unicktheme.com/demo/logistiq/main-html/assets/inc/sendemail.php"
                        method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <input type="text" name="name" placeholder="Name" required="">
                                    <div class="icon"><span class="icon-user"></span></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <input type="email" name="email" placeholder="Email" required="">
                                    <div class="icon"><span class="icon-email"></span></div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <input type="text" name="Phone" placeholder="Phone" required="">
                                    <div class="icon"><span class="icon-phone2"></span></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <input type="text" name="date" value="" placeholder="Date" id="datepicker">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                </div>
                            </div>


                            <div class="col-xl-12">
                                <div class="why-choose-one__form-distance">
                                    <div class="title">
                                        <p>distance(Kilo):</p>
                                    </div>
                                    <div class="why-choose-one__form-distance-inner">
                                        <div class="price-ranger">
                                            <div id="slider-range"></div>
                                            <div class="ranger-min-max-block">
                                                <input type="text" readonly class="min">
                                                <span>-</span>
                                                <input type="text" readonly class="max">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <div class="select-box">
                                        <select class="selectmenu wide">
                                            <option selected="selected">Freight Type</option>
                                            <option>Freight Type 01</option>
                                            <option>Freight Type 02</option>
                                            <option>Freight Type 03</option>
                                            <option>Freight Type 04</option>
                                            <option>Freight Type 05</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <div class="select-box">
                                        <select class="selectmenu wide">
                                            <option selected="selected">Load</option>
                                            <option>Freight Type 01</option>
                                            <option>Freight Type 02</option>
                                            <option>Freight Type 03</option>
                                            <option>Freight Type 04</option>
                                            <option>Freight Type 05</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="why-choose-one__form-btn">
                                    <button type="submit" class="thm-btn">
                                        Contact Us
                                        <i class="icon-right-arrow21"></i>
                                        <span class="hover-btn hover-bx"></span>
                                        <span class="hover-btn hover-bx2"></span>
                                        <span class="hover-btn hover-bx3"></span>
                                        <span class="hover-btn hover-bx4"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
            <!--End Why Choose One Form-->
        </div>
    </div>
</section>
<!--End Why Choose One-->

<!--Start Testimonial One-->
<section class="testimonial-one">
    <div class="testimonial-one__pattern"
        style="background-image: url({{asset('assets/images/pattern/testimonial-v1-pattern.png);')}}"></div>
    <div class="container">
        <div class="row">
            <!--Start Testimonial One Content-->
            <div class="col-xl-6">
                <div class="testimonial-one__content">
                    <div class="big-title">
                       
                    </div>
                    <div class="sec-title tg-heading-subheading animation-style2">
                        <div class="sec-title__tagline">
                            <div class="line"></div>
                            <div class="text tg-element-title">
                                <h4>Client Testimonial</h4>
                            </div>
                            <div class="icon">
                                <span class="icon-plane2 float-bob-x3"></span>
                            </div>
                        </div>
                        <h2 class="sec-title__title tg-element-title">What Our Customers <br>
                            Say <span>About Us</span> </h2>
                    </div>

                    <div class="testimonial-one__carousel owl-carousel owl-theme">
                        <!--Start Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="icon">
                                <span class="icon-quote1"></span>
                            </div>
                            <div class="testimonial-one__single-inner">
                                <div class="shape1"><img src="{{asset('assets/images/shapes/testimonial-v1-shape1.png')}}"
                                        alt=""></div>
                                <div class="author-box">
                                    <div class="img-box">
                                        <img src="{{asset('assets/images/testimonial/testimonial-v1-img1.png')}}" alt="">
                                    </div>
                                    <div class="author-info">
                                        {{-- <h2>Ronald Richards</h2> --}}
                                        <div class="bottom-text">
                                            {{-- <p>MANAGER</p> --}}
                                            <div class="rating-box">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-box">
                                    <p>Excellent service! My package arrived on time and in perfect condition. Highly recommend</p>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial One Single-->

                        <!--Start Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="icon">
                                <span class="icon-quote1"></span>
                            </div>
                            <div class="testimonial-one__single-inner">
                                <div class="shape1"><img src="{{asset('assets/images/shapes/testimonial-v1-shape1.png')}}"
                                        alt=""></div>
                                <div class="author-box">
                                    <div class="img-box">
                                        <img src="{{asset('assets/images/testimonial/testimonial-v1-img1.png')}}" alt="">
                                    </div>
                                    <div class="author-info">
                                        
                                        <div class="bottom-text">
                                          
                                            <div class="rating-box">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-box">
                                    <p>"The tracking system is impressive. I knew exactly where my shipment was at all times."</p>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial One Single-->

                        <!--Start Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="icon">
                                <span class="icon-quote1"></span>
                            </div>
                            <div class="testimonial-one__single-inner">
                                <div class="shape1"><img src="{{asset('assets/images/shapes/testimonial-v1-shape1.png')}}"
                                        alt=""></div>
                                <div class="author-box">
                                    <div class="img-box">
                                        <img src="{{asset('assets/images/testimonial/testimonial-v1-img1.png')}}" alt="">
                                    </div>
                                    <div class="author-info">
                                       
                                        <div class="bottom-text">
                                          
                                            <div class="rating-box">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-box">
                                    <p>"The support team was incredibly helpful when I had questions about my delivery. Great experience overall!"</p>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial One Single-->
                    </div>
                </div>
            </div>
            <!--End Testimonial One Content-->


            <!--Start Testimonial One Img-->
            <div class="col-xl-6">
                <div class="testimonial-one__img">
                    <div class="testimonial-one__img1 reveal">
                        <img src="{{asset('assets/images/testimonial/testimonial-v1-img2.jpg')}}" alt="">
                    </div>

                </div>
            </div>
            <!--End Testimonial One Img-->
        </div>
    </div>
</section>
<!--End Testimonial One-->
@endsection