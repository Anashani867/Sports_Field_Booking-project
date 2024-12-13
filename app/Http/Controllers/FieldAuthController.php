<?php

namespace App\Http\Controllers;

//use App\Models\UserField;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FieldAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('field.auth.login');
    }

//    public function login(Request $request)
//    {
//        $vaild_data = $request->validate([
//            'email' => 'required|email',
//            'password' => 'required|min:8',
//        ]);
//
//        // التحقق من البيانات ودخول المستخدم
//        if (Auth::guard('user_fields')->attempt($request->only('email', 'password'))) {
//            return redirect()->route('field.dashboard');
//        }
//
//        return back()->withErrors(['email' => 'Invalid credentials']);
//    }






    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

//         dd($request->has('password'));
        if (Auth::guard('user_fields')->attempt($request->only('email', 'password'))) {
//           $cradintial=$request->only('email', 'password');
//           dd($cradintial);
            return redirect()->route('user_fields.dashboard');
        }

    }


//        if (Auth::guard('user_fields')->attempt($credentials)) {
//            // تسجيل الدخول ناجح
//            return redirect()->route('user_fields.dashboard')->with('success', 'Logged in successfully!');
//        }
//
//        // تسجيل الدخول فشل
//        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
//
//  }


    // تسجيل الخروج
    public function logout()
    {
        Auth::guard('user_fields')->logout();
        return redirect()->route('user_fields.login');
    }
}
