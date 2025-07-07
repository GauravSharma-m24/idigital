@extends('layouts.main_layout')

@section('title', 'Home Page')

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
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('images/shape/shape-4.png') }}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('images/shape/shape-6.png') }}" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('images/shape/shape-24.png') }}" alt="Shape">

            <img class="shape-author" src="{{ asset('images/author/author-11.jpg') }}" alt="Shape">

        </div>
        <!-- Page Banner End -->

        <!-- Register & Login Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Register & Login Wrapper Start -->
                <div class="register-login-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">

                            <!-- Register & Login Images Start -->
                            <div class="register-login-images">
                                <div class="shape-1">
                                    <img src="{{ asset('images/shape/shape-26.png') }}" alt="Shape">
                                </div>


                                <div class="images">
                                    <img src="{{ asset('images/register-login.png') }}" alt="Register Login">
                                </div>
                            </div>
                            <!-- Register & Login Images End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- Register & Login Form Start -->
                            <div class="register-login-form">
                                <h3 class="title">Registration <span>Now</span></h3>

                                <div class="form-wrapper">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="password" placeholder="Password" name="password">
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="password" placeholder="Confirm Password" name="password_confirmation">
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <button class="btn btn-primary btn-hover-dark w-100" type="submit">Create an account</button>
                                            <a class="btn btn-secondary btn-outline w-100" href="#">Sign up with Google</a>
                                        </div>
                                        <!-- Single Form End -->
                                    </form>
                                </div>
                            </div>
                            <!-- Register & Login Form End -->

                        </div>
                    </div>
                </div>
                <!-- Register & Login Wrapper End -->

            </div>
        </div>
        <!-- Register & Login End -->
        @endsection