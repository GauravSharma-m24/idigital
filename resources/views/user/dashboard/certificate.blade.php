@extends('user.dashboard.layout')

@section('title', 'Certificates')

@section('content')
    <!-- Slider Start -->
    <div class="section slider-section page-banner h-96">
        <div class="slider-shape">
            <img class="shape-1 animation-round" src="{{ asset('images/shape/shape-8.png') }}" alt="Shape">
        </div>

        <div class="container">
        <div class="slider-content">
            <h4 class="sub-title">Hello! {{ session('user')->name }}</h4>
            <h2 class="main-title">CERTIFICATE</h2>
            
        </div>
        </div>

        <div class="slider-courses-box">
            <img class="shape-1 animation-left" src="{{ asset('images/shape/shape-5.png') }}" alt="Shape">
            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-open-book"></i>
                    <span class="count">Course</span>
                    <p>Completion</p>
                </div>
            </div>
            <img class="shape-2" src="{{ asset('images/shape/shape-6.png') }}" alt="Shape">
        </div>
    </div>
    <!-- Slider End -->

    <div class="section pt-5 pb-5">
        <div class="container">
            <!-- Certificate Card Section Start -->
           <div class="certificate-wrapper bg-light shadow-lg p-md-5 p-3 rounded position-relative overflow-hidden"
            style="background: url('{{ asset('images/certificate-bg.png') }}'); 
                background-size: cover; 
                min-height: 80vh;
                max-width: 1000px;
                margin: 0 auto;
                background-repeat: no-repeat; 
                background-position: center;">
            <div class="certificate-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: transparent;"></div>
            <div class="position-relative h-100 d-flex flex-column justify-content-center" style="z-index: 1;">
                <div class="text-center px-md-5 px-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-4 img-fluid" style="max-height: 60px; width: auto;">
                    <h1 class="fw-bold text-uppercase text-dark mb-3" style="font-size: clamp(1.5rem, 3vw, 2.5rem);">Certificate of Completion</h1>
                    <p class="text-muted mb-1">This is proudly presented to</p>
                    <h2 class="fw-bold text-primary mb-3" style="font-size: clamp(1.25rem, 2.5vw, 2rem);">{{ session('user')->name }}</h2>
                    <p class="text-muted mb-4">for successfully completing the Premium learning package</p>

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8 col-12">
                            <label for="field" class="form-label fw-bold">Field of Certification:</label>
                            <select class="form-select form-select-lg shadow-sm border-primary" name="field" id="field">
                                <option selected disabled>-- Select Field --</option>
                                <option value="Music Production">Music Production</option>
                                <option value="Sound Engineering">Sound Engineering</option>
                                <option value="FL Studio Basics">FL Studio Basics</option>
                                <option value="Advanced Mixing">Advanced Mixing</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-md-5 mt-3">
                        <p class="text-muted mb-1">Issued on: {{ date('F d, Y') }}</p>
                        <p class="fw-bold text-dark mb-1">Authorized Signature</p>
                        <img src="{{ asset('images/signature.png') }}" alt="Signature" class="img-fluid" style="max-height: 50px; width: auto;">
                    </div>
                </div>
            </div>
        </div>
            <!-- Certificate Card Section End -->
        </div>
    </div>
@endsection