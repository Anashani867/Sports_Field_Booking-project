<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login'); // صفحة تسجيل الدخول الخاصة بالأدمن
    }

    public function login(Request $request)
    {
//        dd($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login using the 'admin' guard
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
//           $cradintial=$request->only('email', 'password');
//           dd($cradintial);
            return redirect()->route('admin.dashboard');
        }

        // If login fails, return back with an error message
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); // Log out the admin user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect()->route('admin.login')->with('status', 'Logged out successfully.');
    }
}
