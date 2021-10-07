<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $tajukHalaman = '<input type="text" value="Senarai Users">';

        $senaraiUsers = [
            ['id' => 1, 'nama' => 'Ali', 'email' => 'ali@gmail.com'],
            ['id' => 2, 'nama' => 'Lee', 'email' => 'lee@gmail.com'],
            ['id' => 3, 'nama' => 'Siti', 'email' => 'siti@gmail.com'],
        ];

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
        return view('admin.users.senarai', compact('senaraiUsers', 'tajukHalaman'));
    }
}
