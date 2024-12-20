<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    // عرض صفحة تأكيد البريد الإلكتروني
    public function notice()
    {
        return view('auth.verify-email');
    }

    // معالجة رابط التأكيد
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        $user = $request->user();

        $user->update(['status' => 'Active']);


        return redirect('/')->with('success', 'Your email has been verified!');
    }

    // إعادة إرسال رابط التحقق
    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('success', 'Verification link sent!');
    }
}
