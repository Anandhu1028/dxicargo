@extends('layouts.frontend.app')
@section('content')


<div class="stricky-header stricky-header--style2 stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Start Banner Two-->
<section class="banner-two">
    <div class="banner-two__img1 float-bob-y">
        <div class="inner">
            <img src="{{asset('assets/images/banner/banner-v2-img1.jpg')}}" alt="">
        </div>
    </div>
    <div class="banner-two__img2 float-bob-x"><img src="{{asset('assets/images/banner/banner-v2-img2.png')}}" alt=""></div>
    <div class="shape1 float-bob-y"><img src="{{asset('assets/images/shapes/banner-v2-shape1.png')}}" alt=""></div>
    <div class="shape2"><img src="{{asset('assets/images/shapes/banner-v2-shape2.png')}}" alt=""></div>
    <div class="container clearfix">
        <div class="banner-two__content">
            <div class="banner-two__content-top wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="title-box">
                    <h2>EXPERT TRANSPORTATION <br> </h2>
                </div>
            </div>

            <div class="banner-two__content-bottom wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="text-box">
                    <p>If you have a parcel and want to know its latest update, then check the latest update
                        with your parcel ID in the form below. Don't forget to select the correct category to
                        search. Thank You.</p>
                </div>

                <div class="banner-two__tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#air" class="tab-btn">
                            <p>Air Freight</p>
                        </li>
                        <li data-tab="#road" class="tab-btn active-btn">
                            <p>Road Freight</p>
                        </li>
                        <li data-tab="#ocean" class="tab-btn">
                            <p>Ocean Freight</p>
                        </li>
                    </ul>

                    <div class="tabs-content">

                        <!--tab-->
                        <div class="tab" id="air">
                            <div class="banner-two__tab-form-box">
                                <form class="banner-two__tab-form mc-form" data-url="MC_FORM_URL"
                                    novalidate="novalidate">
                                    <div class="banner-two__tab-form-input-box">
                                        <input type="email" placeholder="Enter Transport Id" name="EMAIL">
                                        <button type="submit" class="banner-two__tab-form-btn"><span
                                                class="icon-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--tab-->

                        <!--tab-->
                        <div class="tab active-tab" id="road">
                            <div class="banner-two__tab-form-box">
                                <form class="banner-two__tab-form mc-form" data-url="MC_FORM_URL"
                                    novalidate="novalidate">
                                    <div class="banner-two__tab-form-input-box">
                                        <input type="email" placeholder="Enter Transport Id" name="EMAIL">
                                        <button type="submit" class="banner-two__tab-form-btn"><span
                                                class="icon-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--tab-->

                        <!--tab-->
                        <div class="tab" id="ocean">
                            <div class="banner-two__tab-form-box">
                                <form class="banner-two__tab-form mc-form" data-url="MC_FORM_URL"
                                    novalidate="novalidate">
                                    <div class="banner-two__tab-form-input-box">
                                        <input type="email" placeholder="Enter Transport Id" name="EMAIL">
                                        <button type="submit" class="banner-two__tab-form-btn"><span
                                                class="icon-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--tab-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Two-->

