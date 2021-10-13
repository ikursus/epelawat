<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Mail\HantarEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        // DB::table('visitors')->insert($data);
        Visitor::create($data);

        $data['subject'] = 'Ada orang Check In';
        $data['content'] = 'Info orang check bernama: ' . $data['nama'];

        Mail::to('admin@epelawat.test')->send(new HantarEmail($data));

        // Response
        return redirect()->route('utama')
        ->with('mesej-sukses', 'Anda berjaya check-in pada ' . $data['waktu_masuk']);
    }
}
