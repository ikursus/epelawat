<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function borangCheckout()
    {
        return view('template-checkout');
    }

    public function checkCheckout(Request $request)
    {
        $request->validate([
            'mykad' => ['required', 'numeric']
        ]);

        $rekodVisitor = DB::table('visitors')
        ->where('mykad', '=', $request->input('mykad'))
        ->whereDate('waktu_masuk', now())
        ->first();

        // Jika $rekodVisitor tidak kosong / null
        if (!is_null($rekodVisitor))
        {
            // $rekodVisitor->update([
            //     'waktu_keluar' => now()
            // ]);

            $waktuCheckout = now();

            DB::table('visitors')
            ->where('mykad', '=', $request->input('mykad'))
            ->whereDate('waktu_masuk', now())
            ->update(['waktu_keluar' => $waktuCheckout]);

            //CRUD

            return redirect()->route('utama')
            ->with('mesej-sukses', 'Anda berjaya check out pada ' . $waktuCheckout);
        }

        return back()->withErrors('Tiada rekod dijumpai');

    }
}
