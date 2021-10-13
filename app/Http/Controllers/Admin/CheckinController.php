<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkIn = DB::table('visitors')
        ->whereNull('waktu_keluar')
        ->whereDate('waktu_masuk', now()) // Carbon::now();
        ->orderBy('id', 'desc')
        ->paginate(15);

        return view('admin.checkin.template-index', compact('checkIn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $visitor = DB::table('visitors')->where('id', '=', $id)->first();
        $visitor = DB::table('visitors')->whereId($id)->first();

        return view('admin.checkin.template-edit', compact('visitor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

        if (!empty($request->input('waktu_masuk')))
        {
            $data['waktu_masuk'] = Carbon::parse($request->input('waktu_masuk')); // Carbon\Carbon::now();
        }

        if (!empty($request->input('waktu_keluar')))
        {
            $data['waktu_keluar'] = Carbon::parse($request->input('waktu_keluar')); // Carbon\Carbon::now();
        }

        DB::table('visitors')->where('id', '=', $id)->update($data);

        // Response
        return redirect()->route('checkin.index')
        ->with('mesej-sukses', 'Rekod berjaya dikemaskini');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('visitors')->where('id', '=', $id)->delete();

        // DB::table('users')->insert($data); CREATE (C)
        // DB::table('users)->get(); DB::table('users)->first(); DB::table('users)->paginate(10); READ (R)
        // DB::table('users)->where('id', $id)->update($data); // UPDATE (U)
        // DB::table('users)->where('id', $id)->delete(); // DELETE (D)

        return redirect()->back()->with('mesej-sukses', 'Rekod berjaya di hapuskan!');
    }
}
