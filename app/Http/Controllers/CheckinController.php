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
        // Proses Validasi Borang
        $request->validate([
            'mykad' => ['required', 'integer'],
            'nama' => ['required'],
            'jabatan' => ['required'],
            'no_telefon' => ['required', 'numeric'],
            'aktiviti' => ['required'],
            'pegawai_pengiring' => ['required']
        ]);


        $data = $request->all();
        // $data = $request->only(['mykad', 'nama']);
        // $data = $request->except(['nama', 'jabatan']);
        // $data = $request->input('nama'); // $request->nama;

        // Die and Dump
        dd($data);
    }
}
