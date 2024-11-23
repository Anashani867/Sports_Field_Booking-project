<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashbordController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//    ->name('logout')
//    ->middleware('auth')
//    ->redirectTo(route('login')); // أو يمكنك استخدام المسار المناسب لتسجيل الدخول


require __DIR__.'/auth.php';




Route::controller(\App\Http\Controllers\ThemeController::class)->name('theme.')->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/bookTickets', 'bookTickets')->name('bookTickets');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');


});



Route::controller(\App\Http\Controllers\AdminDashbordController::class)->name('admin.')->group(function () {

    Route::get('/admin/dashboard',  'dashboard')->name('dashboard');
    Route::get('/admin/manageBookings',  'manageBookings')->name('manageBookings');
    Route::get('/admin/manageFields',  'manageFields')->name('manageFields');
    Route::get('/admin/manageUsers',  'manageUsers')->name('manageUsers');
    Route::get('/admin/payments',  'payments')->name('payments');
    Route::get('/admin/analytics',  'analytics')->name('analytics');
    Route::get('/admin/settings',  'settings')->name('settings');



});




//Route::get('/admin/add-user', [AdminDashbordController::class, 'loadAddUserForm'])->name('users.add');
//Route::post('/admin/add-user', [AdminDashbordController::class, 'AddUser'])->name('users.store');
Route::get('/admin/edit-user/{id}', [AdminDashbordController::class, 'loadEditForm'])->name('users.edit');
Route::post('/admin/edit-user', [AdminDashbordController::class, 'EditUser'])->name('users.update');
Route::delete('/admin/manageUsers/{id}', [AdminDashbordController::class, 'deleteUser'])->name('users.delete');
Route::patch('/admin/users/{id}/status', [AdminDashbordController::class, 'updateStatus'])->name('users.updateStatus');
Route::post('/update-status/{id}', [AdminDashbordController::class, 'updateStatus'])->name('update-status');
Route::delete('/Booking/{id}', [AdminDashbordController::class, 'destroy'])->name('delete.Booking');

//Route::get('/admin/editBooking/{id}', [AdminDashbordController::class, 'loadEditFormBooking'])->name('Booking.edit');
Route::get('/admin/editBooking/{id}', [AdminDashbordController::class, 'editBooking'])->name('Booking.edit');
Route::post('/admin/updateBooking/{id}', [AdminDashbordController::class, 'updateBooking'])->name('Booking.update');







Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/fields', [FieldController::class, 'index'])->name('manageFields');
    Route::get('/fields/create', [FieldController::class, 'create'])->name('createField');
    Route::post('/fields', [FieldController::class, 'store'])->name('storeField');
    Route::get('/fields/{id}/edit', [FieldController::class, 'edit'])->name('editField');
    Route::put('/fields/{id}', [FieldController::class, 'update'])->name('updateField');
    Route::delete('/fields/{id}', [FieldController::class, 'destroy'])->name('deleteField');
});


Route::get('/admin/analytics', [AnalyticsController::class, 'index'])->name('admin.analytics');

//Route::get('/admin/payments', [PaymentsController::class, 'index'])->name('admin.payments');

// routes/web.php
Route::get('/admin/payments', [PaymentsController::class, 'dashboard'])->name('admin.payments');

//Route::get('/admin/payments', [PaymentsController::class, 'index'])
//    ->name('admin.payments')
//    ->middleware(['auth', 'admin']);



Route::middleware(['auth', 'signed'])->get('/email/verify', [EmailVerificationController::class, 'show'])->name('verification.notice');
Route::middleware(['auth'])->post('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify');
Route::middleware(['auth'])->get('/email/resend', [EmailVerificationController::class, 'resend'])->name('verification.send');
