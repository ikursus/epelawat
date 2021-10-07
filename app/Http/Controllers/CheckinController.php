<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function borangCheckin()
    {
        return view('template-checkin');
    }

    public function checkCheckin()
    {
        // Kod untuk terima data dari borang
    }
}
