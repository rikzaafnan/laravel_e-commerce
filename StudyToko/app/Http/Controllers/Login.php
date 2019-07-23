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

    public function masuk(Request $request)
    {
        $user  = DB::table('tbl_user')->where('email',$request->email)->first();
        
        if ($user) {
            if ($user->password == $request->password) {
                $request->session()->put('id',$user->id);
                echo 'Data disimpan dengan session id = ' .$request->session()->get('id');
                return redirect('/');
            }else{
                echo "Password salah";
            }
        }else{
            echo "User tidak ada";
        }
        
        
        
    }
}
