@extends('layouts.main_layout')

@section('title', 'AboutUs Page')

@section('content')

<!-- Page Banner Start -->
        <div class="section page-banner">

            <img class="shape-1 animation-round" src="{{ asset('images/shape/shape-8.png') }}" alt="Shape">

            <img class="shape-2" src="{{ asset('images/shape/shape-23.png') }}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About</li>
                    </ul>
                    <h2 class="title">About <span>IDigitalPreneur.</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('images/shape/shape-5.png') }}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('images/shape/shape-6.png') }}" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('images/shape/shape-3') }}" alt="Shape">

            <img class="shape-author" src="{{ asset('images/author/author-11.jpg') }}" alt="Shape">

        </div>
        <!-- Page Banner End -->

        <!-- About Start -->
        <div class="section">

            <div class="section-padding-02 mt-n10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                            <!-- About Images Start -->
                            <div class="about-images">
                                <div class="images">
                                    <img src="{{ asset('images/about.jpg') }}" alt="About">
                                </div>

                                <div class="about-years">
                                    <div class="years-icon">
                                        <img src="{{ asset('images/logo-icon.png') }}" alt="About">
                                    </div>
                                    <p><strong>28+</strong> Years Experience</p>
                                </div>
                            </div>
                            <!-- About Images End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- About Content Start -->
                            <div class="about-content">
                                <h5 class="sub-title">Welcome to IDigitalPreneur.</h5>
                                <h2 class="main-title">You can join with IDigitalPreneur and upgrade your skill for your <span>bright future.</span></h2>
                                <p>Lorem Ipsum has been the industr’s standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.</p>
                                <a href="#" class="btn btn-primary btn-hover-dark">Start A Course</a>
                            </div>
                            <!-- About Content End -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="section-padding-02 mt-n6">
                <div class="container">

                    <!-- About Items Wrapper Start -->
                    <div class="about-items-wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <!-- About Item Start -->
                                <div class="about-item">
                                    <div class="item-icon-title">
                                        <div class="item-icon">
                                            <i class="flaticon-tutor"></i>
                                        </div>
                                        <div class="item-title">
                                            <h3 class="title">Top Instructors</h3>
                                        </div>
                                    </div>
                                    <p>Lorem Ipsum has been the industry's standard dumy text since the when took and scrambled to make type specimen book has survived.</p>
                                    <p>Lorem Ipsum has been the industry's standard dumy text since the when took and scrambled make.</p>
                                </div>
                                <!-- About Item End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- About Item Start -->
                                <div class="about-item">
                                    <div class="item-icon-title">
                                        <div class="item-icon">
                                            <i class="flaticon-coding"></i>
                                        </div>
                                        <div class="item-title">
                                            <h3 class="title">Portable Program</h3>
                                        </div>
                                    </div>
                                    <p>Lorem Ipsum has been the industry's standard dumy text since the when took and scrambled to make type specimen book has survived.</p>
                                    <p>Lorem Ipsum has been the industry's standard dumy text since the when took and scrambled make.</p>
                                </div>
                                <!-- About Item End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- About Item Start -->
                                <div class="about-item">
                                    <div class="item-icon-title">
                                        <div class="item-icon">
                                            <i class="flaticon-increase"></i>
                                        </div>
                                        <div class="item-title">
                                            <h3 class="title">Improve Quickly</h3>
                                        </div>
                                    </div>
                                    <p>Lorem Ipsum has been the industry's standard dumy text since the when took and scrambled to make type specimen book has survived.</p>
                                    <p>Lorem Ipsum has been the industry's standard dumy text since the when took and scrambled make.</p>
                                </div>
                                <!-- About Item End -->
                            </div>
                        </div>
                    </div>
                    <!-- About Items Wrapper End -->

                </div>
            </div>

        </div>
        <!-- About End -->

        <!-- Call to Action Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Call to Action Wrapper Start -->
                <div class="call-to-action-wrapper">

                    <img class="cat-shape-01 animation-round" src="{{ asset('images/shape/shape-12.png') }}" alt="Shape">
                    <img class="cat-shape-02" src="{{ asset('images/shape/shape-13.svg') }}" alt="Shape">
                    <img class="cat-shape-03 animation-round" src="{{ asset('images/shape/shape-15.png') }}" alt="Shape">

                    <div class="row align-items-center">
                        <div class="col-md-6">

                            <!-- Section Title Start -->
                            <div class="section-title shape-02">
                                <h5 class="sub-title">Become A Instructor</h5>
                                <h2 class="main-title">You can join with IDigitalPreneur as <span>a instructor?</span></h2>
                            </div>
                            <!-- Section Title End -->

                        </div>
                        <div class="col-md-6">
                            <div class="call-to-action-btn">
                                <a class="btn btn-primary btn-hover-dark" href="contact.html">Drop Information</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call to Action Wrapper End -->

            </div>
        </div>
        <!-- Call to Action End -->

        <!-- Team Member's Start -->
        <div class="section section-padding mt-n1">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title shape-03 text-center">
                    <h5 class="sub-title">Team Member’s</h5>
                    <h2 class="main-title">IDigitalPreneur Skilled <span> Instructor</span></h2>
                </div>
                <!-- Section Title End -->

                <!-- Team Wrapper Start -->
                <div class="team-wrapper">
                    <div class="row row-cols-lg-5 row-cols-sm-3 row-cols-2 ">
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-01.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Margarita James</h4>
                                    <span class="designation">MSC, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-02.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Mitchell Colon</h4>
                                    <span class="designation">BBA, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-03.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Sonya Gordon</h4>
                                    <span class="designation">MBA, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-04.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Archie Neal</h4>
                                    <span class="designation">BBS, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-05.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Randal Ramsey</h4>
                                    <span class="designation">MBBS, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-06.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Rochelle Thomas</h4>
                                    <span class="designation">MSC, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-07.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Della Salazar</h4>
                                    <span class="designation">BBA, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-08.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Ricardo Patrick</h4>
                                    <span class="designation">MBA, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-09.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Kurt Stewart</h4>
                                    <span class="designation">BBS, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/author/author-10.jpg') }}" alt="Author">
                                </div>
                                <div class="team-content">
                                    <div class="rating">
                                        <span class="count">4.9</span>
                                        <i class="icofont-star"></i>
                                        <span class="text">(rating)</span>
                                    </div>
                                    <h4 class="name">Rodney Terry</h4>
                                    <span class="designation">MBBS, Instructor</span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                    </div>
                </div>
                <!-- Team Wrapper End -->

            </div>
        </div>
        <!-- Team Member's End -->

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
                            <li><a href="#"><img src="{{ asset('images/google-play.png') }}" alt="Google Play"></a></li>
                            <li><a href="#"><img src="{{ asset('images/app-store.png') }}" alt="App Store"></a></li>
                        </ul>
                    </div>
                    <!-- Download App Button End -->

                </div>
                <!-- Download App Wrapper End -->

            </div>
        </div>
        <!-- Download App End -->
@endsection