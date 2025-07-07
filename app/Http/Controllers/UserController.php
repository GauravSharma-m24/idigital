<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard.dashboard');
    }

    public function userProfile()
    {
        return view('user.dashboard.user_profile');
    }

    public function updateImage(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $user = session('user');

    $file = $request->file('image');
    $filename = time().'_'.$file->getClientOriginalName();
    $file->move(public_path('uploads/profile'), $filename);

    $user->image = $filename;
    $user->save();

    session()->put('user', $user); // Update session

    return back()->with('success', 'Profile image updated.');
}


    public function certificate()
    {
        return view('user.dashboard.certificate');
    }

    public function affiliatePanel()
    {
        return view('user.dashboard.affiliate_panel');
    }

}
