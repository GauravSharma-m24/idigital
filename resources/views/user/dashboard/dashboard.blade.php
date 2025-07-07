@extends('user.dashboard.layout')

@section('title', 'Dashboard Home')

@section('content')
<!-- Dashboard Hero Section Start -->
<div class="section slider-section page-banner h-80">
    <div class="slider-shape">
        <img class="shape-1 animation-round" src="{{ asset('images/shape/shape-8.png') }}" alt="Shape">
    </div>

    <div class="container">
        <div class="slider-content">
            <h4 class="sub-title">Hello! {{ session('user')->name }}</h4>
            <h2 class="main-title">FL STUDIO <span>Crash Course</span></h2>
            <p>Now learning from anywhere, and build your bright career.</p>
        </div>
        
    </div>
    
</div>
<!-- Dashboard Hero Section End -->

<!-- Dashboard Actions Start -->
<div class="container my-5">
    <div class="row g-4 justify-content-center">
        <div class="col-sm-10 col-md-5 col-lg-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center p-4">
                    <i class="flaticon-open-book display-5 text-primary mb-3"></i>
                    <h5 class="card-title mb-2">My Courses</h5>
                    <p class="card-text mb-4">Continue where you left off or explore enrolled content.</p>
                    <a href="#" class="btn btn-dark w-100">Go to My Courses</a>
                </div>
            </div>
        </div>

        <div class="col-sm-10 col-md-5 col-lg-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center p-4">
                    <i class="flaticon-open-book display-5 text-success mb-3"></i>
                    <h5 class="card-title mb-2">All Courses</h5>
                    <p class="card-text mb-4">Browse all available learning resources in one place.</p>
                    <a href="#" class="btn btn-dark w-100">Browse Courses</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Actions End -->

<!-- Contact Info Section Start -->
<div class="container mb-5">
    <div class="row g-4 justify-content-center">
        <div class="col-sm-10 col-md-5 col-lg-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center p-4">
                    <h5 class="card-title">We are Here for You</h5>
                    <p class="card-text text-primary fw-bold fs-5">+91 9625136861</p>
                    <p class="text-muted small mb-0">Monday–Sunday</p>
                    <small>9:00 AM – 5:00 PM</small>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-5 col-lg-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center p-4">
                    <h5 class="card-title">Let's Connect On</h5>
                    <p class="card-text text-success fw-bold fs-5">+91 9310246027</p>
                    <p class="text-muted small mb-0">Monday–Sunday</p>
                    <small>9:00 AM – 5:00 PM</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info Section End -->
@endsection
