<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        DB::table('tbl_user')->insert([
            'nama_user' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/login');
    }
}
