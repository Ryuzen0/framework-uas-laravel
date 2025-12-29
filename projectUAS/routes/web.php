<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Http\Request;
// use App\Http\Controllers\Admin\ReservationController as AdminReservation;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Admin\AdminReservationController as AdminReservation;


use Illuminate\Support\Facades\Mail;

Route::get('/test-mail', function () {
    Mail::raw('Test email dari Laravel', function ($message) {
        $message->to('tommysatrio36@gmail.com')
            ->subject('Test SMTP Gmail');
    });

    return 'EMAIL TERKIRIM';
});

Route::get('/', [CarouselController::class, 'index']);
Route::get('/home', [CarouselController::class, 'index'])->name('home.index');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
Route::get('/reserve', [ReservationController::class, 'create'])
    ->name('reservation.create')
    ->middleware('auth');

Route::post('/reserve', [ReservationController::class, 'store'])
    ->name('reservation.store')
    ->middleware('auth');

Route::get('/check-availability', [ReservationController::class, 'checkAvailability']);
// Halaman contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Halaman about
Route::get('/about', function () {
    return view('about');
})->name('about');
// Halaman condition and terms
Route::get('/condition-terms', function () {
    return view('conditionTerms');
})->name('conditionTerms');

/* AUTH */
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerProcess']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');


// GET → tampilkan halaman
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForm'])
    ->middleware('guest');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])
    ->middleware('guest');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])
    ->middleware('guest');

// POST → proses form

Route::post('/forgot-password', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
    ]);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with('status', __($status))
        : back()->withErrors(['email' => __($status)]);
});


/* ADMIN */


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/reservations/create', [AdminReservation::class, 'create']);
    Route::post(
        '/admin/reservations',
        [ReservationController::class, 'store']
    )->name('admin.reservations.store');

    Route::post('/admin/reservations/store', [AdminReservation::class, 'store'])
        ->name('admin.reservations.store');



    Route::get('/admin/reservations', [AdminReservation::class, 'index'])
        ->name('admin.reservations');


    Route::get('/admin/reservations/{id}/edit', [AdminReservation::class, 'edit']);
    Route::put('/admin/reservations/{id}', [AdminReservation::class, 'update']);
    Route::delete('/admin/reservations/{id}', [AdminReservation::class, 'destroy']);
    Route::get('/admin/reservations/history', [ReservationController::class, 'history']);

    Route::post('/admin/reservations/{id}/mark-paid', [ReservationController::class, 'markPaid']);
    Route::patch(
        '/reservations/{reservation}/finish',
        [AdminReservation::class, 'finish']
    )->name('reservations.finish');

    Route::patch(
        '/reservations/{reservation}/payment',
        [AdminReservation::class, 'togglePayment']
    )->name('reservations.payment');

    Route::get(
        '/reservations/history',
        [AdminReservation::class, 'history']
    )->name('admin.reservations.history');

    Route::patch(
        '/reservations/{reservation}/undo',
        [AdminReservation::class, 'undo']
    )->name('reservations.undo');
});
