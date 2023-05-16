<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index ()
    {
        if (Auth::check()){
            return redirect()->route('dashboard');
        } else {
            return view ('admin.login');
        }
    }

    public function auth(Request $request)
    {
        $credentials=$request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)){
            $request->session ()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->with(['eror'=> 'Akun Tidak Ditemukan']);
    }

    public function logout()
    {
    Auth::logout();
    return redirect ()->route('login');
    }
}
