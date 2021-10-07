<?php

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

Route::get('/checkout', [CheckoutController::class, 'borangCheckout'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'checkCheckout'])->name('checkout.check');

Route::get('/login', [LoginController::class, 'borangLogin'])->name('login');
Route::post('/login', [LoginController::class, 'checkLogin'])->name('login.check');


Route::get('/admin/users', function() {

    $tajukHalaman = '<input type="text" value="Senarai Users">';

    $senaraiUsers = [
        ['id' => 1, 'nama' => 'Ali', 'email' => 'ali@gmail.com'],
        ['id' => 2, 'nama' => 'Lee', 'email' => 'lee@gmail.com'],
        ['id' => 3, 'nama' => 'Siti', 'email' => 'siti@gmail.com'],
    ];

    // Cara 1 Untuk Passkan Data Dari Variable $senaraiUsers
    // return view('admin.users.senarai')
    // ->with('senaraiUsers', $senaraiUsers)
    // ->with('tajukHalaman', $tajukHalaman);

    // Cara 2 Untuk Passkan Data Dari Variable $senaraiUsers
    // return view('admin.users.senarai', [
    //     'senaraiUsers' => $senaraiUsers,
    //     'tajukHalaman' => $tajukHalaman
    // ]);

    // Cara 3 Untuk Passkan Data Dari Variable $senaraiUsers
    return view('admin.users.senarai', compact('senaraiUsers', 'tajukHalaman'));
});
