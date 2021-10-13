<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EmailController;

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


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Quiz Pantas / Challenge
// Buat 1 Controller Bernama UserController dan
// pastikan dia berada di dalam folder app/Http/Controllers/Admin/
// Pindahkan function ke dalam UserController
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::patch('/admin/users/{id}/edit', [UserController::class, 'update'])->name('admin.users.update');

Route::get('admin/checkin/datatables', [\App\Http\Controllers\Admin\CheckinController::class, 'datatables'] )->name('admin.checkin.datatables');
Route::resource('/admin/checkin', \App\Http\Controllers\Admin\CheckinController::class)->except(['create', 'store']);
Route::resource('/admin/checkout', \App\Http\Controllers\Admin\CheckoutController::class)->only(['index', 'edit', 'update', 'destroy']);
// Route::resource('/admin/checkin', \App\Http\Controllers\Admin\CheckinController::class)->only(['index', 'edit', 'update', 'destroy']);
// Route::get('/admin/checkout', [\App\Http\Controllers\Admin\CheckoutController::class, 'index'])->name('admin.users.index');

Route::get('admin/email', [EmailController::class, 'create'])->name('admin.email.create');
Route::post('admin/email', [EmailController::class, 'store'])->name('admin.email.store');
