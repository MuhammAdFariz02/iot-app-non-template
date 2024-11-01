<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect ke halaman dashboard jika login berhasil
            return redirect()->intended('/dashboard');
        }

        // Kembali ke form login jika gagal
        return redirect()->back()->withErrors([
            'error' => 'Email atau password salah.',
        ]);
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
