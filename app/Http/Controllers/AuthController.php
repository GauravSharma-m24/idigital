<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm(){
        return view('user.pages.auth.register');
    }

    public function showLoginForm(){
        return view('user.pages.auth.login');
    }
}
