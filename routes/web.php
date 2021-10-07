<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;

// Route untuk pendaftaran pelawat
Route::get('/', function () {
    return view('welcome');
})->name('utama');

Route::get('/checkin', [CheckinController::class, 'borangCheckin'])->name('checkin');
Route::post('/checkin', [CheckinController::class, 'checkCheckin'])->name('checkin.check');

// Challenge 2
// Dapatkan dan Paparkan data daripada borang checkout
Route::get('/checkout', [CheckoutController::class, 'borangCheckout'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'checkCheckout'])->name('checkout.check');

Route::get('/login', [LoginController::class, 'borangLogin'])->name('login');
Route::post('/login', [LoginController::class, 'checkLogin'])->name('login.check');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    return 'Hello ' . auth()->user()->name . ', ini adalah halaman dashboard user selepas login.
    Untuk logout, <a href="' . route('logout') . '">klik sini</a>.';
});

// Quiz Pantas / Challenge
// Buat 1 Controller Bernama UserController dan
// pastikan dia berada di dalam folder app/Http/Controllers/Admin/
// Pindahkan function ke dalam UserController
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
