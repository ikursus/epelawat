<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function borangLogin() {
        return view('authentication.template-login');
    }

    public function checkLogin() {

        // Proses Login

    }
}
