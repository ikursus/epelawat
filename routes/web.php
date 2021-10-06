<?php

use Illuminate\Support\Facades\Route;

// Route untuk pendaftaran pelawat
Route::get('/', function () {
    return view('welcome');
})->name('utama');

Route::get('/checkin', function () {
    return view('template-checkin');
})->name('checkin');

Route::get('/checkout', function () {
    return view('template-checkout');
})->name('checkout');
