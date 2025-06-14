<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function about(){
        return view('user.pages.about');
    }

    // All Package functions start here
    public function showProPackage(){
        return view('user.pages.packages.pro', [
        'price' => 1500,
        'currency_symbol' => '₹',
    ]);
    }
    public function showSupremePackage(){
        return view('user.pages.packages.supreme', [
        'price' => 1500,
        'currency_symbol' => '₹',
    ]);
    }
    public function showPremiumPackage(){
        return view('user.pages.packages.premium', [
        'price' => 1500,
        'currency_symbol' => '₹',
    ]);
    }
    public function showPlusPackage(){
        return view('user.pages.packages.premium_plus', [
        'price' => 1500,
        'currency_symbol' => '₹',
    ]);
    }
    // All Package functions end here

    // All Courses functions start here
    public function courses(){
        return view('user.pages.course_page');
    }

    public function showCourseDetails(){
        return view('user.pages.course_details');
    }

    //Tutor Functions start here
    public function tutor_details(){
        return view('user.pages.tutor_details');
    }
}
