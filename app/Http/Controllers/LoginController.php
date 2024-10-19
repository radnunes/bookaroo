<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //dd($credentials);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if (auth()->user()->hasRole('admin')) {
                return redirect()->route('home');

            }else if (auth()->user()->hasRole('client')){
                return redirect()->route('home');

            }else{
                return redirect()->route('home');
            }
        }

        return back()->withErrors([
            'email' => 'Verifique as suas credenciais.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

}
