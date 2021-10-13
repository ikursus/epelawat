<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $senaraiUsers = User::all();
        // $senaraiUsers = User::join('profiles', 'users.id', '=', 'profiles.user_id')
        // ->get();


        // Cara 1 Untuk Passkan Data Dari Variable $senaraiUsers
        // return view('admin.users.senarai')
        // ->with('senaraiUsers', $senaraiUsers)
        // ->with('tajukHalaman', $tajukHalaman);

        // Cara 2 Untuk Passkan Data Dari Variable $senaraiUsers
        // return view('admin.users.senarai', [
        //     'senaraiUsers' => $senaraiUsers,
        //     'tajukHalaman' => $tajukHalaman
        // ]);

        // Cara 3 Untuk Passkan Data Dari Variable $senaraiUsers
        return view('admin.users.senarai', compact('senaraiUsers'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => ['required'],
            'mykad' => ['required'],
            'email' => ['required', 'email:filter'],
            'roles' => ['required'],
            'gambar' => ['sometimes', 'max:500', 'mimes:jpg,bmp,png']
        ]);

        $user = User::findOrFail($id);

        if (!empty($request->password))
        {
            $data['password'] = bcrypt($request->password);
        }

        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');

            $filename = $file->store($user->id, 'public_upload');

            $data['gambar'] = $filename;
        }

        $user->update($data);

        return redirect()->route('admin.users.index')
        ->with('mesej-sukses', 'Rekod berjaya dikemaskini');
    }
}
