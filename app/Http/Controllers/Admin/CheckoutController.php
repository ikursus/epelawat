<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkOut = Visitor::whereNotNull('waktu_keluar')
        ->orderBy('id', 'desc')
        ->paginate(15);

        return view('admin.checkout.template-index', compact('checkOut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Visitor $checkout
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $visitor = Visitor::where($id)->firstOrFail();
    //     // $visitor = Visitor::findOrFail($id);
    //     //$visitor = Visitor::find($id);

    //     return $visitor->name;
    // }

    public function edit(Visitor $checkout)
    {
        $visitor = $checkout;

        return view('admin.checkout.template-edit', compact('visitor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Visitor $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $checkout)
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

        $checkout->update($data);

        // Response
        return redirect()->route('checkout.index')
        ->with('mesej-sukses', 'Rekod berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Visitor $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $checkout)
    {
        //
    }
}
