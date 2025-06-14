@extends('layouts.main_layout')

@section('title', 'Pro Package')

@section('content')
<!-- Pro Package Start -->
       
        <div class="section slider-section">

            <!-- Shape Start -->
            <div class="slider-shape">
                <img class="shape-1 animation-round" src="{{ asset('images/shape/shape-8.png') }}" alt="Shape">
            </div>
            <!-- Shape End -->

            <div class="container">

                <!--Package Content Start -->
                <div class="package-content">
                    <h4 class="sub-title">Supreme</h4>
                    <h3 class="main-title">MRP - {{ $currency_symbol }}{{ number_format($price, 2) }}</h3>
                    <h3 class="main-title">With Promocode - {{ $currency_symbol }}{{ number_format($price, 2) }}</h3>
                    <p>This package provides you the value to add the list of incredible skills in your portfolio.
                         Also, it gives you a chance to justify your earning goals. Understand and learn high 
                        income paying skills like YouTube Content Creation, Copywriting and a lot more.</p>
                    <a class="btn btn-primary btn-hover-dark" href="#">Buy Now</a>
                </div>
                <!-- Package Content End -->

            </div>

            <!-- Package Courses Box Start -->
            <div class="slider-courses-box">

                <img class="shape-1 animation-left" src="{{ asset('images/shape/shape-5.png') }}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-open-book"></i>
                        <span class="count">1,235</span>
                        <p>courses</p>
                    </div>
                </div>

                <img class="shape-2" src="{{ asset('images/shape/shape-6.png') }}" alt="Shape">

            </div>
            <!-- Package Courses Box End -->

            <!-- Package Rating Box Start -->
            <div class="slider-rating-box">

                <div class="box-rating">
                    <div class="box-wrapper">
                        <span class="count">4.8 <i class="flaticon-star"></i></span>
                        <p>Rating (86K)</p>
                    </div>
                </div>

                <img class="shape animation-up" src="{{ asset('images/shape/shape-7.png') }}" alt="Shape">

            </div>
            <!-- Package Rating Box End -->

            <!-- Package Images Start -->
            <div class="package-images">
                <div class="images">
                    <img src="{{ asset('') }}" alt="Slider">
                </div>
            </div>
            <!-- Package Images End -->

            <!-- Package Video Start -->
            <div class="slider-video">
                <img class="shape-1" src="{{ asset('images/shape/shape-9.png') }}" alt="Shape">

                <div class="video-play">
                    <img src="{{ asset('images/shape/shape-10.png') }}" alt="Shape">
                    <a href="https://www.youtube.com/watch?v=BRvyWfuxGuU" class="play video-popup"><i class="flaticon-play"></i></a>
                </div>
            </div>
            <!-- Package Video End -->

        </div>
        
        <!-- Pro Package End -->

        <!-- Package Courses Start -->
    <!-- Package Courses Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Package Courses Top Start -->
                <div class="courses-top">

                    <!-- Section Title Start -->
                    <div class="section-title shape-01">
                        <h2 class="main-title">Supreme <span>Courses</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Courses Search Start -->
                    <div class="courses-search">
                        <form action="#">
                            <input type="text" placeholder="Search your course">
                            <button><i class="flaticon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <!-- Courses Search End -->

                </div>
                <!-- Package Courses Top End -->

                <!-- Package Courses Tabs Menu Start -->
                <div class="courses-tabs-menu courses-active">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper nav">
                            <li class="swiper-slide"><button class="active" data-bs-toggle="tab" data-bs-target="#tabs1">UI/UX Design</button></li>
                            <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs2">Development</button></li>
                            <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs3">Data Science</button></li>
                            <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs4">Business</button></li>
                            <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs5">Financial</button></li>
                            <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs6">Marketing</button></li>
                            <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs7">Design</button></li>
                        </ul>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                    <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
                </div>
                <!-- Package Courses Tabs Menu End -->

                <!-- Package Courses tab content Start -->
                <div class="tab-content courses-tab-content">
                    <div class="tab-pane fade show active" id="tabs1">

                        <!-- Package Courses Wrapper Start -->
                        <div class="courses-wrapper">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-courses">
                                        <div class="courses-images">
                                            <a href="courses-details.html"><img src="{{ asset('images/courses/courses-01.jpg') }}" alt="Courses"></a>
                                        </div>
                                        <div class="courses-content">
                                            <div class="courses-author">
                                                <div class="author">
                                                    <div class="author-thumb">
                                                        <a href="#"><img src="assets/images/author/author-01.jpg" alt="Author"></a>
                                                    </div>
                                                    <div class="author-name">
                                                        <a class="name" href="#">Jason Williams</a>
                                                    </div>
                                                </div>
                                                <div class="tag">
                                                    <a href="#">Science</a>
                                                </div>
                                            </div>

                                            <h4 class="title"><a href="courses-details.html">Data Science and Machine Learning with Python - Hands On!</a></h4>
                                            <div class="courses-meta">
                                                <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                                <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                            </div>
                                            <div class="courses-price-review">
                                                <div class="courses-price">
                                                    <span class="sale-parice">$385.00</span>
                                                    <span class="old-parice">$440.00</span>
                                                </div>
                                                <div class="courses-review">
                                                    <span class="rating-count">4.9</span>
                                                    <span class="rating-star">
															<span class="rating-bar" style="width: 80%;"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-courses">
                                        <div class="courses-images">
                                            <a href="courses-details.html"><img src="{{ asset('images/courses/courses-02.jpg') }}" alt="Courses"></a>
                                        </div>
                                        <div class="courses-content">
                                            <div class="courses-author">
                                                <div class="author">
                                                    <div class="author-thumb">
                                                        <a href="#"><img src="assets/images/author/author-02.jpg" alt="Author"></a>
                                                    </div>
                                                    <div class="author-name">
                                                        <a class="name" href="#">Pamela Foster</a>
                                                    </div>
                                                </div>
                                                <div class="tag">
                                                    <a href="#">Science</a>
                                                </div>
                                            </div>

                                            <h4 class="title"><a href="courses-details.html">Create Amazing Color Schemes for Your UX Design Projects</a></h4>
                                            <div class="courses-meta">
                                                <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                                <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                            </div>
                                            <div class="courses-price-review">
                                                <div class="courses-price">
                                                    <span class="sale-parice">$420.00</span>
                                                </div>
                                                <div class="courses-review">
                                                    <span class="rating-count">4.9</span>
                                                    <span class="rating-star">
															<span class="rating-bar" style="width: 80%;"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-courses">
                                        <div class="courses-images">
                                            <a href="courses-details.html"><img src="{{ asset('images/courses/courses-03.jpg') }}" alt="Courses"></a>
                                        </div>
                                        <div class="courses-content">
                                            <div class="courses-author">
                                                <div class="author">
                                                    <div class="author-thumb">
                                                        <a href="#"><img src="assets/images/author/author-03.jpg" alt="Author"></a>
                                                    </div>
                                                    <div class="author-name">
                                                        <a class="name" href="#">Rose Simmons</a>
                                                    </div>
                                                </div>
                                                <div class="tag">
                                                    <a href="#">Science</a>
                                                </div>
                                            </div>

                                            <h4 class="title"><a href="courses-details.html">Culture & Leadership: Strategies for a Successful Business</a></h4>
                                            <div class="courses-meta">
                                                <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                                <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                            </div>
                                            <div class="courses-price-review">
                                                <div class="courses-price">
                                                    <span class="sale-parice">$295.00</span>
                                                    <span class="old-parice">$340.00</span>
                                                </div>
                                                <div class="courses-review">
                                                    <span class="rating-count">4.9</span>
                                                    <span class="rating-star">
															<span class="rating-bar" style="width: 80%;"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                            </div>
                        </div>
                        <!-- Package Courses Wrapper End -->

                    </div>

            </div>
        </div>
        <!-- Package Courses End -->
        @endsection