<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi'

        ]);

        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard')->with('login', 'Anda berhasil login');
            } else {
                return redirect('/')->with('login', 'Anda berhasil login');
            }
        }

        return back()->with('loginError', 'Login gagal, silahkan cek email dan password Anda');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with('logout', 'Anda berhasil logout');
    }
}
