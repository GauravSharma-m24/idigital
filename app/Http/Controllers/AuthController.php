<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showRegisterForm(){
        return view('user.pages.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->put('user', $user);

        return redirect()->route('dashboard');
    }

    public function showLoginForm(){
        return view('user.pages.auth.login');
    }

    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !is_string($user->password) || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        // Save user to session
        $request->session()->put('user', $user);

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->invalidate(); // Optional: invalidate session
        $request->session()->regenerateToken(); // Regenerate CSRF token
        
        return redirect()->route('loginpage')->with('success', 'You have been logged out successfully.');
    }

}
