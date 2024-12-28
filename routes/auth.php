<?php
//
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//use App\Http\Controllers\Auth\ConfirmablePasswordController;
//use App\Http\Controllers\Auth\EmailVerificationNotificationController;
//use App\Http\Controllers\Auth\EmailVerificationPromptController;
//use App\Http\Controllers\Auth\NewPasswordController;
//use App\Http\Controllers\Auth\PasswordController;
//use App\Http\Controllers\Auth\PasswordResetLinkController;
//use App\Http\Controllers\Auth\RegisteredUserController;
//use App\Http\Controllers\Auth\VerifyEmailController;
//use Illuminate\Support\Facades\Route;
//
//Route::middleware('guest')->group(function () {
//    Route::get('register', [RegisteredUserController::class, 'create'])
//                ->name('register');
//
//    Route::post('register', [RegisteredUserController::class, 'store']);
//
//    Route::get('login', [AuthenticatedSessionController::class, 'create'])
//                ->name('login');
//
//    Route::post('login', [AuthenticatedSessionController::class, 'store']);
//
//    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
//                ->name('password.request');
//
//    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
//                ->name('password.email');
//
//    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
//                ->name('password.reset');
//
//    Route::post('reset-password', [NewPasswordController::class, 'store'])
//                ->name('password.store');
//});
//
//Route::middleware('auth')->group(function () {
//    Route::get('verify-email', EmailVerificationPromptController::class)
//                ->name('verification.notice');
//
//    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
//                ->middleware(['signed', 'throttle:6,1'])
//                ->name('verification.verify');
//
//    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//                ->middleware('throttle:6,1')
//                ->name('verification.send');
//
//    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
//                ->name('password.confirm');
//
//    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
//
//    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
//
//    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//                ->name('logout');
//});

//
//use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\AdminDashbordController;
//use App\Http\Controllers\FieldController;
//use App\Http\Controllers\AnalyticsController;
//use App\Http\Controllers\PaymentsController;
//use App\Http\Controllers\Auth\PasswordResetLinkController;
//use App\Http\Controllers\Auth\NewPasswordController;
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth\RegisteredUserController;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//
//// مسارات تسجيل الدخول والتسجيل (متوفرة فقط للضيوف)
//Route::middleware('guest')->group(function () {
//    // Registration routes
//    Route::get('/register', [RegisteredUserController::class, 'create'])
//        ->name('register');
//    Route::post('/register', [RegisteredUserController::class, 'store']);
//
//    // Login routes
//    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
//        ->name('login');
//    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
//
//    // Password reset routes
//    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
//        ->name('password.request');
//    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
//        ->name('password.email');
//    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
//        ->name('password.reset');
//    Route::post('/reset-password', [NewPasswordController::class, 'store'])
//        ->name('password.update');
//});
//
//// مسارات لوحة التحكم والإدارة (متوفرة فقط للمستخدمين المسجلين)
//Route::middleware(['auth'])->group(function () {
//    // لوحة التحكم للمستخدمين المسجلين
//    Route::get('/dashboard', [AdminDashbordController::class, 'dashboard'])->name('dashboard');
//
//    // إدارة الحقول
//    Route::controller(FieldController::class)->group(function () {
//        Route::get('/fields', 'index')->name('admin.manageFields');
//        Route::get('/fields/create', 'create')->name('admin.createField');
//        Route::post('/fields', 'store')->name('admin.storeField');
//        Route::get('/fields/{id}/edit', 'edit')->name('admin.editField');
//        Route::put('/fields/{id}', 'update')->name('admin.updateField');
//        Route::delete('/fields/{id}', 'destroy')->name('admin.deleteField');
//    });
//
//    // إدارة المستخدمين
//    Route::get('/manageUsers', [AdminDashbordController::class, 'manageUsers'])->name('manageUsers');
//    Route::delete('/manageUsers/{id}', [AdminDashbordController::class, 'deleteUser'])->name('users.delete');
//    Route::patch('/users/{id}/status', [AdminDashbordController::class, 'updateStatus'])->name('users.updateStatus');
//
//    // إدارة الحجوزات
//    Route::get('/manageBookings', [AdminDashbordController::class, 'manageBookings'])->name('manageBookings');
//    Route::get('/editBooking/{id}', [AdminDashbordController::class, 'editBooking'])->name('Booking.edit');
//    Route::put('/updateBooking/{id}', [AdminDashbordController::class, 'updateBooking'])->name('Booking.update');
//    Route::delete('/Booking/{id}', [AdminDashbordController::class, 'destroy'])->name('delete.Booking');
//
//    // الإحصائيات والدفع
//    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
//    Route::get('/payments', [PaymentsController::class, 'dashboard'])->name('payments');
//});
//
//// إعدادات الحساب الشخصي
//Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//// تسجيل الخروج
//Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
//
//// الصفحة الرئيسية ومسارات عامة
//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');




