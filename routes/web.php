<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.pages.index');
});

Route::get('home', [HomeController::class, 'index'])->name('homepage');

Route::get('about_us', [ContentController::class, 'about'])->name('aboutpage');

Route::get('tutor_details', [ContentController::class, 'tutor_details'])->name('tutorpage');

Route::get('our_courses', [ContentController::class, 'courses'])->name('coursepage');
Route::get('course_details', [ContentController::class, 'showCourseDetails'])->name('coursedetails');

// Package Routes
Route::get('pro_package', [ContentController::class, 'showProPackage'])->name('pro_package');
Route::get('supreme_package', [ContentController::class, 'showSupremePackage'])->name('supreme_package');
Route::get('premium_package', [ContentController::class, 'showPremiumPackage'])->name('premium_package');
Route::get('plus_package', [ContentController::class, 'showPlusPackage'])->name('plus_package');

Route::get('contact_us', [ContactController::class, 'showContact'])->name('contactpage');

// Register Routes
Route::get('register',[AuthController::class, 'showRegisterForm'])->name('registerpage');
Route::post('register', [AuthController::class, 'register'])->name('register');

// Login Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('loginpage');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/my-profile', [UserController::class, 'userProfile'])->name('user_profile');
Route::get('/certificate', [UserController::class, 'certificate'])->name('certificate');
Route::get('/affiliate_panel', [UserController::class, 'affiliatePanel'])->name('affiliate_panel');
Route::post('/my-profile/upload-image', [UserController::class, 'updateImage'])->name('profile.image.upload');



