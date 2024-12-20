<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // محاولة التوثيق باستخدام البيانات المدخلة
        $request->authenticate();

        // الحصول على المستخدم الحالي
        $user = Auth::user();

        // التحقق من إذا كان البريد الإلكتروني مفعلًا
        if (!$user->hasVerifiedEmail()) {
            // إذا لم يكن البريد الإلكتروني مفعلًا، قم بتسجيل الخروج وإعادة التوجيه إلى صفحة التحقق
            Auth::logout();
            return redirect()->route('verification.notice'); // التأكد من وجود هذه الصفحة
        }

        // إذا تم التحقق من البريد الإلكتروني بنجاح، قم بتجديد الجلسة
        $request->session()->regenerate();

        // إعادة التوجيه إلى الصفحة المقصودة بعد تسجيل الدخول
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('welcome'); // توجيه المستخدم إلى صفحة تسجيل الدخول
    }
}
