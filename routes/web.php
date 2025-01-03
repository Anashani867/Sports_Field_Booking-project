<?php

//use App\Http\Controllers\ProfileController;
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AdminDashbordController;
//use App\Http\Controllers\ThemeController;
//use App\Http\Controllers\AnalyticsController;
//use App\Http\Controllers\PaymentsController;
//use App\Http\Controllers\FieldController;
//use App\Http\Controllers\BookingController;
//use App\Http\Controllers\Auth\EmailVerificationController;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//use App\Http\Controllers\AdminAuthController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
////Route::get('/', function () {
////    return view('welcome');
////})->name('welcome');
//
////Route::get('/dashboard', function () {
////    return view('dashboard');
////})->middleware(['auth', 'verified'])->name('dashboard');
////------------------------------------------
//Route::middleware('auth')->group(function () {
//    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//////------------------------------------------------------------
//
////Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
////    ->name('logout')
////    ->middleware('auth')
////    ->redirectTo(route('login')); // أو يمكنك استخدام المسار المناسب لتسجيل الدخول
//
//Route::prefix('admin')->name('admin.')->group(function () {
//    // Admin Authentication Routes
//    Route::middleware('guest:admin')->group(function () {
//        Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
//        Route::post('login', [AdminAuthController::class, 'login']);
//    });
//
//    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
//
//    // Admin Protected Routes
//    Route::middleware('auth:admin')->group(function () {
//        Route::get('dashboard', [AdminDashbordController::class, 'index'])->name('dashboard');
//        Route::get('manageBookings', [AdminDashbordController::class, 'manageBookings'])->name('manageBookings');
//        Route::get('manageFields', [AdminDashbordController::class, 'manageFields'])->name('manageFields');
//        Route::get('manageUsers', [AdminDashbordController::class, 'manageUsers'])->name('manageUsers');
//        Route::get('payments', [AdminDashbordController::class, 'payments'])->name('payments');
//        Route::get('analytics', [AdminDashbordController::class, 'analytics'])->name('analytics');
//        Route::get('settings', [AdminDashbordController::class, 'settings'])->name('settings');
//    });
//});
//
//Route::controller(\App\Http\Controllers\ThemeController::class)->name('theme.')->group(function () {
//    Route::get('/about', 'about')->name('about');
//    Route::get('/gallery', 'gallery')->name('gallery');
//    Route::get('/blog', 'blog')->name('blog');
//    Route::get('/shop', 'shop')->name('shop');
//    Route::get('/contact', 'contact')->name('contact');
//    Route::post('/contact/store', 'store')->name('contact.store');
//});
//
//// Authenticated Routes
//Route::middleware(['auth'])->group(function () {
//    Route::get('/bookTickets', [BookingController::class, 'index'])->name('bookTickets');
//    Route::post('/bookTickets', [BookingController::class, 'bookTickets'])->name('bookTickets');
//    Route::get('/field/{id}', [FieldController::class, 'showFieldDetails'])->name('Field.Details');
//});
//require __DIR__.'/auth.php';
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//Route::controller(\App\Http\Controllers\ThemeController::class)->name('theme.')->group(function () {
//    Route::get('/about', 'about')->name('about');
//    Route::get('/gallery', 'gallery')->name('gallery');
//    Route::get('/blog', 'blog')->name('blog');
//    Route::post('/bookTickets', 'bookTickets')->name('bookTickets');
//
//    Route::get('/shop', 'shop')->name('shop');
//    Route::get('/contact', 'contact')->name('contact');
//    Route::post('/contact/store', 'store')->name('contact.store');
//
//
//});
//
////Route::middleware(['auth'])->group(function () {
////    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
////    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
////});
//
//
////Route::controller(\App\Http\Controllers\AdminDashbordController::class)->name('admin.')->group(function () {
////
////    Route::get('/admin/dashboard',  'dashboard')->name('dashboard');
////    Route::get('/admin/manageBookings',  'manageBookings')->name('manageBookings');
////    Route::get('/admin/manageFields',  'manageFields')->name('manageFields');
////    Route::get('/admin/manageUsers',  'manageUsers')->name('manageUsers');
////    Route::get('/admin/payments',  'payments')->name('payments');
////    Route::get('/admin/analytics',  'analytics')->name('analytics');
////    Route::get('/admin/settings',  'settings')->name('settings');
////
////
////
////});
//
//
//
//
////Route::get('/admin/add-user', [AdminDashbordController::class, 'loadAddUserForm'])->name('users.add');
////Route::post('/admin/add-user', [AdminDashbordController::class, 'AddUser'])->name('users.store');
//Route::get('/admin/edit-user/{id}', [AdminDashbordController::class, 'loadEditForm'])->name('users.edit');
//Route::post('/admin/edit-user', [AdminDashbordController::class, 'EditUser'])->name('users.update');
//Route::delete('/admin/manageUsers/{id}', [AdminDashbordController::class, 'deleteUser'])->name('users.delete');
//Route::patch('/admin/users/{id}/status', [AdminDashbordController::class, 'updateStatus'])->name('users.updateStatus');
//Route::post('/update-status/{id}', [AdminDashbordController::class, 'updateStatus'])->name('update-status');
//Route::delete('/Booking/{id}', [AdminDashbordController::class, 'destroy'])->name('delete.Booking');
//
////Route::get('/admin/editBooking/{id}', [AdminDashbordController::class, 'loadEditFormBooking'])->name('Booking.edit');
//Route::get('/admin/editBooking/{id}', [AdminDashbordController::class, 'editBooking'])->name('Booking.edit');
//Route::match(['put', 'post'], '/admin/updateBooking/{id}', [AdminDashbordController::class, 'updateBooking'])->name('Booking.update');
//
//
//
//
//
//
//
//Route::prefix('admin')->name('admin.')->group(function () {
//    Route::get('/fields', [FieldController::class, 'index'])->name('manageFields');
//    Route::get('/fields/create', [FieldController::class, 'create'])->name('createField');
//    Route::post('/fields', [FieldController::class, 'store'])->name('storeField');
//    Route::get('/fields/{id}/edit', [FieldController::class, 'edit'])->name('editField');
//    Route::put('/fields/{id}', [FieldController::class, 'update'])->name('updateField');
//    Route::delete('/fields/{id}', [FieldController::class, 'destroy'])->name('deleteField');
//});
//
//
//Route::get('/admin/analytics', [AnalyticsController::class, 'index'])->name('admin.analytics');
//
////Route::get('/admin/payments', [PaymentsController::class, 'index'])->name('admin.payments');
//
//// routes/web.php
//Route::get('/admin/payments', [PaymentsController::class, 'dashboard'])->name('admin.payments');
//
////Route::get('/admin/payments', [PaymentsController::class, 'index'])
////    ->name('admin.payments')
////    ->middleware(['auth', 'admin']);
//
//
//
//Route::middleware(['auth', 'signed'])->get('/email/verify', [EmailVerificationController::class, 'show'])->name('verification.notice');
//Route::middleware(['auth'])->post('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify');
//Route::middleware(['auth'])->get('/email/resend', [EmailVerificationController::class, 'resend'])->name('verification.send');
//
//
//Route::get('/field/{id}', [\App\Http\Controllers\FieldController::class, 'showFieldDetails'])->name('Field.Details');
//
//Route::POST('/bookTickets',[\App\Http\Controllers\BookingController::class, 'bookTickets'])->name('bookTickets');
//Route::get('/bookTickets', [\App\Http\Controllers\BookingController::class, 'index'])->name('bookTickets');

