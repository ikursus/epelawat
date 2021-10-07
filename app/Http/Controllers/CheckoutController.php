<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function borangCheckout()
    {
        return view('template-checkout');
    }

    public function checkCheckout(Request $request)
    {
        $data = $request->all();

        dd($data);
    }
}
