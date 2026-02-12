<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('admin.rooms.index');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
