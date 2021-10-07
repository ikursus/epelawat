<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function borangCheckin()
    {
        return view('template-checkin');
    }

    public function checkCheckin(Request $request)
    {
        // $data = $request->all();
        // $data = $request->only(['mykad', 'nama']);
        // $data = $request->except(['nama', 'jabatan']);
        $data = $request->input('nama'); // $request->nama;

        // Die and Dump
        dd($data);
    }
}
