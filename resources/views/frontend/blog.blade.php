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
            <h2>Blog & News</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><span class="icon-right-arrow21"></span></li>
                <li>Blog & News</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->


<!--Start Blog Page-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            <!--Start Blog One Single-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{asset('assets/images/blog/blog-v1-img1.jpg')}}" alt="">
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
            <div class="col-xl-4 col-lg-6 wow fadeInDown" data-wow-delay=".3s">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{asset('assets/images/blog/blog-v1-img2.jpg')}}" alt="">
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

                            <h2><a href="blog-details.html">Mastering Last Mile Delivery <br> Strategies for
                                    Success</a></h2>
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
                        <img src="{{asset('assets/images/blog/blog-v1-img3.jpg')}}" alt="">
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

            <!--Start Blog One Single-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{asset('assets/images/blog/blog-v1-img4.jpg')}}" alt="">
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

            <!--Start Blog One Single-->
            <div class="col-xl-4 col-lg-6 wow fadeInDown" data-wow-delay=".3s">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{asset('assets/images/blog/blog-v1-img5.jpg')}}" alt="">
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

                            <h2><a href="blog-details.html">Mastering Last Mile Delivery <br> Strategies for
                                    Success</a></h2>
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
                        <img src="{{asset('assets/images/blog/blog-v1-img6.jpg')}}" alt="">
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
        </div>

        <ul class="styled-pagination text-center clearfix">
            <li class="arrow prev active"><a href="#"><span class="icon-right-arrow3"></span></a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="arrow next"><a href="#"><span class="icon-right-arrow31"></span></a>
            </li>
        </ul>
    </div>
</section>
<!--End Blog Page-->
@endsection