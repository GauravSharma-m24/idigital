@extends('user.dashboard.layout')

@section('title', 'My Profile')

@section('content')
<!-- Slider Start -->
<div class="section slider-section page-banner h-96">
    <div class="slider-shape">
        <img class="shape-1 animation-round" src="{{ asset('images/shape/shape-8.png') }}" alt="Shape">
    </div>
    <div class="container">
        <div class="slider-content">
            <h4 class="sub-title">Manage your profile</h4>
            <h2 class="main-title">Welcome back, <span>{{ session('user')->name }}</span></h2>
            <p>Here you can view and update your personal information.</p>
        </div>
    </div>
    
</div>
<!-- Slider End -->

<!-- Profile Section Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Profile Header Section -->
       <div class="profile-header text-center p-4 mb-5" style="background: url('{{ asset('images/bg/profile-bg.png') }}'); background-size: cover; border-radius: 15px; position: relative;">
            <div style="position: relative; display: inline-block;">
                <form action="{{ route('profile.image.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="imageUpload" style="cursor: pointer;">
                        <img
                            src="{{ session('user')->image ? asset('uploads/profile/' . session('user')->image) : asset('images/default-profile.png') }}"
                            alt="Profile"
                            class="rounded-circle border border-3 border-white shadow"
                            style="width: 140px; height: 140px; object-fit: cover;">

                        <!-- Pencil icon on bottom right -->
                        <div class="position-absolute bottom-0 end-0 translate-middle p-1 bg-light rounded-circle" style="border: 1px solid #ccc;">
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </label>

                    <!-- Hidden file input triggered by clicking the image -->
                    <input id="imageUpload" type="file" name="image" style="display: none;" onchange="this.form.submit()">
                </form>
            </div>

            <div class="mt-3">
                <h4 class="text-white">{{ session('user')->name }}</h4>
                <p class="text-white">{{ session('user')->email }}</p>
            </div>
        </div>


        <!-- Profile FAQ-style Toggles -->
        <div class="accordion" id="profileAccordion">

            <!-- Personal Details -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Personal Details
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#profileAccordion">
                    <div class="accordion-body px-4 py-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <p><strong>Name:</strong> {{ session('user')->name }}</p>
                                <p><strong>Email:</strong> {{ session('user')->email }}</p>
                                <p><strong>Phone:</strong> {{ session('user')->phone ?? 'N/A' }}</p>
                                <p><strong>City:</strong> {{ session('user')->city ?? 'N/A' }}</p>
                                <p><strong>State:</strong> {{ session('user')->state ?? 'N/A' }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Current Plan:</strong> {{ session('user')->package ?? 'Premium' }}</p>
                                <p><strong>Community Link:</strong>
                                    @if(session('user')->community_link)
                                        <a href="{{ session('user')->community_link }}" target="_blank">View</a>
                                    @else
                                        N/A
                                    @endif
                                </p>
                                <p><strong>Content Factory Link (Hindi):</strong>
                                    @if(session('user')->cf_link_hindi)
                                        <a href="{{ session('user')->cf_link_hindi }}" target="_blank">Open</a>
                                    @else
                                        N/A
                                    @endif
                                </p>
                                <p><strong>Content Factory Link (English):</strong>
                                    @if(session('user')->cf_link_english)
                                        <a href="{{ session('user')->cf_link_english }}" target="_blank">Open</a>
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="d-flex flex-wrap gap-2 align-items-center text-end">
                            <a href="#" class="btn btn-outline-secondary btn-sm px-3 py-1 rounded-2 fw-medium d-flex align-items-center">
                                <i class="bi bi-file-earmark-text me-1" style="font-size: 0.8rem;"></i> 
                                <span>IDP Agreement</span>
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm px-3 py-1 rounded-2 fw-medium d-flex align-items-center">
                                <i class="bi bi-bell me-1" style="font-size: 0.8rem;"></i> 
                                <span>Notification</span>
                            </a>
                            <a href="#" class="btn btn-outline-success btn-sm px-3 py-1 rounded-2 fw-medium d-flex align-items-center">
                                <i class="bi bi-chat-square-text me-1" style="font-size: 0.8rem;"></i> 
                                <span>Feedback</span>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 py-1 rounded-2 fw-medium d-flex align-items-center shadow-sm hover-effect">
                                <i class="bi bi-pencil-square me-1" style="font-size: 0.8rem;"></i> 
                                <span>Edit Details</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Billing Address -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Billing Address
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#profileAccordion">
                    <div class="accordion-body px-4 py-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <p><strong>Full Name:</strong> {{ session('user')->billing_name ?? 'N/A' }}</p>
                                <p><strong>Address Line 1:</strong> {{ session('user')->address_line_1 ?? 'N/A' }}</p>
                                <p><strong>Address Line 2:</strong> {{ session('user')->address_line_2 ?? 'N/A' }}</p>
                                <p><strong>City:</strong> {{ session('user')->billing_city ?? 'N/A' }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>State:</strong> {{ session('user')->billing_state ?? 'N/A' }}</p>
                                <p><strong>Zip:</strong> {{ session('user')->billing_zip ?? 'N/A' }}</p>
                                <p><strong>Aadhar No:</strong> {{ session('user')->aadhar_no ?? 'N/A' }}</p>
                                <p><strong>PAN Details:</strong> {{ session('user')->pan_no ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href=""
                            class="btn btn-sm btn-outline-primary px-3 py-1 rounded-2 fw-medium d-inline-flex align-items-center shadow-sm">
                                <i class="bi bi-pencil-square me-1" style="font-size: 0.8rem;"></i> 
                                <span>Edit Address</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Details -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Account Details
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#profileAccordion">
                    <div class="accordion-body px-4 py-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <p><strong>First Name:</strong> {{ session('user')->first_name ?? 'N/A' }}</p>
                                <p><strong>Last Name:</strong> {{ session('user')->last_name ?? 'N/A' }}</p>
                                <p><strong>Account Type:</strong> {{ session('user')->account_type ?? 'N/A' }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Bank Name:</strong> {{ session('user')->bank_name ?? 'N/A' }}</p>
                                <p><strong>Account Number:</strong> {{ session('user')->account_number ?? 'N/A' }}</p>
                                <p><strong>IFSC Code:</strong> {{ session('user')->ifsc_code ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href=""
                            class="btn btn-sm btn-outline-primary px-3 py-1 rounded-2 fw-medium d-inline-flex align-items-center shadow-sm">
                                <i class="bi bi-pencil-square me-1" style="font-size: 0.8rem;"></i> 
                                <span>Edit Account</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Account Management -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Account Management
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#profileAccordion">
                    <div class="accordion-body">
                        <a href="" class="btn btn-outline-warning btn-sm">Change Password</a>
                        <form method="POST" action="" class="mt-2">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- Accordion End -->

    </div>
</div>
<!-- Profile Section End -->
@endsection
