@extends('layouts.main_layout')

@section('title', 'Tutor Details')

@section('content')

<!-- Slider Start -->
        <div class="section slider-section">

            <!-- Slider Shape Start -->
            <div class="slider-shape">
                <img class="shape-1 animation-round" src="{{ asset('images/shape/shape-8.png') }}" alt="Shape">
            </div>
            <!-- Slider Shape End -->

            <div class="container">

                <!-- Slider Content Start -->
                <div class="slider-content">
                    <h4 class="sub-title">Start your favourite course with</h4>
                    <h2 class="main-title">IDIGITALPRENEUR<span>Instructor</span></h2>
                    <a class="btn btn-primary btn-hover-dark" href="{{ route('register') }}">Register Now</a>
                </div>
                <!-- Slider Content End -->

            </div>

            <!-- Slider Courses Box Start -->
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
            <!-- Slider Courses Box End -->

            <!-- Slider Rating Box Start -->
            <div class="slider-rating-box">

                <div class="box-rating">
                    <div class="box-wrapper">
                        <span class="count">4.8 <i class="flaticon-star"></i></span>
                        <p>Rating (86K)</p>
                    </div>
                </div>

                <img class="shape animation-up" src="{{ asset('images/shape/shape-7.png') }}" alt="Shape">

            </div>
            <!-- Slider Rating Box End -->

            <!-- Slider Images Start -->
            <div class="slider-images">
                <div class="images">
                    <img src="{{ asset('images/author/author-01.png') }}" alt="Slider">
                </div>
            </div>
            <!-- Slider Images End -->

            <!-- Slider Video Start -->
            <div class="slider-video">
                <img class="shape-1" src="{{ asset('images/shape/shape-9.png') }}" alt="Shape">

                <div class="video-play">
                    <img src="{{ asset('images/shape/shape-10.png') }}" alt="Shape">
                    <a href="https://www.youtube.com/watch?v=BRvyWfuxGuU" class="play video-popup"><i class="flaticon-play"></i></a>
                </div>
            </div>
            <!-- Slider Video End -->

        </div>
        <!-- Slider End -->

        
    <!-- Instructor Courses Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- All Courses Top Start -->
                <div class="courses-top">

                    <!-- Section Title Start -->
                    <div class="section-title shape-01">
                        <h2 class="main-title">Courses by <span>Preet Kaur</span></h2>
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
                <!-- All Courses Top End -->

                <!-- All Courses tab content Start -->
                <div class="tab-content courses-tab-content">
                    <div class="tab-pane fade show active" id="tabs1">

                        <!-- All Courses Wrapper Start -->
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
                               
                            </div>
                        </div>
                        <!-- All Courses Wrapper End -->

                    </div>

            </div>
        </div>
        <!-- Instructor Courses End -->


        @include('user.sections.tutors')

        @endsection