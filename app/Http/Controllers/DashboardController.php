<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $checkIn = DB::table('visitors')
        ->whereNull('waktu_keluar')
        ->orderBy('id', 'desc')
        ->limit(10)
        ->get();

        $checkOut = DB::table('visitors')
        ->whereNotNull('waktu_keluar')
        ->orderBy('id', 'desc')
        ->limit(10)
        ->get();

        // return view('dashboard', ['checkIn' => $checkIn, 'checkOut' => $checkOut]);
        return view('dashboard', compact('checkIn', 'checkOut'));
    }
}
