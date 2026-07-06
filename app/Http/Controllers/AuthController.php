<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]))
        {
            $request->session()->regenerate();

            $user = Auth::user();

            if($user->role == 'admin'){
                return redirect()
                    ->route('admin.dashboard');
            }

            if($user->role == 'satgas'){
                return redirect()
                    ->route('satgas.dashboard');
            }
        }

        return back()->withErrors([
            'username' => 'Username atau password salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}