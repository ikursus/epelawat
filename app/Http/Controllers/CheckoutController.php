<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function borangCheckout()
    {
        return view('template-checkout');
    }

    public function checkCheckout()
    {
        // Kod untuk terima data dari borang
    }
}