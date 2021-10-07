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

Route::get('/login', function () {
    return view('authentication.template-login');
})->name('login');

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