//use App\Http\Controllers\ProfileController;
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AdminDashbordController;
//use App\Http\Controllers\ThemeController;
//use App\Http\Controllers\AnalyticsController;
//use App\Http\Controllers\PaymentsController;
//use App\Http\Controllers\FieldController;
//use App\Http\Controllers\BookingController;
//use App\Http\Controllers\Auth\EmailVerificationController;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//use App\Http\Controllers\AdminAuthController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashbordController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\FieldAuthController;
use App\Http\Controllers\FieldDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Auth;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Welcome Page (Public)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// ----------------- Guest Routes -----------------
Route::middleware('guest')->group(function () {
    // User Authentication Routes
    Route::get('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
    Route::get('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);
});

// ----------------- Admin Routes -----------------
Route::prefix('admin')->name('admin.')->group(function () {
    // مسارات تسجيل الدخول الخاصة بالأدمن
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AdminAuthController::class, 'login']);
    });

    // مسارات الإدارة المحمية
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminDashbordController::class, 'dashboard'])->name('dashboard');
        Route::get('manageBookings', [BookingController::class, 'index'])->name('manageBookings');
        Route::get('manageFields', [FieldController::class, 'index'])->name('manageFields');
        Route::get('manageUsers', [AdminDashbordController::class, 'manageUsers'])->name('manageUsers');
        Route::get('manageUsersField', [AdminDashbordController::class, 'manageUsersField'])->name('manageUsersField');
        Route::delete('/admin/manageUsersField/{id}', [AdminDashbordController::class, 'deleteUsersField'])->name('manageUsersField.delete');
        Route::get('/admin/analytics', [AnalyticsController::class, 'index'])->name('analytics');
        Route::get('contacts', [AdminDashbordController::class, 'showContacts'])->name('contact');
        Route::get('/contacts/{id}/edit', [AdminDashbordController::class, 'edit'])->name('admin.contacts.edit');
        Route::delete('/admin/contacts/{id}', [AdminDashbordController::class, 'destroyContacts'])->name('contacts.destroy');
        Route::get('/admin/media', [MediaController::class, 'indexAdmin'])->name('media');
        Route::post('/admin/media', [MediaController::class, 'store'])->name('media.store');
        Route::delete('/admin/media/{id}', [MediaController::class, 'destroy'])->name('media.destroy');


    });

    Route::middleware('auth:admin')->group(function () {
    Route::get('/fields/create', [FieldController::class, 'create'])->name('createField');
    Route::post('/fields', [FieldController::class, 'store'])->name('storeField');
    Route::get('/fields/{id}/edit', [FieldController::class, 'edit'])->name('editField');
    Route::put('/fields/{id}', [FieldController::class, 'update'])->name('updateField');
    Route::delete('/fields/{id}', [FieldController::class, 'destroy'])->name('deleteField');
});

        Route::middleware('auth:admin')->group(function () {
        Route::get('/admin/edit-user/{id}', [AdminDashbordController::class, 'loadEditForm'])->name('users.edit');
        Route::post('/admin/edit-user', [AdminDashbordController::class, 'EditUser'])->name('users.update');
        Route::delete('/admin/manageUsers/{id}', [AdminDashbordController::class, 'deleteUser'])->name('users.delete');
        Route::patch('/admin/users/{id}/status', [AdminDashbordController::class, 'updateStatus'])->name('users.updateStatus');
        Route::post('/update-status/{id}', [AdminDashbordController::class, 'updateStatus'])->name('update-status');
        Route::delete('/Booking/{id}', [AdminDashbordController::class, 'destroy'])->name('delete.Booking');
    });
    Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/editBooking/{id}', [AdminDashbordController::class, 'loadEditFormBooking'])->name('Booking.edit');
    Route::get('/admin/editBooking/{id}', [AdminDashbordController::class, 'editBooking'])->name('Booking.edit');
    Route::match(['put', 'post'], '/admin/updateBooking/{id}', [AdminDashbordController::class, 'updateBooking'])->name('Booking.update');

});
    Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/payments', [PaymentsController::class, 'dashboard'])->name('payments');
});

    Route::middleware(['auth:admin'])->group(function () {
    Route::match(['put', 'get'],'/admin/profile/update', [AdminProfileController::class, 'edit'])->name('profile.update');
    });

    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');


});


