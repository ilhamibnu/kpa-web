<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthContoller extends Controller
{
    public function indexLogin()
    {
        return view('landing.auth.login');
    }

    public function indexRegister()
    {
        return view('landing.auth.register');
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

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('login', 'Login berhasil');
        }

        return redirect()->back()->with('gagallogin', 'Email atau password salah');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'repassword' => 'required|same:password'
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
            'repassword.required' => 'Konfirmasi password harus diisi',
            'repassword.same' => 'Konfirmasi password tidak sama dengan password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->save();

        return redirect('/user/login')->with('register', 'Register berhasil');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('logout', 'Logout berhasil');
    }
}