//
//use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\AdminDashbordController;
//use App\Http\Controllers\FieldController;
//use App\Http\Controllers\AnalyticsController;
//use App\Http\Controllers\PaymentsController;
//use App\Http\Controllers\Auth\PasswordResetLinkController;
//use App\Http\Controllers\Auth\NewPasswordController;
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth\RegisteredUserController;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//
//// مسارات تسجيل الدخول والتسجيل (متوفرة فقط للضيوف)
//Route::middleware('guest')->group(function () {
//    // Registration routes
//    Route::get('/register', [RegisteredUserController::class, 'create'])
//        ->name('register');
//    Route::post('/register', [RegisteredUserController::class, 'store']);
//
//    // Login routes
//    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
//        ->name('login');
//    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
//
//    // Password reset routes
//    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
//        ->name('password.request');
//    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
//        ->name('password.email');
//    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
//        ->name('password.reset');
//    Route::post('/reset-password', [NewPasswordController::class, 'store'])
//        ->name('password.update');
//});
//
//// مسارات لوحة التحكم والإدارة (متوفرة فقط للمستخدمين المسجلين)
//Route::middleware('auth')->group(function () {
//    // لوحة التحكم للمستخدمين المسجلين
//    Route::get('/dashboard', [AdminDashbordController::class, 'dashboard'])->name('dashboard');
//
//    // إدارة الحقول
//    Route::controller(FieldController::class)->group(function () {
//        Route::get('/fields', 'index')->name('admin.manageFields');
//        Route::get('/fields/create', 'create')->name('admin.createField');
//        Route::post('/fields', 'store')->name('admin.storeField');
//        Route::get('/fields/{id}/edit', 'edit')->name('admin.editField');
//        Route::put('/fields/{id}', 'update')->name('admin.updateField');
//        Route::delete('/fields/{id}', 'destroy')->name('admin.deleteField');
//    });
//
//    // إدارة المستخدمين
//    Route::get('/manageUsers', [AdminDashbordController::class, 'manageUsers'])->name('manageUsers');
//    Route::delete('/manageUsers/{id}', [AdminDashbordController::class, 'deleteUser'])->name('users.delete');
//    Route::patch('/users/{id}/status', [AdminDashbordController::class, 'updateStatus'])->name('users.updateStatus');
//
//    // إدارة الحجوزات
//    Route::get('/manageBookings', [AdminDashbordController::class, 'manageBookings'])->name('manageBookings');
//    Route::get('/editBooking/{id}', [AdminDashbordController::class, 'editBooking'])->name('Booking.edit');
//    Route::put('/updateBooking/{id}', [AdminDashbordController::class, 'updateBooking'])->name('Booking.update');
//    Route::delete('/Booking/{id}', [AdminDashbordController::class, 'destroy'])->name('delete.Booking');
//
//    // الإحصائيات والدفع
//    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
//    Route::get('/payments', [PaymentsController::class, 'dashboard'])->name('payments');
//
//    // إعدادات الحساب الشخصي
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//    // تسجيل الخروج
//    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
//});
//
//// الصفحة الرئيسية ومسارات عامة
//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');


