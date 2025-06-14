@extends('layouts.main_layout')

@section('title', 'Home Page')

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
                    <h4 class="sub-title">Start your favourite course</h4>
                    <h2 class="main-title">Now learning from anywhere, and build your <span>bright career.</span></h2>
                    <p>It has survived not only five centuries but also the leap into electronic typesetting.</p>
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
                    <img src="{{ asset('images/slider/slider-1.png') }}" alt="Slider">
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

        @include('user.sections.how_it_works')

        @include('user.sections.blogs')

        @include('user.sections.tutors')

        <!-- Download App Start -->
        <div class="section section-padding download-section">

            <div class="app-shape-1"></div>
            <div class="app-shape-2"></div>
            <div class="app-shape-3"></div>
            <div class="app-shape-4"></div>

            <div class="container">

                <!-- Download App Wrapper Start -->
                <div class="download-app-wrapper mt-n6">

                    <!-- Section Title Start -->
                    <div class="section-title section-title-white">
                        <h5 class="sub-title">Ready to start?</h5>
                        <h2 class="main-title">Download our mobile app. for easy to start your course.</h2>
                    </div>
                    <!-- Section Title End -->

                    <img class="shape-1 animation-right" src="{{ asset('images/shape/shape-14.png') }}" alt="Shape">

                    <!-- Download App Button End -->
                    <div class="download-app-btn">
                        <ul class="app-btn">
                            <li><a href="https://play.google.com/store/apps/details?id=com.idigitalpreneur.app&pli=1"><img src="{{ asset('images/google-play.png') }}" alt="Google Play"></a></li>
                            <li><a href="https://apps.apple.com/in/app/idigitalpreneur/id6443746600"><img src="{{ asset('images/app-store.png') }}" alt="App Store"></a></li>
                        </ul>
                    </div>
                    <!-- Download App Button End -->

                </div>
                <!-- Download App Wrapper End -->

            </div>
        </div>
        <!-- Download App End -->

        @include('user.sections.testimonial')

        @include('user.sections.faq')
    
    @endsection