<!--Start Counter Two-->
<section class="counter-one counter-one--two">
    {{-- <div class="big-title wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <h2>ROAD FRIGHT</h2>
    </div> --}}
    <div class="container clearfix">
        <div class="counter-one--two__inner">
            <ul>
                <!--Start Counter Two Single-->
                {{-- <li class="counter-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-one__single-inner">
                        <div class="content-box">
                            <div class="count-text-box count-box">
                                <h3 class="count-text" data-stop="541" data-speed="1500">00</h3>
                                <span class="plus">+</span>
                            </div>
                            <div class="text-box">
                                <p>Distribution Center</p>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <!--End Counter Two Single-->

                <!--Start Counter Two Single-->
                {{-- <li class="counter-one__single wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-one__single-inner">
                        <div class="content-box">
                            <div class="count-text-box count-box">
                                <h3 class="count-text" data-stop="54" data-speed="1500">00</h3>
                                <span class="plus">+</span>
                            </div>
                            <div class="text-box">
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <!--End Counter Two Single-->

                <!--Start Counter Two Single-->
                {{-- <li class="counter-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-one__single-inner">
                        <div class="content-box">
                            <div class="count-text-box count-box">
                                <h3 class="count-text" data-stop="50" data-speed="1500">00</h3>
                                <span class="plus">+</span>
                            </div>
                            <div class="text-box">
                                <p>Countries & Regions</p>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <!--End Counter Two Single-->
            </ul>
        </div>
    </div>
</section>
<!--End Counter Two-->

<!--Start About Two-->
<section class="about-two">
    <div class="shape5"><img src="{{asset('assets/images/shapes/about-v2-shape5.png')}}" alt=""></div>
    <div class="container">
        <div class="row">
            <!--Start About Two Img-->
            <div class="col-xl-6">
                <div class="about-two__img">
                    <div class="shape2 float-bob-x"><img src="{{asset('assets/images/shapes/about-v2-shape2.png')}}" alt="">
                    </div>
                    <div class="shape3 float-bob-y"><img src="{{asset('assets/images/shapes/about-v2-shape3.png')}}" alt="">
                    </div>
                    <div class="shape4 float-bob-y"><img src="{{asset('assets/images/shapes/about-v2-shape4.png')}}" alt="">
                    </div>
                    <div class="about-two__img1">
                        <div class="inner reveal">
                            <img src="{{asset('assets/images/about/about-v2-img1.jpg')}}" alt="">
                        </div>
                        <div class="about-two__counter">
                            <div class="shape1"><img src="{{asset('assets/images/shapes/about-v2-shape1.png')}}" alt="">
                            </div>
                            <div class="count-text-box count-box">
                                <h2 class="count-text" data-stop="25" data-speed="1500">00</h2>
                                <span class="plus">+</span>
                            </div>

                            <p>Years Of <br>
                                Experience</p>
                        </div>
                    </div>

                    <div class="about-two__img2 reveal">
                        <img src="{{asset('assets/images/about/about-v2-img2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <!--End About Two Img-->

            <!--Start About Two Content-->
            <div class="col-xl-6">
                <div class="about-two__content">
                    <div class="sec-title tg-heading-subheading animation-style2">
                        <div class="sec-title__tagline">
                            <div class="line"></div>
                            <div class="text tg-element-title">
                                <h4>About Us</h4>
                            </div>
                            <div class="icon">
                                <span class="icon-plane2 float-bob-x3"></span>
                            </div>
                        </div>
                        <h2 class="sec-title__title tg-element-title">The Transportation and <br> Logistics
                            <span>Industry</span>
                        </h2>
                    </div>

                    <div class="about-two__content-text1">
                        <p>Logistic service provider company plays a pivotal role in the global supply chain of
                            ecosystem by efficiently managing the movement of goods from point
                            of origin to final destination. </p>
                    </div>

                    <div class="about-two__content-text2">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <ul class="about-two__content-text2-list">
                                    <li>
                                        <p><span class="icon-check1"></span> Safety And Reliability</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check1"></span> End-to-End Transportation</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <ul class="about-two__content-text2-list">
                                    <li>
                                        <p><span class="icon-check1"></span> Warehousing & Distribution</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check1"></span> Fast Transportation</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
            <!--End About Two Content-->
        </div>
    </div>
</section>
<!--End About Two-->

<!--Start Service Two-->
<section class="service-two">
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
            <h2 class="sec-title__title tg-element-title">Efficient Logistics Services <br>
                for Your <span>Business</span></h2>
        </div>

        <div class="service-two__carousel owl-carousel owl-theme owl-dot-style1">

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-worldwide-shipping"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">International <br>
                                Transport</a></h2>
                        <p>International transport facilitates the movement of goods and people across borders, supporting global trade and travel</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Service Two Single-->

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img2.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-shipment"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">Local Truck <br>
                                Transport</a></h2>
                        <p>Local truck transport handles the movement of goods within a specific region or city, ensuring timely deliveries to nearby destinations</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Service Two Single-->

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img3.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-courier-services"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">Fast Personal <br>
                                Delivery </a></h2>
                        <p>Fast personal delivery offers quick, door-to-door services tailored for individual customers, ensuring timely and efficient shipments of personal items</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Service Two Single-->

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-worldwide-shipping"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">International <br>
                                Transport</a></h2>
                        <p>International transport facilitates the movement of goods and people across borders, supporting global trade and travel</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Service Two Single-->

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img2.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-shipment"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">Local Truck <br>
                                Transport</a></h2>
                        <p>Local truck transport handles the movement of goods within a specific region or city, ensuring timely deliveries to nearby destinations</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Service Two Single-->

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img3.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-courier-services"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">Fast Personal <br>
                                Delivery </a></h2>
                        <p>Fast personal delivery offers quick, door-to-door services tailored for individual customers, ensuring timely and efficient shipments of personal items</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Service Two Single-->

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-worldwide-shipping"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">International <br>
                                Transport</a></h2>
                        <p>International transport facilitates the movement of goods and people across borders, supporting global trade and travel</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Service Two Single-->

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img2.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-shipment"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">Local Truck <br>
                                Transport</a></h2>
                        <p>Local truck transport handles the movement of goods within a specific region or city, ensuring timely deliveries to nearby destinations</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Service Two Single-->

            <!--Start Service Two Single-->
            <div class="service-two__single">
                <div class="service-two__single-img">
                    <div class="inner">
                        <img src="{{asset('assets/images/services/services-v2-img3.jpg')}}" alt="">
                    </div>
                </div>

                <div class="service-two__single-content">
                    <div class="icon">
                        <span class="icon-courier-services"></span>
                    </div>
                    <div class="service-two__single-content-inner text-center">
                        <h2><a href="international-transport.html">Fast Personal <br>
                                Delivery </a></h2>
                        <p>Fast personal delivery offers quick, door-to-door services tailored for individual customers, ensuring timely and efficient shipments of personal items</p>
                        <div class="btn-box">
                            <a href="international-transport.html">Read More <span
                                    class="icon-right-arrow21"></span></a>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
            <!--End Service Two Single-->

        </div>
    </div>
</section>
<!--End Service Two-->

<!--Start Project One-->
{{-- <section class="project-one project-one--two">
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

<!--Start Cta One-->
<section class="cta-one">
    <div class="container">
        <div class="cta-one__inner">
            <div class="cta-one__img wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                    src="{{asset('assets/images/resources/cta-v1-img1.png')}}" alt=""></div>
            <div class="cta-one__pattern"><img src="{{asset('assets/images/pattern/cta-v1-pattern.png')}}" alt=""></div>
            <div class="shape1 float-bob-x"><img src="{{asset('assets/images/shapes/cta-v1-shape1.png')}}" alt=""></div>
            <div class="shape2"><img src="{{asset('assets/images/shapes/cta-v1-shape2.png')}}" alt=""></div>
            <div class="shape3"><img src="{{asset('assets/images/shapes/cta-v1-shape3.png')}}" alt=""></div>
            <div class="cta-one__content">
                <h2>Recognized as One of The <br> Leading <span>Company!</span></h2>
                <p>Logistic service provider company plays a pivotal <br>
                    role in the global supply chain ecosystem.</p>
                {{-- <div class="btn-box">
                    <a class="thm-btn" href="#">Book Your Parcel
                        <i class="icon-right-arrow21"></i>
                        <span class="hover-btn hover-bx"></span>
                        <span class="hover-btn hover-bx2"></span>
                        <span class="hover-btn hover-bx3"></span>
                        <span class="hover-btn hover-bx4"></span>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--End Cta One-->

{{-- <!--Start Team One-->
<section class="team-one team-one--two">
    <div class="team-one--two__pattern">
        <img src="assets/images/pattern/team-v2-pattern.png" alt="">
    </div>
    <div class="container">
        <div class="sec-title center text-center tg-heading-subheading animation-style2">
            <div class="sec-title__tagline">
                <div class="line"></div>
                <div class="text tg-element-title">
                    <h4>Team member</h4>
                </div>
                <div class="icon">
                    <span class="icon-plane2 float-bob-x3"></span>
                </div>
            </div>
            <h2 class="sec-title__title tg-element-title">Introduce Our Expert <br>
                Logistic <span>Teams</span></h2>
        </div>

        <div class="team-one__carousel owl-carousel owl-theme owl-dot-style1">
            <!--Start Team One Single-->
            <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img1.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="team-details.html">Courtney Henry</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div> --}}
            <!--End Team One Single-->

            <!--Start Team One Single-->
            {{-- <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img2.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="team-details.html">Jane Cooper</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img3.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="team-details.html">Marvin McKinney</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img1.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="team-details.html">Courtney Henry</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img2.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="team-details.html">Jane Cooper</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img3.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="team-details.html">Marvin McKinney</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img1.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="contact.html">Courtney Henry</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img2.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="team-details.html">Jane Cooper</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="team-one__single">
                <div class="team-one__single-img">
                    <div class="inner">
                        <img src="assets/images/team/team-v1-img3.jpg" alt="">
                    </div>
                </div>

                <div class="team-one__single-content">
                    <ul class="social-links">
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter1"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    </ul>
                    <span>FOUNDER</span>
                    <h2><a href="team-details.html">Marvin McKinney</a></h2>
                    <p>Logistic service provider company plays a pivotal role in the global supply chain
                    </p>
                    <div class="btn-box">
                        <a href="contact.html">Contact Me <i class="icon-right-arrow21"></i></a>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->
        </div>
    </div>
</section> --}}
<!--End Team One-->

<!--Start Testimonial Two-->
{{-- <section class="testimonial-two">
    <div class="container clearfix">
        <div class="row">
            <!--Start Testimonial Two Content-->
            <div class="col-xl-4">
                <div class="testimonial-two__content">
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
                        <h2 class="sec-title__title tg-element-title">Our Customers <br> <span>Reviews</span>
                        </h2>
                    </div>

                    <div class="testimonial-two__content-text">
                        <p>You can use this heading to introduce a section where customers share their feedback or testimonials, highlighting their experiences with your services.</p>
                    </div>

                    
                </div>
            </div>
            <!--End Testimonial Two Content-->


            <!--Start Testimonial Two Right -->
            <div class="col-xl-8">
                <div class="testimonial-two__right">
                    <div class="testimonial-two__carousel owl-carousel owl-theme owl-dot-style1">
                        <!--Start Testimonial Two Single-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__single-top">
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v2-img1.png" alt="">
                                    </div>

                                    <div class="title-box">
                                        <h2>Leslie Alexander</h2>
                                        <span>MANAGER</span>
                                    </div>
                                </div>

                                <div class="testimonial-two__single-text">
                                    <p>A logistic service provider company plays a pivotal role in the
                                        global
                                        supply chain A logistic service provider companyA logistic service
                                        provider.</p>
                                </div>

                                <div class="rating-box">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial Two Single-->

                        <!--Start Testimonial Two Single-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__single-top">
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v2-img2.png" alt="">
                                    </div>
                                    <div class="title-box">
                                        <h2>Ronald Richards</h2>
                                        <span>MANAGER</span>
                                    </div>
                                </div>

                                <div class="testimonial-two__single-text">
                                    <p>A logistic service provider company plays a pivotal role in the
                                        global
                                        supply chain A logistic service provider companyA logistic service
                                        provider.</p>
                                </div>

                                <div class="rating-box">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial Two Single-->

                        <!--Start Testimonial Two Single-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__single-top">
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v2-img1.png" alt="">
                                    </div>

                                    <div class="title-box">
                                        <h2>Leslie Alexander</h2>
                                        <span>MANAGER</span>
                                    </div>
                                </div>

                                <div class="testimonial-two__single-text">
                                    <p>A logistic service provider company plays a pivotal role in the
                                        global
                                        supply chain A logistic service provider companyA logistic service
                                        provider.</p>
                                </div>

                                <div class="rating-box">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial Two Single-->

                        <!--Start Testimonial Two Single-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__single-top">
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v2-img2.png" alt="">
                                    </div>
                                    <div class="title-box">
                                        <h2>Ronald Richards</h2>
                                        <span>MANAGER</span>
                                    </div>
                                </div>

                                <div class="testimonial-two__single-text">
                                    <p>A logistic service provider company plays a pivotal role in the
                                        global
                                        supply chain A logistic service provider companyA logistic service
                                        provider.</p>
                                </div>

                                <div class="rating-box">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial Two Single-->

                        <!--Start Testimonial Two Single-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__single-top">
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v2-img1.png" alt="">
                                    </div>

                                    <div class="title-box">
                                        <h2>Leslie Alexander</h2>
                                        <span>MANAGER</span>
                                    </div>
                                </div>

                                <div class="testimonial-two__single-text">
                                    <p>A logistic service provider company plays a pivotal role in the
                                        global
                                        supply chain A logistic service provider companyA logistic service
                                        provider.</p>
                                </div>

                                <div class="rating-box">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial Two Single-->

                        <!--Start Testimonial Two Single-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__single-top">
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v2-img2.png" alt="">
                                    </div>
                                    <div class="title-box">
                                        <h2>Ronald Richards</h2>
                                        <span>MANAGER</span>
                                    </div>
                                </div>

                                <div class="testimonial-two__single-text">
                                    <p>A logistic service provider company plays a pivotal role in the
                                        global
                                        supply chain A logistic service provider companyA logistic service
                                        provider.</p>
                                </div>

                                <div class="rating-box">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--End Testimonial Two Single-->
                    </div>
                </div>
            </div>
            <!--End Testimonial Two Right -->
        </div>
    </div>
</section> --}}
<!--End Testimonial Two-->

<!--Start Brand One-->
<section class="brand-one">
    <div class="container">
        <div class="brand-one__carousel owl-carousel owl-theme">
            <!--Start Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__single-inner">
                    <a href="#"><img src="{{asset('assets/images/brand/brand-v1-img1.png')}}" alt=""></a>
                </div>
            </div>
            <!--End Brand One Single-->

            <!--Start Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__single-inner">
                    <a href="#"><img src="{{asset('assets/images/brand/brand-v1-img2.png')}}" alt=""></a>
                </div>
            </div>
            <!--End Brand One Single-->

            <!--Start Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__single-inner">
                    <a href="#"><img src="{{asset('assets/images/brand/brand-v1-img3.png')}}" alt=""></a>
                </div>
            </div>
            <!--End Brand One Single-->

            <!--Start Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__single-inner">
                    <a href="#"><img src="{{asset('assets/images/brand/brand-v1-img4.png')}}" alt=""></a>
                </div>
            </div>
            <!--End Brand One Single-->

            <!--Start Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__single-inner">
                    <a href="#"><img src="{{asset('assets/images/brand/brand-v1-img5.png')}}" alt=""></a>
                </div>
            </div>
            <!--End Brand One Single-->

            <!--Start Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__single-inner">
                    <a href="#"><img src="{{asset('assets/images/brand/brand-v1-img6.png')}}" alt=""></a>
                </div>
            </div>
            <!--End Brand One Single-->
        </div>
    </div>
</section>
<!--End Brand One-->

<!--Start Why Choose Two-->
<section class="why-choose-two">
    <div class="why-choose-two__bg"
        style="background-image: url({{asset('assets/images/backgrounds/why-choose-v2-bg.jpg')}});">
        <div class="shape3 float-bob-x"><img src="{{asset('assets/images/shapes/why-choose-v2-shape3.png')}}" alt=""></div>
        <div class="why-choose-two__video-box">
            {{-- <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                <div class="why-choose-two__video-box-icon">
                    <span class="icon-video"></span>
                    <i class="ripple"></i>
                </div>
            </a> --}}
        </div>
    </div>
    <div class="shape1"><img src="{{asset('assets/images/shapes/why-choose-v2-shape1.png')}}" alt=""></div>
    <div class="container">
        <div class="why-choose-two__content">
            <div class="sec-title tg-heading-subheading animation-style2">
                <div class="sec-title__tagline">
                    <div class="line"></div>
                    <div class="text tg-element-title">
                        <h4>WHy choose us</h4>
                    </div>
                    <div class="icon">
                        <span class="icon-plane2 float-bob-x3"></span>
                    </div>
                </div>
                <h2 class="sec-title__title tg-element-title">Transportation Services We <br> Are Often
                    <span>Considered</span>
                </h2>
            </div>

            <div class="why-choose-two__content-text">
                <p>Logistic service provider company plays a pivotal role in the global supply
                    chain ecosystem by efficiently managing the movement of goods from origin to final
                    destination. These companies offer a diverse.</p>
            </div>

            <div class="why-choose-two__content-bottom">
                <div class="shape2 float-bob-x"><img src="{{asset('assets/images/shapes/why-choose-v2-shape2.png')}}" alt="">
                </div>
                <div class="client-box">
                    <ul>
                        <li>
                            <div class="img-box">
                                <img src="{{asset('assets/images/resources/why-choose-v2-img1.png')}}" alt="">
                            </div>
                        </li>

                        <li>
                            <div class="img-box">
                                <img src="{{asset('assets/images/resources/why-choose-v2-img2.png')}}" alt="">
                            </div>
                        </li>

                        <li>
                            <div class="img-box">
                                <img src="{{asset('assets/images/resources/why-choose-v2-img3.png')}}" alt="">
                            </div>
                        </li>

                        <li>
                            <div class="img-box">
                                <img src="{{asset('assets/images/resources/why-choose-v2-img4.png')}}" alt="">
                            </div>
                        </li>
                    </ul>

                    <div class="count-text-box count-box">
                        <h2 class="count-text" data-stop="1500" data-speed="1500">00</h2>
                        <span class="plus">+</span>
                    </div>
                    <h3>Happy Clients</h3>
                </div>

                <div class="why-choose-two__content-bottom-content wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="why-choose-two__pattern2"
                        style="background-image: url({{asset('assets/images/pattern/why-choose-v2-pattern2.png')}});"></div>
                    <ul>
                        <li class="why-choose-two__single">
                            <div class="why-choose-two__single-top">
                                <div class="icon">
                                    <span class="icon-international-shipping"></span>
                                </div>

                                <div class="title">
                                    <h4>Global Logistics <br>
                                        Operation</h4>
                                </div>
                            </div>
                            <div class="text-box">
                                <p>Global logistics operations manage the seamless movement of goods across international borders, optimizing supply chains worldwide
                                </p>
                            </div>
                        </li>

                        <li class="why-choose-two__single">
                            <div class="why-choose-two__single-top">
                                <div class="icon">
                                    <span class="icon-protection"></span>
                                </div>

                                <div class="title">
                                    <h4>Safety & Security <br>
                                        Delivery</h4>
                                </div>
                            </div>
                            <div class="text-box">
                                <p> This can serve as a heading for a section focused on ensuring the safe and secure handling of goods throughout the delivery process
                                </p>
                            </div>
                        </li>
                    </ul>

                    <ul>
                        <li class="why-choose-two__single">
                            <div class="why-choose-two__single-top">
                                <div class="icon">
                                    <span class="icon-professional-services"></span>
                                </div>

                                <div class="title">
                                    <h4>Professional Logistics <br> Management</h4>
                                </div>
                            </div>
                            <div class="text-box">
                                <p>This  section highlighting the expertise and strategic planning involved in overseeing the efficient flow of goods
                                </p>
                            </div>
                        </li>

                        <li class="why-choose-two__single">
                            <div class="why-choose-two__single-top">
                                <div class="icon">
                                    <span class="icon-tracking"></span>
                                </div>

                                <div class="title">
                                    <h4>Real Time location <br>
                                        Tracking </h4>
                                </div>
                            </div>
                            <div class="text-box">
                                <p>
                                    This can introduce a feature that allows customers to monitor the exact location of their shipments in real time.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Why Choose Two-->

<!--Start Working Process One-->
<section class="working-process-one">
    <div class="working-process-one__pattern"
        style="background-image: url({{asset('assets/images/pattern/working-process-v1-pattern.jpg')}});"></div>
    <div class="container">
        <div class="shape1"><img src="{{asset('assets/images/shapes/working-process-v1-shape1.png')}}" alt=""></div>
        <div class="sec-title center text-center tg-heading-subheading animation-style2">
            <div class="sec-title__tagline">
                <div class="line"></div>
                <div class="text tg-element-title">
                    <h4>Working Process</h4>
                </div>
                <div class="icon">
                    <span class="icon-plane2 float-bob-x3"></span>
                </div>
            </div>
            <h2 class="sec-title__title tg-element-title">How We Deliver <br>
                Your <span>Parcel</span></h2>
        </div>

        <div class="row">
            <!--Start Working Process One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="working-process-one__single">
                    <div class="icon">
                        <div class="count-box">01</div>
                        <span class="icon-quote"></span>
                    </div>

                    <div class="content-box">
                        <h2><a href="#">Request A Quote</a></h2>
                        <p>Invite customers to request a quote for shipping needs </p>
                    </div>
                    <div class="plane-icon">
                        <span class="icon-plane"></span>
                    </div>
                </div>
            </div>
            <!--End Working Process One Single-->

            <!--Start Working Process One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="working-process-one__single">
                    <div class="icon">
                        <div class="count-box">02</div>
                        <span class="icon-protection"></span>
                    </div>

                    <div class="content-box">
                        <h2><a href="#">Product Receiving </a></h2>
                        <p>Outline processes for receiving goods, ensuring accuracy and quality control. </p>
                    </div>
                    <div class="plane-icon">
                        <span class="icon-plane"></span>
                    </div>
                </div>
            </div>
            <!--End Working Process One Single-->

            <!--Start Working Process One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="working-process-one__single">
                    <div class="icon">
                        <div class="count-box">03</div>
                        <span class="icon-service"></span>
                    </div>

                    <div class="content-box">
                        <h2><a href="#">Send The Parcel</a></h2>
                        <p>Prepare and dispatch the parcel for timely delivery to recipients.</p>
                    </div>
                    <div class="plane-icon">
                        <span class="icon-plane"></span>
                    </div>
                </div>
            </div>
            <!--End Working Process One Single-->

            <!--Start Working Process One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="working-process-one__single">
                    <div class="icon">
                        <div class="count-box">04</div>
                        <span class="icon-new-product"></span>
                    </div>

                    <div class="content-box">
                        <h2><a href="#">Deliver Packages</a></h2>
                        <p>Ensure safe and prompt delivery of packages to customers' doors. </p>
                    </div>
                </div>
            </div>
            <!--End Working Process One Single-->
        </div>
    </div>
</section>
<!--End Working Process One-->

<!--Start Blog One-->
{{-- <section class="blog-one blog-one--two">
    <div class="container">
        <div class="sec-title center text-center tg-heading-subheading animation-style2">
            <div class="sec-title__tagline">
                <div class="line"></div>
                <div class="text tg-element-title">
                    <h4>Blog & News</h4>
                </div>
                <div class="icon">
                    <span class="icon-plane2 float-bob-x3"></span>
                </div>
            </div>
            <h2 class="sec-title__title tg-element-title">Latest News Directly <br> From Our <span>Blog</span>
            </h2>
        </div>
        <div class="row">
            <!--Start Blog One Single-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="assets/images/blog/blog-v1-img1.jpg" alt="">
                    </div>

                    <div class="blog-one__single-content">
                        <div class="date-box">
                            <h2>05</h2>
                            <p>FEB</p>
                        </div>
                        <div class="blog-one__single-content-inner">
                            <ul class="meta-box">
                                <li>
                                    <div class="icon">
                                        <span class="icon-user"></span>
                                    </div>

                                    <div class="text-box">
                                        <p><a href="#">Robert Fox</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-chat"></span>
                                    </div>

                                    <div class="text-box">
                                        <p><a href="#">2 Comment</a></p>
                                    </div>
                                </li>
                            </ul>

                            <h2><a href="blog-details.html">How Will You Know Success <br> When it Show Up?</a>
                            </h2>
                            <p>Logistic service provider company plays a pivotal role in the global supply chain
                                ecosystem by efficiently... </p>

                            <div class="btn-box">
                                <a class="thm-btn" href="blog-details.html">Read More
                                    <i class="icon-right-arrow21"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog One Single-->

           

            <!--Start Blog One Single-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="assets/images/blog/blog-v1-img3.jpg" alt="">
                    </div>

                    <div class="blog-one__single-content">
                        <div class="date-box">
                            <h2>05</h2>
                            <p>FEB</p>
                        </div>
                        <div class="blog-one__single-content-inner">
                            <ul class="meta-box">
                                <li>
                                    <div class="icon">
                                        <span class="icon-user"></span>
                                    </div>

                                    <div class="text-box">
                                        <p><a href="#">Robert Fox</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-chat"></span>
                                    </div>

                                    <div class="text-box">
                                        <p><a href="#">2 Comment</a></p>
                                    </div>
                                </li>
                            </ul>

                            <h2><a href="blog-details.html">Logistics Announces Launch <br> of Greenhouse
                                    Gas</a></h2>
                            <p>Logistic service provider company plays a pivotal role in the global supply chain
                                ecosystem by efficiently... </p>

                            <div class="btn-box">
                                <a class="thm-btn" href="blog-details.html">Read More
                                    <i class="icon-right-arrow21"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog One Single-->
        </div>
    </div>
</section> --}}
<!--End Blog One-->
@endsection