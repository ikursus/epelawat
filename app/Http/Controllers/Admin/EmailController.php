<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\HantarEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('admin.email.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'subject' => ['required'],
            'content' => ['required']
        ]);

        $users = User::get('email');

        foreach ($users as $penerima)
        {
            Mail::to($penerima->email)->send(new HantarEmail($data));
        }


        return back()->with('mesej-sukses', 'Email berjaya dihantar!');

    }
}
