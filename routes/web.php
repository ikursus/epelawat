<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::get('login', function () {
    return 'Ini adalah halaman login';
});

Route::get('contact', function () {
    return 'Ini halaman contact';
});

Route::redirect('google', 'https://google.com');

Route::get('profile/{username}/{phone?}/{city?}', function ($username, $phone = null, $city = null) {

    $msg = '<p>Ini adalah profile akaun: ' . $username . '.</p>';

    if(!is_null($phone))
    {
        $msg .= '<p>No telefon beliau: ' . $phone . '.</p>';
    }

    if (!is_null($city))
    {
        $msg .= '<p>Beliau berada di ' . $city . '.</p>';
    }

    return $msg;
})->where(['phone' => '[0-9]+', 'city' => '[a-zA-Z]+']);
