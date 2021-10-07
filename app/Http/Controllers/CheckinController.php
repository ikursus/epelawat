<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckinController extends Controller
{
    public function borangCheckin()
    {
        return view('template-checkin');
    }

    public function checkCheckin(Request $request)
    {
        // Proses Validasi Borang
        $data = $request->validate([
            'mykad' => ['required', 'numeric'],
            'nama' => ['required'],
            'jabatan' => ['required'],
            'no_telefon' => ['required', 'numeric'],
            'aktiviti' => ['required'],
            'no_kad_akses' => ['sometimes'],
            'no_locker' => ['sometimes'],
            'no_rak' => ['sometimes'],
            'pegawai_pengiring' => ['required']
        ]);

        $data['waktu_masuk'] = now(); // Carbon\Carbon::now();

        // $data = $request->only(['mykad', 'nama']);
        // $data = $request->except(['nama', 'jabatan']);
        // $data = $request->input('nama'); // $request->nama;
        //dd($data);

        // Simpan Data ke dalam Table visitors
        DB::table('visitors')->insert($data);

        // Response
        return 'Sukses!';
    }
}