//use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\AdminDashbordController;
//use App\Http\Controllers\FieldController;
//use App\Http\Controllers\AnalyticsController;
//use App\Http\Controllers\PaymentsController;
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth\RegisteredUserController;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//
//
//// مسارات تسجيل الدخول والتسجيل (متوفرة فقط للضيوف)
//Route::middleware('guest')->group(function () {
//    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
//    Route::post('register', [RegisteredUserController::class, 'store']);
//    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
//    Route::post('login', [AuthenticatedSessionController::class, 'store']);
//});
//
//// مسارات لوحة التحكم والإدارة (متوفرة فقط للمستخدمين المسجلين)
//Route::middleware(['auth'])->group(function () {
//    Route::get('/dashboard', [AdminDashbordController::class, 'dashboard'])->name('dashboard');
//
//    Route::prefix('admin')->name('admin.')->group(function () {
//        // إدارة الحقول
//        Route::controller(FieldController::class)->group(function () {
//            Route::get('/fields', 'index')->name('admin.manageFields');
//            Route::get('/fields/create', 'create')->name('admin.createField');
//            Route::post('/fields', 'store')->name('admin.storeField');
//            Route::get('/fields/{id}/edit', 'edit')->name('admin.editField');
//            Route::put('/fields/{id}', 'update')->name('admin.updateField');
//            Route::delete('/fields/{id}', 'destroy')->name('admin.deleteField');
//        });
//
//        // إدارة المستخدمين
//        Route::get('/manageUsers', [AdminDashbordController::class, 'manageUsers'])->name('manageUsers');
//        Route::delete('/manageUsers/{id}', [AdminDashbordController::class, 'deleteUser'])->name('users.delete');
//        Route::patch('/users/{id}/status', [AdminDashbordController::class, 'updateStatus'])->name('users.updateStatus');
//
//        // إدارة الحجوزات
//        Route::get('/manageBookings', [AdminDashbordController::class, 'manageBookings'])->name('manageBookings');
//        Route::get('/editBooking/{id}', [AdminDashbordController::class, 'editBooking'])->name('Booking.edit');
//        Route::put('/updateBooking/{id}', [AdminDashbordController::class, 'updateBooking'])->name('Booking.update');
//        Route::delete('/Booking/{id}', [AdminDashbordController::class, 'destroy'])->name('delete.Booking');
//
//        // الإحصائيات والدفع
//        Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
//        Route::get('/payments', [PaymentsController::class, 'dashboard'])->name('payments');
//    });
//
//    // إعدادات الحساب الشخصي
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//    // تسجيل الخروج
//    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
//});
//
//// الصفحة الرئيسية ومسارات عامة
//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');
//
//
//

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FieldController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashbordController;



Route::middleware('guest')->group(function () {
    // Registration routes
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Login routes
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    // Password reset routes
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

// ----------------- مسارات Theme العامة -----------------
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/gallery', 'gallery')->name('gallery');
//    Route::get('/blog', 'blog')->name('blog');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');
});

// ----------------- مسارات المحمية للمستخدمين المسجلين -----------------
Route::middleware(['auth'])->group(function () {
    // عرض الحجوزات
    Route::get('/bookTickets', [BookingController::class, 'index'])->name('bookTickets');

    // إضافة حجز جديد
    Route::post('/bookTickets', [BookingController::class, 'bookTickets'])->name('bookTickets');

    // عرض تفاصيل الحقل
    Route::get('/field/{id}', [FieldController::class, 'showFieldDetails'])->name('Field.Details');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    // تسجيل الخروج
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
// الصفحة الرئيسية ومسارات عامة
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::prefix('admin')->name('admin.')->group(function () {
    // مسارات تسجيل الدخول والخروج للإدارة
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // مسارات لوحة تحكم الإدارة (محمية بـ Middleware)
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [AdminDashbordController::class, 'dashboard'])->name('dashboard');
        Route::get('/manageBookings', [AdminDashbordController::class, 'manageBookings'])->name('manageBookings');
        Route::get('/manageUsers', [AdminDashbordController::class, 'manageUsers'])->name('manageUsers');
    });
});
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

//Route::get('/', function () {
//    if (auth()->check()) {
//        if (auth()->guard('admin')->check()) {
//            return redirect()->route('admin.dashboard'); // للإدارة
//        }
//        return redirect()->route('profile.edit'); // للمستخدمين
//    }
//    return view('welcome'); // إذا لم يتم تسجيل الدخول
//})->name('welcome');