// ----------------- Authenticated User Routes -----------------
Route::middleware(['auth'])->group(function () {
    Route::get('/book-tickets', [BookingController::class, 'show'])->name('bookTickets.show');
    Route::post('/book-tickets', [BookingController::class, 'store'])->name('bookTickets.store');
    Route::get('/field/{id}', [FieldController::class, 'showFieldDetails'])->name('Field.Details');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ----------------- Public Routes -----------------
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/gallery', 'gallery')->name('gallery');
//    Route::get('/blog', 'blog')->name('blog');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');
});
Route::post('/check-availability', [ReservationController::class, 'checkAvailability']);



Route::prefix('user_fields')->name('user_fields.')->group(function () {
    // Routes for guest users
    Route::middleware('guest:user_fields')->group(function () {
        Route::get('login', [FieldAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [FieldAuthController::class, 'login']);

        // Add the Register route
        Route::get('register', [FieldAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [FieldAuthController::class, 'register']);
    });

    // Routes for authenticated users
    Route::middleware('auth:user_fields')->group(function () {
        Route::get('dashboard', [FieldDashboardController::class, 'index'])->name('dashboard');
        Route::post('/field/store', [FieldController::class, 'store'])->name('field.store');

        Route::get('logout', [FieldAuthController::class, 'logout'])->name('logout');
    });
});

Route::middleware(['auth'])->group(function () {
    // لتحميل الوسائط

    Route::post('/media/upload', [MediaController::class, 'upload'])->name('media.upload');

    // لعرض الوسائط
});
Route::get('/blog', [MediaController::class, 'index'])->name('theme.blog');


Auth::routes(['verify' => true]);

// Example of a verified route
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');


Route::get('email/verify', [EmailVerificationController::class, 'notice'])->name('verification.notice');

// مسار تحقق الرابط
Route::get('email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
    ->name('verification.verify');
// مسار إعادة إرسال رابط التحقق
Route::post('email/verification-link', [EmailVerificationController::class, 'resend'])->name('verification.send');


Route::get('/book/{field_id}', [BookingController::class, 'showBookingForm'])->name('bookForm');
Route::post('/book-and-pay', [PaymentsController::class, 'bookAndPay'])->name('bookAndPay');
Route::get('/payment', [PaymentsController::class, 'showPaymentForm'])->name('payment.form');
//Route::post('/payment/process', [PaymentsController::class, 'processPayment'])->name('payment.process');

//Route::middleware(['auth'])->group(function () {
//    // لتحميل الوسائط
//    Route::post('/upload/media', [MediaController::class, 'store'])->name('upload.media');
//
//    // لعرض الوسائط
//    Route::get('/blog', [MediaController::class, 'index'])->name('theme.blog');
//});
require __DIR__ . '/auth.php';

