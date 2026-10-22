<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
    public function LoginFunction()
    {
        if (Auth::check()) {
                return redirect('home');
            }else{
                return view('login');
            }
    }

     public function ActionLoginFunction(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        // data menangkap variabel yg di atas.
        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('pesan', 'Username atau Password Salah');
            return redirect('/');
        }
    }

    public function ActionLogoutFunction()
    {
        Auth::logout();
        return redirect('/');
    }
}
