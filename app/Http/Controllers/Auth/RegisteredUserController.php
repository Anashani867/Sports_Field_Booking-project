<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    use RegistersUsers;

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // تحقق من المدخلات
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required', 'string', 'in:male,female'],
            'country_code' => ['required', 'string', 'regex:/^\+[0-9]{1,3}$/'], // تحقق من كود الدولة (مثل +962)
            'phone_number' => ['required', 'regex:/^[0-9]{7,10}$/', 'unique:users'], // رقم الهاتف فقط
        ]);

        // إنشاء المستخدم
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'country_code' => $request->country_code,
            'status' => 'Inactive', // تأكيد أن المستخدم غير مفعل بعد
            'phone_number' => json_encode([
                'number' => $request->phone_number, // رقم الهاتف
                'country_code' => $request->country_code, // كود الدولة
            ]),
        ]);

        // إرسال بريد التحقق

        // إطلاق الحدث بعد التسجيل
        event(new Registered($user));

        // تسجيل الدخول مباشرة بعد التسجيل
        Auth::login($user);

        // إذا كانت حالة المستخدم "Inactive"، إعادة توجيهه إلى صفحة التحقق من البريد الإلكتروني
        if ($user->status === 'Inactive') {
            return redirect()->route('verification.notice'); // التوجيه إلى صفحة التحقق من البريد الإلكتروني
        }

        // في حال كان المستخدم مفعل، توجيه إلى الصفحة الرئيسية
        return redirect(RouteServiceProvider::HOME);
    }
}
