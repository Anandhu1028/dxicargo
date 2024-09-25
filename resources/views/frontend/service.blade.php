@extends('layouts.frontend.app')
@section('content')



<div class="stricky-header stricky-header--style1 stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}})">
    </div>
    <div class="page-header__pattern"><img src="{{asset('assets/images/pattern/page-header-pattern.png')}}" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Service</h2>
            <ul class="thm-breadcrumb">
                <<li><a href="{{route('home')}}">Home</a></li>
                <li><span class="icon-right-arrow21"></span></li>
                <li>Service</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Service One-->
<section class="service-one service-one--service">
    <div class="container">
        <div class="row">
            <!--Start Service One Single-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="{{asset('assets/images/services/services-v1-img1.jpg')}}" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Fast Personal Delivery </a></h2>
                            <p>Fast personal delivery ensures quick, reliable service tailored to individual needs, guaranteeing timely shipments and convenience for every customer..</p>
                            <div class="btn-box">
                                
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-delivery-man"></span>
                    </div>
                </div>
            </div>
            <!--End Service One Single-->

            <!--Start Service One Single-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="{{asset('assets/images/services/services-v1-img2.jpg')}}" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Local Truck Transport</a></h2>
                            <p>Local truck transport provides efficient, reliable delivery services within regions, ensuring timely shipments and strong connections between businesses and customers.</p>
                            <div class="btn-box">
                                
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-shipment"></span>
                    </div>
                </div>
            </div>
            <!--End Service One Single-->

            <!--Start Service One Single-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="{{asset('assets/images/services/services-v1-img3.jpg')}}" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">International Transport</a></h2>
                            <p>International transport facilitates the global movement of goods, ensuring efficient logistics and timely deliveries while navigating customs and regulatory requirements.</p>
                            <div class="btn-box">
                                
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-international-shipping"></span>
                    </div>
                </div>
            </div>
            <!--End Service One Single-->

            <!--Start Service One Single-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="{{asset('assets/images/services/services-v1-img1.jpg')}}" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Safe Ocean Transport</a></h2>
                            <p>Safe ocean transport provides secure shipping solutions for goods across international waters, ensuring reliability and adherence to environmental and safety standards.</p>
                            <div class="btn-box">
                              
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-ship-1"></span>
                    </div>
                </div>
            </div>
            <!--End Service One Single-->

            <!--Start Service One Single-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="{{asset('assets/images/services/services-v1-img2.jpg')}}" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Warehouse Facility</a></h2>
                            <p>A warehouse facility offers secure storage, efficient inventory management, and streamlined logistics operations, ensuring timely distribution and accessibility of goods..</p>
                            <div class="btn-box">
                                
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-storehouse"></span>
                    </div>
                </div>
            </div>
            <!--End Service One Single-->

            <!--Start Service One Single-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="service-one__single">
                    <div class="service-one__single-inner">
                        <div class="service-one__single-img">
                            <img src="{{asset('assets/images/services/services-v1-img3.jpg')}}" alt="#">
                        </div>

                        <div class="service-one__single-content">
                            <h2><a href="international-transport.html">Emergency Transport</a></h2>
                            <pEmergency >transport provides rapid response services for urgent deliveries, ensuring critical supplies reach their destination quickly and efficiently when needed most.</p>
                            <div class="btn-box">
                             
                            </div>
                        </div>
                    </div>

                    <div class="icon">
                        <span class="icon-humanitarian-aid"></span>
                    </div>
                </div>
            </div>
            <!--End Service One Single-->
        </div>
    </div>
</section>
<!--End Service One-->


@endsection