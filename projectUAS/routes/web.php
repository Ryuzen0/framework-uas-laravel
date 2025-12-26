<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ReservationController;




Route::get('/', [CarouselController::class, 'index']);
Route::get('/home', [CarouselController::class, 'index'])->name('home.index');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
Route::get('/reserve', [ReservationController::class, 'create'])
    ->name('reservation.create');

Route::post('/reserve', [ReservationController::class, 'store'])
    ->name('reservation.store');
Route::get('/check-availability', [ReservationController::class, 'checkAvailability']);
// Halaman contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Halaman about
Route::get('/about', function () {
    return view('about');
})->name('about');
